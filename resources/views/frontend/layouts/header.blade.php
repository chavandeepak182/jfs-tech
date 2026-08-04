<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ============================================
    RESOURCE HINTS
    ============================================ -->
    <link rel="preconnect" href="https://consent.cookiebot.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://consent.cookiebot.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    
    <!-- ============================================
    COOKIE CONSENT
    ============================================ -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="YOUR-COOKIEBOT-ID" type="text/javascript" async></script>
    
    <!-- ============================================
    META TAGS
    ============================================ -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    @yield('canonical')
    @yield('og_tags')

   <style>
    /* Critical styles for fast initial render */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    .nav {
        display: flex;
        align-items: center;
        padding: 0 20px;
        background: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        position: relative;
        z-index: 1000;
    }
    .nav .wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }
    .logo img {
        max-height: 50px;
        width: auto;
    }
    
    /* ⬇️ IMPROVED BANNER STYLES ⬇️ */
    .banner-area {
        min-height: 400px;
        display: flex;
        align-items: center;
        background: #0a2155;
        color: #fff;
        position: relative;
        z-index: 1;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('{{ asset('theme') }}/assets/images/hero.webp');
    }
    
    .banner-area::before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: #0a2155;
        opacity: 0.3;
    }
    
    .banner-item-content {
        position: relative;
        z-index: 2;
        padding-top: 125px;
        padding-bottom: 125px;
    }
    
    .banner-item-content h1 {
        margin-top: 0;
        font-size: 50px;
        color: #fff;
        font-weight: 700;
        max-width: 780px;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        line-height: 1.2;
    }
    
    .banner-item-content p {
        font-size: 18px;
        color: #fff;
        font-weight: 400;
        max-width: 660px;
        margin-bottom: 35px;
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
    }
    
    .banner-item-content p a {
        color: #FFF;
        text-decoration: underline;
    }
    
    .banner-btn a {
        display: inline-block;
        padding: 12px 30px;
        background: #ffc221;
        color: #0a2155;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif;
    }
    
    .banner-btn a:hover {
        background: #e6a800;
        transform: scale(1.05);
    }
    
    /* Mobile responsive */
    @media (max-width: 768px) {
        .banner-item-content {
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .banner-item-content h1 {
            font-size: 28px;
        }
        .banner-item-content p {
            font-size: 14px;
        }
        .banner-area {
            background-image: url('{{ asset('theme') }}/assets/images/hero-mobile.webp');
            min-height: 350px;
        }
    }
    
    @media (max-width: 576px) {
        .banner-item-content {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .banner-item-content h1 {
            font-size: 24px;
        }
        .banner-btn a {
            padding: 10px 20px;
            font-size: 14px;
        }
        .banner-area {
            min-height: 300px;
        }
    }
    
    @media (max-width: 1024px) and (min-width: 769px) {
        .banner-area {
            background-image: url('{{ asset('theme') }}/assets/images/hero-tablet.webp');
        }
    }
    /* ⬆️ END BANNER STYLES ⬆️ */
    
    /* ===== FIX: Prevent FOUC for carousels ===== */
    .brand-slider,
    .case-study-slider,
    .clients-slider {
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .brand-slider.owl-loaded,
    .case-study-slider.owl-loaded,
    .clients-slider.owl-loaded {
        visibility: visible;
        opacity: 1;
    }
    /* Ensure carousel items don't stack */
    .owl-carousel .owl-stage-outer {
        overflow: hidden;
    }
    .owl-carousel .owl-item {
        float: left;
    }
</style>

    <!-- ============================================
    PRELOAD CRITICAL CSS
    ============================================ -->
    <link rel="preload" href="{{ asset('theme') }}/assets/css/bootstrap.min.css" as="style">
    <link rel="preload" href="{{ asset('theme') }}/assets/css/style.css" as="style">
    <link rel="preload" href="{{ asset('theme') }}/assets/css/boxicons.min.css" as="style">
    <link rel="preload" as="image" href="{{ asset('theme') }}/assets/images/hero.webp" fetchpriority="high">
    <link rel="preload" as="font" href="{{ asset('theme') }}/assets/fonts/boxicons.woff2" type="font/woff2" crossorigin="anonymous">

    <!-- ============================================
    CRITICAL CSS (Loaded normally)
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/boxicons.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/boxicons.min.css">
    </noscript>
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/fonts/flaticon.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/style.css">

    <!-- ============================================
    DEFERRED CSS (Load after page)
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/animate.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.theme.default.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/magnific-popup.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/nice-select.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/meanmenu.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/responsive.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/theme-dark.css" media="print" onload="this.media='all'">

   <!-- ============================================
    EXTERNAL FONTS & LIBRARIES (Optimized with font-display)
    ============================================ -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    </noscript>

    <style>
        /* Force font-display: swap for all fonts */
        @font-face {
            font-family: 'Poppins';
            font-display: swap;
        }
        /* Fallback font while Poppins loads */
        body {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
        }
        /* Apply to all elements */
        * {
            font-display: swap;
        }
    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" media="print" onload="this.media='all'">

    <!-- ============================================
    FAVICON
    ============================================ -->
    <link rel="icon" type="image/png" href="{{ asset('theme') }}/assets/images/favicon.png">

    <!-- ============================================
    GOOGLE TAG MANAGER
    ============================================ -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TBK8PBWM');
    </script>

    @yield('schema')
</head>
<body>

    <!-- ============================================
    GTM NOSCRIPT
    ============================================ -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBK8PBWM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <!-- ============================================
    NAVIGATION
    ============================================ -->
    <nav class="nav shadow-lg">
        <div class="wrapper container-fluid">
            <div class="logo">
                <a href="{{ asset('') }}">
                    <img src="{{ asset('theme') }}/assets/images/logos/logo-w.png" 
                         class="logo-one" 
                         alt="Logo"
                         width="150"
                         height="50"
                         loading="lazy">
                </a>
            </div>

            <ul class="nav-list">
                <div class="top">
                    <label for="" class="btn close-btn"><i class='bx bx-x'></i></label>
                </div>

                <li><a href="{{ asset('') }}">Home</a></li>
                <li>
                    <a href="{{ url('/services') }}" class="desktop-item">Services <span><i class='bx bx-caret-down'></i></span></a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item"><a href="{{ url('/services') }}">Services</a> <span><i class='bx bx-caret-down'></i></span></label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <a href="{{ url('/services/digital-transformation-services') }}">
                                    <img src="{{ asset('theme') }}/assets/images/icons/digitalization-y.gif" 
                                         class="brand-logo-one" 
                                         alt="digitalization"
                                         loading="lazy"
                                         width="30"
                                         height="30"> 
                                    Digital Transformation
                                </a>
                                <ul class="mega-links">
                                    <li><a href="{{ url('/services/data-science-services') }}"><i class="bx bx-chevron-right"></i> Data Science</a></li>
                                    <li><a href="{{ url('/services/ar-vr-services') }}"><i class="bx bx-chevron-right"></i> AR/VR</a></li>
                                    <li><a href="{{ url('/services/application-modernisation-services') }}"><i class="bx bx-chevron-right"></i> Application Modernization</a></li>
                                    <li><a href="{{ url('/services/infrastructure-management-services') }}"><i class="bx bx-chevron-right"></i> Infrastructure Management</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <a href="{{ url('/services/digital-experience') }}">
                                    <img src="{{ asset('theme') }}/assets/images/icons/digital-exp-y.gif" 
                                         class="brand-logo-one" 
                                         alt="digitalization"
                                         loading="lazy"
                                         width="30"
                                         height="30"> 
                                    Digital Experience
                                </a>
                                <ul class="mega-links">
                                    <li><a href="{{ url('/services/best-digital-marketing-agency') }}"><i class="bx bx-chevron-right"></i> Digital Marketing</a></li>
                                    <li><a href="{{ url('/services/website-development-company') }}"><i class="bx bx-chevron-right"></i> Website Development</a></li>
                                    <li><a href="{{ url('/services/mobile-app-development') }}"><i class="bx bx-chevron-right"></i> Mobile App Development</a></li>
                                    <li><a href="{{ url('/services/creative-service-agency') }}"><i class="bx bx-chevron-right"></i> Creative Services</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <a href="{{ url('/services/devops-software-development') }}">
                                    <img src="{{ asset('theme') }}/assets/images/icons/cloud-y.gif" 
                                         class="brand-logo-one" 
                                         alt="digitalization"
                                         loading="lazy"
                                         width="30"
                                         height="30"> 
                                    DevOps
                                </a>
                                <ul class="mega-links">
                                    <li><a href="{{ url('/services/ci-cd-pipeline-deployment') }}"><i class="bx bx-chevron-right"></i> CI/CD Pipelines</a></li>
                                    <li><a href="{{ url('/services/process-automation-services') }}"><i class="bx bx-chevron-right"></i> Process Automation</a></li>
                                    <li><a href="{{ url('/services/container-based-microservices') }}"><i class="bx bx-chevron-right"></i> Containers & Microservices</a></li>
                                    <li><a href="{{ url('/services/devsecops-software-development') }}"><i class="bx bx-chevron-right"></i> DevSecOps</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <a href="{{ url('services/resource-augmentation-services') }}">
                                    <img src="{{ asset('theme') }}/assets/images/icons/select-y.gif" 
                                         class="brand-logo-one" 
                                         alt="digitalization"
                                         loading="lazy"
                                         width="30"
                                         height="30"> 
                                    Resource Augmentation
                                </a>
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
                    <input type="checkbox" id="showdrop1">
                    <label for="showdrop1" class="mobile-item"><a href="{{ url('/about-us') }}">About Us </a> <span><i class='bx bx-caret-down'></i></span></label>
                    <ul class="drop-menu1">
                        <li><a href="{{ url('/about-us#team') }}">Our Team</a></li>
                        <li><a href="{{ url('/life-at-jfs') }}">Life At JFS</a></li>
                        <li><a href="{{ url('/careers') }}">Careers</a></li>
                        <li><a href="{{ url('/newsroom') }}">Newsroom</a></li>
                    </ul>
                </li>
                
                <li>
                    <a class="desktop-item">Resources <span><i class='bx bx-caret-down'></i></span></a>
                    <input type="checkbox" id="showdrop2">
                    <label for="showdrop2" class="mobile-item"><a>Resources</a> <span><i class='bx bx-caret-down'></i></span></label>
                    <ul class="drop-menu2">
                        <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ url('/success-stories') }}">Success Stories</a></li>
                    </ul>
                </li>
                <li>
                    <div class="nav-side mobile-item mt-5 w-75">
                        <div class="nav-side-item">
                            <div class="get-btn">
                                <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Let's Talk! <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="nav-side d-display">
                <div class="nav-side-item">
                    <div class="get-btn">
                        <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50">Let's Talk! <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <label for="" class="btn open-btn"><i class='bx bx-menu'></i></label>
        </div>
    </nav>

    <!-- ============================================
    MAIN CONTENT
    ============================================ -->    
    <div class="main-content">
        @yield('content')
    </div>

    <!-- ============================================
    FOOTER
    ============================================ -->
    @include('frontend.layouts.footer')

    <!-- ============================================
    SCRIPTS - LOADED IN CORRECT ORDER
    ============================================ -->

    <!-- 1. jQuery (Required for Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 2. Bootstrap Bundle -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- 3. Owl Carousel -->
    <script defer src="{{ asset('theme') }}/assets/js/owl.carousel.min.js"></script>

    <!-- 4. AOS -->
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- 5. Main JS -->
    <script defer src="{{ asset('theme') }}/assets/js/main.js"></script>

    <!-- ============================================
    INITIALIZE ALL PLUGINS
    ============================================ -->
    <script>
        // Wait for jQuery to be ready
        document.addEventListener("DOMContentLoaded", function() {
            
            // ============================================
            // 1. INITIALIZE AOS
            // ============================================
            function initAOS() {
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        duration: 750,
                        easing: 'ease-out-cubic',
                        once: true,
                        offset: 120
                    });
                } else {
                    setTimeout(initAOS, 200);
                }
            }
            initAOS();

            // ============================================
            // 2. INITIALIZE OWL CAROUSEL
            // ============================================
            function initCarousels() {
                // Check if jQuery and OwlCarousel are loaded
                if (typeof $ === 'undefined') {
                    setTimeout(initCarousels, 200);
                    return;
                }
                
                if (typeof $.fn.owlCarousel === 'undefined') {
                    setTimeout(initCarousels, 200);
                    return;
                }

                // Brand Slider
                if ($('.brand-slider').length) {
                    $('.brand-slider').owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: false,
                        autoplay: true,
                        autoplayHoverPause: true,
                        autoplayTimeout: 3000,
                        responsive: {
                            0: { items: 2 },
                            576: { items: 3 },
                            768: { items: 4 },
                            992: { items: 5 },
                            1200: { items: 6 }
                        }
                    });
                }

                // Case Study Slider
                if ($('.case-study-slider').length) {
                    $('.case-study-slider').owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayHoverPause: true,
                        autoplayTimeout: 4000,
                        navText: [
                            '<i class="bx bx-chevron-left"></i>',
                            '<i class="bx bx-chevron-right"></i>'
                        ],
                        responsive: {
                            0: { items: 1 },
                            768: { items: 2 },
                            992: { items: 3 },
                            1200: { items: 4 }
                        }
                    });
                }

                // Clients Slider
                if ($('.clients-slider').length) {
                    $('.clients-slider').owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayHoverPause: true,
                        autoplayTimeout: 5000,
                        responsive: {
                            0: { items: 1 },
                            768: { items: 2 },
                            992: { items: 3 }
                        }
                    });
                }
            }

            // Start carousel initialization after a small delay
            setTimeout(initCarousels, 300);

            // ============================================
            // 3. TAWK.TO (Deferred with delay)
            // ============================================
            window.addEventListener('load', function() {
                setTimeout(function() {
                    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
                    var s1 = document.createElement("script");
                    var s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk.to/66a25e5ebecc2fed692b09dd/1i3l418j6';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                }, 3000);
            });

        });
    </script>

</body>
</html>