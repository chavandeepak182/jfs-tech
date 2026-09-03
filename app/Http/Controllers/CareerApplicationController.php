<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin - Career Applications List
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $query = CareerApplication::with('job');

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('phone_number', 'LIKE', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Date filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $applications = $query->latest()->paginate(10);

        return view('admin.career-applications.index', compact('applications'));
    }


    /*
    |--------------------------------------------------------------------------
    | Admin - Application Details
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $application = CareerApplication::with('job')->findOrFail($id);
        return view('admin.career-applications.show', compact('application'));
    }


    /*
    |--------------------------------------------------------------------------
    | Update Application Status
    |--------------------------------------------------------------------------
    */

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Reviewed,Shortlisted,Selected,Rejected',
        ]);

        $application = CareerApplication::findOrFail($id);
        $application->update(['status' => $request->status]);

        return redirect()
            ->back()
            ->with('success', 'Application status updated successfully.');
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Application
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $application = CareerApplication::findOrFail($id);

        // Delete resume file if exists
        if ($application->resume) {
            Storage::disk('public')->delete($application->resume);
        }

        $application->delete();

        return redirect()
            ->route('admin.career-applications.index')
            ->with('success', 'Application deleted successfully.');
    }


    /*
    |--------------------------------------------------------------------------
    | Preview Resume (FIXED)
    |--------------------------------------------------------------------------
    */

    public function previewResume($id)
    {
        $application = CareerApplication::findOrFail($id);

        if (!$application->resume) {
            abort(404, 'Resume not found.');
        }

        // Clean the path
        $resumePath = ltrim($application->resume, '/');
        $resumePath = str_replace('storage/', '', $resumePath);
        $resumePath = str_replace('public/', '', $resumePath);

        // Check both storage and public paths
        $storagePath = storage_path('app/public/' . $resumePath);
        $publicPath = public_path('storage/' . $resumePath);

        $filePath = null;

        if (file_exists($storagePath)) {
            $filePath = $storagePath;
        } elseif (file_exists($publicPath)) {
            $filePath = $publicPath;
        }

        if (!$filePath) {
            // Debug info
            $debugInfo = [
                'resume_db' => $application->resume,
                'cleaned_path' => $resumePath,
                'storage_path' => $storagePath,
                'storage_exists' => file_exists($storagePath),
                'public_path' => $publicPath,
                'public_exists' => file_exists($publicPath),
                'storage_link_exists' => is_dir(public_path('storage')),
            ];
            
            abort(404, 'Resume file does not exist. Debug: ' . json_encode($debugInfo));
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Download Resume (FIXED)
    |--------------------------------------------------------------------------
    */

    public function downloadResume($id)
    {
        $application = CareerApplication::findOrFail($id);

        if (!$application->resume) {
            abort(404, 'Resume not found.');
        }

        // Clean the path
        $resumePath = ltrim($application->resume, '/');
        $resumePath = str_replace('storage/', '', $resumePath);
        $resumePath = str_replace('public/', '', $resumePath);

        // Check both storage and public paths
        $storagePath = storage_path('app/public/' . $resumePath);
        $publicPath = public_path('storage/' . $resumePath);

        $filePath = null;

        if (file_exists($storagePath)) {
            $filePath = $storagePath;
        } elseif (file_exists($publicPath)) {
            $filePath = $publicPath;
        }

        if (!$filePath) {
            abort(404, 'Resume file does not exist.');
        }

        return response()->download($filePath);
    }
}