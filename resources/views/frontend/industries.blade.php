@extends('frontend.layouts.header')

@section('title', "blog")
@section('description', "")
@section('keywords', "")

@section('content')

<section class="hero-wrap">
    <div class="hero-bg" style="background: url('{{ asset('assets/img/blog/img_02.jpg') }}') no-repeat center center; background-size: cover;"></div>
    <div class="hero-overlay"></div>

    <div class="container hero-content py-5">
        <div class="row">
            <div class="col-lg-9">
                <!-- Breadcrumb -->
                <div class="breadcrumb-mini mb-2">
                    <a href="{{ url('/') }}">Home</a>
                    <span class="sep">/</span>
                    <span>Blogs</span>
                </div>

                <!-- Heading -->
                <h1 class="hero-title display-5 mb-2">Explore Blogs</h1>
                <p class="hero-sub lead mb-0">
                    Insights, tutorials, and stories from our team — browse the latest posts across AI, Technology, Travel & more.
                </p>
            </div>
        </div>
    </div>

    <!-- Soft white wave separator -->
    <div class="hero-wave"></div>
</section>


<!-- ===== /Banner ===== -->

<div class="container py-5">
    <!-- Section Title -->
    <h2 class="section-title mb-3">Explore Blogs</h2>

    <!-- Filters (Category + Search) -->
   <form action="{{ route('blog') }}" method="GET" class="d-flex justify-content-between align-items-center flex-wrap mb-4">

    <!-- Category Dropdown -->
    <select id="category" name="category" class="form-select mb-2 mb-md-0" onchange="this.form.submit()">
        <option value="">-- Select Category --</option>
        @foreach($categories as $category)
            <option value="{{ $category->pid }}" 
                {{ request('category') == $category->pid ? 'selected' : '' }}>
                {{ $category->category_name }}
            </option>
        @endforeach
    </select>

    <!-- Search Box -->
    <div class="search-box position-relative mb-2 mb-md-0">
        <input type="text" name="search" class="form-control"
               placeholder="Search industries..."
               value="{{ request('search') }}">
        <button type="submit" class="btn btn-link position-absolute top-50 end-0 translate-middle-y me-2 text-muted p-0">
            <i class="bi bi-search"></i>
        </button>
    </div>

</form>


    <!-- Blog Cards -->
    <div class="row gy-4 gx-4">
        @foreach($allIndustries as $blog)
            <div class="col-md-4">
                <a href="{{ route('blog.show', $blog->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="blog-box">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->industries_name }}">
                        <div class="content">
                            <h5 class="title">{{ $blog->industries_name }}</h5>
                            <p class="text">{{ Str::limit(strip_tags($blog->description), 120, '...') }}</p>
                        </div>
                        <div class="footer">
                            <small>
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }} |
                                {{ max(1, round(str_word_count(strip_tags($blog->description)) / 200)) }} mins
                            </small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4 d-flex justify-content-center">
        {{ $allIndustries->links('pagination::bootstrap-5') }}
    </div>
</div>


<!-- Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $('#category').select2({
      width: '300px',
      placeholder: "-- Select Category --",
      dropdownAutoWidth: true,
      dropdownCssClass: "custom-dropdown"
    });
  });
</script>

@endsection
