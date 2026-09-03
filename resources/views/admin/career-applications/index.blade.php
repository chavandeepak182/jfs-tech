@extends('admin.layouts.header')

@section('content')

<style>

/* =========================================================
   CAREER APPLICATIONS - PROFESSIONAL ADMIN UI
   UI ONLY - NO FUNCTIONALITY CHANGED
========================================================= */

/* ---------------------------------------------------------
   MAIN CONTENT FIX
   Prevent sidebar from covering the page
--------------------------------------------------------- */

.career-page {
    width: 100%;
    min-height: 100vh;
    padding: 28px 30px 50px;
    background: #f5f8fc;
    box-sizing: border-box;
}

/*
|--------------------------------------------------------------------------
| If your admin sidebar is fixed/overlaying the content,
| this automatically creates enough space.
|--------------------------------------------------------------------------
*/

@media (min-width: 1200px) {
    .career-page {
        margin-left: 0;
        width: 100%;
    }
}

/* ---------------------------------------------------------
   PAGE HEADER
--------------------------------------------------------- */

.career-page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    margin-bottom: 28px;
}

.career-title-area {
    min-width: 0;
}

.career-title {
    margin: 0;
    color: #14213d;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.25;
    letter-spacing: -0.4px;
}

.career-title i {
    color: #2563eb;
    font-size: 27px;
    vertical-align: -2px;
}

.career-subtitle {
    margin: 7px 0 0;
    color: #718096;
    font-size: 14px;
    line-height: 1.5;
}

/* ---------------------------------------------------------
   STAT BADGES
--------------------------------------------------------- */

.career-stats {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 9px;
}

.career-stat {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    min-height: 36px;
    padding: 8px 15px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    border: 1px solid transparent;
    white-space: nowrap;
}

.career-stat i {
    font-size: 16px;
}

.career-stat.total {
    color: #1d4ed8;
    background: #eff6ff;
    border-color: #dbeafe;
}

.career-stat.selected {
    color: #047857;
    background: #ecfdf5;
    border-color: #d1fae5;
}

.career-stat.pending {
    color: #92400e;
    background: #fffbeb;
    border-color: #fde68a;
}

/* ---------------------------------------------------------
   ALERTS
--------------------------------------------------------- */

.career-page .alert {
    border-radius: 14px !important;
    padding: 13px 17px;
    margin-bottom: 20px;
    font-size: 13px;
}

.career-page .alert-success {
    color: #065f46;
    background: #ecfdf5;
    border-left: 4px solid #10b981 !important;
}

.career-page .alert-danger {
    color: #991b1b;
    background: #fef2f2;
    border-left: 4px solid #ef4444 !important;
}

/* ---------------------------------------------------------
   FILTER CARD
--------------------------------------------------------- */

.career-filter-card {
    background: #ffffff;
    border: 1px solid #edf1f6 !important;
    border-radius: 18px !important;
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.055) !important;
    margin-bottom: 24px;
}

.career-filter-card .card-body {
    padding: 21px 23px !important;
}

.career-filter-card .form-label {
    display: block;
    margin-bottom: 7px;
    color: #344054;
    font-size: 12px;
    font-weight: 700;
}

.career-filter-card .form-label i {
    color: #2563eb;
    font-size: 15px;
}

.career-filter-card .form-control,
.career-filter-card .form-select {
    height: 44px;
    border: 1px solid #dfe5ed;
    border-radius: 10px;
    color: #344054;
    background: #ffffff;
    font-size: 13px;
    box-shadow: none;
    transition: all 0.2s ease;
}

.career-filter-card .form-control::placeholder {
    color: #98a2b3;
}

.career-filter-card .form-control:focus,
.career-filter-card .form-select:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.09);
}

.career-filter-actions {
    display: flex;
    align-items: center;
    gap: 8px;
    padding-top: 24px;
}

.career-filter-btn,
.career-reset-btn {
    height: 44px;
    border-radius: 10px !important;
    padding: 0 18px !important;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
}

.career-filter-btn {
    border: none !important;
    background: #2563eb !important;
    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.18);
}

