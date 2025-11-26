@extends('frontend.layouts.header')

@section('title', "Industries")
@section('description', "")
@section('keywords', "")

@section('content')


<section class="hero-wrap">
<div class="hero-bg">
  <video autoplay muted loop playsinline 
         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
    <source src="{{ asset('assets/img/blog/Blog Banner.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>


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
        <!-- <h1 class="hero-title display-5 mb-2">Explore Blogs</h1> -->
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
            <a href="{{ route('blog.show', $blog->slug) }}" style="text-decoration: none; color: inherit;">
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Options for every organization</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f5f0;
      margin: 0;
      padding: 0;
      color: #0a2e2f;
    }

    .section {
      max-width: 1200px;
      margin: auto;
      padding: 60px 20px;
      text-align: center;
    }

    .section p.sub-heading {
      text-transform: uppercase;
      font-size: 14px;
      margin-bottom: 8px;
      color: #555;
    }

    .section h2 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #0a2e2f;
    }

    .section .desc {
      max-width: 800px;
      margin: 0 auto 50px;
      font-size: 16px;
      line-height: 1.6;
      color: #333;
    }

    /* Card section */
    .card-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin-bottom: 60px;
    }

    .card-image {
      flex: 1 1 50%;
      min-height: 280px;
      background-size: cover;
      background-position: center;
    }

    .card-content {
      flex: 1 1 50%;
      background: #fff;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      padding: 30px;
      border-radius: 8px;
      max-width: 500px;
      margin: -40px;
      text-align: left;
    }

    .card-content h3 {
      font-size: 22px;
      margin-bottom: 15px;
    }

    .card-content p {
      font-size: 15px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      background: #ffb400;
      color: #000;
      padding: 10px 20px;
      font-size: 14px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .card-row {
        flex-direction: column;
      }
      .card-content {
        margin: 20px 0;
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <section class="section">
    <p class="sub-heading">enterprise offerings</p>
    <h2>Options for every organization</h2>
    <p class="desc">
      You deserve a learning partner that takes your goals seriously. With credential-granting courses and programs from the world’s best institutions, edX gives learners of all levels the in-demand skills they need to succeed.
    </p>

    <!-- Card 1 -->
    <div class="card-row">
      <div class="card-content">
        <h3>Drive business</h3>
        <p>
          Cultivate the capabilities and skills your business needs, and empower your employees to advance within your organization.
        </p>
        <a href="#" class="btn">Explore edX For Business</a>
      </div>
      <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1593642634367-d91a135587b5');">
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card-row">
      <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e');">
      </div>
      <div class="card-content"> 
        <h3>Empower students</h3>
        <p>
          Prepare your students for a competitive job market, develop faculty leaders, and engage alumni with powerful lifelong learning opportunities.
        </p>
        <a href="#" class="btn">Explore edX For Campus</a>
      </div>
    </div>
  </section>

</body>
</html>




{{-- Laravel Pagination --}}
<div class="mt-4">
    {{ $allIndustries->links() }}
</div>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
