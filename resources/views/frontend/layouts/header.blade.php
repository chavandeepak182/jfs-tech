<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="Keywords" content="@yield('keywords')">
	@yield('canonical')

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
	
	<!-- fancybox -->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
	<!-- magnific-popup -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
	
	@yield('schema')
</head>

<body>
	<nav class="nav shadow-lg">
		<div class="wrapper container-fluid">
			<div class="logo">
				<a href="{{ asset('') }}">
					<img src="{{ asset('theme') }}/assets/images/logos/logo-w.png" class="logo-one" alt="Logo">
				</a>
			</div>

			<ul class="nav-list">
				<div class="top">
					<label for="" class="btn close-btn"><i class='bx bx-x' ></i></label>
				</div>

				<li><a href="{{ asset('') }}">Home</a></li>
				<li>
					<a href="{{ url('/services') }}" class="desktop-item">Services <span><i class='bx bx-caret-down'></i></span></a>
					<input type="checkbox" id="showMega" />
					<label for="showMega" class="mobile-item"><a href="{{ url('/services') }}">Services</a> <span><i class='bx bx-caret-down'></i></span></label>
					<div class="mega-box">
						<div class="content">
							<div class="row">
								<a href="{{ url('/services/digital-transformation-services') }}"><img src="{{ asset('theme') }}/assets/images/icons/digitalization-y.gif" class="brand-logo-one" alt="digitalization"> Digital Transformation</a>
								<ul class="mega-links">
									<li><a href="{{ url('/services/data-science-services') }}"><i class="bx bx-chevron-right"></i> Data Science</a></li>
									<li><a href="{{ url('/services/ar-vr-services') }}"><i class="bx bx-chevron-right"></i> AR/VR</a></li>
									<li><a href="{{ url('/services/application-modernisation-services') }}"><i class="bx bx-chevron-right"></i> Application Modernization</a></li>
									<li><a href="{{ url('/services/infrastructure-management-services') }}"><i class="bx bx-chevron-right"></i> Infrastructure Management</a></li>
								</ul>
							</div>
							<div class="row">
								<a href="{{ url('/services/digital-experience') }}"><img src="{{ asset('theme') }}/assets/images/icons/digital-exp-y.gif" class="brand-logo-one" alt="digitalization"> Digital Experience</a>
								<ul class="mega-links">
									<li><a href="{{ url('/services/best-digital-marketing-agency') }}"><i class="bx bx-chevron-right"></i> Digital Marketing</a></li>
									<li><a href="{{ url('/services/website-development-company') }}"><i class="bx bx-chevron-right"></i> Website Development</a></li>
									<li><a href="{{ url('/services/mobile-app-development') }}"><i class="bx bx-chevron-right"></i> Mobile App Development</a></li>
									<li><a href="{{ url('/services/creative-service-agency') }}"><i class="bx bx-chevron-right"></i> Creative Services</a></li>
								</ul>
							</div>
							<div class="row">
								<a href="{{ url('/services/devops-software-development') }}"><img src="{{ asset('theme') }}/assets/images/icons/cloud-y.gif" class="brand-logo-one" alt="digitalization"> DevOps</a>
								<ul class="mega-links">
									<li><a href="{{ url('/services/ci-cd-pipeline-deployment') }}"><i class="bx bx-chevron-right"></i> CI/CD Pipelines</a></li>
									<li><a href="{{ url('/services/process-automation-services') }}"><i class="bx bx-chevron-right"></i> Process Automation</a></li>
									<li><a href="{{ url('/services/container-based-microservices') }}"><i class="bx bx-chevron-right"></i> Containers & Microservices</a></li>
									<li><a href="{{ url('/services/devsecops-software-development') }}"><i class="bx bx-chevron-right"></i> DevSecOps</a></li>
								</ul>
							</div>
							<div class="row">
								<a href="{{ url('services/resource-augmentation-services') }}"><img src="{{ asset('theme') }}/assets/images/icons/select-y.gif" class="brand-logo-one" alt="digitalization"> Resource Augmentation</a>
								<ul class="mega-links">
									<li><a href="{{ url('services/frontend-development-company') }}"><i class="bx bx-chevron-right"></i> Frontend Developers</a></li>
									<li><a href="{{ url('services/backend-development-services') }}"><i class="bx bx-chevron-right"></i> Backend Developers</a></li>
									<li><a href="{{ url('services/fullstack-development-services') }}"><i class="bx bx-chevron-right"></i> Fullstack Developers</a></li>
									<li><a href="{{ url('services/it-support-engineers') }}"><i class="bx bx-chevron-right"></i> Support Engineers</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/about-us') }}" class="desktop-item">About Us <span><i class='bx bx-caret-down'></i></span></a>
					<input type="checkbox"  id="showdrop1">
					<label for="showdrop1" class="mobile-item"><a href="{{ url('/about-us') }}">About Us </a> <span><i class='bx bx-caret-down'></i></span></label>
					<ul class="drop-menu1">
						<li><a href="{{ url('/about-us#team') }}">Our Team</a></li>
						<li><a href="{{ url('/life-at-jfs') }}">Life At JFS</a></li>
						<li><a href="{{ url('/newsroom') }}">Newsroom</a></li>
					</ul>
				</li>
				<li>
					<a class="desktop-item">Resources <span><i class='bx bx-caret-down'></i></span></a>
					<input type="checkbox"  id="showdrop2">
					<label for="showdrop2" class="mobile-item"><a>Resources</a> <span><i class='bx bx-caret-down'></i></span></label>
					<ul class="drop-menu2">
						<li><a href="https://jfstechnologies.com/blog/">Blogs</a></li>
						<li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
						<li><a href="{{ url('/success-stories') }}">Success Stories</a></li>
					</ul>
				</li>
				<li>
					<div class="nav-side mobile-item mt-5 w-75">
						<div class="nav-side-item">
							<div class="get-btn">
								<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Let’s Connect! <i class="bx bx-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</li>
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
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>