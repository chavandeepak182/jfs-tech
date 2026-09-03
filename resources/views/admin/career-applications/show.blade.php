@extends('admin.layouts.header')

@section('content')

<div class="container-fluid py-4">

    {{-- =========================================================
         HEADER
    ========================================================== --}}

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-1">
                Application Details
            </h3>

            <p class="text-muted mb-0">
                Candidate application information
            </p>

        </div>


        <a href="{{ route('admin.career-applications.index') }}"
           class="btn btn-outline-secondary">

            <i class="bx bx-arrow-back"></i>

            Back

        </a>

    </div>



    <div class="row g-4">


        {{-- =====================================================
             LEFT
        ====================================================== --}}

        <div class="col-lg-8">


            {{-- CANDIDATE INFORMATION --}}

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Candidate Information
                    </h5>

                </div>


                <div class="card-body">

                    <div class="row g-4">


                        <div class="col-md-6">

                            <small class="text-muted">
                                Candidate Name
                            </small>

                            <h6 class="mt-1">
                                {{ $application->name }}
                            </h6>

                        </div>


                        <div class="col-md-6">

                            <small class="text-muted">
                                Job Position
                            </small>

                            <h6 class="mt-1">

                                {{ $application->job?->job_title ?? 'Job Deleted' }}

                            </h6>

                        </div>


                        <div class="col-md-6">

                            <small class="text-muted">
                                Phone Number
                            </small>

                            <h6 class="mt-1">
                                {{ $application->phone_number }}
                            </h6>

                        </div>


                        <div class="col-md-6">

                            <small class="text-muted">
                                Email Address
                            </small>

                            <h6 class="mt-1">
                                {{ $application->email }}
                            </h6>

                        </div>


                        <div class="col-md-6">

                            <small class="text-muted">
                                Applied On
                            </small>

                            <h6 class="mt-1">

                                {{ $application->created_at->format('d M Y h:i A') }}

                            </h6>

                        </div>

                    </div>

                </div>

            </div>



            {{-- RESUME --}}

            <div class="card border-0 shadow-sm mt-4">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Candidate Resume
                    </h5>

                </div>


                <div class="card-body">

                    @if($application->resume)

                        <a href="{{ asset('storage/' . $application->resume) }}"
                           target="_blank"
                           class="btn btn-primary">

                            <i class="bx bx-file"></i>

                            Open Resume

                        </a>

                    @else

                        <span class="text-muted">
                            Resume not available.
                        </span>

                    @endif

                </div>

            </div>

        </div>



        {{-- =====================================================
             RIGHT
        ====================================================== --}}

        <div class="col-lg-4">


            {{-- STATUS CARD --}}

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Application Status
                    </h5>

                </div>


                <div class="card-body">

                    <form method="POST"
                          action="{{ route('admin.career-applications.status', $application->id) }}">

                        @csrf


                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select name="status"
                                    class="form-select">

                                <option value="Pending"
                                    {{ $application->status == 'Pending' ? 'selected' : '' }}>
                                    Pending
                                </option>

                                <option value="Reviewed"
                                    {{ $application->status == 'Reviewed' ? 'selected' : '' }}>
                                    Reviewed
                                </option>

                                <option value="Shortlisted"
                                    {{ $application->status == 'Shortlisted' ? 'selected' : '' }}>
                                    Shortlisted
                                </option>

                                <option value="Selected"
                                    {{ $application->status == 'Selected' ? 'selected' : '' }}>
                                    Selected
                                </option>

                                <option value="Rejected"
                                    {{ $application->status == 'Rejected' ? 'selected' : '' }}>
                                    Rejected
                                </option>

                            </select>

                        </div>


                        <button type="submit"
                                class="btn btn-primary w-100">

                            Update Status

                        </button>

                    </form>

                </div>

            </div>



            {{-- DELETE --}}

            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body">

                    <form method="POST"
                          action="{{ route('admin.career-applications.destroy', $application->id) }}">

                        @csrf

                        @method('DELETE')


                        <button type="submit"
                                class="btn btn-outline-danger w-100"
                                onclick="return confirm('Delete this application?')">

                            <i class="bx bx-trash"></i>

                            Delete Application

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection