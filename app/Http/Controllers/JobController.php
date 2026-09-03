<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CareerApplication;

class JobController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Job List
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $jobs = Job::latest()->get();

        return view('admin.jobs.index', compact('jobs'));
    }


    /*
    |--------------------------------------------------------------------------
    | Show Add Job Form
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.jobs.create');
    }


    /*
    |--------------------------------------------------------------------------
    | Store Job
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'employment_type' => 'required|string|max:100',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        $slug = Str::slug($request->job_title);

        /*
        |--------------------------------------------------------------------------
        | Make slug unique
        |--------------------------------------------------------------------------
        */

        $originalSlug = $slug;
        $count = 1;

        while (Job::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        Job::create([
            'job_title' => $request->job_title,
            'slug' => $slug,
            'department' => $request->department,
            'employment_type' => $request->employment_type,
            'location' => $request->location,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job added successfully.');
    }


    /*
    |--------------------------------------------------------------------------
    | Edit Job
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $job = Job::findOrFail($id);

        return view('admin.jobs.edit', compact('job'));
    }


    /*
    |--------------------------------------------------------------------------
    | Update Job
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $request->validate([
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'employment_type' => 'required|string|max:100',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        $slug = Str::slug($request->job_title);

        $originalSlug = $slug;
        $count = 1;

        while (
            Job::where('slug', $slug)
                ->where('id', '!=', $job->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $job->update([
            'job_title' => $request->job_title,
            'slug' => $slug,
            'department' => $request->department,
            'employment_type' => $request->employment_type,
            'location' => $request->location,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job updated successfully.');
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Job
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        $job->delete();

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job deleted successfully.');
    }


    /*
    |--------------------------------------------------------------------------
    | Frontend Career Page
    |--------------------------------------------------------------------------
    */

    public function careers()
    {
        $jobs = Job::where('status', 'Active')
            ->latest()
            ->get();

        return view('frontend.careers', compact('jobs'));
    }


    /*
    |--------------------------------------------------------------------------
    | Frontend Job Details
    |--------------------------------------------------------------------------
    */

    public function show($slug)
    {
        $job = Job::where('slug', $slug)
            ->where('status', 'Active')
            ->firstOrFail();

        return view('frontend.job-details', compact('job'));
    }

    /*
|--------------------------------------------------------------------------
| Upload Resume / Store Career Application
|--------------------------------------------------------------------------
*/

public function uploadResume(Request $request)
{
    /*
    |--------------------------------------------------------------------------
    | Validate
    |--------------------------------------------------------------------------
    */

    $validated = $request->validate([
        'job_id' => 'required|exists:jobs,id',

        'name' => 'required|string|max:255',

        'phone_number' => 'required|string|max:20',

        'email' => 'required|email|max:255',

        'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
    ]);


    /*
    |--------------------------------------------------------------------------
    | Find Job
    |--------------------------------------------------------------------------
    */

    $job = Job::findOrFail($request->job_id);


    /*
    |--------------------------------------------------------------------------
    | Upload Resume
    |--------------------------------------------------------------------------
    */

    $resumePath = $request->file('resume')->store(
        'careers/resumes',
        'public'
    );


    /*
    |--------------------------------------------------------------------------
    | Save Application
    |--------------------------------------------------------------------------
    */

    CareerApplication::create([
        'job_id' => $job->id,

        'name' => $request->name,

        'phone_number' => $request->phone_number,

        'email' => $request->email,

        'resume' => $resumePath,

        'status' => 'Pending',
    ]);


    /*
    |--------------------------------------------------------------------------
    | Redirect
    |--------------------------------------------------------------------------
    */

    return redirect()
        ->route('careers')
        ->with(
            'success',
            'Your application for "' .
            $job->job_title .
            '" has been submitted successfully.'
        );
}

/*
|--------------------------------------------------------------------------
| Toggle Job Status
|--------------------------------------------------------------------------
*/

public function toggleStatus($id)
{
    $job = Job::findOrFail($id);

    if ($job->status === 'Active') {
        $job->status = 'Inactive';
    } else {
        $job->status = 'Active';
    }

    $job->save();

    return redirect()
        ->route('admin.jobs.index')
        ->with(
            'success',
            'Job status changed to ' . $job->status . ' successfully.'
        );
}

}