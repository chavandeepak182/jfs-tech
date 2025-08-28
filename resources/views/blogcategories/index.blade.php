@extends('admin.layouts.header')

@section('content')
<div class="dashboard-body">
    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ url('admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Dashboard</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Categories</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>
    

    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row gy-20">
                <div class="col-md-5 col-sm-5">
                    <form action="{{ route('blog.categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-20">
                            <label class="h5 fw-semibold font-heading mb-0">Add Category <span class="text-13 text-gray-400 fw-medium"></span> </label>
                        </div>
                        <div class="position-relative">
                            <input type="text" name="category_name" class="text-counter placeholder-13 form-control py-11 pe-76" placeholder="Enter Category Name:">
                        </div>
                        <div class="flex-align mt-10">
                            <button type="submit" class="btn btn-main rounded-pill py-9">Add Category</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="mb-20">
                        <label class="h5 fw-semibold font-heading mb-0">Existing Categories</label>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->pid }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <a href="{{ route('blog.categories.edit', $category->pid) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('blog.categories.delete', $category->pid) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
