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

	<link rel="icon" type="image/png" href="{{ asset('theme') }}/assets/images/favicon.png">
</head>

<body>
	<div class="preloader">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="spinner"></div>
			</div>
		</div>
	</div>


	<!-- <header class="top-header top-header-bg">
		<div class="container-fluid">
			<div class="container-max">
				<div class="row align-items-center">
					<div class="col-lg-7 col-md-6">
						<div class="top-head-left">
							<div class="top-contact">
								<h3>Support By : <a href="tel:918421216367">+91 84212 16367</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="top-header-right">
							<div class="top-header-social">
								<ul>
									<li>
										<a href="https://www.facebook.com/profile.php?id=61563351610594" target="_blank">
										<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
									<a href="https://x.com/JfsTechnologies" target="_blank">
									<i class="bx bxl-twitter"></i>
									</a>
									</li>
									<li>
									<a href="https://www.linkedin.com/company/jfs-technologies-pvt-ltd" target="_blank">
									<i class="bx bxl-linkedin-square"></i>
									</a>
									</li>
									<li>
									<a href="https://www.instagram.com/jfs_technologies_services/" target="_blank">
									<i class="bx bxl-instagram"></i>
									</a>
									</li>
								</ul>
							</div>
						<div class="language-list">
						<select class="language-list-item">
						<option>English</option>
						<option>العربيّة</option>
						<option>Deutsch</option>
						<option>Português</option>
						<option>简体中文</option>
						</select>
						</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->


	<div class="navbar-area">
		<div class="mobile-nav">
			<a href="{{ asset('') }}" class="logo">
				<img src="{{ asset('theme') }}/assets/images/logos/jfs-logo-1.png" class="logo-one" alt="Logo">
				<!--<img src="{{ asset('theme') }}/assets/images/logos/logo-2.png" class="logo-two" alt="Logo">-->
			</a>
		</div>

		<div class="main-nav">
			<div class="container-fluid">
				<div class="container-max">
					<nav class="navbar navbar-expand-md navbar-light ">
						<a class="navbar-brand" href="{{ asset('') }}">
							<img src="{{ asset('theme') }}/assets/images/logos/jfs-logo-1.png" class="logo-one" alt="Logo" width="165px">
							<!-- <img src="{{ asset('theme') }}/assets/images/logos/logo-2.png" class="logo-two" alt="Logo"> -->
						</a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="{{ asset('') }}" class="nav-link active">Home</a>
								</li>
								<li class="nav-item">
									<a href="/services" class="nav-link">Services <i class="bx bx-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="/website-design-and-development" class="nav-link">Website Design & Development</a>
										</li>
										<li class="nav-item">
											<a href="/digital-marketing-company" class="nav-link">Digital Marketing <i class="bx bx-caret-down" style="transform: rotate(-90deg);"></i></a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="/best-seo-service-agency" class="nav-link">SEO Services</a>
												</li>
												<li class="nav-item">
													<a href="/social-media-advertising" class="nav-link">SMO Services</a>
												</li>
												<li class="nav-item">
													<a href="/ppc-management-company" class="nav-link">PPC Services</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="/mobile-app-development" class="nav-link">Mobile Application Development</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Application maintenance & Support</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Hire Dedicated Developers</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="/about-us" class="nav-link">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link">Resources <i class="bx bx-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="https://jfstechnologies.com/blog/"" class="nav-link">Blogs</a>
										</li>
										<li class="nav-item">
											<a href="/success-stories" class="nav-link">Success Stories</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Portfolio</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Careers</a>
								</li>
							</ul>
							<div class="nav-side d-display nav-side-mt">
								<!-- <div class="nav-side-item">
									<div class="search-side-widget">
										<form class="search-side-form">
											<input type="search" class="form-control" placeholder="Search...">
											<button type="submit"><i class="bx bx-search"></i></button>
										</form>
									</div>
								</div> -->
								<div class="nav-side-item">
									<div class="get-btn">
										<a href="/contact-us" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class="bx bx-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="search-overlay">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="search-layer"></div>
				<div class="search-layer"></div>
				<div class="search-layer"></div>
				<div class="search-close">
					<span class="search-close-line"></span>
					<span class="search-close-line"></span>
				</div>
				<div class="search-form">
					<form>
						<input type="text" class="input-search" placeholder="Search here...">
						<button type="submit"><i class="bx bx-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
        
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





<!-- Second Phase Navbar -->
<div class="navbar-area">
		<div class="mobile-nav">
			<a href="{{ asset('') }}" class="logo">
				<img src="{{ asset('theme') }}/assets/images/logos/logo-n.svg" class="logo-one" alt="Logo">
			</a>
		</div>

		<div class="main-nav">
			<div class="container-fluid">
				<div class="container-max">
					<nav class="navbar navbar-expand-md navbar-light ">
						<a class="navbar-brand" href="{{ asset('') }}">
							<img src="{{ asset('theme') }}/assets/images/logos/logo-n.svg" class="logo-one" alt="Logo" style="width: 250px;">
						</a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="{{ url('/') }}" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
								</li>
								<li class="nav-item">
									<a href="{{ url('/services') }}" class="nav-link {{ Route::currentRouteName() === 'services' ? 'active' : '' }}">Services <i class="bx bx-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="{{ url('/services/digital-transformation') }}" class="nav-link {{ Route::currentRouteName() === 'services.digital-transformation' ? 'active' : '' }}">Digital Transformation <i class="bx bx-caret-down" style="transform: rotate(-90deg);"></i></a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('/services/data-science') }}" class="nav-link">Data Science</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/ar-vr') }}" class="nav-link">AR/VR</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/infrastructure-management') }}" class="nav-link">Infrastructure Management</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/application-modernisation') }}" class="nav-link">Application Modernization</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{ url('/services/digital-experience') }}" class="nav-link {{ Route::currentRouteName() === 'services.digital-experience' ? 'active' : '' }}">Digital Experience <i class="bx bx-caret-down" style="transform: rotate(-90deg);"></i></a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('/services/best-digital-marketing-agency') }}" class="nav-link {{ Route::currentRouteName() === 'services.digital-marketing-company' ? 'active' : '' }}">Digital Marketing</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/website-development-company') }}" class="nav-link {{ Route::currentRouteName() === 'services.website-design-and-development' ? 'active' : '' }}">Website Development</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/mobile-app-development') }}" class="nav-link {{ Route::currentRouteName() === 'services.mobile-app-development' ? 'active' : '' }}">Mobile App Development</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/creative-service-agency') }}" class="nav-link">Creative Services</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{ url('/services/devops-software-development') }}" class="nav-link {{ Route::currentRouteName() === 'services.devops' ? 'active' : '' }}">DevOps <i class="bx bx-caret-down" style="transform: rotate(-90deg);"></i></a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('/services/ci-cd-pipeline-deployment') }}" class="nav-link">CI/CD Pipelines</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/process-automation-services') }}" class="nav-link">Process Automation</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/container-based-microservices') }}" class="nav-link">Containers & Microservices</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('/services/devsecops-software-development') }}" class="nav-link">DevSecOps</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{ url('services/resource-augmentation') }}" class="nav-link {{ Route::currentRouteName() === 'services.resource-augmentation' ? 'active' : '' }}">Resource Augmentation <i class="bx bx-caret-down" style="transform: rotate(-90deg);"></i></a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('services/frontend-developers') }}" class="nav-link">Frontend Developers</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('services/backend-developers') }}" class="nav-link">Backend Developers</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('services/fullstack-developers') }}" class="nav-link">Fullstack Developers</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('services/support-engineers') }}" class="nav-link">Support Engineers</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="{{ url('/about-us') }}" class="nav-link {{ Route::currentRouteName() === 'about-us' ? 'active' : '' }}">About Us <i class="bx bx-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="{{ url('/newsroom') }}" class="nav-link {{ Route::currentRouteName() === 'newsroom' ? 'active' : '' }}">Newsroom</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link">Resources <i class="bx bx-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="https://jfstechnologies.com/blog/" class="nav-link {{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blogs</a>
										</li>
										<li class="nav-item">
											<a href="{{ url('/portfolio') }}" class="nav-link {{ Route::currentRouteName() === 'portfolio' ? 'active' : '' }}">Portfolio</a>
										</li>
										<li class="nav-item">
											<a href="{{ url('/success-stories') }}" class="nav-link {{ Route::currentRouteName() === 'success-stories' ? 'active' : '' }}">Success Stories</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="{{ url('/life-at-jfs') }}" class="nav-link {{ Route::currentRouteName() === 'Life At JFS' ? 'active' : '' }}">Life At JFS</a>
								</li>
							</ul>
							<div class="nav-side d-display">
								<div class="nav-side-item">
									<div class="get-btn">
										<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50">Let’s Connect! <i class="bx bx-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>