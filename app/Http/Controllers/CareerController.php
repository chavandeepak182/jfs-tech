<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function uploadResume(Request $request)
    {
        Log::info('Resume upload request received', $request->all());
    
        try {
            $request->validate([
                'job_id' => 'nullable|exists:blogs,id',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'nullable|string|max:20',
                'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Validation failed.');
        }
    
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            Log::info('Resume stored at: ' . $resumePath);
        } else {
            Log::error('Resume file not found in request');
            return redirect()->back()->with('error', 'Resume file upload failed.');
        }
    
        Log::info('Data to be inserted:', [
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'resume' => $resumePath,
        ]);
    
        try {
            DB::table('career_applications')->insert([
                'job_id' => $request->job_id,
                'name' => $request->name,
                'email' => $request->email,
                'resume' => $resumePath,
                'phone_number' => $request->phone_number,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            Log::info('Career application inserted directly into DB.');
        } catch (\Exception $e) {
            Log::error('Error inserting career application: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error saving your application.');
        }
    
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }

    public function showApplications(Request $request)
    {
        $query = DB::table('career_applications')
        ->leftJoin('blogs', 'career_applications.job_id', '=', 'blogs.id')
        ->select(
            'career_applications.id',
            'career_applications.name',
            'career_applications.email',
            'career_applications.phone_number',
            'career_applications.resume',
            'career_applications.created_at',
            'blogs.title as job_title'
        );

    // Apply filters
    if ($request->filled('job_title')) {
        $query->where('blogs.title', 'like', '%' . $request->job_title . '%');
    }

    if ($request->filled('name')) {
        $query->where('career_applications.name', 'like', '%' . $request->name . '%');
    }

    if ($request->filled('email')) {
        $query->where('career_applications.email', 'like', '%' . $request->email . '%');
    }

    // Export functionality
    if ($request->has('export')) {
        $applications = $query->orderBy('career_applications.created_at', 'desc')->get();

        $csvData = [];
        $csvData[] = ['ID', 'Job Title', 'Name', 'Email', 'Phone Number', 'Resume', 'Applied At'];

        foreach ($applications as $app) {
            $csvData[] = [
                $app->id,
                $app->job_title,
                $app->name,
                $app->email,
                $app->phone_number,
                $app->resume,
                $app->created_at,
            ];
        }

        $filename = 'career_applications_' . now()->format('Ymd_His') . '.csv';
        $handle = fopen('php://temp', 'r+');
        foreach ($csvData as $line) {
            fputcsv($handle, $line);
        }
        rewind($handle);
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        return Response::stream(function () use ($handle) {
            fpassthru($handle);
        }, 200, $headers);
    }

    // Pagination
    $applications = $query->orderBy('career_applications.created_at', 'desc')->paginate(10);

    return view('frontend.career_applications', compact('applications'));
    }
}