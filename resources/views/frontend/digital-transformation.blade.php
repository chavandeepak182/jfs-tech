@extends('frontend.layouts.header')
@section('title', "Digital Transformation Services & AI Solutions | JFS Technologies")
@section('description', "Accelerate growth with digital transformation services, AI solutions, application modernization, data science, and cloud-ready business technology solutions. ")
@section('keywords', "Digital Transformation Services, End-to-End Digital Transformation Services, AI Solutions, Business Technology Solutions, Application Modernization Services, Data Science Services, Infrastructure Management Services, AR/VR Development Services, Digital Transformation Company, Enterprise Digital Transformation")
@section('canonical')
<link rel="alternate" href="https://jfstechnologies.com/services/digital-transformation-services" hreflang="en-in" />

<link rel="canonical" href="https://jfstechnologies.com/services/digital-transformation-services" />
<meta name="robots" content="index, follow">
<meta property="og:type" content="business.business">
<meta property="og:title" content="Digital Transformation Services Management Consulting ">
<meta property="og:url" content="https://jfstechnologies.com/services/digital-transformation-services">
<meta property="og:image" content="https://jfstechnologies.com/theme/assets/images/icons/data-sci.svg">
<meta property="og:description" content="Digital Transformation Services">
<meta property="business:contact_data:street_address" content="416, Platinum Square, Sakore Nagar, Viman Nagar">
<meta property="business:contact_data:locality" content="Pune">
<meta property="business:contact_data:region" content="Maharashtra">
<meta property="business:contact_data:postal_code" content="411014">
<meta property="business:contact_data:country_name" content="India">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {
      "@type":"ListItem",
      "position":1,
      "name":"Home",
      "item":"https://jfstechnologies.com/"
    },
    {
      "@type":"ListItem",
      "position":2,
      "name":"Services",
      "item":"https://jfstechnologies.com/services"
    },
    {
      "@type":"ListItem",
      "position":3,
      "name":"Digital Transformation Services",
      "item":"https://jfstechnologies.com/services/digital-transformation-services"
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are Digital Transformation Services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Digital Transformation Services help organizations modernize business processes, legacy systems, and customer experiences using cloud computing, artificial intelligence (AI), automation, data analytics, enterprise applications, and custom software development. JFS Technologies delivers scalable digital solutions that improve operational efficiency, accelerate innovation, and support long-term business growth."
      }
    },
    {
      "@type": "Question",
      "name": "How can Digital Transformation improve business performance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Digital Transformation enables businesses to automate workflows, improve operational efficiency, reduce manual processes, enhance customer experiences, strengthen data-driven decision-making, and increase scalability. Modern digital technologies help organizations respond faster to changing market demands while reducing operational costs."
      }
    },
    {
      "@type": "Question",
      "name": "What Digital Transformation solutions does JFS Technologies offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "JFS Technologies offers end-to-end Digital Transformation Services including legacy application modernization, cloud migration, enterprise software development, workflow automation, API integration, AI and machine learning solutions, DevOps implementation, business process optimization, and technology consulting tailored to your business objectives."
      }
    },
    {
      "@type": "Question",
      "name": "Which industries benefit from Digital Transformation Services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Digital Transformation delivers measurable value across industries including healthcare, banking and financial services, manufacturing, retail, logistics, education, real estate, travel, insurance, and SaaS businesses. JFS Technologies develops industry-specific digital solutions that improve productivity, security, customer engagement, and operational efficiency."
      }
    },
    {
      "@type": "Question",
      "name": "How does JFS Technologies execute Digital Transformation projects?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our Digital Transformation process begins with business discovery and technology assessment, followed by solution architecture, application modernization, cloud implementation, software development, testing, deployment, and continuous optimization. Every project follows agile methodologies to ensure faster delivery, scalability, and minimal business disruption."
      }
    },
    {
      "@type": "Question",
      "name": "Do you modernize legacy applications and migrate them to the cloud?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. JFS Technologies specializes in modernizing legacy applications through cloud migration, microservices architecture, API integration, database modernization, performance optimization, and security enhancements. This helps businesses extend the life of existing systems while improving performance and scalability."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose JFS Technologies for Digital Transformation Services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "JFS Technologies combines expertise in cloud technologies, AI, enterprise software development, DevOps, automation, and user-centric design to deliver future-ready Digital Transformation solutions. Our experienced team focuses on creating scalable, secure, and high-performance technology solutions that align with business goals and drive measurable results."
      }
    },
    {
      "@type": "Question",
      "name": "How do I get started with Digital Transformation at JFS Technologies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Getting started is simple. Contact JFS Technologies for a consultation, where our experts will assess your current technology landscape, understand your business objectives, recommend the right digital transformation strategy, and provide a customized roadmap for implementation."
      }
    }
  ]
}
</script>
@endsection

@section('content')
<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Digital Transformation Services</h1>
            <p class="text-white">Modernize legacy systems, automate workflows, and accelerate growth with end-to-end digital transformation services.</p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ">Get A Quote</a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('theme/assets/images/digital-trans.mp4') }}" type="video/mp4">
        <source src="https://jfstechnologies.com/theme/assets/images/services.mp4" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area home_cards pt-80 pb-70">
	<div class="container">
<div class="section-title text-center"
     data-aos="fade-up"
     data-aos-duration="500">

    <span class="sp-color2">
        Unlock the potential
    </span>

    <h2>
        Digital Transformation Services
        <br>
        End-to-End Consulting and Technology
        <br>
        Solutions for Future-Ready Businesses.
    </h2>

</div>
		<div class="row pt-45">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/data-science-services') }}">
                        <div class="number-title invisible">01.</div>
                        <h3 title="Data Science Consulting services">Data Science</h3>
                        <p>Digital science utilizes data science consulting services and data analytics services to enhance research and innovation and fostering collaboration</p>
                        <img src="{{ asset('theme') }}/assets/images/icons/data-sci.svg" class="brand-logo-one" alt="Digital Transformation Services Management Consulting">
                        <!-- <i class="fal fa-file-chart-line my-2"></i> -->
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/data-science-services') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/ar-vr-services') }}">
                        <div class="number-title invisible">02.</div>
                        <h3 title="application for AR and VR services">AR/VR</h3>
                        <p>AR/VR practice involves application for AR and VR services using immersive technologies to inform decisions and drive business growth.</p>
                        <!-- <i class="fal fa-head-vr my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/ar-vr.svg" class="brand-logo-one" alt="Digital Transformation Services Management Consulting">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/ar-vr-services') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/infrastructure-management-services') }}">
                        <div class="number-title invisible">03.</div>
                        <h3 title="Infrastructure management consulting services">Infrastructure Management</h3>
                        <p>Infrastructure management consulting services ensures efficient operation of IT systems to support business goals.</p>
                        <!-- <i class="fal fa-network-wired my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/infra-mgmt.svg" class="brand-logo-one" alt="Digital Transformation Services Management Consulting">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/infrastructure-management-services') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/application-modernisation-services') }}">
                        <div class="number-title invisible">04.</div>
                        <h3 title="Best Application Modernization Services">Application Modernization</h3>
                        <p>Best application modernization services updates legacy software for improved performance with modern technologies.</p>
                        <!-- <i class="fal fa-network-wired my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/modern-app.svg" class="brand-logo-one" alt="Digital Transformation Services Management Consulting">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/application-modernisation-services') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="section-title text-center"
     data-aos="fade-up"
     data-aos-duration="500">

    <span class="sp-color2">
        Unlock the potential
    </span>

    <h2>
        Digital Transformation Services
        End-to-End Consulting and Technology
        Solutions for Future-Ready Businesses.
    </h2>

</div>

<style>

.section-title {
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
}

.section-title .sp-color2 {
    display: inline-block;
    margin-bottom: 15px;
    color: #0875c9;
    font-size: 18px;
    font-weight: 600;
}

.section-title h2 {
    max-width: 1000px;
    margin: 0 auto;

    color: #252525;

    font-size: 44px;
    line-height: 1.22;
    font-weight: 700;

    letter-spacing: -0.5px;

    text-transform: uppercase;
}


/* =========================
   LAPTOP
========================= */

@media (max-width: 1199px) {

    .section-title {
        max-width: 900px;
    }

    .section-title h2 {
        max-width: 900px;
        font-size: 40px;
        line-height: 1.22;
    }

}


/* =========================
   TABLET
========================= */

