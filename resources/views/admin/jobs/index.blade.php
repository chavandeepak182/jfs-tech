@extends('admin.layouts.header')

@section('content')

<div class="container-fluid px-4">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pt-2">

        <div>
            <h3 class="mb-1 fw-semibold text-dark">
                Jobs
            </h3>
            <p class="text-muted mb-0 small">
                Manage your career opportunities
            </p>
        </div>

        <a href="{{ route('admin.jobs.create') }}"
           class="btn btn-primary px-4 shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> + Add Job
        </a>

    </div>


    {{-- =====================================================
         SUCCESS MESSAGE
    ====================================================== --}}

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- =====================================================
         JOB TABLE CARD
    ====================================================== --}}

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3 border-bottom">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">
                    <i class="bi bi-briefcase me-2 text-primary"></i>All Jobs
                </h5>
                <span class="text-muted small">
                    <i class="bi bi-database me-1"></i> Total: {{ $jobs->count() }}
                </span>
            </div>
        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th scope="col" width="60" class="text-center">#</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Department</th>
                            <th scope="col">Employment Type</th>
                            <th scope="col">Location</th>
                            <th scope="col" width="140">Status</th>
                            <th scope="col" width="320" class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($jobs as $key => $job)

                            <tr class="border-bottom">
                                <td class="text-center fw-bold text-muted">{{ $key + 1 }}</td>

                                <td>
                                    <span class="fw-semibold text-dark">{{ $job->job_title }}</span>
                                </td>

                                <td>{{ $job->department }}</td>

                                <td>
                                    <span class="badge bg-info text-white px-3 py-2">
                                        {{ $job->employment_type }}
                                    </span>
                                </td>

                                <td>
                                    <i class="bi bi-geo-alt text-muted me-1"></i>
                                    {{ $job->location ?? 'N/A' }}
                                </td>

                                <td>
                                    @if($job->status === 'Active')
                                        <span class="badge bg-success px-3 py-2">
                                            <i class="bi bi-check-circle me-1"></i> Active
                                        </span>
                                    @else
                                        <span class="badge bg-secondary px-3 py-2">
                                            <i class="bi bi-x-circle me-1"></i> Inactive
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap">

                                        {{-- EDIT BUTTON --}}
                                        <a href="{{ route('admin.jobs.edit', $job->id) }}"
                                           class="btn btn-warning btn-sm text-white">
                                            <i class="bi bi-pencil me-1"></i> Edit
                                        </a>

                                        {{-- TOGGLE STATUS BUTTON --}}
                                        <form action="{{ route('admin.jobs.toggle-status', $job->id) }}"
                                              method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('PATCH')

                                            @if($job->status === 'Active')
                                                <button type="submit"
                                                        class="btn btn-secondary btn-sm"
                                                        onclick="return confirm('Are you sure you want to make this job inactive?');">
                                                    <i class="bi bi-eye-slash me-1"></i> Inactive
                                                </button>
                                            @else
                                                <button type="submit"
                                                        class="btn btn-success btn-sm"
                                                        onclick="return confirm('Do you want to make this job active?');">
                                                    <i class="bi bi-eye me-1"></i> Active
                                                </button>
                                            @endif
                                        </form>

                                        {{-- DELETE BUTTON --}}
                                        <form action="{{ route('admin.jobs.destroy', $job->id) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this job?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash me-1"></i> Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <div class="py-4">
                                        <div class="display-1 text-muted mb-3">📋</div>
                                        <h5 class="fw-semibold text-secondary">No jobs found</h5>
                                        <p class="text-muted mb-0">Add your first career opportunity.</p>
                                    </div>
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        @if(method_exists($jobs, 'links'))
            <div class="card-footer bg-white border-top py-3">
                {{ $jobs->links() }}
            </div>
        @endif

    </div>

</div>

@endsection