.career-filter-btn:hover {
    background: #1d4ed8 !important;
    transform: translateY(-1px);
}

.career-reset-btn {
    color: #475467 !important;
    background: #ffffff !important;
    border: 1px solid #dfe5ed !important;
}

.career-reset-btn:hover {
    color: #1d4ed8 !important;
    border-color: #93c5fd !important;
    background: #f8fbff !important;
}

/* ---------------------------------------------------------
   APPLICATION TABLE CARD
--------------------------------------------------------- */

.career-table-card {
    width: 100%;
    background: #ffffff;
    border: 1px solid #edf1f6 !important;
    border-radius: 20px !important;
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.065) !important;
    overflow: hidden;
}

/* ---------------------------------------------------------
   TABLE HEADER
--------------------------------------------------------- */

.career-table-header {
    min-height: 72px;
    padding: 17px 23px !important;
    background: #ffffff !important;
    border-bottom: 1px solid #edf1f6 !important;
}

.career-table-title {
    margin: 0;
    color: #172033;
    font-size: 16px;
    font-weight: 700;
}

.career-table-title i {
    color: #2563eb;
    font-size: 19px;
    vertical-align: -2px;
}

.career-updated {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 7px 12px;
    color: #667085;
    background: #f8fafc !important;
    border: 1px solid #eef2f6;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
}

.career-updated i {
    color: #2563eb;
    font-size: 14px;
}

/* ---------------------------------------------------------
   TABLE
--------------------------------------------------------- */

.career-table-wrapper {
    width: 100%;
    overflow-x: auto;
    overflow-y: hidden;
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
}

.career-table-wrapper::-webkit-scrollbar {
    height: 7px;
}

.career-table-wrapper::-webkit-scrollbar-track {
    background: #f8fafc;
}

.career-table-wrapper::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 20px;
}

.career-table {
    width: 100%;
    min-width: 1180px;
    margin: 0 !important;
    border-collapse: separate;
    border-spacing: 0;
}

/* Table heading */

.career-table thead th {
    height: 55px;
    padding: 0 15px !important;
    color: #475467;
    background: #f8fafc !important;
    border-top: none !important;
    border-bottom: 1px solid #e9eef5 !important;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .045em;
    white-space: nowrap;
    vertical-align: middle;
}

/* First table heading */

.career-table thead th:first-child {
    padding-left: 23px !important;
}

/* Table rows */

.career-table tbody tr {
    transition: all 0.18s ease;
}

.career-table tbody tr:hover {
    background: #f9fbff;
}

.career-table tbody td {
    height: 74px;
    padding: 12px 15px !important;
    color: #344054;
    background: #ffffff;
    border-bottom: 1px solid #eef2f6 !important;
    font-size: 13px;
    vertical-align: middle;
}

.career-table tbody tr:last-child td {
    border-bottom: none !important;
}

.career-table tbody tr:hover td {
    background: #f9fbff;
}

.career-table tbody td:first-child {
    padding-left: 23px !important;
}

/* ---------------------------------------------------------
   CANDIDATE
--------------------------------------------------------- */

.candidate-wrapper {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 175px;
}

.candidate-avatar {
    width: 38px;
    height: 38px;
    min-width: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    color: #ffffff;
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    font-size: 13px;
    font-weight: 700;
    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.18);
}

.candidate-name {
    max-width: 145px;
    color: #172033;
    font-size: 13px;
    font-weight: 650;
    white-space: normal;
    word-break: break-word;
}

/* ---------------------------------------------------------
   JOB POSITION
--------------------------------------------------------- */

.job-wrapper {
    min-width: 180px;
}

.job-title {
    display: block;
    max-width: 220px;
    color: #172033;
    font-size: 13px;
    font-weight: 650;
    line-height: 1.35;
    word-break: break-word;
}

.job-department {
    display: inline-flex;
    align-items: center;
    margin-top: 4px;
    color: #98a2b3;
    font-size: 11px;
}

.job-department i {
    color: #94a3b8;
}

/* ---------------------------------------------------------
   PHONE / EMAIL
--------------------------------------------------------- */