@media (max-width: 991px) {

    .section-title {
        max-width: 750px;
    }

    .section-title h2 {
        max-width: 750px;
        font-size: 34px;
        line-height: 1.25;
    }

    .section-title .sp-color2 {
        font-size: 16px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 767px) {

    .section-title {
        width: 100%;
        padding: 0 15px;
    }

    .section-title .sp-color2 {
        margin-bottom: 12px;
        font-size: 15px;
    }

    .section-title h2 {
        width: 100%;
        max-width: 100%;

        font-size: 28px;
        line-height: 1.25;

        letter-spacing: -0.2px;
    }

}


/* =========================
   SMALL MOBILE
========================= */

@media (max-width: 480px) {

    .section-title {
        padding: 0 12px;
    }

    .section-title h2 {
        font-size: 24px;
        line-height: 1.3;
    }

    .section-title .sp-color2 {
        font-size: 14px;
    }

}

</style>
<!-- =========================================
     DIGITAL TRANSFORMATION SECTION START
========================================= -->
<section class="digital-transformation-section">

    <div class="container">

        <!-- TWO COLUMN CONTENT -->
        <div class="dt-grid">

            <!-- =====================================
                 LEFT SIDE - COMMON CHALLENGES
            ====================================== -->

            <div class="dt-column">

                <div class="dt-section-label">
                    COMMON CHALLENGES
                </div>

                <h2 class="dt-title">
                    Common Digital Transformation Challenges We Observe
                </h2>

                <div class="dt-challenge-list">

                    <!-- Challenge 1 -->
                    <div class="dt-challenge-card">

                        <div class="dt-icon">
                            i
                        </div>

                        <p>
                            Many organizations struggle with disconnected systems
                            that limit collaboration and operational efficiency.
                        </p>

                    </div>


                    <!-- Challenge 2 -->
                    <div class="dt-challenge-card">

                        <div class="dt-icon">
                            i
                        </div>

                        <p>
                            Technology investments often fail to deliver expected
                            results without process optimization and change management.
                        </p>

                    </div>


                    <!-- Challenge 3 -->
                    <div class="dt-challenge-card">

                        <div class="dt-icon">
                            i
                        </div>

                        <p>
                            Legacy applications slow innovation and make it difficult
                            to scale digital initiatives.
                        </p>

                    </div>


                    <!-- Challenge 4 -->
                    <div class="dt-challenge-card">

                        <div class="dt-icon">
                            i
                        </div>

                        <p>
                            Businesses that modernize in phases typically experience
                            smoother adoption and lower operational risk.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =====================================
                 RIGHT SIDE - KEY BENEFITS
            ====================================== -->

            <div class="dt-column">

                <div class="dt-section-label">
                    KEY BENEFITS
                </div>

                <h2 class="dt-title">
                    Key Benefits of Digital Transformation
                </h2>


                <!-- BENEFITS GRID -->
                <div class="dt-benefits-grid">


                    <!-- BENEFIT 1 -->
                    <div class="dt-benefit-card dt-benefit-yellow">

                        <div class="dt-benefit-header">

                            <span class="dt-benefit-number">
                                50%
                            </span>

                        </div>

                        <span class="dt-benefit-text">
                            Reduction in Manual Processes
                        </span>

                        <div class="dt-benefit-progress">

                            <div class="dt-progress-track">

                                <div
                                    class="dt-progress-bar"
                                    style="width: 50%;">
                                </div>

                            </div>

                            <span class="dt-progress-value">
                                50%
                            </span>

                        </div>

                    </div>


                    <!-- BENEFIT 2 -->
                    <div class="dt-benefit-card dt-benefit-green">

                        <div class="dt-benefit-header">

                            <span class="dt-benefit-number">
                                99.9%
                            </span>

                        </div>

                        <span class="dt-benefit-text">
                            Cloud Infrastructure Availability
                        </span>

                        <div class="dt-benefit-progress">

                            <div class="dt-progress-track">

                                <div
                                    class="dt-progress-bar"
                                    style="width: 99.9%;">
                                </div>

                            </div>

                            <span class="dt-progress-value">
                                99.9%
                            </span>

                        </div>

                    </div>


                    <!-- BENEFIT 3 -->
                    <div class="dt-benefit-card dt-benefit-blue">

                        <div class="dt-benefit-header">

                            <span class="dt-benefit-number">
                                3x
                            </span>

                        </div>

                        <span class="dt-benefit-text">
                            Faster Application Performance
                        </span>

                        <div class="dt-benefit-progress">

                            <div class="dt-progress-track">

                                <div
                                    class="dt-progress-bar"
                                    style="width: 75%;">
                                </div>

                            </div>

                            <span class="dt-progress-value">
                                3x
                            </span>

                        </div>

                    </div>


                    <!-- BENEFIT 4 -->
                    <div class="dt-benefit-card dt-benefit-purple">

                        <div class="dt-benefit-header">

                            <span class="dt-benefit-number">
                                24×7
                            </span>

                        </div>

                        <span class="dt-benefit-text">
                            Infrastructure Monitoring
                        </span>

                        <div class="dt-benefit-progress">

                            <div class="dt-progress-track">

                                <div
                                    class="dt-progress-bar"
                                    style="width: 100%;">
                                </div>

                            </div>

                            <span class="dt-progress-value">
                                24×7
                            </span>

                        </div>

                    </div>

                </div>


                <!-- SUPPORTING BENEFIT CARD -->
                <div class="dt-benefit-highlight">

                    <span>
                        Modern technology built for measurable,
                        scalable business outcomes.
                    </span>

                </div>

            </div>

        </div>


        <!-- =====================================
             BOTTOM MESSAGE
        ====================================== -->

        <div class="dt-bottom-message">

            <div class="dt-bottom-line"></div>

            <p>
                Successful digital transformation combines modern technology,
                automation, and scalable infrastructure to deliver measurable
                business outcomes.
            </p>

        </div>

    </div>

</section>


<style>

/* =========================================================
   JFS TECHNOLOGIES LIGHT BACKGROUND THEME
========================================================= */

.digital-transformation-section {

    position: relative;

    padding: 90px 0 85px;

    /*
     * JFS LOGO THEME
     * Navy + Blue + Light Blue + Gold
     */

    background:

        radial-gradient(
            circle at 8% 20%,
            rgba(8, 117, 201, 0.10),
            transparent 32%
        ),

        radial-gradient(
            circle at 92% 70%,
            rgba(255, 176, 0, 0.09),
            transparent 30%
        ),

        linear-gradient(
            135deg,
            #f7fbff 0%,
            #ffffff 50%,
            #f8fbff 100%
        );

    color: #102f53;

    overflow: hidden;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

.digital-transformation-section::before {

    content: "";

    position: absolute;

    width: 450px;

    height: 450px;

    top: -250px;

    left: -200px;

    background: rgba(8, 117, 201, 0.035);

    border-radius: 50%;

    pointer-events: none;
}


.digital-transformation-section::after {

    content: "";

    position: absolute;

    width: 350px;

    height: 350px;

    right: -170px;

    bottom: -180px;

    background: rgba(255, 176, 0, 0.045);

    border-radius: 50%;

    pointer-events: none;
}


/* =========================================================
   CONTAINER
========================================================= */

.digital-transformation-section .container {

    position: relative;

    z-index: 2;

}


/* =========================================================
   TWO COLUMN LAYOUT
========================================================= */

.dt-grid {

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 52px;

    align-items: start;

}


.dt-column {

    min-width: 0;

}


/* =========================================================
   SECTION LABEL
========================================================= */

.dt-section-label {

    display: inline-block;

    margin-bottom: 14px;

    color: #0875c9;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 1.4px;

    text-transform: uppercase;

}


/* =========================================================
   MAIN TITLE
========================================================= */

.dt-title {

    margin: 0 0 28px;

    max-width: 570px;

    color: #102f53;

    font-size: 34px;

    line-height: 1.15;

    font-weight: 800;

    letter-spacing: -0.8px;

}


/* =========================================================
   LEFT SIDE - CHALLENGE LIST
========================================================= */

.dt-challenge-list {

    display: flex;

    flex-direction: column;

    gap: 14px;

}


/* =========================================================
   CHALLENGE CARD
========================================================= */

.dt-challenge-card {

    position: relative;

    display: flex;

    align-items: flex-start;

    gap: 18px;

    min-height: 100px;

    padding: 22px 24px;

    background:

        linear-gradient(
            145deg,
            #ffffff,
            #f6faff
        );

    border: 1px solid #dfeaf3;

    border-radius: 13px;

    box-shadow:

        0 8px 25px rgba(16, 47, 83, 0.055);

    transition: all 0.3s ease;

}


/* =========================================================
   BLUE SIDE INDICATOR
========================================================= */

.dt-challenge-card::before {

    content: "";

    position: absolute;

    left: -1px;

    top: 18px;

    bottom: 18px;

    width: 3px;

    background: #0875c9;

    opacity: 0;

    border-radius: 5px;

    transition: 0.3s ease;

}


/* =========================================================
   CHALLENGE HOVER
========================================================= */

.dt-challenge-card:hover {

    transform: translateX(4px);

    border-color: rgba(8, 117, 201, 0.30);

    box-shadow:

        0 12px 30px rgba(8, 117, 201, 0.09);

}


.dt-challenge-card:hover::before {

    opacity: 1;

}


/* =========================================================
   INFORMATION ICON
========================================================= */

.dt-icon {

    flex: 0 0 30px;

    width: 30px;

    height: 30px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-top: 2px;

    color: #0875c9;

    font-size: 14px;

    font-weight: 700;

    background: #edf7ff;

    border: 1px solid #c9e4f7;

    border-radius: 8px;

}


/* =========================================================
   CHALLENGE TEXT
========================================================= */

.dt-challenge-card p {

    margin: 0;

    color: #52677d;

    font-size: 15px;

    line-height: 1.7;

}


/* =========================================================
   RIGHT SIDE - BENEFITS GRID
========================================================= */

.dt-benefits-grid {

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 14px;

}


/* =========================================================
   BENEFIT CARD
========================================================= */

.dt-benefit-card {

    position: relative;

    min-height: 175px;

    display: flex;

    flex-direction: column;

    justify-content: flex-start;

    padding: 25px 22px 20px;

    background:

        linear-gradient(
            145deg,
            #ffffff,
            #f7fbff
        );

    border: 1px solid #dfe8f0;

    border-radius: 13px;

    box-shadow:

        0 8px 25px rgba(16, 47, 83, 0.055);

    overflow: hidden;

    transition: all 0.3s ease;

}


/* =========================================================
   TOP COLOR LINE
========================================================= */

.dt-benefit-card::before {

    content: "";

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    height: 4px;

    opacity: 1;

}


/* =========================================================
   BENEFIT HEADER
========================================================= */

.dt-benefit-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 10px;

}


/* =========================================================
   BENEFIT NUMBER
========================================================= */

.dt-benefit-number {

    display: block;

    margin-bottom: 10px;

    color: #102f53;

    font-size: 38px;

    line-height: 1;

    font-weight: 800;

    letter-spacing: -1px;

}


/* =========================================================
   BENEFIT TEXT
========================================================= */

.dt-benefit-text {

    display: block;

    min-height: 42px;

    color: #60758a;

    font-size: 14px;

    line-height: 1.5;

    font-weight: 600;

}


/* =========================================================
   PROGRESS AREA
========================================================= */

.dt-benefit-progress {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-top: auto;

    padding-top: 18px;

}


/* =========================================================
   PROGRESS TRACK
========================================================= */

.dt-progress-track {

    flex: 1;

    height: 6px;

    background: #dce6ef;

    border-radius: 10px;

    overflow: hidden;

}


/* =========================================================
   PROGRESS BAR
========================================================= */

.dt-progress-bar {

    height: 100%;

    border-radius: 10px;

}


/* =========================================================
   PROGRESS VALUE
========================================================= */

.dt-progress-value {

    min-width: 42px;

    color: #102f53;

    font-size: 13px;

    font-weight: 800;

    text-align: right;

}


/* =========================================================
   50% - JFS GOLD
========================================================= */

.dt-benefit-yellow::before {

    background: #ffb000;

}


.dt-benefit-yellow .dt-progress-bar {

    background: #ffb000;

    box-shadow:

        0 0 8px rgba(255, 176, 0, 0.30);

}


.dt-benefit-yellow:hover {

    border-color: rgba(255, 176, 0, 0.45);

    box-shadow:

        0 12px 30px rgba(255, 176, 0, 0.10);

}


/* =========================================================
   99.9% - JFS BLUE
========================================================= */

.dt-benefit-green::before {

    background: #0875c9;

}


.dt-benefit-green .dt-progress-bar {

    background: #0875c9;

    box-shadow:

        0 0 8px rgba(8, 117, 201, 0.30);

}


.dt-benefit-green:hover {

    border-color: rgba(8, 117, 201, 0.40);

    box-shadow:

        0 12px 30px rgba(8, 117, 201, 0.10);

}


/* =========================================================
   3X - LIGHT BLUE
========================================================= */

.dt-benefit-blue::before {

    background: #3a9be8;

}


.dt-benefit-blue .dt-progress-bar {

    background: #3a9be8;

    box-shadow:

        0 0 8px rgba(58, 155, 232, 0.25);

}


.dt-benefit-blue:hover {

    border-color: rgba(58, 155, 232, 0.40);

    box-shadow:

        0 12px 30px rgba(58, 155, 232, 0.10);

}


/* =========================================================
   24X7 - NAVY
========================================================= */

.dt-benefit-purple::before {

    background: #102f53;

}


.dt-benefit-purple .dt-progress-bar {

    background: #102f53;

    box-shadow:

        0 0 8px rgba(16, 47, 83, 0.25);

}


.dt-benefit-purple:hover {

    border-color: rgba(16, 47, 83, 0.35);

    box-shadow:

        0 12px 30px rgba(16, 47, 83, 0.10);

}


/* =========================================================
   SUPPORTING BENEFIT CARD
========================================================= */

.dt-benefit-highlight {

    position: relative;

    margin-top: 16px;

    padding: 21px 24px;

    background:

        linear-gradient(
            135deg,
            #fffaf0,
            #fffdf8
        );

    border: 1px solid rgba(255, 176, 0, 0.35);

    border-radius: 13px;

    box-shadow:

        0 6px 20px rgba(255, 176, 0, 0.05);

}


/* =========================================================
   GOLD VERTICAL LINE
========================================================= */

.dt-benefit-highlight::before {

    content: "";

    position: absolute;

    left: 0;

    top: 20px;

    bottom: 20px;

    width: 3px;

    background: #ffb000;

    border-radius: 0 4px 4px 0;

}


/* =========================================================
   HIGHLIGHT TEXT
========================================================= */

.dt-benefit-highlight span {

    display: block;

    padding-left: 3px;

    color: #b27600;

    font-size: 15px;

    line-height: 1.6;

    font-weight: 700;

}


/* =========================================================
   BOTTOM MESSAGE
========================================================= */

.dt-bottom-message {

    position: relative;

    margin-top: 58px;

    padding: 28px 35px;

    background:

        linear-gradient(
            135deg,
            #fffaf0,
            #f8fbff
        );

    border: 1px solid rgba(255, 176, 0, 0.30);

    border-radius: 14px;

    box-shadow:

        0 8px 25px rgba(16, 47, 83, 0.045);

    overflow: hidden;

}


/* =========================================================
   BOTTOM BLUE/GOLD LINE
========================================================= */

.dt-bottom-line {

    position: absolute;

    left: 0;

    top: 0;

    bottom: 0;

    width: 4px;

    background: #ffb000;

}


/* =========================================================
   BOTTOM TEXT
========================================================= */

.dt-bottom-message p {

    margin: 0;

    color: #102f53;

    font-size: 18px;

    line-height: 1.65;

    font-weight: 600;

    font-style: italic;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .digital-transformation-section {

        padding: 70px 0;

    }


    .dt-grid {

        grid-template-columns: 1fr;

        gap: 55px;

    }


    .dt-title {

        font-size: 30px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .digital-transformation-section {

        padding: 55px 0 60px;

    }


    .dt-grid {

        gap: 45px;

    }


    .dt-title {

        font-size: 27px;

        line-height: 1.2;

        margin-bottom: 22px;

    }


    /* Challenge */

    .dt-challenge-card {

        padding: 18px;

        gap: 13px;

    }


    .dt-challenge-card p {

        font-size: 14px;

        line-height: 1.6;

    }


    /* Benefits */

    .dt-benefits-grid {

        grid-template-columns: 1fr 1fr;

        gap: 10px;

    }


    .dt-benefit-card {

        min-height: 155px;

        padding: 20px 16px 17px;

    }


    .dt-benefit-number {

        font-size: 30px;

    }


    .dt-benefit-text {

        font-size: 13px;

    }


    .dt-benefit-progress {

        gap: 8px;

        padding-top: 14px;

    }


    .dt-progress-value {

        min-width: 35px;

        font-size: 11px;

    }


    /* Highlight */

    .dt-benefit-highlight {

        padding: 18px 20px;

    }


    /* Bottom */

    .dt-bottom-message {

        margin-top: 45px;

        padding: 22px 24px;

    }


    .dt-bottom-message p {

        font-size: 15px;

        line-height: 1.6;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .dt-benefits-grid {

        grid-template-columns: 1fr;

    }


    .dt-benefit-card {

        min-height: 150px;

    }


    .dt-benefit-number {

        font-size: 34px;

    }


    .dt-section-label {

        font-size: 11px;

    }

}

</style>

<section class="business-challenges-section">

    <div class="container">

        <!-- Section Heading -->
        <div class="bc-section-heading">

            <span class="bc-label">
                BUSINESS CHALLENGES
            </span>

            <h2>
                Business Challenges We Help You Overcome
            </h2>

            <p>
                Every organization faces unique challenges as technology evolves.
                Our <strong>digital transformation solutions</strong> are designed
                to solve real business problems and create measurable outcomes.
            </p>

        </div>


        <!-- Challenges Grid -->
        <div class="bc-grid">


            <!-- CARD 1 -->
            <div class="bc-card">

                <div class="bc-card-top">

                    <div class="bc-number">
                        01
                    </div>

                    <div class="bc-arrow">
                        →
                    </div>

                </div>

                <div class="bc-icon">
                    <i class="bx bx-layer"></i>
                </div>

                <h3>
                    Legacy Systems Holding You Back
                </h3>

                <p>
                    Outdated applications are expensive to maintain and difficult
                    to scale. We modernize legacy software using modern architectures
                    and cloud technologies.
                </p>

                <div class="bc-card-line"></div>

            </div>


            <!-- CARD 2 -->
            <div class="bc-card">

                <div class="bc-card-top">

                    <div class="bc-number">
                        02
                    </div>

                    <div class="bc-arrow">
                        →
                    </div>

                </div>

                <div class="bc-icon">
                    <i class="bx bx-cog"></i>
                </div>

                <h3>
                    Manual Processes Reducing Productivity
                </h3>

                <p>
                    We automate repetitive tasks using workflow automation, AI,
                    and intelligent business applications to improve efficiency.
                </p>

                <div class="bc-card-line"></div>

            </div>


            <!-- CARD 3 -->
            <div class="bc-card">

                <div class="bc-card-top">

                    <div class="bc-number">
                        03
                    </div>

                    <div class="bc-arrow">
                        →
                    </div>

                </div>

                <div class="bc-icon">
                    <i class="bx bx-user-check"></i>
                </div>

                <h3>
                    Poor Customer Experience
                </h3>

                <p>
                    We build responsive web platforms, mobile applications,
                    and digital customer experiences that increase engagement
                    and satisfaction.
                </p>

                <div class="bc-card-line"></div>

            </div>


            <!-- CARD 4 -->
            <div class="bc-card">

                <div class="bc-card-top">

                    <div class="bc-number">
                        04
                    </div>

                    <div class="bc-arrow">
                        →
                    </div>

                </div>

                <div class="bc-icon">
                    <i class="bx bx-bar-chart-alt-2"></i>
                </div>

                <h3>
                    Lack of Data Visibility
                </h3>

                <p>
                    Our data analytics and business intelligence solutions help
                    organizations make informed, data-driven decisions.
                </p>

                <div class="bc-card-line"></div>

            </div>


            <!-- CARD 5 -->
            <div class="bc-card">

                <div class="bc-card-top">

                    <div class="bc-number">
                        05
                    </div>

                    <div class="bc-arrow">
                        →
                    </div>

                </div>

                <div class="bc-icon">
                    <i class="bx bx-rocket"></i>
                </div>

                <h3>
                    Slow Software Delivery
                </h3>

                <p>
                    Through DevOps implementation and CI/CD pipelines, we reduce
                    deployment times and improve software reliability.
                </p>

                <div class="bc-card-line"></div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     BUSINESS CHALLENGES SECTION END
===================================================== -->


<style>

/* =====================================================
   BUSINESS CHALLENGES SECTION
===================================================== */

.business-challenges-section {

    position: relative;

    padding: 90px 0 100px;

    background: #ffffff;

    overflow: hidden;

}


.business-challenges-section::before {

    content: "";

    position: absolute;

    width: 420px;

    height: 420px;

    top: -180px;

    right: -150px;

    background: rgba(10, 77, 142, 0.035);

    border-radius: 50%;

    pointer-events: none;

}


.business-challenges-section .container {

    position: relative;

    z-index: 2;

}


/* =====================================================
   SECTION HEADING
===================================================== */

.bc-section-heading {

    max-width: 850px;

    margin: 0 auto 55px;

    text-align: center;

}


.bc-label {

    display: inline-block;

    margin-bottom: 12px;

    color: #0875c9;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: 1.5px;

    text-transform: uppercase;

}


.bc-section-heading h2 {

    margin: 0 0 18px;

    color: #092c55;

    font-size: 42px;

    line-height: 1.18;

    font-weight: 700;

    letter-spacing: -0.8px;

}


.bc-section-heading p {

    max-width: 760px;

    margin: 0 auto;

    color: #64748b;

    font-size: 16px;

    line-height: 1.75;

}


.bc-section-heading strong {

    color: #0875c9;

    font-weight: 600;

}


/* =====================================================
   CARDS GRID
===================================================== */

.bc-grid {

    display: grid;

    grid-template-columns: repeat(6, 1fr);

    gap: 20px;

}


/* First 3 cards */

.bc-card:nth-child(1),
.bc-card:nth-child(2),
.bc-card:nth-child(3) {

    grid-column: span 2;

}


/* Last 2 cards */

.bc-card:nth-child(4) {

    grid-column: 2 / span 2;

}


.bc-card:nth-child(5) {

    grid-column: 4 / span 2;

}


/* =====================================================
   CARD
===================================================== */

.bc-card {

    position: relative;

    min-height: 365px;

    padding: 28px 27px 30px;

    background: #ffffff;

    border: 1px solid #e6ebf1;

    border-radius: 8px;

    box-shadow:
        0 8px 30px rgba(15, 48, 80, 0.055);

    overflow: hidden;

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;

}


.bc-card:hover {

    transform: translateY(-7px);

    border-color: rgba(8, 117, 201, 0.25);

    box-shadow:
        0 18px 45px rgba(15, 48, 80, 0.12);

}


/* =====================================================
   CARD TOP
===================================================== */

.bc-card-top {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 27px;

}


.bc-number {

    color: #b8c5d2;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: 1px;

}


.bc-arrow {

    width: 34px;

    height: 34px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid #e2e8ef;

    border-radius: 50%;

    color: #0875c9;

    font-size: 17px;

    transition: all 0.3s ease;

}


.bc-card:hover .bc-arrow {

    color: #ffffff;

    background: #0875c9;

    border-color: #0875c9;

    transform: rotate(-45deg);

}


/* =====================================================
   ICON
===================================================== */

.bc-icon {

    width: 52px;

    height: 52px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 22px;

    color: #0875c9;

    background: rgba(8, 117, 201, 0.07);

    border: 1px solid rgba(8, 117, 201, 0.12);

    border-radius: 10px;

}


.bc-icon i {

    font-size: 25px;

}


/* =====================================================
   CARD TITLE
===================================================== */

.bc-card h3 {

    margin: 0 0 15px;

    color: #073b67;

    font-size: 21px;

    line-height: 1.35;

    font-weight: 600;

}


/* =====================================================
   CARD DESCRIPTION
===================================================== */

.bc-card p {

    margin: 0;

    color: #667789;

    font-size: 14px;

    line-height: 1.75;

}


/* =====================================================
   CARD BOTTOM LINE
===================================================== */

.bc-card-line {

    position: absolute;

    left: 0;

    right: 0;

    bottom: 0;

    height: 3px;

    background: #0875c9;

    transform: scaleX(0);

    transform-origin: left;

    transition: transform 0.35s ease;

}


.bc-card:hover .bc-card-line {

    transform: scaleX(1);

}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 991px) {

    .business-challenges-section {

        padding: 70px 0 80px;

    }


    .bc-section-heading h2 {

        font-size: 36px;

    }


    .bc-grid {

        grid-template-columns: repeat(2, 1fr);

    }


    .bc-card:nth-child(1),
    .bc-card:nth-child(2),
    .bc-card:nth-child(3),
    .bc-card:nth-child(4),
    .bc-card:nth-child(5) {

        grid-column: auto;

    }


    .bc-card {

        min-height: 340px;

    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 767px) {

    .business-challenges-section {

        padding: 55px 0 65px;

    }


    .bc-section-heading {

        margin-bottom: 35px;

    }


    .bc-section-heading h2 {

        font-size: 29px;

        line-height: 1.25;

    }


    .bc-section-heading p {

        font-size: 14px;

        line-height: 1.65;

    }


    .bc-grid {

        grid-template-columns: 1fr;

        gap: 15px;

    }


    .bc-card:nth-child(1),
    .bc-card:nth-child(2),
    .bc-card:nth-child(3),
    .bc-card:nth-child(4),
    .bc-card:nth-child(5) {

        grid-column: auto;

    }


    .bc-card {

        min-height: auto;

        padding: 23px;

    }


    .bc-card h3 {

        font-size: 19px;

    }


    .bc-card p {

        font-size: 14px;

    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 480px) {

    .bc-section-heading h2 {

        font-size: 26px;

    }


    .bc-label {

        font-size: 11px;

    }


    .bc-card {

        padding: 21px;

    }


    .bc-icon {

        width: 46px;

        height: 46px;

    }

}

</style>

<!-- =========================================================
     WHY CHOOSE JFS TECHNOLOGIES
========================================================= -->

<section class="jfs-why-section">

    <div class="container">

        <!-- =====================================================
             SECTION HEADING
        ====================================================== -->

        <div class="jfs-why-heading">

            <span class="jfs-why-label">
                WHY CHOOSE JFS TECHNOLOGIES
            </span>

            <h2>
                Why Businesses Choose JFS Technologies
            </h2>

            <p>
                Choosing the right digital transformation partner is critical
                to achieving long-term success. At JFS Technologies, we combine
                strategic consulting with technical expertise to deliver
                scalable, secure, and future-ready digital solutions.
            </p>

        </div>


        <!-- =====================================================
             MAIN RADIAL AREA
        ====================================================== -->

        <div class="jfs-why-layout">


            <!-- =================================================
                 LEFT SIDE
            ================================================== -->

            <div class="jfs-side jfs-side-left">


                <!-- LEFT ITEM 01 -->

                <div class="jfs-side-item jfs-left-item-01">

                    <div class="jfs-side-text">

                        <h3>
                            Experienced Team
                        </h3>

                        <p>
                            Software developers, cloud engineers, and
                            technology consultants.
                        </p>

                    </div>

                    <div class="jfs-side-number">
                        01
                    </div>

                </div>


                <!-- LEFT ITEM 07 -->

                <div class="jfs-side-item jfs-left-item-07">

                    <div class="jfs-side-text">

                        <h3>
                            Long-Term Support
                        </h3>

                        <p>
                            Long-term support and continuous improvement
                            services.
                        </p>

                    </div>

                    <div class="jfs-side-number">
                        07
                    </div>

                </div>


                <!-- LEFT ITEM 06 -->

                <div class="jfs-side-item jfs-left-item-06">

                    <div class="jfs-side-text">

                        <h3>
                            Transparent Communication
                        </h3>

                        <p>
                            Transparent communication and dedicated
                            project management.
                        </p>

                    </div>

                    <div class="jfs-side-number">
                        06
                    </div>

                </div>


                <!-- LEFT ITEM 05 -->

                <div class="jfs-side-item jfs-left-item-05">

                    <div class="jfs-side-text">

                        <h3>
                            Security & Performance
                        </h3>

                        <p>
                            Focus on security, compliance, and
                            performance optimization.
                        </p>

                    </div>

                    <div class="jfs-side-number">
                        05
                    </div>

                </div>

            </div>


            <!-- =================================================
                 CENTER
            ================================================== -->

            <div class="jfs-why-center">

                <!-- Outer circle -->

                <div class="jfs-center-ring jfs-ring-one"></div>

                <div class="jfs-center-ring jfs-ring-two"></div>


                <!-- Center circle -->

                <div class="jfs-center-main">

                    <div class="jfs-center-icon">
                        <i class="bx bx-buildings"></i>
                    </div>

                    <strong>
                        JFS
                    </strong>

                    <span>
                        TECHNOLOGIES
                    </span>

                    <small>
                        FUTURE-READY
                    </small>

                </div>

            </div>


            <!-- =================================================
                 RIGHT SIDE
            ================================================== -->

            <div class="jfs-side jfs-side-right">


                <!-- RIGHT ITEM 02 -->

                <div class="jfs-side-item jfs-right-item-02">

                    <div class="jfs-side-number">
                        02
                    </div>

                    <div class="jfs-side-text">

                        <h3>
                            Technical Expertise
                        </h3>

                        <p>
                            Application modernization, AI integration,
                            cloud migration, and enterprise software.
                        </p>

                    </div>

                </div>


                <!-- RIGHT ITEM 03 -->

                <div class="jfs-side-item jfs-right-item-03">

                    <div class="jfs-side-number">
                        03
                    </div>

                    <div class="jfs-side-text">

                        <h3>
                            Agile Development
                        </h3>

                        <p>
                            Agile development methodology for faster
                            project delivery.
                        </p>

                    </div>

                </div>


                <!-- RIGHT ITEM 04 -->

                <div class="jfs-side-item jfs-right-item-04">

                    <div class="jfs-side-number">
                        04
                    </div>

                    <div class="jfs-side-text">

                        <h3>
                            Scalable Solutions
                        </h3>

                        <p>
                            Scalable solutions tailored for startups,
                            SMEs, and enterprises.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================================
             BOTTOM MESSAGE
        ====================================================== -->

      

    </div>

</section>


<style>

/* =========================================================
   MAIN SECTION
========================================================= */

.jfs-why-section {

    position: relative;

    padding: 95px 0 90px;

    background: #ffffff;

    overflow: hidden;

}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

.jfs-why-section::before {

    content: "";

    position: absolute;

    width: 500px;

    height: 500px;

    top: -260px;

    left: -220px;

    background: rgba(8, 117, 201, 0.035);

    border-radius: 50%;

    pointer-events: none;

}


.jfs-why-section::after {

    content: "";

    position: absolute;

    width: 400px;

    height: 400px;

    right: -220px;

    bottom: -220px;

    background: rgba(255, 184, 0, 0.035);

    border-radius: 50%;

    pointer-events: none;

}


.jfs-why-section .container {

    position: relative;

    z-index: 2;

}


/* =========================================================
   HEADING
========================================================= */

.jfs-why-heading {

    max-width: 900px;

    margin: 0 auto 65px;

    text-align: center;

}


.jfs-why-label {

    display: inline-block;

    margin-bottom: 12px;

    color: #0875c9;

    font-size: 13px;

    line-height: 1;

    font-weight: 800;

    letter-spacing: 1.8px;

    text-transform: uppercase;

}


.jfs-why-heading h2 {

    margin: 0 0 18px;

    color: #102f53;

    font-size: 46px;

    line-height: 1.15;

    font-weight: 800;

    letter-spacing: -1px;

}


.jfs-why-heading p {

    max-width: 790px;

    margin: 0 auto;

    color: #64748b;

    font-size: 16px;

    line-height: 1.75;

}


/* =========================================================
   MAIN 3 COLUMN LAYOUT

   LEFT       CENTER       RIGHT
   4 ITEMS     CIRCLE       3 ITEMS
========================================================= */

.jfs-why-layout {

    position: relative;

    display: grid;

    grid-template-columns: 1fr 310px 1fr;

    column-gap: 65px;

    align-items: center;

    max-width: 1200px;

    min-height: 590px;

    margin: 0 auto;

}


/* =========================================================
   LEFT / RIGHT SIDES
========================================================= */

.jfs-side {

    position: relative;

    height: 590px;

    display: flex;

    flex-direction: column;

    justify-content: space-between;

}


/* =========================================================
   SIDE ITEM
========================================================= */

.jfs-side-item {

    position: relative;

    width: 100%;

    min-height: 105px;

    display: flex;

    align-items: center;

}


/* =========================================================
   LEFT SIDE
========================================================= */

.jfs-side-left {

    text-align: right;

}


.jfs-side-left .jfs-side-item {

    justify-content: flex-end;

}


.jfs-side-left .jfs-side-text {

    padding-right: 20px;

}


.jfs-side-text {

    flex: 1;

}


.jfs-side-text h3 {

    margin: 0 0 8px;

    color: #102f53;

    font-size: 20px;

    line-height: 1.3;

    font-weight: 750;

}


.jfs-side-text p {

    max-width: 330px;

    margin: 0;

    color: #708196;

    font-size: 14px;

    line-height: 1.7;

}


/* =========================================================
   NUMBER CIRCLE
========================================================= */

.jfs-side-number {

    position: relative;

    z-index: 5;

    flex: 0 0 52px;

    width: 52px;

    height: 52px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #0875c9;

    border: 4px solid #ffffff;

    border-radius: 50%;

    box-shadow:

        0 6px 18px rgba(8, 117, 201, 0.22);

    font-size: 12px;

    font-weight: 800;

    transition: all 0.3s ease;

}


/* Yellow dot */

.jfs-side-number::after {

    content: "";

    position: absolute;

    right: -2px;

    bottom: -2px;

    width: 12px;

    height: 12px;

    background: #ffb800;

    border: 2px solid #ffffff;

    border-radius: 50%;

}


/* =========================================================
   RIGHT SIDE
========================================================= */

.jfs-side-right {

    text-align: left;

}


.jfs-side-right .jfs-side-item {

    justify-content: flex-start;

}


.jfs-side-right .jfs-side-text {

    padding-left: 20px;

}


/* =========================================================
   CONNECTING LINES
========================================================= */


/* LEFT LINE */

.jfs-side-left .jfs-side-item::after {

    content: "";

    position: absolute;

    right: -68px;

    top: 50%;

    width: 68px;

    height: 1px;

    background: #cbd9e5;

    transform-origin: right center;

}


/* RIGHT LINE */

.jfs-side-right .jfs-side-item::before {

    content: "";

    position: absolute;

    left: -68px;

    top: 50%;

    width: 68px;

    height: 1px;

    background: #cbd9e5;

    transform-origin: left center;

}


/* Different line angles */

.jfs-left-item-01::after {

    transform: rotate(13deg);

}


.jfs-left-item-07::after {

    transform: rotate(4deg);

}


.jfs-left-item-06::after {

    transform: rotate(-4deg);

}


.jfs-left-item-05::after {

    transform: rotate(-13deg);

}


.jfs-right-item-02::before {

    transform: rotate(-13deg);

}


.jfs-right-item-03::before {

    transform: rotate(-4deg);

}


.jfs-right-item-04::before {

    transform: rotate(4deg);

}


/* =========================================================
   CENTER AREA
========================================================= */

.jfs-why-center {

    position: relative;

    width: 310px;

    height: 310px;

    display: flex;

    align-items: center;

    justify-content: center;

}


/* =========================================================
   OUTER RINGS
========================================================= */

.jfs-center-ring {

    position: absolute;

    border-radius: 50%;

}


.jfs-ring-one {

    width: 310px;

    height: 310px;

    border: 1px dashed #c6d8e6;

    animation: jfsRotate 30s linear infinite;

}


.jfs-ring-two {

    width: 275px;

    height: 275px;

    border: 2px solid rgba(255, 184, 0, 0.20);

}


/* =========================================================
   CENTER CIRCLE
========================================================= */

.jfs-center-main {

    position: relative;

    z-index: 5;

    width: 235px;

    height: 235px;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background:

        linear-gradient(

            145deg,

            #102f5c 0%,

            #0875c9 100%

        );

    border-radius: 50%;

    box-shadow:

        0 25px 55px rgba(8, 73, 125, 0.24);

}


/* =========================================================
   CENTER ICON
========================================================= */

.jfs-center-icon {

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 12px;

    color: #102f53;

    background: #ffb800;

    border-radius: 50%;

}


.jfs-center-icon i {

    font-size: 24px;

}


/* =========================================================
   CENTER TEXT
========================================================= */

.jfs-center-main strong {

    font-size: 32px;

    line-height: 1;

    font-weight: 800;

    letter-spacing: 1px;

}


.jfs-center-main span {

    margin-top: 7px;

    color: rgba(255,255,255,0.9);

    font-size: 10px;

    font-weight: 600;

    letter-spacing: 2.5px;

}


.jfs-center-main small {

    margin-top: 15px;

    padding: 6px 14px;

    color: #ffffff;

    background: rgba(255,255,255,0.10);

    border: 1px solid rgba(255,255,255,0.22);

    border-radius: 20px;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1.2px;

}


/* =========================================================
   HOVER EFFECT
========================================================= */

.jfs-side-item:hover .jfs-side-number {

    color: #102f53;

    background: #ffb800;

    transform: scale(1.1);

}


.jfs-side-item:hover .jfs-side-text h3 {

    color: #0875c9;

}


.jfs-side-number {

    transition: all 0.3s ease;

}


.jfs-side-text h3 {

    transition: color 0.3s ease;

}


/* =========================================================
   CENTER ANIMATION
========================================================= */

@keyframes jfsRotate {

    from {

        transform: rotate(0deg);

    }

    to {

        transform: rotate(360deg);

    }

}


/* =========================================================
   BOTTOM COMMITMENT
========================================================= */

.jfs-why-bottom {

    max-width: 950px;

    min-height: 82px;

    display: flex;

    align-items: center;

    gap: 20px;

    margin: 35px auto 0;

    padding: 18px 25px;

    background: #f3f9fd;

    border: 1px solid #d9eaf5;

    border-radius: 9px;

}


/* Bottom icon */

.jfs-bottom-icon {

    flex: 0 0 48px;

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #0875c9;

    border-radius: 50%;

}


.jfs-bottom-icon i {

    font-size: 24px;

}


/* Bottom text */

.jfs-bottom-text {

    flex: 1;

}


.jfs-bottom-text span {

    display: block;

    margin-bottom: 5px;

    color: #0875c9;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 1.5px;

}


.jfs-bottom-text h3 {

    margin: 0;

    color: #102f53;

    font-size: 19px;

    line-height: 1.4;

    font-weight: 700;

}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1400px) {

    .jfs-why-layout {

        max-width: 1250px;

        grid-template-columns: 1fr 330px 1fr;

        column-gap: 80px;

    }


    .jfs-side-text h3 {

        font-size: 21px;

    }


    .jfs-side-text p {

        font-size: 14px;

    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .jfs-why-heading h2 {

        font-size: 40px;

    }


    .jfs-why-layout {

        grid-template-columns: 1fr 270px 1fr;

        column-gap: 40px;

        max-width: 100%;

    }


    .jfs-why-center {

        width: 270px;

        height: 270px;

    }


    .jfs-ring-one {

        width: 270px;

        height: 270px;

    }


    .jfs-ring-two {

        width: 240px;

        height: 240px;

    }


    .jfs-center-main {

        width: 205px;

        height: 205px;

    }


    .jfs-side-text h3 {

        font-size: 17px;

    }


    .jfs-side-text p {

        font-size: 12px;

    }


    .jfs-side-number {

        flex-basis: 47px;

        width: 47px;

        height: 47px;

    }


    .jfs-side-left .jfs-side-item::after {

        right: -40px;

        width: 40px;

    }


    .jfs-side-right .jfs-side-item::before {

        left: -40px;

        width: 40px;

    }

}


/* =========================================================
   TABLET / SMALL SCREEN
========================================================= */

@media (max-width: 850px) {

    .jfs-why-layout {

        display: grid;

        grid-template-columns: 1fr;

        gap: 25px;

        min-height: auto;

    }


    .jfs-why-center {

        grid-row: 1;

        width: 260px;

        height: 260px;

        margin: 0 auto 20px;

    }


    .jfs-side-left {

        grid-row: 2;

    }


    .jfs-side-right {

        grid-row: 3;

    }


    .jfs-side {

        height: auto;

        gap: 14px;

    }


    .jfs-side-item {

        min-height: 90px;

        padding: 16px 18px;

        background: #ffffff;

        border: 1px solid #e4ebf1;

        border-radius: 9px;

        box-shadow: 0 5px 20px rgba(15,48,80,0.05);

    }


    .jfs-side-left {

        text-align: left;

    }


    .jfs-side-left .jfs-side-item {

        justify-content: flex-start;

    }


    .jfs-side-left .jfs-side-text {

        order: 2;

        padding-right: 0;

        padding-left: 16px;

    }


    .jfs-side-left .jfs-side-number {

        order: 1;

    }


    .jfs-side-right .jfs-side-text {

        padding-left: 16px;

    }


    .jfs-side-left .jfs-side-item::after,

    .jfs-side-right .jfs-side-item::before {

        display: none;

    }


    .jfs-ring-one {

        width: 260px;

        height: 260px;

    }


    .jfs-ring-two {

        width: 230px;

        height: 230px;

    }


    .jfs-center-main {

        width: 200px;

        height: 200px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .jfs-why-section {

        padding: 60px 0 65px;

    }


    .jfs-why-heading {

        margin-bottom: 40px;

    }


    .jfs-why-label {

        font-size: 11px;

        letter-spacing: 1.3px;

    }


    .jfs-why-heading h2 {

        font-size: 30px;

        line-height: 1.2;

    }


    .jfs-why-heading p {

        font-size: 14px;

        line-height: 1.7;

    }


    .jfs-why-center {

        width: 225px;

        height: 225px;

    }


    .jfs-ring-one {

        width: 225px;

        height: 225px;

    }


    .jfs-ring-two {

        width: 200px;

        height: 200px;

    }


    .jfs-center-main {

        width: 175px;

        height: 175px;

    }


    .jfs-center-icon {

        width: 40px;

        height: 40px;

        margin-bottom: 9px;

    }


    .jfs-center-icon i {

        font-size: 19px;

    }


    .jfs-center-main strong {

        font-size: 25px;

    }


    .jfs-center-main span {

        font-size: 8px;

        letter-spacing: 2px;

    }


    .jfs-center-main small {

        margin-top: 10px;

        padding: 5px 10px;

        font-size: 7px;

    }


    .jfs-side-item {

        min-height: 88px;

        padding: 15px;

    }


    .jfs-side-number {

        flex-basis: 43px;

        width: 43px;

        height: 43px;

        font-size: 10px;

    }


    .jfs-side-text h3 {

        font-size: 17px;

        margin-bottom: 5px;

    }


    .jfs-side-text p {

        font-size: 12px;

        line-height: 1.6;

    }


    .jfs-why-bottom {

        align-items: flex-start;

        gap: 13px;

        margin-top: 25px;

        padding: 18px;

    }


    .jfs-bottom-icon {

        flex-basis: 42px;

        width: 42px;

        height: 42px;

    }


    .jfs-bottom-icon i {

        font-size: 20px;

    }


    .jfs-bottom-text h3 {

        font-size: 16px;

    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .jfs-why-heading h2 {

        font-size: 27px;

    }


    .jfs-why-heading p {

        font-size: 13px;

    }


    .jfs-side-text h3 {

        font-size: 16px;

    }


    .jfs-side-text p {

        font-size: 11px;

    }


    .jfs-why-bottom {

        padding: 15px;

    }


    .jfs-bottom-text h3 {

        font-size: 15px;

    }

}

</style>
<!-- =========================================================
     DIGITAL MARKETING PLANS SECTION
========================================================= -->

<section class="jfs-plans-section">

    <div class="container">

        <!-- =====================================================
             SECTION HEADING
        ====================================================== -->

        <div class="jfs-plans-heading">

            <span class="jfs-plans-label">
                DIGITAL MARKETING PLANS
            </span>

            <h2>
                Choose the Right Plan for Your Business
            </h2>

            <p>
                Flexible digital marketing packages designed to help startups,
                SMEs, and enterprises achieve their marketing goals.
            </p>

        </div>


        <!-- =====================================================
             PLANS
        ====================================================== -->

        <div class="jfs-plans-grid">


            <!-- =================================================
                 STANDARD PLAN
            ================================================== -->

            <div class="jfs-plan-card">

                <div class="jfs-plan-icon">
                    <i class="bx bx-rocket"></i>
                </div>

                <h3>
                    Standard Plan
                </h3>

                <p class="jfs-plan-description">
                    Ideal for small businesses starting their digital presence.
                </p>


                <div class="jfs-plan-divider"></div>


                <div class="jfs-plan-subtitle">
                    What's Included
                </div>


                <ul class="jfs-plan-features">

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Social media page setup
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Basic post creation
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Essential social media management
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Consistent brand presence
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Suitable for startups & small businesses
                    </li>

                </ul>


                <a href="#contact" class="jfs-plan-btn">
                    Get Started
                    <i class="bx bx-right-arrow-alt"></i>
                </a>


                <div class="jfs-plan-note">
                    Flexible marketing support
                </div>

            </div>


            <!-- =================================================
                 PROFESSIONAL PLAN - FEATURED
            ================================================== -->

            <div class="jfs-plan-card jfs-plan-featured">

                <div class="jfs-popular-badge">
                    MOST POPULAR
                </div>


                <div class="jfs-plan-icon">
                    <i class="bx bx-bar-chart-alt-2"></i>
                </div>

                <h3>
                    Professional Plan
                </h3>

                <p class="jfs-plan-description">
                    Perfect for businesses looking to grow engagement and reach.
                </p>


                <div class="jfs-plan-divider"></div>


                <div class="jfs-plan-subtitle">
                    Everything in Standard, plus
                </div>


                <ul class="jfs-plan-features">

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Everything in Standard Plan
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Increased posting frequency
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Engaging video content
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Expanded social media sharing
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Improved audience engagement
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Ideal for growing businesses
                    </li>

                </ul>


                <a href="#contact" class="jfs-plan-btn">
                    Get Started
                    <i class="bx bx-right-arrow-alt"></i>
                </a>


                <div class="jfs-plan-note">
                    Designed for business growth
                </div>

            </div>


            <!-- =================================================
                 ENTERPRISE PLAN
            ================================================== -->

            <div class="jfs-plan-card">

                <div class="jfs-plan-icon">
                    <i class="bx bx-buildings"></i>
                </div>

                <h3>
                    Enterprise Plan
                </h3>

                <p class="jfs-plan-description">
                    Comprehensive solutions for large organizations and brands.
                </p>


                <div class="jfs-plan-divider"></div>


                <div class="jfs-plan-subtitle">
                    Advanced Marketing Solutions
                </div>


                <ul class="jfs-plan-features">

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Everything in Professional Plan
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Advanced social media strategy
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Multi-platform video content
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Higher posting frequency
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Performance tracking & analytics
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Dedicated campaign planning
                    </li>

                    <li>
                        <span class="jfs-check">
                            <i class="bx bx-check"></i>
                        </span>
                        Best for enterprises & large businesses
                    </li>

                </ul>


                <a href="#contact" class="jfs-plan-btn">
                    Get Started
                    <i class="bx bx-right-arrow-alt"></i>
                </a>


                <div class="jfs-plan-note">
                    Built for large-scale growth
                </div>

            </div>

        </div>


        <!-- =====================================================
             BOTTOM MESSAGE
        ====================================================== -->

        

    </div>

</section>


<style>

/* =========================================================
   MAIN SECTION
========================================================= */

.jfs-plans-section {

    position: relative;

    padding: 90px 0 95px;

    background:
        linear-gradient(
            180deg,
            #f7f9ff 0%,
            #ffffff 100%
        );

    overflow: hidden;

}


/* Background decoration */

.jfs-plans-section::before {

    content: "";

    position: absolute;

    width: 500px;

    height: 500px;

    top: -300px;

    left: -180px;

    background: rgba(8, 117, 201, 0.045);

    border-radius: 50%;

}


.jfs-plans-section::after {

    content: "";

    position: absolute;

    width: 400px;

    height: 400px;

    right: -200px;

    bottom: -250px;

    background: rgba(255, 184, 0, 0.035);

    border-radius: 50%;

}


.jfs-plans-section .container {

    position: relative;

    z-index: 2;

}


/* =========================================================
   HEADING
========================================================= */

.jfs-plans-heading {

    max-width: 780px;

    margin: 0 auto 55px;

    text-align: center;

}


.jfs-plans-label {

    display: inline-block;

    margin-bottom: 12px;

    color: #0875c9;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 1.5px;

    text-transform: uppercase;

}


.jfs-plans-heading h2 {

    margin: 0 0 15px;

    color: #17233d;

    font-size: 42px;

    line-height: 1.2;

    font-weight: 800;

    letter-spacing: -0.8px;

}


.jfs-plans-heading p {

    max-width: 700px;

    margin: 0 auto;

    color: #718096;

    font-size: 15px;

    line-height: 1.7;

}


/* =========================================================
   PLANS GRID
========================================================= */

.jfs-plans-grid {

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 18px;

    align-items: stretch;

}


/* =========================================================
   PLAN CARD
========================================================= */

.jfs-plan-card {

    position: relative;

    display: flex;

    flex-direction: column;

    min-height: 535px;

    padding: 32px 28px 25px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 12px;

    box-shadow:
        0 8px 30px rgba(15, 45, 80, 0.07);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;

}


/* Hover */

.jfs-plan-card:hover {

    transform: translateY(-7px);

    border-color: #c6dff1;

    box-shadow:
        0 18px 40px rgba(15, 55, 90, 0.12);

}


/* =========================================================
   PLAN ICON
========================================================= */

.jfs-plan-icon {

    width: 50px;

    height: 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 20px;

    color: #0875c9;

    background: #e9f4fc;

    border: 1px solid #d7eaf8;

    border-radius: 10px;

}


.jfs-plan-icon i {

    font-size: 25px;

}


/* =========================================================
   PLAN TITLE
========================================================= */

.jfs-plan-card h3 {

    margin: 0 0 10px;

    color: #102f53;

    font-size: 22px;

    line-height: 1.3;

    font-weight: 700;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.jfs-plan-description {

    min-height: 55px;

    margin: 0;

    color: #748397;

    font-size: 13px;

    line-height: 1.65;

}


/* =========================================================
   DIVIDER
========================================================= */

.jfs-plan-divider {

    width: 100%;

    height: 1px;

    margin: 20px 0;

    background: #e9edf2;

}


/* =========================================================
   SUBTITLE
========================================================= */

.jfs-plan-subtitle {

    margin-bottom: 15px;

    color: #102f53;

    font-size: 13px;

    font-weight: 700;

}


/* =========================================================
   FEATURES
========================================================= */

.jfs-plan-features {

    display: flex;

    flex-direction: column;

    gap: 11px;

    margin: 0;

    padding: 0;

    list-style: none;

}


.jfs-plan-features li {

    display: flex;

    align-items: flex-start;

    gap: 9px;

    color: #596d80;

    font-size: 13px;

    line-height: 1.45;

}


/* Check */

.jfs-check {

    flex: 0 0 18px;

    width: 18px;

    height: 18px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    margin-top: -1px;

    color: #0875c9;

    background: #e9f5fd;

    border-radius: 5px;

}


.jfs-check i {

    font-size: 13px;

    font-weight: 700;

}


/* =========================================================
   BUTTON
========================================================= */

.jfs-plan-btn {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    width: 100%;

    margin-top: auto;

    padding: 12px 18px;

    color: #ffffff;

    background: #0875c9;

    border: 1px solid #0875c9;

    border-radius: 25px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none;

    transition: all 0.3s ease;

}


.jfs-plan-btn i {

    font-size: 17px;

}


.jfs-plan-btn:hover {

    color: #ffffff;

    background: #075f9f;

    border-color: #075f9f;

}


/* =========================================================
   NOTE
========================================================= */

.jfs-plan-note {

    margin-top: 10px;

    color: #9aa6b2;

    font-size: 11px;

    text-align: center;

}


/* =========================================================
   PROFESSIONAL - FEATURED CARD
========================================================= */

.jfs-plan-featured {

    margin-top: -18px;

    padding-top: 45px;

    color: #ffffff;

    background:
        linear-gradient(
            145deg,
            #145fe5,
            #3150e8
        );

    border-color: #3150e8;

    box-shadow:
        0 18px 45px rgba(30, 80, 220, 0.25);

}


/* Featured hover */

.jfs-plan-featured:hover {

    transform: translateY(-10px);

    box-shadow:
        0 25px 55px rgba(30, 80, 220, 0.30);

}


/* Featured icon */

.jfs-plan-featured .jfs-plan-icon {

    color: #3150e8;

    background: #ffffff;

    border-color: #ffffff;

}


/* Featured title */

.jfs-plan-featured h3 {

    color: #ffffff;

}


/* Featured description */

.jfs-plan-featured .jfs-plan-description {

    color: rgba(255, 255, 255, 0.80);

}


/* Featured divider */

.jfs-plan-featured .jfs-plan-divider {

    background: rgba(255, 255, 255, 0.20);

}


/* Featured subtitle */

.jfs-plan-featured .jfs-plan-subtitle {

    color: #ffffff;

}


/* Featured feature text */

.jfs-plan-featured .jfs-plan-features li {

    color: rgba(255, 255, 255, 0.90);

}


/* Featured check */

.jfs-plan-featured .jfs-check {

    color: #3150e8;

    background: #ffffff;

}


/* Featured button */

.jfs-plan-featured .jfs-plan-btn {

    color: #3150e8;

    background: #ffffff;

    border-color: #ffffff;

}


.jfs-plan-featured .jfs-plan-btn:hover {

    color: #ffffff;

    background: #ffb800;

    border-color: #ffb800;

}


/* Featured note */

.jfs-plan-featured .jfs-plan-note {

    color: rgba(255, 255, 255, 0.65);

}


/* =========================================================
   POPULAR BADGE
========================================================= */

.jfs-popular-badge {

    position: absolute;

    top: 0;

    left: 50%;

    transform: translateX(-50%);

    padding: 6px 18px;

    color: #132f55;

    background: #ffb800;

    border-radius: 0 0 8px 8px;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 0.8px;

    white-space: nowrap;

}


/* =========================================================
   BOTTOM CTA
========================================================= */

.jfs-plans-bottom {

    display: flex;

    align-items: center;

    gap: 20px;

    margin-top: 28px;

    padding: 23px 27px;

    background: #eef7fd;

    border: 1px solid #d7eaf6;

    border-radius: 10px;

}


/* Icon */

.jfs-plans-bottom-icon {

    flex: 0 0 48px;

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

    background: #0875c9;

    border-radius: 10px;

}


.jfs-plans-bottom-icon i {

    font-size: 24px;

}


/* Content */

.jfs-plans-bottom-content {

    flex: 1;

}


.jfs-plans-bottom-content span {

    display: block;

    margin-bottom: 4px;

    color: #0875c9;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 1.3px;

}


.jfs-plans-bottom-content h4 {

    margin: 0;

    color: #102f53;

    font-size: 18px;

    font-weight: 700;

}


/* Button */

.jfs-plans-bottom-btn {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 11px 20px;

    color: #ffffff;

    background: #0875c9;

    border-radius: 22px;

    font-size: 12px;

    font-weight: 600;

    text-decoration: none;

    white-space: nowrap;

    transition: all 0.3s ease;

}


.jfs-plans-bottom-btn:hover {

    color: #132f55;

    background: #ffb800;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .jfs-plans-section {

        padding: 70px 0 80px;

    }


    .jfs-plans-heading h2 {

        font-size: 36px;

    }


    .jfs-plans-grid {

        grid-template-columns: 1fr 1fr;

    }


    .jfs-plan-featured {

        margin-top: 0;

    }


    .jfs-plan-card:last-child {

        grid-column: 1 / -1;

        max-width: 50%;

        margin: 0 auto;

        width: 100%;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .jfs-plans-section {

        padding: 55px 0 65px;

    }


    .jfs-plans-heading {

        margin-bottom: 35px;

    }


    .jfs-plans-heading h2 {

        font-size: 29px;

        line-height: 1.25;

    }


    .jfs-plans-heading p {

        font-size: 14px;

        line-height: 1.65;

    }


    .jfs-plans-grid {

        grid-template-columns: 1fr;

        gap: 18px;

    }


    .jfs-plan-card {

        min-height: auto;

        padding: 28px 23px 24px;

    }


    .jfs-plan-featured {

        margin-top: 5px;

        padding-top: 40px;

    }


    .jfs-plan-card:last-child {

        grid-column: auto;

        max-width: none;

    }


    .jfs-plan-description {

        min-height: auto;

    }


    .jfs-plans-bottom {

        align-items: flex-start;

        padding: 20px;

    }


    .jfs-plans-bottom-btn {

        display: none;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .jfs-plans-heading h2 {

        font-size: 26px;

    }


    .jfs-plans-label {

        font-size: 11px;

    }


    .jfs-plan-card h3 {

        font-size: 20px;

    }


    .jfs-plan-features li {

        font-size: 12px;

    }


    .jfs-plans-bottom-content h4 {

        font-size: 16px;

    }

}

</style>

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

<!-- <div class="security-area pt-100 pb-70">
	<div class="container" data-aos="fade-up" data-aos-duration="500">
		<div class="section-title text-center">
		    <span class="sp-color2">Plan Descriptions</span>
		    <h2 title="Choose the Best Plan For The Digital Transformation Management Consulting">Choose the Best Plan For Your Business</h2>
		</div>
		<div class="row pt-45">
		    <div class="col-lg-4 col-sm-6">
		        <div class="security-card">
                    <i class="flaticon-cyber-security"></i>
                    <h3>Standard Plan</h3>
                    <p>Ideal for small businesses looking to establish a solid social media presence. This plan includes basic features such as post creation, page setups, and essential social media management.</p>
                </div>
		    </div>
		    <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-computer"></i>
                    <h3>Professional Plan</h3>
                    <p>Designed for businesses seeking to boost engagement and visibility, this plan provides more frequent posts, captivating video content, and expanded group sharing to reach a wider audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-effective"></i>
                    <h3>Enterprise Plan</h3>
                    <p>Ideal for larger organizations seeking robust social media strategies, this plan offers advanced features such as higher posting frequency, multi-platform video content, and detailed performance analytics.</p>
                </div>
            </div>
		</div>
	</div>
</div> -->


<div class="about-area about-bg2 pt-5 pb-2">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="500">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/about/about-img4.png" alt="Digital Transformation Services Management Consulting">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Are You Ready for the Transformation?</h2>
                        <p>Through the integration of cutting-edge digital technology, our solutions have the potential to revolutionize your business processes. From harnessing the capabilities of Data Science Services and Data Practice, to streamlining Application Modernisation consulting services and perfecting Infrastructure Management, we are your trusted partner in facilitating a seamless transition towards a digital future.</p>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area pt-80 pb-70">
    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2 title="Frequently Asked Questions for Digital transformation service">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is Digital Transformation Services Management Consultingn?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Digital transformation involves leveraging digital technologies to modernize business processes, enhance customer experiences, and improve operational efficiency. It is a holistic approach to integrating technology into every aspect of your business.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can JFS Technologies help with digital transformation services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We provide tailored solutions across key areas such as Data Science, AR/VR, Infrastructure Management, and Application Modernization to address unique business challenges, enabling you to stay competitive and future-ready.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Which industries can benefit from digital transformation services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Our digital transformation services for industries, including healthcare, retail, manufacturing, finance, education, and more.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How long does a digital transformation project typically take?
                                        </a>
                                        <div class="accordion-content">
                                            <p>The timeline depends on the scope and complexity of the project. We assess your business needs and define a roadmap to ensure timely and effective implementation.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can I choose specific services based on my business needs?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes, our services are modular. You can select specific subservices like Data Science or AR/VR, depending on your transformation goals.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Do you provide post-implementation support?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes, we offer ongoing support and maintenance to ensure the solutions implemented continue to deliver value.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can I get started with JFS Technologies’ digital transformation services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>You can reach out to us through our website’s contact form or schedule a consultation to discuss your business requirements and explore suitable solutions.</p>
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
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Digital Transformation Services Management Consulting">
				</div>
			</div>
        </div>
    </div>
</div>
@endsection