<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    // Homepage
    public function index()
    {
        return view('frontend.home-citizenship');
    }
     public function testing()
    {
        return view('frontend.testing');
    }


    // User Login
    public function userLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'Password must be at least 6 characters.',
        ]);

        $email = $req->input('email');
        $password = md5($req->input('password'));

        $users = DB::select('
            SELECT u.id, u.name, u.email_id, u.password, r.id as role_id, r.name as role_name, u.is_email_verify
            FROM users u
            JOIN roles r ON r.id = u.role_id
            WHERE u.email_id = ?
        ', [$email]);

        if (count($users) === 0) {
            return redirect()->back()->with('error', 'Incorrect username.');
        }

        $user = $users[0];

        if ($user->password !== $password) {
            return redirect()->back()->with('error', 'Incorrect password.');
        }

        if (!$user->is_email_verify) {
            return redirect()->back()->with('error', 'Email not verified.');
        }

        Session::put('username', $user->name);
        Session::put('role_name', $user->role_name);
        Session::put('user_id', $user->id);
        Session::put('role_id', $user->role_id);
        Session::put('email', $user->email_id);

        return match ($user->role_id) {
            4 => redirect('admin/dashboard'),
            1 => redirect('/'),
            default => redirect('/'),
        };
    }

    // Logout
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    // Search Reports
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     Log::info('Search method hit with query:', ['query' => $query]);

    //     $reports = DB::table('reports')
    //         ->where('report_title', 'like', '%' . $query . '%')
    //         ->orWhere('report_name', 'like', '%' . $query . '%')
    //         ->orderBy('publish_date', 'desc')
    //         ->paginate(10);

    //     Log::info('Reports fetched:', ['count' => $reports->total()]);

    //     return view('frontend.reports.list', compact('reports', 'query'));
    // }


    // frontnd blog
public function industries(Request $request)
{
    $query = DB::table('industries')
        ->select(
            'industries.id',
            'industries.image',
            'industries.industries_name',
            'industries.description',
            'industries.slug',
            'industries.meta_title',
            'industries.meta_keywords',
            'industries.meta_description',
            'industries.created_at',
            'industries.updated_at',
            'industries.schema_markup',
            'industries.publish_date',
            'industries.tag',
            'industries.status',
            'industries.author_name',
            'industries.category_id',
            'industries_category.category_name'
        )
        ->leftJoin('industries_category', 'industries.category_id', '=', 'industries_category.pid')
        ->where('industries.status', 'active'); // ✅ Only active blogs

    // 🔍 Search filter
    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('industries.industries_name', 'LIKE', '%' . $request->search . '%')
              ->orWhere('industries.description', 'LIKE', '%' . $request->search . '%')
              ->orWhere('industries_category.category_name', 'LIKE', '%' . $request->search . '%');
        });
    }

    // 🏷 Category filter
    if ($request->filled('category')) {
        $query->where('industries.category_id', $request->category);
    }

    $data['allIndustries'] = $query->paginate(12)->appends($request->all());

    // Fetch categories
    $data['categories'] = DB::table('industries_category')
        ->select('pid', 'category_name')
        ->get();

    return view('frontend.industries', $data);
}



public function blog(Request $request)
{
    $query = DB::table('blog')
        ->select(
            'blog.id',
            'blog.image',
            'blog.blog_name',
            'blog.description',
            'blog.slug',
            'blog.meta_title',
            'blog.meta_keywords',
            'blog.meta_description',
            'blog.created_at',
            'blog.updated_at',
            'blog.schema_markup',
            'blog.publish_date',
            'blog.tag',
            'blog.status',
            'blog.author_name',
            'blog.category_id',
            'blog_category.category_name'
        )
        ->leftJoin('blog_category', 'blog.category_id', '=', 'blog_category.pid')
        ->where('blog.status', 'active'); // Only active blogs

    // 🔍 Search filter
    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('blog.blog_name', 'LIKE', '%' . $request->search . '%')
              ->orWhere('blog.description', 'LIKE', '%' . $request->search . '%')
              ->orWhere('blog_category.category_name', 'LIKE', '%' . $request->search . '%');
        });
    }

    // 🏷 Category filter
    if ($request->filled('category')) {
        $query->where('blog.category_id', $request->category);
    }

    $data['allIndustries'] = $query->paginate(12)->appends($request->all());

    // Fetch categories
    $data['categories'] = DB::table('blog_category')
        ->select('pid', 'category_name')
        ->get();

    return view('frontend.blog', $data);
}










public function showBlog($id)
{
    // Get blog with category
    $blog = DB::table('blog')
        ->join('blog_category', 'blog.category_id', '=', 'blog_category.pid')
        ->select('blog.*', 'blog_category.category_name as category_name')
        ->where('blog.id', $id)
        ->first();

    if (!$blog) {
        abort(404);
    }

    // Related blogs: same category
    $relatedBlogs = DB::table('blog')
        ->where('id', '!=', $id)
        ->where('category_id', $blog->category_id)
        ->latest()
        ->take(3)
        ->get();

    if ($relatedBlogs->isEmpty()) {
        $relatedBlogs = DB::table('blog')
            ->where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();
    }

    // Latest blogs
    $latestBlogs = DB::table('blog')
        ->where('id', '!=', $id)
        ->latest()
        ->take(3)
        ->get();

    return view('frontend.blog-details', compact('blog', 'relatedBlogs', 'latestBlogs'));
}











}
