@extends('frontend.layouts.header')

@section('title', "Industries")
@section('description', "")
@section('keywords', "")

@section('content')


<section class="hero-wrap">
<div class="hero-bg" style="background: url('{{ asset('assets/img/blog/img_02.jpg') }}') no-repeat center center; background-size: cover;"></div>

  <div class="hero-overlay"></div>

  <div class="container hero-content py-5">
    <div class="row">
      <div class="col-lg-9">
        <!-- small breadcrumb -->
        <div class="breadcrumb-mini mb-2">
          <a href="{{ url('/') }}">Home</a>
          <span class="sep">/</span>
          <span>Blogs</span>
        </div>

        <!-- main heading + subtext -->
        <h1 class="hero-title display-5 mb-2">Explore Blogs</h1>
        <p class="hero-sub lead mb-0">
          Insights, tutorials, and stories from our team — browse the latest posts across AI, Technology, Travel & more.
        </p>
      </div>
    </div>
  </div>

  <!-- soft white wave separator to blend into page bg -->
  <div class="hero-wave"></div>
</section>


<!-- ===== /Banner ===== -->



<div class="container py-5">
    <!-- Section Title -->
    <h2 class="section-title mb-3">Explore Blogs</h2>

    <!-- Filters (View All + Search) -->
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
        <!-- Dropdown -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 CSS + JS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<form method="GET" action="{{ route('blog') }}" class="mb-3">
    <div class="d-flex justify-content-between align-items-center">

        <!-- Search box (left side) -->
        <input type="text" name="search" value="{{ request('search') }}" 
               class="form-control w-50" placeholder="Search blogs...">

        <!-- Category + Button (right side) -->
        <div class="d-flex gap-2" style="margin-left:600px;">
            <select id="category" name="category" class=" w-auto">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->pid }}" 
                        {{ request('category') == $category->pid ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>











    


    </div>

    <!-- Blog Cards -->
    <div class="row gy-4 gx-4">
    @foreach($allIndustries as $blog)
        <div class="col-md-4">
            <a href="{{ route('blog.show', $blog->id) }}" style="text-decoration: none; color: inherit;">
                <div class="blog-box">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->blog_name }}">
                    <div class="content">
                        <h5 class="title">{{ $blog->blog_name }}</h5>
                        <p class="text">{{ Str::limit(strip_tags($blog->description), 120, '...') }}</p>
                    </div>
                    <div class="footer">
                        <small>
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }} 
                        
                        </small>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $allIndustries->links() }}
    </div>
</div>



{{-- Laravel Pagination --}}
<div class="mt-4">
    {{ $allIndustries->links() }}
</div>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
