<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\CareerApplication;

class CareerController extends Controller
{
    public function uploadResume(Request $request)
    {
        Log::info('Resume upload request received', $request->all());
    
        try {
            $request->validate([
                'job_id' => 'nullable|exists:careers,id',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'nullable|string|max:20',
                'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            ]);
            Log::info('Validation passed');
        } catch (\Exception $e) {
            Log::error('Validation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Validation failed.');
        }
    
        // Store resume
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            Log::info('Resume stored at: ' . $resumePath);
        } else {
            Log::error('Resume file not found in request');
            return redirect()->back()->with('error', 'Resume file upload failed.');
        }
    
        // Check if data is being passed correctly
        Log::info('Data to be saved:', [
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'resume' => $resumePath,
        ]);
    
        try {
            // Create entry
            $application = CareerApplication::create([
                'job_id' => $request->job_id,
                'name' => $request->name,
                'email' => $request->email,
                'resume' => $resumePath,
                'phone_number' => $request->phone_number,
            ]);
    
            Log::info('Career application saved:', $application->toArray());
        } catch (\Exception $e) {
            Log::error('Error saving career application: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error saving your application.');
        }
    
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
    
    
}
