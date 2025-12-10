@extends('frontend.layouts.header')

@section('title', $blog->blog_name)
@section('description', Str::limit(strip_tags($blog->description), 160))
@section('keywords', $blog->blog_name)
@section('og_tags')
    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $blog->blog_name }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blog->description), 150) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    @if(!empty($blog->image))
        <meta property="og:image" content="{{ url('storage/blogs/'.$blog->image) }}">
    @else
        <meta property="og:image" content="{{ url('images/default-og.jpg') }}">
    @endif

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->blog_name }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blog->description), 150) }}">
    <meta name="twitter:image" content="{{ !empty($blog->image) ? url('storage/blogs/'.$blog->image) : url('images/default-og.jpg') }}">

   {{-- Schema Markup --}}
@if(!empty($blog->schema_markup))
    <script type="application/ld+json">
        {!! $blog->schema_markup !!}
    </script>    
@endif
{{-- BreadcrumbList Schema --}}
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "WebPage",
                    "@id": "https://jfstechnologies.com/",
                    "name": "Home"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@type": "WebPage",
                    "@id": "https://jfstechnologies.com/blogs",
                    "name": "Blogs"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@type": "WebPage",
                    "@id": "{{ url()->current() }}",
                    "name": "{{ ($blog->blog_name) }}"
                }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },
    "headline": "{{ $blog->blog_name }}",
    "description": "{{ $blog->meta_description }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ !empty($blog->image) ? url('storage/blogs/'.$blog->image) : url('images/default-og.jpg') }}",
        "width": "795",
        "height": "331"
    },
    "author": {
        "@type": "Organization",
        "name": "JFS Technologies"
    },
    "publisher": {
        "@type": "Organization",
        "name": "JFS Technologies",
        "logo": {
            "@type": "ImageObject",
            "url": "https://jfstechnologies.com/theme/assets/images/logos/logo-w.png",
            "width": "129",
            "height": "48"
        }
    },
    "datePublished": "{{ $blog->created_at }}",
    "dateModified": "{{ $blog->updated_at }}"
}
</script>
@endsection
@section('content')

<!-- Hero Section -->
<section class="hero-wrap">
    <div class="blog-featured-image" style="background-image: url('{{ asset($blog->image) }}');"></div>
    <div class="blog-featured-image-overlay"></div>

    <div class="container hero-content py-5">
        <div class="row">
            <div class="col-lg-9">
                <!-- Breadcrumb -->
                <div class="breadcrumb-mini mb-2">
                    <a href="{{ url('/') }}">Home</a>
                    <span class="sep">/</span>
                    <span>Blogs</span>
                </div>

                <!-- Title + Short Description -->
                <h1 class="hero-title display-7 mb-2" style="color:#fff;">{{ $blog->blog_name }}</h1>
                <p class="hero-sub lead mb-0">
                    {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                </p>
            </div>
        </div>
    </div>

    <div class="hero-wave"></div>
</section>


<div class="container py-5">
    <div class="row">
        <!-- Main Blog Content -->
        <div class="col-lg-8">
            <img src="{{ asset($blog->image) }}" alt="{{ $blog->blog_name }}" class="img-fluid mb-4">

            <h1 class="mb-3">{{ $blog->blog_name }}</h1>

            <!-- Blog Meta -->
            <p class="text-muted">
                Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                <span class="mx-2">|</span>
                Category: <strong>{{ $blog->category_name }}</strong>
            </p>

            <!-- Full Description -->
            <div class="blog-description">
                {!! $blog->description !!}
            </div>
        </div>

        <!-- Sidebar: Latest Blogs -->
        <div class="latest-blogs col-lg-4">
            <h5 class="latest-title mb-3">Latest Blogs</h5>
            @foreach($latestBlogs as $latest)
                <div class="latest-item mb-3">
                    <a href="{{ route('blog.show', $latest->slug) }}" class="latest-img-link">
                        <img src="{{ asset($latest->image) }}" alt="{{ $latest->blog_name }}" class="latest-img img-fluid">
                    </a>
                    <div class="latest-content">
                        <a href="{{ route('blog.show', $latest->slug) }}" class="latest-title-link">
                            <h6 class="latest-title-text">{{ $latest->blog_name }}</h6>
                        </a>
                        <p class="latest-desc">
                            {{ Str::limit(strip_tags($latest->description), 60) }}
                        </p>
                        <a href="{{ route('blog.show', $latest->slug) }}" class="btn btn-sm btn-primary mt-2">Read More</a>
                        <p class="latest-date mt-2 text-muted" style="font-size: 13px;">
                            {{ \Carbon\Carbon::parse($latest->created_at)->format('F d, Y') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Related Blogs Section -->
    <div class="related-blogs mt-5">
        <h4 class="mb-4">Related Blogs</h4>
        <div class="row">
            @foreach($relatedBlogs as $related)
                <div class="col-md-4 mb-3">
                    <div class="related-item border rounded overflow-hidden">
                        <a href="{{ route('blog.show', $related->slug) }}">
                            <img src="{{ asset($related->image) }}" alt="{{ $related->blog_name }}" class="img-fluid">
                        </a>
                        <div class="p-2">
                            <a href="{{ route('blog.show', $related->slug) }}" class="text-dark text-decoration-none">
                                <h6>{{ $related->blog_name }}</h6>
                            </a>
                            <p class="text-muted mb-1" style="font-size: 13px;">
                                {{ Str::limit(strip_tags($related->description), 60) }}
                            </p>
                            <p class="text-muted mb-0" style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($related->created_at)->format('F d, Y') }}
                            </p>
                            <a href="{{ route('blog.show', $related->slug) }}" class="btn btn-sm btn-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