.career-phone,
.career-email {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    color: #344054 !important;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none !important;
    transition: color 0.2s ease;
}

.career-phone:hover,
.career-email:hover {
    color: #2563eb !important;
}

.career-phone i,
.career-email i {
    color: #94a3b8;
    font-size: 15px;
}

.career-email {
    max-width: 210px;
    overflow-wrap: anywhere;
}

/* ---------------------------------------------------------
   RESUME BUTTONS
--------------------------------------------------------- */

.resume-actions {
    display: flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
}

.resume-view {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 34px;
    padding: 0 12px;
    color: #344054 !important;
    background: #ffffff;
    border: 1px solid #dfe5ed;
    border-radius: 9px;
    font-size: 11px;
    font-weight: 600;
    text-decoration: none !important;
    transition: all 0.2s ease;
}

.resume-view i {
    color: #2563eb;
    font-size: 15px;
}

.resume-view:hover {
    color: #2563eb !important;
    background: #eff6ff;
    border-color: #bfdbfe;
}

.resume-download {
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #475467 !important;
    background: #ffffff;
    border: 1px solid #dfe5ed;
    border-radius: 9px;
    text-decoration: none !important;
    transition: all 0.2s ease;
}

.resume-download i {
    color: #475467 !important;
    font-size: 16px;
}

.resume-download:hover {
    color: #047857 !important;
    background: #ecfdf5;
    border-color: #a7f3d0;
}

/* ---------------------------------------------------------
   STATUS
--------------------------------------------------------- */

.career-status {
    display: inline-flex !important;
    align-items: center;
    gap: 5px;
    min-width: 85px;
    justify-content: center;
    padding: 7px 12px !important;
    border-radius: 50px !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    border: 1px solid transparent;
}

.career-status i {
    font-size: 14px;
}

/* Pending */

.status-pending {
    color: #92400e !important;
    background: #fffbeb !important;
    border-color: #fde68a !important;
}

/* Reviewed */

.status-reviewed {
    color: #0369a1 !important;
    background: #f0f9ff !important;
    border-color: #bae6fd !important;
}

/* Shortlisted */

.status-shortlisted {
    color: #4338ca !important;
    background: #eef2ff !important;
    border-color: #c7d2fe !important;
}

/* Selected */

.status-selected {
    color: #047857 !important;
    background: #ecfdf5 !important;
    border-color: #a7f3d0 !important;
}

/* Rejected */

.status-rejected {
    color: #b91c1c !important;
    background: #fef2f2 !important;
    border-color: #fecaca !important;
}

/* ---------------------------------------------------------
   APPLIED DATE
--------------------------------------------------------- */

.applied-date {
    display: block;
    color: #172033;
    font-size: 12px;
    font-weight: 650;
    white-space: nowrap;
}

.applied-time {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    margin-top: 3px;
    color: #98a2b3;
    font-size: 11px;
    white-space: nowrap;
}

.applied-time i {
    font-size: 13px;
}

/* ---------------------------------------------------------
   ACTION BUTTON
--------------------------------------------------------- */

.career-view-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 34px;
    min-width: 76px;
    padding: 0 13px;
    color: #2563eb !important;
    background: #eff6ff !important;
    border: 1px solid #dbeafe !important;
    border-radius: 9px !important;
    font-size: 11px;
    font-weight: 700;
    text-decoration: none !important;
    transition: all 0.2s ease;
}

.career-view-btn i {
    font-size: 15px;
}

.career-view-btn:hover {
    color: #ffffff !important;
    background: #2563eb !important;
    border-color: #2563eb !important;
    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.18);
    transform: translateY(-1px);
}

/* ---------------------------------------------------------
   EMPTY STATE
--------------------------------------------------------- */

.career-empty-icon {
    width: 76px;
    height: 76px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    border-radius: 20px;
    background: #f8fafc;
}

.career-empty-icon i {
    color: #cbd5e1;
    font-size: 42px;
}

.career-empty-title {
    color: #172033;
    font-size: 16px;
    font-weight: 700;
}

.career-empty-text {
    color: #98a2b3;
    font-size: 13px;
}

