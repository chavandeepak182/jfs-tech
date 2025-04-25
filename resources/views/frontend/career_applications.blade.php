@extends('layouts.header-n')
@section('title')
@parent
Career Applications
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
                <li class="breadcrumb-item active" aria-current="page">All Applications</li>
            </ol>
        </nav>

        <a href="{{ url('/admin/blogs') }}" class="btn btn-primary ms-3"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card pt-3">
            <div class="card-body">
                <!-- Filter Form -->
                <form method="GET" action="{{ route('admin.career_applications.index') }}" class="mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="job_title" class="form-control" placeholder="Job Title" value="{{ request('job_title') }}">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="name" class="form-control" placeholder="Applicant Name" value="{{ request('name') }}">
                        </div>
                        <div class="col-md-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ request('email') }}">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
                            <a href="{{ route('admin.career_applications.index') }}" class="btn btn-danger"><i class="fas fa-undo"></i> Reset</a>
                            <button type="submit" name="export" value="1" class="btn btn-warning"><i class="fas fa-file-download"></i> Export</button>
                        </div>
                    </div>
                </form>

                <!-- Applications Table -->
                <div class="table-responsive" id="applications_table_container">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Resume</th>
                                <th>Applied At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $index => $app)
                            <tr class="text-center">
                                <td>{{ $applications->firstItem() + $index }}.</td>
                                <td>{{ $app->job_title ?? 'N/A' }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->email }}</td>
                                <td>{{ $app->phone_number }}</td>
                                <td class="text-center"><a href="{{ asset('storage/' . $app->resume) }}" class="bg-warning text-dark px-2 py-1 rounded" target="_blank"><i class="far fa-eye"></i></a></td>
                                <td>{{ $app->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $applications->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
