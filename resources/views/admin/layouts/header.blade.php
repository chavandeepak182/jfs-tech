<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title -->
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/images/logo/favicon.png">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css">
        <!-- file upload -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/file-upload.css">
        <!-- file upload -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plyr.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
        <!-- full calendar -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/full-calendar.css">
        <!-- jquery Ui -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/jquery-ui.css">
        <!-- editor quill Ui -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/editor-quill.css">
        <!-- apex charts Css -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/apexcharts.css">
        <!-- calendar Css -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/calendar.css">
        <!-- jvector map Css -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/jquery-jvectormap-2.0.5.css">
        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/main.css">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

        <!-- Summernote CSS - KEEP THIS IN HEAD -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Stack for page-specific styles -->
        @stack('styles')
    </head> 
    <body>
        <div class="preloader">
            <div class="loader"></div>
        </div>

        <div class="side-overlay"></div>
        
        <aside class="sidebar">
            <!-- sidebar close btn -->
            <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
            
            <a href="{{ url('/') }}" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
                <img src="{{ asset('assets') }}/images/logo.png" alt="Logo" width="120" height="20">
            </a>

            <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
                <div class="p-20 pt-10">
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu__item {{ Request::is('admin/dashboard') ? 'activePage' : '' }}">
                            <a href="{{ url('admin/dashboard') }}" class="sidebar-menu__link">
                                <span class="icon"><i class="ph ph-squares-four"></i></span>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-menu__item has-dropdown 
    {{ Request::is('admin/blog') || Request::is('blog/create') || Request::is('blog/edit/*') ? 'activePage' : '' }}">
    <a href="/admin/blog" class="sidebar-menu__link">
        <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
        <span class="text">Blogs</span>
    </a>
</li>

<li class="sidebar-menu__item has-dropdown 
    {{ Request::is('admin/blog') || Request::is('blog/create') || Request::is('blog/edit/*') ? 'activePage' : '' }}">
    <a href="{{ route('admin.jobs.index') }}" class="sidebar-menu__link">
        <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
        <span class="text">Career</span>
    </a>
</li>


<li class="sidebar-menu__item has-dropdown 
    {{ Request::is('admin/blog') || Request::is('blog/create') || Request::is('blog/edit/*') ? 'activePage' : '' }}">
    <a href="{{ route('admin.career-applications.index') }}" class="sidebar-menu__link">
        <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
        <span class="text">Career Applications</span>
    </a>
</li>
                    </ul>
                </div>
            </div>
        </aside> 

        <div class="dashboard-main-wrapper">
            <div class="top-navbar flex-between gap-16">
                <div class="flex-align gap-16">
                    <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
                    
                    <form action="#" class="w-350 d-sm-block d-none">
                        <div class="position-relative">
                            <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i class="ph ph-magnifying-glass"></i></button> 
                            <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
                        </div>
                    </form>
                </div>

                <div class="flex-align gap-16">
                    <div class="flex-align gap-8">
                        <!-- Notification Dropdown -->
                        <div class="dropdown">
                            <button class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="position-relative">
                                    <i class="ph ph-bell"></i>
                                    <span class="alarm-notify position-absolute end-0"></span>
                                </span>
                            </button>
                            <!-- Notification dropdown content... -->
                        </div>
                    </div>

                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="position-relative">
                                <img src="{{ asset('dashboard') }}/assets/images/thumbs/user-img.png" alt="Image" class="h-32 w-32 rounded-circle">
                                <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                            <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                <div class="card-body">
                                    <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                                        <img src="{{ asset('dashboard') }}/assets/images/thumbs/user-img.png" alt="" class="w-54 h-54 rounded-circle">
                                        <div class="">
                                            <h4 class="mb-0">Michel John</h4>
                                            <p class="fw-medium text-13 text-gray-200">examplemail@mail.com</p>
                                        </div>
                                    </div>
                                    <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                                        <li class="mb-4">
                                            <a href="{{ url('/logout') }}" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                                <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-door-open"></i></span>
                                                <span class="text">Logout</span>
                                            </a>
                                        </li>
                                        <li class="mb-4">
                                            <a href="{{ url('/reset') }}" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                                <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-pen"></i></span>
                                                <span class="text">Reset Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

            @include('admin.layouts.footer')

            <!-- ============================================== -->
            <!-- ALL JAVASCRIPT AT THE BOTTOM OF THE PAGE -->
            <!-- ============================================== -->
            
            <!-- jQuery - MUST be first -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            
            <!-- Bootstrap JS -->
            <script src="{{ asset('dashboard') }}/assets/js/bootstrap.bundle.min.js"></script>
            
            <!-- Summernote JS - AFTER jQuery -->
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
            
            <!-- Other scripts -->
            <script src="{{ asset('dashboard') }}/assets/js/file-upload.js"></script>
            <script src="{{ asset('dashboard') }}/assets/js/plyr.js"></script>
            <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
            <!-- etc... -->

            <!-- Page specific scripts -->
            @stack('scripts')
            
    </body>
</html>