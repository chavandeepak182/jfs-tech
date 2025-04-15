<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function uploadResume(Request $request) 
    { 
        $validated = $request->validate([ 
            'job_id' => 'required|exists:blogs,id', 
            'name' => 'required|string|max:255', 
            'email' => 'required|email', 
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048', 
        ]);
    }
}
