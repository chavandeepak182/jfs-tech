<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class IndustriesController extends Controller
{
    public function index()
    {
        $industries = DB::table('industries')
            //->join('industries_subcategory', 'industries.industries_subcategory_id', '=', 'industries_subcategory.industries_subcategory_id')
            //->join('industries_category', 'industries_subcategory.pid', '=', 'industries_category.pid')
            ->select('industries.*') // सबकॅटेगरी/कॅटेगरी रिलेशन काढलं
            ->get();

        return view('industries.index', compact('industries'));
    }

    public function create()
    {
        $categories = DB::table('industries_category')->get();
        return view('industries.create', compact('categories'));
    }

    // demo
    

    public function storeService(Request $request)
    {
        Log::info('storeService function called', ['request' => $request->all()]);

        $request->validate([
            'industries_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'publish_date' => 'nullable|string',
            'status' => 'nullable|string',
            'author_name' => 'nullable|string',
            'tag' => 'nullable|string',
            'schema_markup' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            Log::info('Image file detected');
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('uploads/industries');
            
            if ($image->move($destinationPath, $imageName)) {
                $imagePath = 'uploads/industries/' . $imageName;
                Log::info('Image successfully uploaded', ['path' => $imagePath]);
            } else {
                Log::error('Image upload failed');
            }
        } else {
            Log::warning('No image file detected in request');
        }

        $data = [
            'industries_name' => $request->industries_name,
            'description' => $request->description,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'publish_date' => $request->publish_date,
            'status' => $request->status,
            'schema_markup' => $request->schema_markup,
            'tag' => $request->tag,
            'author_name' => $request->author_name,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Log::info('Data to be inserted', ['data' => $data]);

        try {
            DB::table('industries')->insert($data);
            Log::info('Industries successfully inserted into database');
        } catch (\Exception $e) {
            Log::error('Error inserting industries', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Industries could not be added. Please check logs.');
        }

        return redirect()->route('industries.index')->with('success', 'industries added successfully.');
    }

    public function edit($id)
    {
        $industries = DB::table('industries')->where('id', $id)->first();

        if (!$industries) {
            return redirect()->route('industries.index')->with('error', 'industries not found.');
        }

        // Get all categories
        $categories = DB::table('industries_category')->get();

        // सबकॅटेगरी लॉजिक काढलं
        $subcategory = null;
        $subcategories = [];

        return view('industries.edit', compact('industries', 'categories', 'subcategories', 'subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'industries_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'publish_date' => 'nullable|string',
            'status' => 'nullable|string',
            'author_name' => 'nullable|string',
            'tag' => 'nullable|string',
            'schema_markup' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        $industries = DB::table('industries')->where('id', $id)->first();

        if (!$industries) {
            return redirect()->route('industries.index')->with('error', 'industries not found.');
        }

        $imagePath = $industries->image;

        if ($request->hasFile('image')) {
            if ($industries->image && File::exists(public_path($industries->image))) {
                File::delete(public_path($industries->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('uploads/industries');
            $image->move($destinationPath, $imageName);
            $imagePath = 'uploads/industries/' . $imageName;
        }

        DB::table('industries')->where('id', $id)->update([
            'industries_name' => $request->industries_name,
            'description' => $request->description,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'publish_date' => $request->publish_date,
            'status' => $request->status,
            'schema_markup' => $request->schema_markup,
            'tag' => $request->tag,
            'author_name' => $request->author_name,
            'image' => $imagePath,
            'updated_at' => now(),
        ]);

        return redirect()->route('industries.index')->with('success', 'industries updated successfully.');
    }

    public function deleteService($id)
    {
        $industries = DB::table('industries')->where('id', $id)->first();

        if (!$industries) {
            return redirect()->route('industries.index')->with('error', 'Industry not found.');
        }

        DB::table('industries')->where('id', $id)->delete();

        return redirect()->route('industries.index')->with('success', 'Industry deleted.');
    }

    public function show($slug)
    {
        $industries = DB::table('industries')->where('slug', $slug)->first();

        if (!$industries) {
            return redirect()->route('industries.index')->with('error', 'Industry not found.');
        }

        $reports = DB::table('reports')
            ->where('industry_category_id', $industries->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.industry-details', compact('industries', 'reports'));
    }

    public function getIndustries(Request $request){
        $limit = $request->get('limit', 5);

        $industries = DB::table('industries')
            ->select('id', 'industries_name', 'slug')
            ->limit($limit)
            ->get();

        return response()->json($industries);
    }
}
