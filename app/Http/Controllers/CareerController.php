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
}