/* ---------------------------------------------------------
   PAGINATION
--------------------------------------------------------- */

.career-pagination {
    min-height: 68px;
    padding: 15px 23px !important;
    background: #ffffff !important;
    border-top: 1px solid #eef2f6 !important;
}

.career-pagination-text {
    color: #98a2b3;
    font-size: 11px;
    font-weight: 500;
}

.career-pagination .pagination {
    margin: 0;
    gap: 4px;
}

.career-pagination .page-item {
    margin: 0;
}

.career-pagination .page-link {
    min-width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 9px;
    color: #475467;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 8px !important;
    font-size: 12px;
    font-weight: 600;
}

.career-pagination .page-link:hover {
    color: #2563eb;
    background: #eff6ff;
    border-color: #bfdbfe;
}

.career-pagination .page-item.active .page-link {
    color: #ffffff;
    background: #2563eb;
    border-color: #2563eb;
}

/* ---------------------------------------------------------
   RESUME MODAL
--------------------------------------------------------- */

#resumeModal .modal-content {
    overflow: hidden;
    border: none;
    border-radius: 20px;
    box-shadow: 0 25px 60px rgba(15, 23, 42, 0.2);
}

#resumeModal .modal-header {
    padding: 18px 22px;
    border-bottom: 1px solid #edf1f6;
}

#resumeModal .modal-title {
    color: #172033;
    font-size: 17px;
    font-weight: 700;
}

#resumeModal .modal-title i {
    color: #2563eb;
}

#resumeModal .modal-body {
    padding: 0;
    background: #f8fafc;
}

#resumeModal iframe {
    display: block;
    width: 100%;
    height: 600px;
    border: none;
}

#resumeModal .modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #edf1f6;
}

/* ---------------------------------------------------------
   RESPONSIVE
--------------------------------------------------------- */

@media (max-width: 1199px) {

    .career-page {
        padding: 24px 22px 40px;
    }

    .career-title {
        font-size: 25px;
    }

    .career-table {
        min-width: 1150px;
    }
}

@media (max-width: 991px) {

    .career-page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .career-stats {
        justify-content: flex-start;
    }

    .career-filter-card .card-body {
        padding: 18px !important;
    }

    .career-filter-actions {
        padding-top: 0;
    }
}

@media (max-width: 767px) {

    .career-page {
        padding: 18px 14px 35px;
    }

    .career-page-header {
        margin-bottom: 20px;
    }

    .career-title {
        font-size: 22px;
    }

    .career-subtitle {
        font-size: 12px;
    }

    .career-stat {
        min-height: 32px;
        padding: 7px 11px;
        font-size: 10px;
    }

    .career-filter-card {
        border-radius: 15px !important;
    }

    .career-filter-card .card-body {
        padding: 15px !important;
    }

    .career-filter-actions {
        width: 100%;
        display: flex;
    }

    .career-filter-btn,
    .career-reset-btn {
        flex: 1;
    }

    .career-table-card {
        border-radius: 16px !important;
    }

    .career-table-header {
        padding: 15px !important;
    }

    .career-table-title {
        font-size: 14px;
    }

    .career-updated {
        margin-top: 8px;
        font-size: 10px;
    }

    .career-pagination {
        padding: 13px 15px !important;
    }

    #resumeModal iframe {
        height: 450px;
    }
}

@media (max-width: 480px) {

    .career-page {
        padding: 14px 10px 30px;
    }

    .career-stats {
        width: 100%;
    }

    .career-stat {
        flex: 1;
        justify-content: center;
    }

    .career-table {
        min-width: 1100px;
    }
}

</style>


