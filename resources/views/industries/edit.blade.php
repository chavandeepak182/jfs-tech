@extends('admin.layouts.header')
@section('title', "User Management")

@section('content')
<div class="dashboard-body">
    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ url('admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Dashboard</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><a href="{{ url('admin/industries') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Blog</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Edit Blog</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="flex-align gap-8 flex-wrap">
            <div class="flex-align text-gray-500 text-13 border-gray-100 focus-border-main-600">
                <a href="{{ route('industries.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <!-- Breadcrumb Right End -->
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('industries.update', $industries->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row gy-20">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="category" class="form-label">Select Blog Category:</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">-- Select Blog Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->pid }}"
                                        {{ (isset($subcategory) && $subcategory->pid == $category->pid) ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="industries_name" class="form-label">Blog Name:</label>
                            <input type="text" name="industries_name" class="form-control" value="{{ $industries->industries_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label"> Blog Description:</label>
                            <textarea name="description" id="summernote" class="form-control">{{ $industries->description }}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">Blog Image</label>
                            @if($industries->image)
                                <div>
                                    <img src="{{ asset($industries->image) }}" width="100" alt="Current Image">
                                </div>
                            @endif
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="position-relative pb-15 form-group">
                            <label for="slug">Slug URL</label>
                            <input type="text" name="slug" class="form-control" value="{{ $industries->slug }}" required>
                        </div>
                         <div class="position-relative pb-15 form-group">
                            <label for="slug">Publish Date</label>
                            <input type="date" name="publish_date" class="form-control" value="{{ $industries->publish_date }}" required>
                        </div>
                        <div class="position-relative pb-15 form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="active" {{ $industries->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $industries->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="position-relative pb-15 form-group">
                            <label for="slug">Tag</label>
                            <input type="text" name="tag" class="form-control" value="{{ $industries->tag }}" required>
                        </div>
                        <div class="position-relative pb-15 form-group">
                            <label for="slug">Author Name</label>
                            <input type="text" name="author_name" class="form-control" value="{{ $industries->author_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title:</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ $industries->meta_title }}">
                        </div>

                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords:</label>
                            <input type="text" name="meta_keywords" class="form-control" value="{{ $industries->meta_keywords }}">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description:</label>
                            <textarea name="meta_description" class="form-control">{{ $industries->meta_description }}</textarea>
                        </div>
                        <div class="position-relative pb-15 form-group">
                            <label for="meta_description">Schema Markup / Open Graph Meta / Twitter Card Meta</label>
                            <textarea name="schema_markup" id="schema_markup" class="form-control"value="{{ $industries->schema_markup }}" style="height:150px;"></textarea>
                        </div>
                        
                        <div class="flex-align mt-20">
                            <button type="submit" class="btn btn-success rounded-pill py-9">Update Service</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('category').addEventListener('change', function () {
        let categoryId = this.value;
        let subcategoryDropdown = document.getElementById('industries_subcategory_id');

        fetch(`/get-subcategories-industries/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                subcategoryDropdown.innerHTML = '<option value="">-- Select Subcategory --</option>';
                data.forEach(sub => {
                    subcategoryDropdown.innerHTML += `<option value="${sub.industries_subcategory_id}">${sub.name}</option>`;
                });
            });
    });
</script>
@endsection
