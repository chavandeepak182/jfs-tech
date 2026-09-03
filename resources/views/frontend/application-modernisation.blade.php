@extends('frontend.layouts.header')
@section('title', "Legacy Application Modernization Services | JFS Technologies")
@section('description', "Modernize legacy applications with cloud migration, API integration, software modernization, and scalable solutions from JFS Technologies")
@section('keywords', "Application Modernization Services,Application Modernization Services, Legacy Application Modernization, Application Modernization Consulting, Software Modernization Services, Legacy System Modernization, Cloud Migration Services, API Integration Services, Enterprise Application Modernization, Cloud-Native Applications, JFS Technologies")
@section('canonical')
<link rel="alternate" href="https://jfstechnologies.com/services/application-modernisation-services" hreflang="en-in" />
<link rel="canonical" href="https://jfstechnologies.com/services/application-modernisation-services" />
<meta name="robots" content="index, follow">
<meta property="og:type" content="business.business">
<meta property="og:title" content="Best Application Modernisation Services">
<meta property="og:url" content="https://jfstechnologies.com/services/application-modernisation-services">
<meta property="og:image" content="https://jfstechnologies.com/theme/assets/images/backend-dev.mp4">
<meta property="og:description" content="Best Application Modernisation Services">
<meta property="business:contact_data:street_address" content="416, Platinum Square, Sakore Nagar, Viman Nagar">
<meta property="business:contact_data:locality" content="Pune">
<meta property="business:contact_data:region" content="Maharashtra">
<meta property="business:contact_data:postal_code" content="411014">
<meta property="business:contact_data:country_name" content="India">
@endsection
@section('Schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "JFS Technologies",
    "item": "https://jfstechnologies.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://jfstechnologies.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Digital Transformation Services",
    "item": "https://jfstechnologies.com/services/digital-transformation-services"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Application Modernisation Services",
    "item": "https://jfstechnologies.com/services/application-modernisation-services"  
  }]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Application Modernisation Services, and why is it important?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Application modernisation consulting involves upgrading legacy systems to modern technologies, improving performance, scalability, and security. It helps businesses stay competitive, reduce maintenance costs, and enhance user experience."
    }
  },{
    "@type": "Question",
    "name": "What are API Integration Services, and how do they benefit my business?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "API integration services connect different software applications, enabling seamless data exchange and automation. This enhances operational efficiency, reduces manual efforts, and ensures real-time data synchronization across platforms."
    }
  },{
    "@type": "Question",
    "name": "What are the key benefits of API integration Services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Improved Efficiency – Automates workflows and reduces manual data entry. Seamless Connectivity – Integrates multiple software systems effortlessly. Scalability – Adapts to growing business needs with ease. Enhanced User Experience – Ensures smooth interactions between applications."
    }
  },{
    "@type": "Question",
"name": "How do I choose the best Application Modernisation Services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Look for a provider with expertise in cloud migration, microservices, DevOps, and AI-driven solutions. JFS Technologies offers tailored modernisation strategies to enhance performance, security, and cost efficiency."
    }
  },{
    "@type": "Question",
    "name": "How can JFS Technologies help with API integration and application modernisation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "JFS Technologies provides end-to-end API integration and application modernisation consulting, helping businesses enhance system compatibility, streamline operations, and achieve digital transformation."
    }
  }]
}
</script>
@endsection

@section('content')
<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <!-- <h1>Solutions for the Best Application Modernisation Services</h1> -->
             <h1>AI-Powered Application Modernization Services</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<!-- <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Start Your Modernisation Journey Today <i class="bx bx-chevron-right"></i></a> -->
                <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Start Your Modernisation Journey Today <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="https://jfstechnologies.com/theme/assets/images/backend-dev.mp4" type="video/mp4">
        <source src="https://jfstechnologies.com/theme/assets/images/services.mp4" type="video/webm">
        Sorry, your browser does not support HTML5 video.
    </video>
</div>
<style>
/* =========================================================
   APPLICATION MODERNIZATION SECTION
========================================================= */

.modernization-section {
    position: relative;
    width: 100%;
    padding: 90px 20px;
    overflow: hidden;

    background:
        radial-gradient(
            circle at 0% 15%,
            rgba(24, 151, 221, 0.10),
            transparent 30%
        ),
        radial-gradient(
            circle at 100% 85%,
            rgba(82, 190, 245, 0.10),
            transparent 32%
        ),
        linear-gradient(
            180deg,
            #f8fcff 0%,
            #eef8ff 100%
        );
}

.modernization-container {
    max-width: 1180px;
    margin: 0 auto;
}


/* =========================================================
   MAIN CONTENT
========================================================= */

.modernization-main {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 55px;
    align-items: center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

.modernization-content {
    position: relative;
}

.modernization-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 18px;

    color: #1486d0;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 2px;
    text-transform: uppercase;
}

.modernization-eyebrow::before {
    content: "";

    width: 30px;
    height: 2px;

    background: #168bd4;

    border-radius: 10px;
}


.modernization-title {
    margin: 0 0 22px;

    color: #102f47;

    font-size: 44px;
    font-weight: 750;

    line-height: 1.16;

    letter-spacing: -0.7px;
}

.modernization-title .blue-text {
    color: #168bd4;
}


