@extends('admin.layouts.header')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3>Edit Job</h3>

        <a href="{{ route('admin.jobs.index') }}"
           class="btn btn-secondary">
            Back
        </a>

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

            <form action="{{ route('admin.jobs.update', $job->id) }}"
                  method="POST">

                @csrf

                @method('PUT')


                {{-- Job Title --}}

                <div class="mb-3">

                    <label class="form-label">
                        Job Title <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="job_title"
                           class="form-control"
                           value="{{ old('job_title', $job->job_title) }}"
                           required>

                </div>


                {{-- Department --}}

                <div class="mb-3">

                    <label class="form-label">
                        Department <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="department"
                           class="form-control"
                           value="{{ old('department', $job->department) }}"
                           required>

                </div>


                {{-- Employment Type --}}

                <div class="mb-3">

                    <label class="form-label">
                        Employment Type <span class="text-danger">*</span>
                    </label>

                    <select name="employment_type"
                            class="form-select"
                            required>

                        @foreach([
                            'Full-time',
                            'Part-time',
                            'Internship',
                            'Contract'
                        ] as $type)

                            <option value="{{ $type }}"
                                {{ old('employment_type', $job->employment_type) == $type ? 'selected' : '' }}>

                                {{ $type }}

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- Location --}}

                <div class="mb-3">

                    <label class="form-label">
                        Location
                    </label>

                    <input type="text"
                           name="location"
                           class="form-control"
                           value="{{ old('location', $job->location) }}"
                           placeholder="Pune / Mumbai / Remote">

                </div>


                {{-- Status --}}

                <div class="mb-3">

                    <label class="form-label">
                        Status <span class="text-danger">*</span>
                    </label>

                    <select name="status"
                            class="form-select"
                            required>

                        <option value="Active"
                            {{ old('status', $job->status) == 'Active' ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="Inactive"
                            {{ old('status', $job->status) == 'Inactive' ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>

                </div>


                {{-- Description --}}

                <div class="mb-4">

                    <label class="form-label">
                        Description <span class="text-danger">*</span>
                    </label>

                    <textarea id="description"
                              name="description"
                              class="form-control"
                              rows="10">{{ old('description', $job->description) }}</textarea>

                </div>


                {{-- Buttons --}}

                <div class="text-end">

                    <a href="{{ route('admin.jobs.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Update Job
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection


{{-- ========================================================= --}}
{{-- SUMMERNOTE --}}
{{-- ========================================================= --}}

@push('scripts')

<script>

$(document).ready(function () {

    $('#description').summernote({

        height: 350,

        minHeight: 300,

        maxHeight: 500,

        placeholder: 'Start writing...',

        dialogsInBody: true,

        toolbar: [

            ['style', ['style']],

            ['font', [
                'bold',
                'italic',
                'underline',
                'strikethrough',
                'clear'
            ]],

            ['fontname', ['fontname']],

            ['fontsize', ['fontsize']],

            ['color', ['color']],

            ['para', [
                'ul',
                'ol',
                'paragraph'
            ]],

            ['table', [
                'table'
            ]],

            ['insert', [
                'link',
                'picture',
                'video'
            ]],

            ['view', [
                'fullscreen',
                'codeview',
                'help'
            ]]

        ]

    });

});

</script>

@endpush