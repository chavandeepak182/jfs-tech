<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function storeService(Request $request)
    {
        Log::info('storeService function called', ['request' => $request->all()]);

        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('uploads/services');

            if ($image->move($destinationPath, $imageName)) {
                $imagePath = 'uploads/services/' . $imageName;
                Log::info('Image uploaded at', ['path' => $imagePath]);
            } else {
                Log::error('Image upload failed');
            }
        }

        $data = [
            'service_name' => $request->service_name,
            'description' => $request->description,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        try {
            DB::table('services')->insert($data);
            Log::info('Service inserted', ['data' => $data]);
        } catch (\Exception $e) {
            Log::error('Insert failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Service could not be added.');
        }

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    public function edit($id)
    {
        $service = DB::table('services')->where('id', $id)->first();

        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Service not found.');
        }

        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $service = DB::table('services')->where('id', $id)->first();

        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Service not found.');
        }

        $imagePath = $service->image;

        if ($request->hasFile('image')) {
            if ($service->image && File::exists(public_path($service->image))) {
                File::delete(public_path($service->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('uploads/services');
            $image->move($destinationPath, $imageName);
            $imagePath = 'uploads/services/' . $imageName;
        }

        DB::table('services')->where('id', $id)->update([
            'service_name' => $request->service_name,
            'description' => $request->description,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image' => $imagePath,
            'updated_at' => now(),
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function delete($id)
    {
        $service = DB::table('services')->where('id', $id)->first();

        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Service not found.');
        }

        if ($service->image && File::exists(public_path($service->image))) {
            File::delete(public_path($service->image));
        }

        DB::table('services')->where('id', $id)->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
