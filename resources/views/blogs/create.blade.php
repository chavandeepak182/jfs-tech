@extends('layouts.header-n')
@section('title')
@parent
Create New Blog
@endsection
@section('content')

@parent
<!-- Breadcrumbs and Search Bar -->
<div class="card-header py-3">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex align-items-center">
            <ol class="breadcrumb m-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">All Jobs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Job</li>
            </ol>
        </nav>

        <a href="{{ route('blogs.index') }}" class="btn btn-primary ms-3" ><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>

<div class="row bg-white">
    <div class="col-12 grid-margin">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 py-4 px-5">
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
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Job Status</label>
                            <select name="status" class="form-control">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Job Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Experience</label>
                        <input type="text" name="experience" class="form-control" value="{{ old('experience') }}">
                    </div>

                    <div class="mb-3">
                        <label>No. Of Opeinings</label>
                        <input type="text" name="openings" class="form-control" value="{{ old('openings') }}">
                    </div>

                    <div class="mb-3">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary ms-3">Create Job</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
