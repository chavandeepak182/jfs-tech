@extends('admin.layouts.header')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Add Job</h3>
        <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">Back</a>
    </div>

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.jobs.store') }}" method="POST">
                @csrf

                {{-- Job Title --}}
                <div class="mb-3">
                    <label class="form-label">Job Title <span class="text-danger">*</span></label>
                    <input type="text" name="job_title" class="form-control" placeholder="Job Title" value="{{ old('job_title') }}" required>
                </div>

                {{-- Department --}}
                <div class="mb-3">
                    <label class="form-label">Department <span class="text-danger">*</span></label>
                    <input type="text" name="department" class="form-control" placeholder="Department" value="{{ old('department') }}" required>
                </div>

                {{-- Employment Type --}}
                <div class="mb-3">
                    <label class="form-label">Employment Type <span class="text-danger">*</span></label>
                    <select name="employment_type" class="form-select" required>
                        <option value="">Select Employment Type</option>
                        <option value="Full-time" {{ old('employment_type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option value="Part-time" {{ old('employment_type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                        <option value="Internship" {{ old('employment_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                        <option value="Contract" {{ old('employment_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                    </select>
                </div>

                {{-- Location --}}
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Pune / Mumbai / Remote" value="{{ old('location') }}">
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-select" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>

                {{-- Description --}}
                <div class="mb-4">
                    <label class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea id="description" name="description" class="form-control" rows="10">{{ old('description') }}</textarea>
                </div>

                {{-- Buttons --}}
                <div class="text-end">
                    <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add Job</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- ========================================================= --}}
{{-- SUMMERNOTE STYLES & SCRIPTS --}}
{{-- ========================================================= --}}

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script>
$(document).ready(function () {
    // Initialize Summernote
    $('#description').summernote({
        height: 350,
        minHeight: 300,
        maxHeight: 500,
        placeholder: 'Start writing...',
        dialogsInBody: true,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    
    console.log('Summernote initialized successfully!');
});
</script>
@endpush