<div class="career-page">

    {{-- =========================================================
         PAGE HEADER WITH STATS
    ========================================================== --}}

    <div class="career-page-header">

        <div class="career-title-area">

            <h3 class="career-title">
                <i class="bx bx-briefcase-alt-2 me-2"></i>
                Career Applications
            </h3>

            <p class="career-subtitle">
                <i class="bx bx-calendar me-1"></i>
                Manage all job applications submitted through the careers page.
            </p>

        </div>


        <div class="career-stats">

            <span class="career-stat total">
                <i class="bx bx-list-ul"></i>
                {{ $applications->count() }} Total
            </span>

            <span class="career-stat selected">
                <i class="bx bx-check-circle"></i>
                {{ $applications->where('status', 'Selected')->count() }} Selected
            </span>

            <span class="career-stat pending">
                <i class="bx bx-time"></i>
                {{ $applications->where('status', 'Pending')->count() }} Pending
            </span>

        </div>

    </div>


    {{-- =========================================================
         SUCCESS & ERROR ALERTS
    ========================================================== --}}

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0" role="alert">

            <i class="bx bx-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>

        </div>

    @endif


    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0" role="alert">

            <i class="bx bx-error-circle me-2"></i>

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>

        </div>

    @endif


    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0" role="alert">

            <i class="bx bx-error-circle me-2"></i>

            Please fix the following errors:

            <ul class="mb-0 mt-2 ps-3">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>

        </div>

    @endif


    {{-- =========================================================
         SEARCH & FILTER SECTION
    ========================================================== --}}

    <div class="card career-filter-card">

        <div class="card-body">

            <form action="{{ route('admin.career-applications.index') }}"
                  method="GET"
                  class="row g-3 align-items-end">


                {{-- SEARCH --}}

                <div class="col-md-3">

                    <label class="form-label">

                        <i class="bx bx-search me-1"></i>

                        Search

                    </label>

                    <input type="text"
                           name="search"
                           class="form-control"
                           placeholder="Name, Email, Phone..."
                           value="{{ request('search') }}">

                </div>


                {{-- STATUS --}}

                <div class="col-md-2">

                    <label class="form-label">

                        <i class="bx bx-filter me-1"></i>

                        Status

                    </label>

                    <select name="status"
                            class="form-select">

                        <option value="">
                            All Status
                        </option>

                        <option value="Pending"
                            {{ request('status') == 'Pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="Reviewed"
                            {{ request('status') == 'Reviewed' ? 'selected' : '' }}>
                            Reviewed
                        </option>

                        <option value="Shortlisted"
                            {{ request('status') == 'Shortlisted' ? 'selected' : '' }}>
                            Shortlisted
                        </option>

                        <option value="Selected"
                            {{ request('status') == 'Selected' ? 'selected' : '' }}>
                            Selected
                        </option>

                        <option value="Rejected"
                            {{ request('status') == 'Rejected' ? 'selected' : '' }}>
                            Rejected
                        </option>

                    </select>

                </div>


                {{-- DATE FROM --}}

                <div class="col-md-2">

                    <label class="form-label">

                        <i class="bx bx-calendar me-1"></i>

                        Date From

                    </label>

                    <input type="date"
                           name="date_from"
                           class="form-control"
                           value="{{ request('date_from') }}">

                </div>


                {{-- DATE TO --}}

                <div class="col-md-2">

                    <label class="form-label">

                        <i class="bx bx-calendar me-1"></i>

                        Date To

                    </label>

                    <input type="date"
                           name="date_to"
                           class="form-control"
                           value="{{ request('date_to') }}">

                </div>


                {{-- ACTIONS --}}

                <div class="col-md-3">

                    <div class="career-filter-actions">

                        <button type="submit"
                                class="btn btn-primary career-filter-btn">

                            <i class="bx bx-search me-1"></i>

                            Filter

                        </button>


                        <a href="{{ route('admin.career-applications.index') }}"
                           class="btn career-reset-btn">

                            <i class="bx bx-reset me-1"></i>

                            Reset

                        </a>

                    </div>

                </div>


            </form>

        </div>

    </div>


    {{-- =========================================================
         TABLE CARD
    ========================================================== --}}

    <div class="card career-table-card">


        {{-- CARD HEADER --}}

        <div class="card-header career-table-header d-flex flex-wrap justify-content-between align-items-center">

            <h5 class="career-table-title">

                <i class="bx bx-table me-2"></i>

                Submitted Applications

            </h5>


            <span class="career-updated">

                <i class="bx bx-time"></i>

                Last updated:

                {{ now()->format('d M Y, h:i A') }}

            </span>

        </div>


        {{-- TABLE --}}

        <div class="card-body p-0">

            <div class="career-table-wrapper">

                <table class="table career-table">


                    {{-- TABLE HEAD --}}

                    <thead>

                        <tr>

                            <th width="60">
                                #
                            </th>

                            <th width="190">
                                Candidate
                            </th>

                            <th width="210">
                                Job Position
                            </th>

                            <th width="150">
                                Phone
                            </th>

                            <th width="220">
                                Email
                            </th>

                            <th width="150">
                                Resume
                            </th>

                            <th width="135">
                                Status
                            </th>

                            <th width="145">
                                Applied Date
                            </th>

                            <th width="100"
                                class="text-center">
                                Action
                            </th>

                        </tr>

                    </thead>


                    {{-- TABLE BODY --}}

                    <tbody>

                        @forelse($applications as $application)

                            <tr>


                                {{-- ID --}}

                                <td class="fw-semibold text-muted">

                                    {{ $application->id }}

                                </td>


                                {{-- CANDIDATE --}}

                                <td>

                                    <div class="candidate-wrapper">

                                        <div class="candidate-avatar">

                                            {{ strtoupper(substr($application->name, 0, 1)) }}

                                        </div>


                                        <span class="candidate-name">

                                            {{ $application->name }}

                                        </span>

                                    </div>

                                </td>


                                {{-- JOB --}}

                                <td>

                                    <div class="job-wrapper">

                                        @if($application->job)

                                            <span class="job-title">

                                                {{ $application->job->job_title }}

                                            </span>


                                            <small class="job-department">

                                                <i class="bx bx-buildings me-1"></i>

                                                {{ $application->job->department }}

                                            </small>

                                        @else

                                            <span class="text-danger">

                                                <i class="bx bx-trash me-1"></i>

                                                Job Deleted

                                            </span>

                                        @endif

                                    </div>

                                </td>


                                {{-- PHONE --}}

                                <td>

                                    <a href="tel:{{ $application->phone_number }}"
                                       class="career-phone">

                                        <i class="bx bx-phone-call"></i>

                                        {{ $application->phone_number }}

                                    </a>

                                </td>


                                {{-- EMAIL --}}

                                <td>

                                    <a href="mailto:{{ $application->email }}"
                                       class="career-email">

                                        <i class="bx bx-envelope"></i>

                                        {{ $application->email }}

                                    </a>

                                </td>


                                {{-- RESUME --}}

                                <td>

                                    @if($application->resume)

                                        @php

                                            $resumeUrl = route(
                                                'admin.career-applications.resume',
                                                $application->id
                                            );

                                            $downloadUrl = route(
                                                'admin.career-applications.resume.download',
                                                $application->id
                                            );

                                            $cleanPath = str_replace(
                                                ['storage/', 'public/'],
                                                '',
                                                $application->resume
                                            );

                                            $directUrl = asset(
                                                'storage/' . $cleanPath
                                            );

                                        @endphp


                                        <div class="resume-actions">


                                            {{-- VIEW RESUME --}}

                                            <a href="{{ $resumeUrl }}"
                                               target="_blank"
                                               class="resume-view">

                                                <i class="bx bx-file-pdf me-1"></i>

                                                View

                                            </a>


                                            {{-- DOWNLOAD --}}

                                          <a href="{{ $downloadUrl }}"
   class="resume-download"
   title="Download Resume">

    <svg xmlns="http://www.w3.org/2000/svg"
         width="18"
         height="18"
         viewBox="0 0 24 24"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round">

        <path d="M12 3v12"></path>
        <path d="m7 10 5 5 5-5"></path>
        <path d="M5 21h14"></path>

    </svg>

</a>

                                        </div>


                                    @else

                                        <span class="text-muted">

                                            <i class="bx bx-file me-1"></i>

                                            No Resume

                                        </span>

                                    @endif

                                </td>


                                {{-- STATUS --}}

                                <td>

                                    @php

                                        $statusClasses = [

                                            'Pending'     => 'status-pending',

                                            'Reviewed'    => 'status-reviewed',

                                            'Shortlisted' => 'status-shortlisted',

                                            'Selected'    => 'status-selected',

                                            'Rejected'    => 'status-rejected',

                                        ];


                                        $statusIcon = [

                                            'Pending'     => 'bx-time',

                                            'Reviewed'    => 'bx-check-shield',

                                            'Shortlisted' => 'bx-star',

                                            'Selected'    => 'bx-check-circle',

                                            'Rejected'    => 'bx-x-circle',

                                        ];

                                    @endphp


                                    <span class="badge career-status {{ $statusClasses[$application->status] ?? '' }}">

                                        <i class="bx {{ $statusIcon[$application->status] ?? 'bx-circle' }}"></i>

                                        {{ $application->status }}

                                    </span>

                                </td>


                                {{-- DATE --}}

                                <td>

                                    <span class="applied-date">

                                        {{ $application->created_at->format('d M Y') }}

                                    </span>


                                    <small class="applied-time">

                                        <i class="bx bx-time-five"></i>

                                        {{ $application->created_at->format('h:i A') }}

                                    </small>

                                </td>


                                {{-- ACTION --}}

                                <td class="text-center">

                                    <a href="{{ route('admin.career-applications.show', $application->id) }}"
                                       class="career-view-btn">

                                        <i class="bx bx-show me-1"></i>

                                        View

                                    </a>

                                </td>


                            </tr>


                        @empty


                            {{-- EMPTY STATE --}}

                            <tr>

                                <td colspan="9"
                                    class="text-center py-5">


                                    <div class="career-empty-icon">

                                        <i class="bx bx-file-blank"></i>

                                    </div>


                                    <h5 class="career-empty-title">

                                        No Applications Found

                                    </h5>


                                    <p class="career-empty-text mb-0">

                                        Applications submitted from the careers page will appear here.

                                    </p>


                                </td>

                            </tr>


                        @endforelse


                    </tbody>


                </table>

            </div>

        </div>


        {{-- PAGINATION --}}

        @if(method_exists($applications, 'links'))

            <div class="card-footer career-pagination">

                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">


                    <div class="career-pagination-text">

                        Showing

                        {{ $applications->firstItem() ?? 0 }}

                        to

                        {{ $applications->lastItem() ?? 0 }}

                        of

                        {{ $applications->total() }}

                        entries

                    </div>


                    <div>

                        {{ $applications->appends(request()->query())->links() }}

                    </div>


                </div>

            </div>

        @endif


    </div>

</div>


{{-- =========================================================
     RESUME PREVIEW MODAL
========================================================= --}}

<div class="modal fade"
     id="resumeModal"
     tabindex="-1"
     aria-hidden="true">


    <div class="modal-dialog modal-lg">


        <div class="modal-content">


            <div class="modal-header">


                <h5 class="modal-title">

                    <i class="bx bx-file-pdf me-2"></i>

                    Resume Preview

                </h5>


                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>


            </div>


            <div class="modal-body"
                 style="min-height:400px;">

                <iframe id="resumeIframe"
                        src=""
                        style="width:100%;height:500px;border:none;">
                </iframe>

            </div>


            <div class="modal-footer">


                <a href="#"
                   id="resumeDownloadLink"
                   class="btn btn-success"
                   download>

                    <i class="bx bx-download me-1"></i>

                    Download

                </a>


                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                    Close

                </button>


            </div>


        </div>

    </div>

</div>


{{-- =========================================================
     JAVASCRIPT FOR RESUME MODAL
========================================================= --}}

<script>

function openResumeModal(resumeUrl)
{
    document.getElementById('resumeIframe').src = resumeUrl;

    document.getElementById('resumeDownloadLink').href = resumeUrl;

    var modal = new bootstrap.Modal(
        document.getElementById('resumeModal')
    );

    modal.show();
}


document
    .getElementById('resumeModal')
    .addEventListener(
        'hidden.bs.modal',
        function ()
        {
            document.getElementById('resumeIframe').src = '';
        }
    );

</script>


@endsection