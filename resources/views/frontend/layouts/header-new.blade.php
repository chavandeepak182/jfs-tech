<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="Keywords" content="@yield('keywords')">

	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/animate.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/fonts/flaticon.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/boxicons.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/nice-select.min.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/meanmenu.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/style.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/responsive.css">
	<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/theme-dark.css">
	<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css" rel="stylesheet"/>

	<link rel="icon" type="image/png" href="{{ asset('theme') }}/assets/images/favicon.png">

    <style>
        :root {
        --primary: #4214ae;
        --white: #fff;
        --black: #000d33;
        }

        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");

        a {
        text-decoration: none;
        color: inherit;
        }

        li {
        list-style: none;
        }

        .d-flex {
        display: flex;
        align-items: center;
        }

        /* =========== Navigation ============ */
        nav {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            background-color: #fff;
            height: 4.5rem;
            line-height: 1.2;
            text-transform: uppercase;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
        }

        .nav .wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        height: 100%;
        padding: 0 5rem;
        }

        .wrapper .logo a {
        font-size: 3rem;
        color: var(--white);
        }

        .wrapper .nav-list {
        display: flex;
        margin-bottom: 0;
        }

        .nav-list li i {
        color: #000;
        }

        .nav-list a {
        color: #000;
        font-size: 16px;
        padding: 0.9rem 1.5rem;
        border-radius: 0.5rem;
        transition: all 300ms ease;
        }

        .nav-list a:hover {
        color: var(--primary);
        }

        /* =========== Drop Down ============ */
        .nav-list .drop-menu1,
        .nav-list .drop-menu2 {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        width: 20rem;
        top: 8.5rem;
        line-height: 4.5rem;
        position: absolute;
        background-color: var(--black);
        opacity: 0;
        visibility: hidden;
        transition: all 300ms ease;
        }

        .nav-list .drop-menu1 li a,
        .nav-list .drop-menu2 li a {
        display: block;
        font-size: 1.5rem;
        width: 100%;
        padding: 0 0 0 1.5rem;
        border-radius: 0;
        color: var(--white);
        }

        .nav-list .drop-menu1 li a:hover {
        color: var(--primary);
        }

        .nav-list li:hover .drop-menu1,
        .nav-list li:hover .drop-menu2,
        .nav-list li:hover .mega-box {
        opacity: 1;
        visibility: visible;
        top: 4.5rem;
        }

        /* =========== Mega Menu ============ */
        .mega-box {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        position: absolute;
        left: 0;
        width: 100%;
        padding: 2rem 2.5rem;
        background-color: var(--white);
        opacity: 0;
        visibility: hidden;
        transition: all 300ms ease;
        }

        .mega-box .content {
        padding: 0 20px;
        display: flex;
        width: 100%;
        justify-content: space-between;
        }

        .mega-box .content .row {
        width: 25%;
        line-height: 1rem;
        }

        .mega-box .content .row img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        .mega-box .content .row header {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--white);
        }

        .mega-box .content .row a {
            padding: 0.9rem 0;
        }

        .mega-box .content .row a img {
            width: 15%;
        }

        .mega-box .content .row .mega-links {
            border-left: 1px solid rgba(0, 0, 0, 0.125);
            margin-left: 0rem;
            margin-top: 1.5rem;
        }

        .mega-box .content li {
        padding: 0 1rem;
        }

        .mega-box .content li a {
        padding: 0 2rem;
        display: block;
        font-size: 15px;
        color: var(--black);
        font-weight: 500;
        }

        .mega-box .content li a:hover {
        color: var(--primary);
        }

        .nav-list .mobile-item {
        display: none;
        }

        .nav-list input {
        display: none;
        }

        .wrapper .btn {
        color: var(--white);
        font-size: 3rem;
        cursor: pointer;
        display: none;
        }

        .nav-list .icons span {
        display: inline-block;
        margin: 0.5rem 1rem 0 0;
        position: relative;
        }

        .nav-list .icons span i {
        font-size: 2rem;
        }

        .nav-list .icons a {
        padding: 0;
        display: inline-block;
        }

        .nav-list .icons .count {
        justify-content: center;
        position: absolute;
        top: 0.8rem;
        right: -0.8rem;
        background-color: var(--white);
        height: 2rem;
        padding: 0.5rem;
        color: var(--black);
        font-weight: 700;
        border-radius: 50%;
        }

        /* =========== Media Query ============ */
        @media (max-width: 968px) {
            .wrapper .nav-list {
                position: fixed;
                top: 0;
                left: -100%;
                height: 100%;
                width: 100%;
                max-width: 35rem;
                background-color: var(--black);
                display: block;
                overflow-y: auto;
                line-height: 5rem;
                box-shadow: 0 1.5rem 1.5rem rgba(0, 0, 0, 0.1);
                transition: all 300ms linear;
            }

            .wrapper .nav-list.show {
                left: 0;
            }

            .nav-list li {
                margin: 1.5rem 1rem;
            }

            .nav-list a {
                display: block;
                font-size: 1.8rem;
                padding: 0 2rem;
            }

            .nav-list .drop-menu1,
            .nav-list .drop-menu2 {
                position: static;
                opacity: 1;
                visibility: visible;
                top: 6.5rem;
                padding-left: 2rem;
                width: 100%;
                max-height: 0;
                overflow: hidden;
                background-color: var(--white);
            }

            #showdrop1:checked ~ .drop-menu1,
            #showdrop2:checked ~ .drop-menu2,
            #showMega:checked ~ .mega-box {
                max-height: 100%;
            }

            .nav-list .drop-menu1 li,
            .nav-list .drop-menu2 li {
                margin: 0;
            }

            .nav-list .drop-menu1 li a,
            .nav-list .drop-menu2 li a {
                color: var(--black);
                font-size: 1.5rem;
            }

            .nav-list .desktop-item {
                display: none;
            }

            .nav-list .mobile-item {
                display: block;
                font-size: 1.8rem;
                padding-left: 2rem;
                color: var(--white);
                cursor: pointer;
                border-radius: 0.5rem;
            }

            .nav-list .mobile-item:hover {
                color: var(--primary);
            }

            .mega-box {
                position: static;
                top: 6.5rem;
                padding: 0 2rem;
                opacity: 1;
                visibility: visible;
                max-height: 0;
                overflow: hidden;
                background-color: var(--white);
                transition: all 300ms ease;
            }

            .mega-box .content li a {
                color: var(--black);
            }

            .mega-box .content {
                flex-direction: column;
                padding: 2rem 2rem 0 2rem;
            }

            .mega-box .content .row {
                width: 100%;
                border-top: 1px solid rgba(255, 255, 255, 0.09);
                margin-bottom: 1.5rem;
            }

            .content .row:nth-child(1),
            .content .row:nth-child(2) {
                border-top: 0;
            }

            .content .row .mega-links {
                border-left: 0;
                padding-left: 2rem;
            }

            .content .row .mega-links li {
                margin: 0;
            }

            .wrapper .btn {
                display: block;
                color: var(--white);
            }

            .nav-list .top {
                position: relative;
                display: block;
                background-color: var(--primary);
                width: 100%;
                height: 8rem;
            }

            .nav-list .close-btn {
                position: absolute;
                top: 1.5rem;
                right: 2.5rem;
                color: var(--white);
            }

            .nav-list .icons {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="nav">
      <div class="wrapper container-fluid">
        <div class="logo">
          <a href="{{ asset('') }}">
            <img src="{{ asset('theme') }}/assets/images/logos/logo-n.svg" class="logo-one" alt="Logo" style="width:275px;">
          </a>
        </div>

        <ul class="nav-list">
            <div class="top">
                <label for="" class="btn close-btn"><i class='bx bx-x' ></i></label>
            </div>

            <li><a href="{{ asset('') }}">Home</a></li>
            <li>
                <a href="{{ url('/services') }}" class="desktop-item">Services <span><i class='bx bx-chevron-down'></i></span></a>
                <input type="checkbox" id="showMega" />
                <label for="showMega" class="mobile-item">Services <span><i class='bx bx-chevron-down'></i></label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <a href="{{ url('/services/digital-transformation') }}"><img src="{{ asset('theme') }}/assets/images/icons/digitalization.gif" class="brand-logo-one icons-img" alt="digitalization"> Digital Transformation</a>
                            <ul class="mega-links">
                                <li><a href="{{ url('/services/data-science') }}"><i class="bx bx-chevron-right"></i> Data Science</a></li>
                                <li><a href="{{ url('/services/ar-vr') }}"><i class="bx bx-chevron-right"></i> AR/VR</a></li>
                                <li><a href="{{ url('/services/application-modernisation') }}"><i class="bx bx-chevron-right"></i> Application Modernization</a></li>
                                <li><a href="{{ url('/services/infrastructure-management') }}"><i class="bx bx-chevron-right"></i> Infrastructure Management</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <a href="{{ url('/services/digital-experience') }}"><img src="{{ asset('theme') }}/assets/images/icons/digital-exp.gif" class="brand-logo-one icons-img" alt="digitalization"> Digital Experience</a>
                            <ul class="mega-links">
                                <li><a href="{{ url('/services/digital-marketing-company') }}"><i class="bx bx-chevron-right"></i> Digital Marketing</a></li>
                                <li><a href="{{ url('/services/website-design-and-development') }}"><i class="bx bx-chevron-right"></i> Website Development</a></li>
                                <li><a href="{{ url('/services/mobile-app-development') }}"><i class="bx bx-chevron-right"></i> Mobile App Development</a></li>
                                <li><a href="{{ url('/services/creative-services') }}"><i class="bx bx-chevron-right"></i> Creative Services</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <a href="{{ url('/services/devops') }}"><img src="{{ asset('theme') }}/assets/images/icons/cloud.gif" class="brand-logo-one icons-img" alt="digitalization"> DevOps</a>
                            <ul class="mega-links">
                                <li><a href="{{ url('/services/ci-cd-pipelines') }}"><i class="bx bx-chevron-right"></i> CI/CD Pipelines</a></li>
                                <li><a href="{{ url('/services/process-automation') }}"><i class="bx bx-chevron-right"></i> Process Automation</a></li>
                                <li><a href="{{ url('/services/containers-and-microservices') }}"><i class="bx bx-chevron-right"></i> Containers & Microservices</a></li>
                                <li><a href="{{ url('/services/devsecops') }}"><i class="bx bx-chevron-right"></i> DevSecOps</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <a href="{{ url('services/resource-augmentation') }}"><img src="{{ asset('theme') }}/assets/images/icons/select.gif" class="brand-logo-one icons-img" alt="digitalization"> Resource Augmentation</a>
                            <ul class="mega-links">
                                <li><a href="{{ url('services/frontend-developers') }}"><i class="bx bx-chevron-right"></i> Frontend Developers</a></li>
                                <li><a href="{{ url('services/backend-developers') }}"><i class="bx bx-chevron-right"></i> Backend Developers</a></li>
                                <li><a href="{{ url('services/fullstack-developers') }}"><i class="bx bx-chevron-right"></i> Fullstack Developers</a></li>
                                <li><a href="{{ url('services/support-engineers') }}"><i class="bx bx-chevron-right"></i> Support Engineers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ url('/about-us') }}" class="desktop-item">About Us <span><i class='bx bx-chevron-down'></i></a>
                <input type="checkbox"  id="showdrop1">
                <label for="showdrop1" class="mobile-item">About Us <span><i class='bx bx-chevron-down'></i></label>
                <ul class="drop-menu1">
                    <li><a href="{{ url('/newsroom') }}">Newsroom</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="desktop-item">Resources <span><i class='bx bx-chevron-down'></i> </a>
                <input type="checkbox"  id="showdrop2">
                <label for="showdrop2" class="mobile-item">Resources <span><i class='bx bx-chevron-down'></i></label>
                <ul class="drop-menu2">
                    <li><a href="https://jfstechnologies.com/blog/">Blogs</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/success-stories') }}">Success Stories</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/life-at-jfs') }}">Life At JFS</a></li>
        </ul>
        <div class="nav-side d-display">
			<div class="nav-side-item">
				<div class="get-btn">
				    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50">Let’s Connect! <i class="bx bx-chevron-right"></i></a>
				</div>
			</div>
		</div>
        <label for="" class="btn open-btn"><i class='bx bx-menu' ></i></label>
      </div>
    </nav>
        
    {{-- main content --}}
    <div class="main-content">
        @yield('content')
    </div>
    {{-- end main content --}}

    @include('frontend.layouts.footer')  
	
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/66a25e5ebecc2fed692b09dd/1i3l418j6';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();

        /* =========== Toggle Menu ============ */
        const openNav = document.querySelector(".open-btn");
        const closeNav = document.querySelector(".close-btn");
        const menu = document.querySelector(".nav-list");

        openNav.addEventListener("click", () => {
            menu.classList.add("show");
        });

        closeNav.addEventListener("click", () => {
            menu.classList.remove("show");
        });
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>