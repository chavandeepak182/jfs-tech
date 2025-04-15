@extends('layouts.header-n')
@section('title')
@parent
Edit Blog
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
@parent
<!-- Breadcrumbs and Search Bar -->
<div class="card-header py-3">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex align-items-center">
            <ol class="breadcrumb m-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">All Careers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Job</li>
            </ol>
        </nav>

        <a href="{{ route('blogs.index') }}" class="btn btn-primary ms-3" ><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>

<div class="row bg-white">
    <div class="col-12 grid-margin">
        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-8 py-4 px-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif                   

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Job Category</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Job Status</label>
                            <select name="status" class="form-control">
                                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Job Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Experience</label>
                        <input type="text" name="experience" class="form-control" value="{{ $blog->experience }}">
                    </div>

                    <div class="mb-3">
                        <label>No. Of Opeinings</label>
                        <input type="text" name="openings" class="form-control" value="{{ $blog->openings }}">
                    </div>

                    <div class="mb-3">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" value="{{ $blog->location }}">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary ms-3">Update Blog</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>

<script>
    tinymce.init({
    selector: '#editor',
    plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help',
    toolbar: 'undo redo | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview code',
    height: 400,
    menubar: true,
    branding: false,

    images_upload_url: '/upload-image',
    automatic_uploads: false,
    images_reuse_filename: true,
    paste_data_images: false,

    images_upload_handler: function (blobInfo, success, failure) {
    let formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    // Get CSRF token
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    formData.append('_token', csrfToken);

    fetch('/upload-image', {
    method: 'POST',
    body: formData
    })
    .then(response => response.json())
    .then(result => {
    if (result.location) {
    let cleanUrl = result.location.replace(/^.*?:\/\//, ''); // Removes http:// or https:// if needed
    success(cleanUrl);
    } else {
    failure('Image upload failed');
    }
    })
    .catch(error => {
    console.error('Upload error:', error);
    failure('Image upload failed');
    });
    }
    });
</script>


@endsection