.modernization-description {
    max-width: 650px;

    margin: 0 0 28px;

    color: #667d8e;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   SERVICE FEATURES
========================================================= */

.modernization-features {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 10px;

    max-width: 620px;
}

.modernization-feature {
    display: flex;
    align-items: center;

    gap: 10px;

    padding: 11px 13px;

    background: rgba(255, 255, 255, 0.85);

    border: 1px solid #d8ebf7;

    border-radius: 8px;

    color: #38586d;

    font-size: 12px;
    font-weight: 600;

    transition: all 0.25s ease;
}

.modernization-feature:hover {
    transform: translateY(-2px);

    border-color: #9ed3f0;

    color: #168bd4;

    box-shadow:
        0 8px 20px rgba(20, 120, 180, 0.08);
}

.modernization-feature-icon {
    width: 30px;
    height: 30px;

    min-width: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 7px;

    background: #e8f6ff;

    border: 1px solid #d1ebfa;

    color: #168bd4;

    font-size: 13px;
}


/* =========================================================
   RIGHT MODERNIZATION VISUAL
========================================================= */

.modernization-visual {
    position: relative;

    padding: 28px;

    background:
        linear-gradient(
            145deg,
            #ffffff 0%,
            #f4fbff 100%
        );

    border: 1px solid #d5eaf7;

    border-radius: 20px;

    box-shadow:
        0 20px 55px rgba(22, 136, 212, 0.10);

    overflow: hidden;
}

.modernization-visual::before {
    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    top: -100px;
    right: -70px;

    border-radius: 50%;

    background: rgba(22, 136, 212, 0.08);
}

.modernization-visual::after {
    content: "";

    position: absolute;

    width: 130px;
    height: 130px;

    bottom: -75px;
    left: -60px;

    border-radius: 50%;

    background: rgba(83, 190, 245, 0.08);
}


/* =========================================================
   VISUAL HEADER
========================================================= */

.modernization-visual-header {
    position: relative;
    z-index: 2;

    margin-bottom: 25px;
}

.modernization-visual-header small {
    display: block;

    margin-bottom: 6px;

    color: #168bd4;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 1.5px;

    text-transform: uppercase;
}

.modernization-visual-header h3 {
    margin: 0;

    color: #12304a;

    font-size: 21px;

    font-weight: 700;
}


/* =========================================================
   MODERNIZATION FLOW
========================================================= */

.modernization-flow {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns: 1fr auto 1fr auto 1fr;

    align-items: center;

    gap: 9px;
}


.modernization-flow-card {
    min-height: 145px;

    padding: 17px 10px;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    text-align: center;

    background: #ffffff;

    border: 1px solid #d8ebf7;

    border-radius: 11px;

    transition: all 0.25s ease;
}

.modernization-flow-card:hover {
    transform: translateY(-4px);

    border-color: #9bd2f1;

    box-shadow:
        0 10px 25px rgba(22, 136, 212, 0.09);
}


.modernization-flow-icon {
    width: 50px;
    height: 50px;

    margin-bottom: 12px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background: #eaf7ff;

    border: 1px solid #d1ecfb;

    color: #168bd4;

    font-size: 21px;
}

.modernization-flow-card h4 {
    margin: 0 0 5px;

    color: #244b63;

    font-size: 13px;

    font-weight: 700;
}

.modernization-flow-card p {
    margin: 0;

    color: #8195a3;

    font-size: 10px;

    line-height: 1.5;
}


.modernization-arrow {
    color: #168bd4;

    font-size: 23px;

    font-weight: 700;
}


/* =========================================================
   VISUAL FOOTER
========================================================= */

.modernization-visual-footer {
    position: relative;
    z-index: 2;

    display: flex;

    align-items: center;

    gap: 9px;

    margin-top: 18px;

    padding: 12px 14px;

    background: #eef9ff;

    border: 1px solid #d2ebf9;

    border-radius: 8px;

    color: #527489;

    font-size: 11px;

    line-height: 1.5;
}

.modernization-visual-footer-icon {
    width: 27px;
    height: 27px;

    min-width: 27px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #ffffff;

    color: #168bd4;

    font-size: 12px;
}


/* =========================================================
   TRUSTED BY
========================================================= */

.trusted-by-section {
    margin-top: 80px;

    padding-top: 45px;

    border-top: 1px solid #d8eaf5;
}

.trusted-by-header {
    text-align: center;

    margin-bottom: 30px;
}

.trusted-by-label {
    display: inline-block;

    margin-bottom: 8px;

    color: #168bd4;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 2px;

    text-transform: uppercase;
}

.trusted-by-header h3 {
    margin: 0 0 8px;

    color: #12304a;

    font-size: 28px;

    font-weight: 700;
}

.trusted-by-header p {
    margin: 0;

    color: #78909f;

    font-size: 13px;
}


/* =========================================================
   TECHNOLOGY LOGOS
========================================================= */

.technology-grid {
    display: grid;

    grid-template-columns: repeat(5, 1fr);

    gap: 12px;
}

.technology-card {
    min-height: 82px;

    padding: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    background: rgba(255, 255, 255, 0.90);

    border: 1px solid #d7eaf6;

    border-radius: 10px;

    box-shadow:
        0 4px 14px rgba(20, 100, 150, 0.035);

    transition:
        transform 0.25s ease,
        border-color 0.25s ease,
        box-shadow 0.25s ease;
}

.technology-card:hover {
    transform: translateY(-4px);

    border-color: #96d0ef;

    box-shadow:
        0 10px 25px rgba(22, 136, 212, 0.09);
}


/* =========================================================
   LOGO MARKS
========================================================= */

.technology-logo {
    width: 36px;
    height: 36px;

    min-width: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 9px;

    background: #edf8ff;

    border: 1px solid #d2ebfa;

    color: #168bd4;

    font-size: 12px;

    font-weight: 800;
}

.technology-name {
    color: #3c5b6e;

    font-size: 12px;

    font-weight: 700;

    line-height: 1.3;
}

.technology-card:hover .technology-name {
    color: #168bd4;
}


/* =========================================================
   RESPONSIVE - TABLET
========================================================= */

@media (max-width: 1000px) {

    .modernization-main {
        gap: 30px;
    }

    .modernization-title {
        font-size: 37px;
    }

    .modernization-description {
        font-size: 15px;
    }

    .technology-grid {
        grid-template-columns: repeat(5, 1fr);
    }

    .technology-card {
        flex-direction: column;
        gap: 7px;
    }
}


/* =========================================================
   RESPONSIVE - 800px
========================================================= */

@media (max-width: 800px) {

    .modernization-section {
        padding: 70px 20px;
    }

    .modernization-main {
        grid-template-columns: 1fr;

        gap: 35px;
    }

    .modernization-title {
        font-size: 38px;
    }

    .modernization-description {
        max-width: 100%;
    }

    .technology-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .technology-card {
        flex-direction: row;
    }
}


/* =========================================================
   RESPONSIVE - MOBILE
========================================================= */

@media (max-width: 600px) {

    .modernization-section {
        padding: 55px 15px;
    }

    .modernization-eyebrow {
        font-size: 10px;
        letter-spacing: 1.5px;
    }

    .modernization-title {
        font-size: 29px;

        line-height: 1.25;
    }

    .modernization-description {
        font-size: 14px;

        line-height: 1.7;
    }

    .modernization-features {
        grid-template-columns: 1fr;
    }

    .modernization-feature {
        font-size: 12px;
    }

    .modernization-visual {
        padding: 18px;
    }

    .modernization-visual-header h3 {
        font-size: 18px;
    }

    .modernization-flow {
        grid-template-columns: 1fr;

        gap: 8px;
    }

    .modernization-flow-card {
        min-height: 105px;
    }

    .modernization-arrow {
        transform: rotate(90deg);
    }

    .trusted-by-section {
        margin-top: 55px;

        padding-top: 35px;
    }

    .trusted-by-header h3 {
        font-size: 23px;
    }

    .trusted-by-header p {
        font-size: 12px;
    }

    .technology-grid {
        grid-template-columns: repeat(2, 1fr);

        gap: 8px;
    }

    .technology-card {
        min-height: 72px;

        padding: 9px;
    }

    .technology-logo {
        width: 32px;
        height: 32px;

        min-width: 32px;

        font-size: 10px;
    }

    .technology-name {
        font-size: 10px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 380px) {

    .modernization-title {
        font-size: 26px;
    }

    .modernization-description {
        font-size: 13px;
    }

    .technology-name {
        font-size: 9px;
    }
}
</style>


<!-- =====================================================
     SECOND SECTION
===================================================== -->

<section class="modernization-section">

    <div class="modernization-container">

        <!-- ================================================
             MAIN MODERNIZATION CONTENT
        ================================================= -->

        <div class="modernization-main">


            <!-- LEFT CONTENT -->

            <div class="modernization-content">

                <div class="modernization-eyebrow">
                    Application Modernization
                </div>


                <h2 class="modernization-title">

                    Transform Legacy Applications into

                    <span class="blue-text">
                        Secure, Cloud-Ready
                    </span>

                    Digital Solutions

                </h2>


                <p class="modernization-description">

                    Modernize outdated software with AI-powered application
                    modernization, cloud migration, API integration, UI/UX
                    modernization, and performance optimization. JFS Technologies
                    helps businesses build scalable, secure, and future-ready
                    applications that accelerate digital transformation.

                </p>


                <!-- SERVICE FEATURES -->

                <div class="modernization-features">


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            ✦
                        </span>

                        <span>
                            AI-Powered Application Modernization
                        </span>

                    </div>


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            ☁
                        </span>

                        <span>
                            Cloud Migration
                        </span>

                    </div>


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            ⇄
                        </span>

                        <span>
                            API Integration
                        </span>

                    </div>


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            ◈
                        </span>

                        <span>
                            UI/UX Modernization
                        </span>

                    </div>


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            ⚡
                        </span>

                        <span>
                            Performance Optimization
                        </span>

                    </div>


                    <div class="modernization-feature">

                        <span class="modernization-feature-icon">
                            🛡
                        </span>

                        <span>
                            Secure & Scalable Architecture
                        </span>

                    </div>


                </div>

            </div>


            <!-- ============================================
                 RIGHT MODERNIZATION VISUAL
            ============================================= -->

            <div class="modernization-visual">


                <div class="modernization-visual-header">

                    <small>
                        Digital Transformation
                    </small>

                    <h3>
                        From Legacy to Future-Ready
                    </h3>

                </div>


                <div class="modernization-flow">


                    <!-- LEGACY -->

                    <div class="modernization-flow-card">

                        <div class="modernization-flow-icon">
                            🖥
                        </div>

                        <h4>
                            Legacy
                        </h4>

                        <p>
                            Outdated applications
                            and infrastructure
                        </p>

                    </div>


                    <!-- ARROW -->

                    <div class="modernization-arrow">
                        →
                    </div>


                    <!-- MODERNIZATION -->

                    <div class="modernization-flow-card">

                        <div class="modernization-flow-icon">
                            ⚙
                        </div>

                        <h4>
                            Modernization
                        </h4>

                        <p>
                            AI, APIs, modern UI
                            and optimized code
                        </p>

                    </div>


                    <!-- ARROW -->

                    <div class="modernization-arrow">
                        →
                    </div>


                    <!-- CLOUD -->

                    <div class="modernization-flow-card">

                        <div class="modernization-flow-icon">
                            ☁
                        </div>

                        <h4>
                            Cloud-Ready
                        </h4>

                        <p>
                            Secure, scalable and
                            future-ready
                        </p>

                    </div>


                </div>


                <div class="modernization-visual-footer">

                    <span class="modernization-visual-footer-icon">
                        ✓
                    </span>

                    <span>
                        Secure architecture, scalable infrastructure and
                        modern technology designed for long-term business growth.
                    </span>

                </div>

            </div>

        </div>


        <!-- =================================================
             TRUSTED BY
        ================================================== -->

        <div class="trusted-by-section">


            <div class="trusted-by-header">

                <span class="trusted-by-label">
                    Trusted By
                </span>

                <h3>
                    Technologies We Work With
                </h3>

                <p>
                    Modern technology stacks powering secure and scalable
                    digital solutions.
                </p>

            </div>


            <!-- TECHNOLOGY GRID -->

            <div class="technology-grid">


                <!-- AWS -->

                <div class="technology-card">

                    <span class="technology-logo">
                        AWS
                    </span>

                    <span class="technology-name">
                        AWS
                    </span>

                </div>


                <!-- MICROSOFT AZURE -->

                <div class="technology-card">

                    <span class="technology-logo">
                        AZ
                    </span>

                    <span class="technology-name">
                        Microsoft Azure
                    </span>

                </div>


                <!-- GOOGLE CLOUD -->

                <div class="technology-card">

                    <span class="technology-logo">
                        GC
                    </span>

                    <span class="technology-name">
                        Google Cloud
                    </span>

                </div>


                <!-- REACT -->

                <div class="technology-card">

                    <span class="technology-logo">
                        ⚛
                    </span>

                    <span class="technology-name">
                        React
                    </span>

                </div>


                <!-- ANGULAR -->

                <div class="technology-card">

                    <span class="technology-logo">
                        A
                    </span>

                    <span class="technology-name">
                        Angular
                    </span>

                </div>


                <!-- NODE JS -->

                <div class="technology-card">

                    <span class="technology-logo">
                        JS
                    </span>

                    <span class="technology-name">
                        Node.js
                    </span>

                </div>


                <!-- JAVA -->

                <div class="technology-card">

                    <span class="technology-logo">
                        JV
                    </span>

                    <span class="technology-name">
                        Java
                    </span>

                </div>


                <!-- PYTHON -->

                <div class="technology-card">

                    <span class="technology-logo">
                        PY
                    </span>

                    <span class="technology-name">
                        Python
                    </span>

                </div>


                <!-- DOCKER -->

                <div class="technology-card">

                    <span class="technology-logo">
                        DK
                    </span>

                    <span class="technology-name">
                        Docker
                    </span>

                </div>


                <!-- KUBERNETES -->

                <div class="technology-card">

                    <span class="technology-logo">
                        K8
                    </span>

                    <span class="technology-name">
                        Kubernetes
                    </span>

                </div>


            </div>

        </div>

    </div>

</section>
<section class="services-style-area pt-80 pb-70">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
            <span class="sp-color2">Revitalize Your Applications Today</span>
            <h2>Reimagine Your Best Application Modernisation Services</h2>
            <p class="margin-auto">Our best application modernisation services are designed to help your business stay competitive in an evolving digital landscape. Whether you’re upgrading legacy systems, migrating to the cloud, or enhancing user experience, our expert team is here to guide you every step of the way. Leveraging the latest technologies, we ensure that your applications are secure, efficient, and future-ready. Let us help you bring your applications into the modern era and drive business growth.</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="500">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/applications.gif" class="brand-logo-one icons-img" alt="Best Application Modernisation Services">
                    <h3><a href="#">1. Best Application Modernisation Services</a></h3>
                    <p>We specialize in best application modernisation services assisting organizations in enhancing and modernising their software applications to align with the latest technology trends and boost overall efficiency. Utilizing cutting-edge technologies such as cloud computing and automation tools, lower expenses, and elevate user satisfaction. Our team of skilled professionals will collaborate closely with your organization to evaluate your current applications, pinpoint areas in need of enhancement, and formulate a personalized modernisation strategy for a seamless transition. Whether you seek to shift to a new platform, optimize code, or introduce innovative features, our application modernisation solutions will ensure you remain competitive in today's rapidly evolving digital environment.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/responsive.gif" class="brand-logo-one icons-img" alt="Best Application Modernisation Services">
                    <h3 title="UI/UX Application Mordenisation Services"><a href="#">2. UI/UX Modernisation Services</a></h3>
                    <p>In today's fast-paced digital landscape, where user expectations are constantly evolving, businesses need innovative and engaging interfaces to stay competitive. Our UI/UX modernisation consulting services are crafted to help you excel and stand out. We start by thoroughly analyzing your current user interface and experience to identify opportunities for enhancement, optimization, and innovation. Our skilled team of designers and developers then collaborates to create a visually stunning, intuitive interface that not only enhances user experience but also drives engagement and conversion rates. Whether you need a complete overhaul or targeted updates, our experts are ready to elevate your UI/UX to new heights, setting your business apart in a crowded market.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="services-card services-style-bg p-0">
                <img src="{{ asset('theme') }}/assets/images/icons/api.gif" class="brand-logo-one icons-img" alt="Best Application Modernisation Services">
                    <h3><a href="#">3. API Integration Services</a></h3>
                    <p>Our API integration services streamline the process of connecting different applications and systems, allowing for seamless data exchange and communication. With our experienced team of developers, we can ensure that your APIs are implemented efficiently and effectively. Whether you are looking to integrate third-party services or build custom APIs for your own platform, we have the expertise to meet your needs. Trust us to handle the complexities of API integration so you can focus on growing your business.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/database.gif" class="brand-logo-one icons-img" alt="Best Application Modernisation Services">
                    <h3><a href="#">4. Cloud Migration & Optimization Services</a></h3>
                    <p>As businesses transition to digital-first strategies, cloud migration and optimization play a critical role in ensuring scalability, security, and cost efficiency. Our Cloud Migration & Optimization Services help organizations seamlessly shift their legacy applications to cloud environments like AWS, Azure, and Google Cloud. Our expert team analyzes your existing infrastructure. We ensure a smooth transition with minimal downtime, enhanced performance optimization, and cost-effective cloud solutions tailored to your business needs.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
/* =========================================================
   WHY MODERNIZE + APPLICATION MODERNIZATION APPROACH
========================================================= */

.modernization-benefits-section {
    width: 100%;
    padding: 90px 20px;

    background:
        radial-gradient(
            circle at 0% 10%,
            rgba(22, 139, 212, 0.08),
            transparent 30%
        ),
        radial-gradient(
            circle at 100% 90%,
            rgba(82, 190, 245, 0.08),
            transparent 32%
        ),
        linear-gradient(
            180deg,
            #f8fcff 0%,
            #eef8ff 100%
        );

    overflow: hidden;
}

.modernization-benefits-container {
    max-width: 1180px;
    margin: 0 auto;
}


/* =========================================================
   COMMON SECTION HEADER
========================================================= */

.modernization-section-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 12px;

    color: #168bd4;

    font-size: 11px;
    font-weight: 800;

    letter-spacing: 2px;
    text-transform: uppercase;
}

.modernization-section-label::before {
    content: "";

    width: 28px;
    height: 2px;

    background: #168bd4;

    border-radius: 10px;
}


/* =========================================================
   WHY MODERNIZE
========================================================= */

.why-modernize {
    display: grid;

    grid-template-columns: 0.85fr 1.15fr;

    gap: 45px;

    align-items: center;

    margin-bottom: 90px;
}


/* =========================================================
   LEFT WHY CONTENT
========================================================= */

.why-modernize-content h2 {
    margin: 0 0 12px;

    color: #12304a;

    font-size: 38px;
    font-weight: 750;

    line-height: 1.2;
}

.why-modernize-content h2 span {
    color: #168bd4;
}

.why-modernize-subtitle {
    margin: 0 0 25px;

    color: #657d8e;

    font-size: 15px;

    line-height: 1.7;
}


/* =========================================================
   BENEFIT LIST
========================================================= */

.modernization-benefit-list {
    display: flex;

    flex-direction: column;

    gap: 10px;
}

.modernization-benefit {
    display: flex;

    align-items: center;

    gap: 12px;

    padding: 11px 14px;

    background: #ffffff;

    border: 1px solid #d8ebf7;

    border-radius: 8px;

    color: #38576b;

    font-size: 13px;

    font-weight: 600;

    box-shadow:
        0 3px 12px rgba(20, 100, 150, 0.035);

    transition: all 0.25s ease;
}

.modernization-benefit:hover {
    transform: translateX(4px);

    border-color: #9bd2f1;

    color: #168bd4;

    box-shadow:
        0 8px 20px rgba(22, 136, 212, 0.08);
}

.modernization-benefit-check {
    width: 25px;
    height: 25px;

    min-width: 25px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #e8f7ff;

    border: 1px solid #cfeafa;

    color: #168bd4;

    font-size: 12px;

    font-weight: 800;
}


/* =========================================================
   RIGHT STATS PANEL
========================================================= */

.modernization-stats {
    position: relative;

    padding: 28px;

    background:
        linear-gradient(
            145deg,
            #ffffff 0%,
            #f2faff 100%
        );

    border: 1px solid #d5eaf7;

    border-radius: 18px;

    box-shadow:
        0 18px 50px rgba(22, 136, 212, 0.08);

    overflow: hidden;
}

.modernization-stats::before {
    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    top: -100px;
    right: -80px;

    border-radius: 50%;

    background: rgba(22, 139, 212, 0.07);
}

.modernization-stats-title {
    position: relative;
    z-index: 2;

    margin: 0 0 22px;

    color: #12304a;

    font-size: 18px;

    font-weight: 700;
}


/* =========================================================
   STATS GRID
========================================================= */

.modernization-stat-grid {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 12px;
}

.modernization-stat {
    position: relative;

    padding: 22px 12px;

    text-align: center;

    background: #ffffff;

    border: 1px solid #d9ecf7;

    border-radius: 12px;

    transition: all 0.25s ease;
}

.modernization-stat:hover {
    transform: translateY(-5px);

    border-color: #9bd2f1;

    box-shadow:
        0 10px 25px rgba(22, 136, 212, 0.08);
}

.modernization-stat-icon {
    width: 38px;
    height: 38px;

    margin: 0 auto 10px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    background: #eaf7ff;

    border: 1px solid #d1ecfa;

    color: #168bd4;

    font-size: 16px;
}

.modernization-stat-number {
    display: block;

    margin-bottom: 5px;

    color: #168bd4;

    font-size: 34px;

    font-weight: 800;

    line-height: 1;
}

.modernization-stat-text {
    color: #617b8c;

    font-size: 11px;

    font-weight: 600;

    line-height: 1.45;
}

.modernization-stat-note {
    position: relative;
    z-index: 2;

    display: block;

    margin-top: 18px;

    color: #8a9ca8;

    font-size: 9px;

    text-align: right;
}


/* =========================================================
   APPROACH HEADER
========================================================= */

.modernization-approach {
    position: relative;
}

.modernization-approach-header {
    max-width: 750px;

    margin: 0 auto 55px;

    text-align: center;
}

.modernization-approach-header h2 {
    margin: 0 0 12px;

    color: #12304a;

    font-size: 38px;

    font-weight: 750;

    line-height: 1.2;
}

.modernization-approach-header h2 span {
    color: #168bd4;
}

.modernization-approach-header p {
    margin: 0;

    color: #6c8291;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================================================
   TIMELINE
========================================================= */

.modernization-timeline {
    position: relative;

    max-width: 1000px;

    margin: 0 auto;
}


/* CENTER LINE */

.modernization-timeline::before {
    content: "";

    position: absolute;

    top: 20px;
    bottom: 20px;

    left: 50%;

    width: 2px;

    background:
        linear-gradient(
            180deg,
            #bde4f8,
            #168bd4,
            #bde4f8
        );

    transform: translateX(-50%);
}


/* =========================================================
   TIMELINE ITEM
========================================================= */

.modernization-step {
    position: relative;

    display: grid;

    grid-template-columns: 1fr 70px 1fr;

    align-items: center;

    margin-bottom: 28px;
}

.modernization-step:last-child {
    margin-bottom: 0;
}


/* =========================================================
   LEFT / RIGHT CONTENT
========================================================= */

.modernization-step-content {
    padding: 20px;

    background: #ffffff;

    border: 1px solid #d7eaf6;

    border-radius: 12px;

    box-shadow:
        0 5px 18px rgba(20, 100, 150, 0.045);

    transition: all 0.25s ease;
}

.modernization-step-content:hover {
    transform: translateY(-3px);

    border-color: #9bd2f1;

    box-shadow:
        0 10px 25px rgba(22, 136, 212, 0.08);
}

.modernization-step:nth-child(odd)
.modernization-step-content {
    grid-column: 1;
}

.modernization-step:nth-child(even)
.modernization-step-content {
    grid-column: 3;
}


/* =========================================================
   EMPTY SIDE
========================================================= */

.modernization-step-empty {
    min-height: 1px;
}


/* =========================================================
   STEP NUMBER
========================================================= */

.modernization-step-number {
    position: relative;

    z-index: 5;

    grid-column: 2;

    grid-row: 1;

    width: 52px;
    height: 52px;

    margin: 0 auto;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background:
        linear-gradient(
            145deg,
            #168bd4,
            #51b8e9
        );

    border: 5px solid #eef8ff;

    color: #ffffff;

    font-size: 15px;

    font-weight: 800;

    box-shadow:
        0 5px 15px rgba(22, 136, 212, 0.18);
}


/* =========================================================
   STEP CONTENT
========================================================= */

.modernization-step-content h3 {
    margin: 0 0 9px;

    color: #244a62;

    font-size: 17px;

    font-weight: 700;

    line-height: 1.35;
}

.modernization-step-content p {
    margin: 0;

    color: #718795;

    font-size: 12px;

    line-height: 1.7;
}


/* =========================================================
   STEP ICON
========================================================= */

.modernization-step-icon {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    width: 30px;
    height: 30px;

    margin-bottom: 10px;

    border-radius: 8px;

    background: #eaf7ff;

    border: 1px solid #d2ecfa;

    color: #168bd4;

    font-size: 13px;
}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 900px) {

    .why-modernize {
        grid-template-columns: 1fr;

        gap: 30px;
    }

    .why-modernize-content h2 {
        font-size: 35px;
    }

    .modernization-approach-header h2 {
        font-size: 35px;
    }

    .modernization-timeline {
        max-width: 850px;
    }
}


/* =========================================================
   RESPONSIVE MOBILE
========================================================= */

@media (max-width: 650px) {

    .modernization-benefits-section {
        padding: 60px 15px;
    }

    .why-modernize {
        margin-bottom: 65px;
    }

    .why-modernize-content h2 {
        font-size: 29px;
    }

    .why-modernize-subtitle {
        font-size: 14px;
    }

    .modernization-benefit {
        font-size: 12px;

        padding: 10px 12px;
    }

    .modernization-stats {
        padding: 20px;
    }

    .modernization-stats-title {
        font-size: 17px;
    }

    .modernization-stat-grid {
        grid-template-columns: 1fr;
    }

    .modernization-stat {
        padding: 18px;
    }

    .modernization-stat-number {
        font-size: 32px;
    }

    .modernization-stat-text {
        font-size: 12px;
    }

    .modernization-approach-header {
        margin-bottom: 35px;
    }

    .modernization-approach-header h2 {
        font-size: 29px;
    }

    .modernization-approach-header p {
        font-size: 13px;
    }


    /* MOBILE TIMELINE */

    .modernization-timeline::before {
        left: 20px;

        transform: none;
    }

    .modernization-step {
        display: grid;

        grid-template-columns: 40px 1fr;

        gap: 12px;

        margin-bottom: 18px;
    }

    .modernization-step-number {
        grid-column: 1;

        grid-row: 1;

        width: 40px;
        height: 40px;

        border-width: 4px;

        font-size: 12px;
    }

    .modernization-step-content,
    .modernization-step:nth-child(odd)
    .modernization-step-content,
    .modernization-step:nth-child(even)
    .modernization-step-content {
        grid-column: 2;

        grid-row: 1;

        padding: 16px;
    }

    .modernization-step-content h3 {
        font-size: 15px;
    }

    .modernization-step-content p {
        font-size: 11px;
    }

    .modernization-step-icon {
        width: 27px;
        height: 27px;

        font-size: 11px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 380px) {

    .why-modernize-content h2,
    .modernization-approach-header h2 {
        font-size: 26px;
    }

    .modernization-stat-number {
        font-size: 29px;
    }

    .modernization-step-content h3 {
        font-size: 14px;
    }

    .modernization-step-content p {
        font-size: 10px;
    }
}
</style>


<!-- =========================================================
     WHY MODERNIZE SECTION
========================================================= -->

<section class="modernization-benefits-section">

    <div class="modernization-benefits-container">


        <!-- =================================================
             WHY MODERNIZE
        ================================================== -->

        <div class="why-modernize">


            <!-- LEFT -->

            <div class="why-modernize-content">

                <div class="modernization-section-label">
                    Why Modernize?
                </div>

                <h2>
                    The Benefits of
                    <span>Application Modernization</span>
                </h2>

                <p class="why-modernize-subtitle">
                    Modernizing legacy applications helps businesses reduce
                    technical debt, improve performance, strengthen security,
                    and create a better digital experience for customers.
                </p>


                <div class="modernization-benefit-list">


                    <div class="modernization-benefit">

                        <span class="modernization-benefit-check">
                            ✓
                        </span>

                        <span>
                            Reduce Maintenance Costs by up to 40%
                        </span>

                    </div>


                    <div class="modernization-benefit">

                        <span class="modernization-benefit-check">
                            ✓
                        </span>

                        <span>
                            Improve Application Performance
                        </span>

                    </div>


                    <div class="modernization-benefit">

                        <span class="modernization-benefit-check">
                            ✓
                        </span>

                        <span>
                            Faster Cloud Deployments
                        </span>

                    </div>


                    <div class="modernization-benefit">

                        <span class="modernization-benefit-check">
                            ✓
                        </span>

                        <span>
                            Enhanced Security
                        </span>

                    </div>


                    <div class="modernization-benefit">

                        <span class="modernization-benefit-check">
                            ✓
                        </span>

                        <span>
                            Better Customer Experience
                        </span>

                    </div>


                </div>

            </div>


            <!-- RIGHT STATS -->

            <div class="modernization-stats">

                <h3 class="modernization-stats-title">
                    Why Businesses Choose Application Modernization
                </h3>


                <div class="modernization-stat-grid">


                    <!-- 40% -->

                    <div class="modernization-stat">

                        <div class="modernization-stat-icon">
                            📉
                        </div>

                        <span class="modernization-stat-number">
                            40%
                        </span>

                        <span class="modernization-stat-text">
                            Reduced Maintenance Costs*
                        </span>

                    </div>


                    <!-- 60% -->

                    <div class="modernization-stat">

                        <div class="modernization-stat-icon">
                            ⚡
                        </div>

                        <span class="modernization-stat-number">
                            60%
                        </span>

                        <span class="modernization-stat-text">
                            Faster Application Performance*
                        </span>

                    </div>


                    <!-- 50% -->

                    <div class="modernization-stat">

                        <div class="modernization-stat-icon">
                            🚀
                        </div>

                        <span class="modernization-stat-number">
                            50%
                        </span>

                        <span class="modernization-stat-text">
                            Faster Project Delivery*
                        </span>

                    </div>


                </div>


                <span class="modernization-stat-note">
                    *Potential benefits may vary based on application,
                    architecture and modernization scope.
                </span>

            </div>

        </div>


        <!-- =================================================
             APPLICATION MODERNIZATION APPROACH
        ================================================== -->

        <div class="modernization-approach">


            <!-- HEADER -->

            <div class="modernization-approach-header">

                <div class="modernization-section-label">
                    Our Approach
                </div>

                <h2>
                    Our Application
                    <span>Modernization Approach</span>
                </h2>

                <p>
                    A structured modernization journey designed to reduce
                    operational risk, improve application performance,
                    and prepare your technology for future growth.
                </p>

            </div>


            <!-- =================================================
                 TIMELINE
            ================================================== -->

            <div class="modernization-timeline">


                <!-- STEP 01 -->

                <div class="modernization-step">

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            🔍
                        </div>

                        <h3>
                            Application Assessment & Planning
                        </h3>

                        <p>
                            We evaluate your existing applications,
                            infrastructure, and business processes to identify
                            modernization opportunities. Based on this
                            assessment, we develop a customized roadmap aligned
                            with your business objectives.
                        </p>

                    </div>

                    <div class="modernization-step-number">
                        01
                    </div>

                    <div class="modernization-step-empty"></div>

                </div>


                <!-- STEP 02 -->

                <div class="modernization-step">

                    <div class="modernization-step-empty"></div>

                    <div class="modernization-step-number">
                        02
                    </div>

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            🧩
                        </div>

                        <h3>
                            Customized Modernization Strategy
                        </h3>

                        <p>
                            Every business has unique requirements. Our experts
                            create a tailored modernization strategy that
                            balances performance, scalability, security, and
                            cost while minimizing operational disruption.
                        </p>

                    </div>

                </div>


                <!-- STEP 03 -->

                <div class="modernization-step">

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            ⚙️
                        </div>

                        <h3>
                            Application Re-Architecture & Refactoring
                        </h3>

                        <p>
                            We modernize legacy applications by redesigning
                            their architecture, optimizing code, and adopting
                            cloud-native and microservices-based approaches to
                            improve agility and long-term scalability.
                        </p>

                    </div>

                    <div class="modernization-step-number">
                        03
                    </div>

                    <div class="modernization-step-empty"></div>

                </div>


                <!-- STEP 04 -->

                <div class="modernization-step">

                    <div class="modernization-step-empty"></div>

                    <div class="modernization-step-number">
                        04
                    </div>

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            ☁️
                        </div>

                        <h3>
                            Migration & Cloud Enablement
                        </h3>

                        <p>
                            Whether migrating to the cloud or upgrading
                            existing infrastructure, we ensure a seamless
                            transition with minimal downtime while improving
                            application reliability, flexibility, and
                            performance.
                        </p>

                    </div>

                </div>


                <!-- STEP 05 -->

                <div class="modernization-step">

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            🔗
                        </div>

                        <h3>
                            Modern Technology Integration
                        </h3>

                        <p>
                            We integrate advanced technologies, including cloud
                            platforms, APIs, AI, automation, DevOps, and
                            analytics, to enhance application capabilities and
                            support future business growth.
                        </p>

                    </div>

                    <div class="modernization-step-number">
                        05
                    </div>

                    <div class="modernization-step-empty"></div>

                </div>


                <!-- STEP 06 -->

                <div class="modernization-step">

                    <div class="modernization-step-empty"></div>

                    <div class="modernization-step-number">
                        06
                    </div>

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            🛡️
                        </div>

                        <h3>
                            Security & Compliance
                        </h3>

                        <p>
                            Security is embedded throughout the modernization
                            process. We implement robust security practices,
                            data protection measures, and compliance standards
                            to safeguard your applications and business data.
                        </p>

                    </div>

                </div>


                <!-- STEP 07 -->

                <div class="modernization-step">

                    <div class="modernization-step-content">

                        <div class="modernization-step-icon">
                            📊
                        </div>

                        <h3>
                            Continuous Monitoring & Optimization
                        </h3>

                        <p>
                            After deployment, we continuously monitor
                            application performance, optimize resources, and
                            implement enhancements to ensure your applications
                            remain secure, efficient, and ready for evolving
                            business needs.
                        </p>

                    </div>

                    <div class="modernization-step-number">
                        07
                    </div>

                    <div class="modernization-step-empty"></div>

                </div>


            </div>

        </div>

    </div>

</section>

<!-- Trust Us Area -->	
<!-- <div class="choose-area pt-80 pb-80 home" data-aos="fade-up" data-aos-duration="750">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12">
				<div class="choose-content mr-20">
					<div class="section-title mb-5 text-center">
						<span class="sp-color1"></span>
						<h2>Why Choose JFS Technologies?</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/tailored-sol.png" alt="" width="90">
									<p class="title pt-3">Tailored Solutions</p>
								</div>
								<p>Each service is expertly tailored to meet your unique business challenges, objectives, and long-term growth and success goals.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/nano.png" alt="" width="90">
									<p class="title pt-3">Technology Prowess</p>
								</div>
								<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, scalable, and future-proof solutions.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/market-share.png" alt="" width="90">
									<p class="title pt-3">Proven Track Record</p>
								</div>
								<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/gdp.png" alt="" width="90">
									<p class="title pt-3">Global Client Base</p>
								</div>
								<p>With experience serving businesses globally, we ensure seamless execution and world-class service no matter where you are.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Our Application Modernization Approach -->
<section>
    ...
</section>


<!-- =========================================
     STOP PATCHING - START TRANSFORMING
     ADD THIS SECTION HERE
========================================= -->

<section class="transform-cta-section">

    <div class="transform-cta-container">

        <div class="transform-cta-top">

            <div class="transform-cta-heading">
                <h2>
                    Stop patching.<br>
                    <em>Start transforming.</em>
                </h2>
            </div>

            <div class="transform-cta-description">
                <p>
                    Accelerate digital transformation with secure,
                    scalable, and cloud-native application
                    modernization services.
                </p>
            </div>

        </div>


        <div class="transform-cta-bottom">

            <h3>
                Stop patching.
                <em>Start transforming.</em>
            </h3>

            <p>
                Accelerate digital transformation with secure,
                scalable, and cloud-native application modernization
                services.
            </p>

        </div>

    </div>

</section>


<!-- =========================================
     SUCCESS STORIES
========================================= -->

<section class="success-stories">

    ...
    
</section>
<style>
    /* =========================================
   STOP PATCHING / START TRANSFORMING
========================================= */

.transform-cta-section {
    width: 100%;
    padding: 80px 20px;

    background: #ffffff;
}

.transform-cta-container {
    max-width: 1150px;
    margin: 0 auto;
}


/* TOP AREA */

.transform-cta-top {
    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 60px;

    align-items: center;

    padding-bottom: 55px;

    border-bottom: 1px solid #e5edf3;
}


/* HEADING */

.transform-cta-heading h2 {
    margin: 0;

    color: #0c2d63;

    font-size: 48px;

    line-height: 1.08;

    font-weight: 700;

    letter-spacing: -1px;
}

.transform-cta-heading h2 em {
    font-family: Georgia, serif;

    font-weight: 500;

    color: #0c2d63;
}


/* DESCRIPTION */

.transform-cta-description {
    max-width: 480px;
}

.transform-cta-description p {
    margin: 0;

    color: #526b7d;

    font-size: 17px;

    line-height: 1.7;
}


/* BOTTOM CONTENT */

.transform-cta-bottom {
    padding-top: 35px;

    max-width: 900px;
}

.transform-cta-bottom h3 {
    margin: 0 0 8px;

    color: #0c2d63;

    font-size: 23px;

    font-weight: 500;
}

.transform-cta-bottom h3 em {
    font-family: Georgia, serif;

    font-weight: 500;
}

.transform-cta-bottom p {
    margin: 0;

    color: #252525;

    font-size: 18px;

    line-height: 1.7;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 800px) {

    .transform-cta-section {
        padding: 65px 20px;
    }

    .transform-cta-top {
        grid-template-columns: 1fr;

        gap: 25px;
    }

    .transform-cta-heading h2 {
        font-size: 40px;
    }

    .transform-cta-description p {
        font-size: 16px;
    }
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {

    .transform-cta-section {
        padding: 50px 15px;
    }

    .transform-cta-top {
        gap: 20px;

        padding-bottom: 35px;
    }

    .transform-cta-heading h2 {
        font-size: 34px;

        line-height: 1.12;
    }

    .transform-cta-description p {
        font-size: 14px;
    }

    .transform-cta-bottom {
        padding-top: 25px;
    }

    .transform-cta-bottom h3 {
        font-size: 20px;
    }

    .transform-cta-bottom p {
        font-size: 15px;
    }
}
</style>

<div class="case-study-area pt-80 pb-70">
    <div class="container" data-aos="fade-up" data-aos-duration="750">
        <div class="section-title text-center">
            <span class="sp-color2">Success Stories</span>
            <h2>Real-World Impact of the Best Application Modernisation Services</h2>
            <p>Learn how our Best Application Modernisation Services have transformed businesses:</p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="{{ url('/success-stories') }}">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Best Application Modernisation Services"> -->
						<img src="{{ asset('theme/assets/images/case-study/e-commerce-platform.avif') }}" alt="E-Commerce Platform UI/UX Redesign">
                    </a>
                    <div class="content">
                        <h3><a href="{{ url('/success-stories') }}">E-Commerce Platform UI/UX Redesign</a></h3>
                        <a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="{{ url('/success-stories') }}">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Best Application Modernisation Services"> -->
						<img src="{{ asset('theme/assets/images/case-study/mobile-app.avif') }}" alt="Mobile App UX Optimization">
                    </a>
                    <div class="content">
                        <h3><a href="{{ url('/success-stories') }}">Mobile App UX Optimization</a></h3>
						<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="{{ url('/success-stories') }}">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Best Application Modernisation Services"> -->
						<img src="{{ asset('theme/assets/images/case-study/3d-vis.avif') }}" alt="3D Visualization for a Product Launch">
                    </a>
                    <div class="content">
                        <h3><a href="{{ url('/success-stories') }}">3D Visualization for a Product Launch</a></h3>
                        <a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
			<div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="{{ url('/success-stories') }}">
						<img src="{{ asset('theme/assets/images/case-study/secure-cloud.avif') }}" alt="Secure Cloud Migration">
                    </a>
                    <div class="content">
                        <h3><a href="{{ url('/success-stories') }}">3D Product Displays for Advertising Efforts</a></h3>
                        <a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 text-center">
				<a href="{{ url('/success-stories') }}" class="default-btn btn-bg-two border-radius-5 py-3">Explore Our Success Stories</a>
            </div>
        </div>
    </div>
</div>


<div class="about-area about-bg2 pt-80 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/modern-cta.png" alt="Best Application Modernisation Services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready the modernize application?</h2>
                        <p>Don’t let outdated applications hold your business back. Our best application modernisation services can bring new life to your software, helping you improve efficiency, enhance security, and deliver better experiences to your users.</p>
                    </div>
                    <h3>With 24+ years of expertise, we deliver best application modernisation services.</h3>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Get in Touch Today</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area pt-80 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-md-7">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2 title="Frequently Asked Questions for Best Application Modernisation Consulting Services">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is Application Modernisation?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Best Application Modernisation Services involves upgrading or transforming existing legacy applications to align with modern technology standards, improving performance, scalability, and user experience.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Why should I modernise my legacy applications?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Modernising your applications enhances their performance, reduces maintenance costs, ensures compatibility with current technologies, and prepares your business for future growth and innovation.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What services are included in your Application Modernisation offering?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Our Application Modernisation services include:</p>
                                            <ul>
                                                <li>Code refactoring and optimization</li>
                                                <li>Migrating to cloud-native architectures</li>
                                                <li>Integrating advanced features and APIs</li>
                                                <li>Updating user interfaces and experiences</li>
                                                <li>Ensuring compliance with modern security standards</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you assess if my application needs modernisation?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We conduct a thorough assessment of your current application’s architecture, performance, and alignment with business goals. This helps identify areas for improvement and the best modernisation approach.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can you migrate my application to the cloud?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes, we specialize in cloud migration, transitioning your applications to platforms like AWS, Azure, or Google Cloud for enhanced scalability and performance.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Will my business operations be interrupted during modernisation?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Our team follows a phased and agile approach to ensure minimal disruption. We carefully plan updates and migrations around your operational schedule.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What are the costs involved in Best Application Modernisation Services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Costs depend on the scope of the project, including factors like application size, technology stack, and the desired level of modernisation. Contact us for a tailored cost estimate. <a href="{{ url('/contact-us') }}">Request a Quote <i class="bx bx-chevron-right"></i></a></p>
                                        </div>
                                    </li>
                                </ul>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
				<div class="choose-img">
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Best Application Modernisation Services">
				</div>
			</div>
        </div>
    </div>
</div>
@endsection