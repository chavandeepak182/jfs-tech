@extends('frontend.layouts.header')

@section('title', "Exciting Careers at JFS | Join Our Innovative Team Today")
@section('description', "Explore exciting career opportunities at JFS! Join our innovative team and contribute to cutting-edge solutions in software development and digital marketing.")
@section('keywords', "Careers at JFS")

@section('canonical')
<link rel="alternate" href="https://jfstechnologies.com/careers" hreflang="en-in" />
<link rel="canonical" href="https://jfstechnologies.com/careers" />
<meta name="robots" content="index, follow">
@endsection

@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/careers.jpg);">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1 class="invisible">Experience Work-Life Balance & Growth at JFS Technologies</h1>
            <p class="text-white"></p>
            <div class="banner-btn invisible">
                <a href="#job-openings" class="default-btn btn-bg-one border-radius-50">Current Openings <i class="bx bx-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ====== NEW SECTION: image + text (blue theme) ====== -->
<section class="jfs-career-highlight">
  <div class="container">
    <div class="highlight-grid">
      <div class="highlight-image" data-aos="fade-right">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="JFS team collaboration" />
      </div>
      <div class="highlight-content" data-aos="fade-left">
        <span class="jfs-career-label"><i class="bx bx-rocket" style="margin-right:6px;"></i> GROW WITH US</span>
        <h2>Grow Your Career <span>With JFS Technology</span></h2>
        <p>At JFS Technology, we believe great people build great businesses. We foster a culture of collaboration, innovation and continuous growth, empowering every team member to make a meaningful impact in the real estate industry.</p>
        <div class="highlight-features">
          <div class="feature-item">
            <div class="feature-icon"><i class="bx bx-trending-up"></i></div>
            <div><strong>01 Grow With Us</strong><span>Build your skills and grow alongside an ambitious real estate team.</span></div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="bx bx-award"></i></div>
            <div><strong>02 Get Recognised</strong><span>Your performance, ideas and contribution are valued and rewarded.</span></div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="bx bx-bulb"></i></div>
            <div><strong>03 Make an Impact</strong><span>Work on meaningful projects that shape real estate opportunities.</span></div>
          </div>
        </div>
        <a href="#job-openings" class="highlight-btn">Explore Openings <i class="bx bx-right-arrow-alt"></i></a>
      </div>
    </div>
  </div>
</section>
  <style>
  
    .inner-banner {
      background-size: cover;
      background-position: center;
      padding: 90px 0 70px;
      position: relative;
    }
    .inner-banner::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(11, 47, 99, 0.30);
      z-index: 1;
    }
    .inner-banner .container {
      position: relative;
      z-index: 2;
    }
    .inner-title h1 {
      font-size: 2.8rem;
      font-weight: 800;
      color: #fff;
      text-shadow: 0 4px 18px rgba(0,0,0,0.25);
    }
    .banner-btn .default-btn {
      display: inline-block;
      background: #1769d2;
      color: #fff;
      padding: 12px 34px;
      border-radius: 50px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 8px 22px rgba(23,105,210,0.35);
      transition: 0.3s;
    }
    .banner-btn .default-btn:hover {
      background: #0d55b5;
      transform: translateY(-3px);
      color: #fff;
    }
    .invisible {
      visibility: visible !important; /* override for demo */
    }
    /* ----- section spacing ----- */
    .jfs-career-section {
      padding: 70px 0 80px;
    }
    .jfs-career-heading {
      text-align: center;
      max-width: 760px;
      margin: 0 auto 45px;
    }
    .jfs-career-label {
      display: inline-block;
      background: #e8f2ff;
      border: 1px solid #d2e5fa;
      border-radius: 50px;
      padding: 8px 20px;
      font-size: 12px;
      font-weight: 800;
      letter-spacing: 1.7px;
      text-transform: uppercase;
      color: #1769d2;
      margin-bottom: 14px;
    }
    .jfs-career-heading h2 {
      color: #0b2f63;
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 14px;
    }
    .jfs-career-heading p {
      color: #607895;
      font-size: 16px;
      line-height: 1.8;
      max-width: 700px;
      margin: 0 auto;
    }
    /* ----- career cards (accordion) ----- */
    .jfs-career-list {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .jfs-career-card {
      background: #ffffff;
      border: 1px solid #dce8f5;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 6px 22px rgba(25,83,140,0.06);
      transition: 0.3s ease;
    }
    .jfs-career-card:hover {
      border-color: #b7d3f2;
      box-shadow: 0 12px 32px rgba(25,83,140,0.10);
      transform: translateY(-2px);
    }
    .jfs-career-header {
      width: 100%;
      padding: 23px 26px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      background: #fff;
      border: 0;
      outline: 0;
      cursor: pointer;
      text-align: left;
      transition: background 0.25s;
    }
    .jfs-career-header:hover {
      background: #fafdff;
    }
    .jfs-career-header-content {
      flex: 1;
      min-width: 0;
    }
    .jfs-career-title {
      margin: 0 0 12px;
      color: #0b2f63;
      font-size: 20px;
      font-weight: 750;
      line-height: 1.4;
    }
    .jfs-career-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      align-items: center;
    }
    .jfs-career-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 11px;
      background: #f3f7fc;
      border: 1px solid #e2ebf5;
      border-radius: 50px;
      color: #55718e;
      font-size: 12px;
      font-weight: 600;
    }
    .jfs-career-badge i {
      color: #1769d2;
      font-size: 15px;
    }
    .jfs-career-department {
      background: #e8f2ff;
      border-color: #d2e5fa;
      color: #1769d2;
    }
    .jfs-career-arrow {
      width: 44px;
      height: 44px;
      min-width: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #edf5ff;
      border-radius: 50%;
      color: #1769d2;
      transition: 0.3s;
    }
    .jfs-career-arrow i {
      font-size: 24px;
      transition: transform 0.3s;
    }
    .jfs-career-content {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      padding: 0;
      border-top: 0 solid #e5edf7;
      transition: max-height 0.45s ease, opacity 0.3s ease, padding 0.3s ease, border-color 0.3s;
    }
    .jfs-career-content.jfs-career-open {
      max-height: 1000px;
      opacity: 1;
      padding: 0;
      border-top: 1px solid #e5edf7;
    }
    .jfs-career-details {
      padding: 30px;
    }
    .jfs-career-subtitle {
      position: relative;
      margin: 0 0 16px;
      padding-left: 14px;
      color: #0b2f63;
      font-size: 21px;
      font-weight: 750;
    }
    .jfs-career-subtitle::before {
      content: '';
      position: absolute;
      left: 0;
      top: 2px;
      width: 4px;
      height: 22px;
      background: #1769d2;
      border-radius: 5px;
    }
    .jfs-career-description-content {
      color: #58718d;
      font-size: 15px;
      line-height: 1.8;
    }
    .jfs-career-info-grid {
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 14px;
      padding: 22px 0;
      border-top: 1px solid #e6eef7;
      border-bottom: 1px solid #e6eef7;
    }
    .jfs-career-info-card {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 13px;
      background: #f8fbff;
      border: 1px solid #e8f0f8;
      border-radius: 12px;
    }
    .jfs-career-info-icon {
      width: 43px;
      height: 43px;
      min-width: 43px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #e8f2ff;
      border-radius: 11px;
      color: #1769d2;
    }
    .jfs-career-info-icon i { font-size: 21px; }
    .jfs-career-info-label {
      display: block;
      margin-bottom: 4px;
      color: #8799ad;
      font-size: 10px;
      font-weight: 750;
      text-transform: uppercase;
      letter-spacing: 0.7px;
    }
    .jfs-career-info-value {
      display: block;
      color: #173f6c;
      font-size: 14px;
      font-weight: 700;
    }
    .jfs-career-apply {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      margin-top: 24px;
      padding: 20px 22px;
      background: linear-gradient(135deg,#edf6ff,#f8fbff);
      border: 1px solid #dbeafa;
      border-radius: 13px;
    }
    .jfs-career-apply-label {
      color: #1769d2;
      font-size: 11px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.7px;
    }
    .jfs-career-apply-text {
      color: #58718d;
      font-size: 14px;
    }
    .jfs-career-apply-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      min-width: 160px;
      padding: 13px 22px;
      background: #1769d2;
      border: 0;
      border-radius: 8px;
      color: #fff !important;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      box-shadow: 0 8px 20px rgba(23,105,210,0.20);
      transition: 0.3s;
    }
    .jfs-career-apply-btn:hover {
      background: #0d55b5;
      transform: translateY(-2px);
      box-shadow: 0 12px 25px rgba(23,105,210,0.28);
    }
    .jfs-career-apply-btn i {
      font-size: 19px;
      transition: transform 0.25s;
    }
    .jfs-career-apply-btn:hover i { transform: translateX(4px); }
    /* empty state */
    .jfs-career-empty {
      padding: 65px 20px;
      text-align: center;
      background: #fff;
      border: 1px solid #dfeaf6;
      border-radius: 18px;
    }
    /* ===== NEW SECTION: career image + text ===== */
    .jfs-career-highlight {
      background: #ffffff;
      padding: 70px 0;
      border-top: 1px solid #e6eef7;
      border-bottom: 1px solid #e6eef7;
    }
    .highlight-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }
    .highlight-image img {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(11,47,99,0.12);
      transition: 0.4s;
    }
    .highlight-image img:hover {
      transform: scale(1.01);
    }
    .highlight-content .jfs-career-label {
      margin-bottom: 12px;
    }
    .highlight-content h2 {
      color: #0b2f63;
      font-size: 38px;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 18px;
    }
    .highlight-content h2 span {
      color: #1769d2;
    }
    .highlight-content p {
      color: #4d6a8a;
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 22px;
    }
    .highlight-features {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-bottom: 28px;
    }
    .feature-item {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .feature-item .feature-icon {
      width: 44px;
      height: 44px;
      background: #e8f2ff;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #1769d2;
      font-size: 24px;
      flex-shrink: 0;
    }
    .feature-item strong {
      color: #0b2f63;
      font-weight: 700;
      display: block;
      font-size: 16px;
    }
    .feature-item span {
      color: #5b7897;
      font-size: 14px;
    }
    .highlight-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #1769d2;
      color: #fff;
      padding: 13px 34px;
      border-radius: 60px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 8px 22px rgba(23,105,210,0.25);
      transition: 0.3s;
    }
    .highlight-btn:hover {
      background: #0d55b5;
      color: #fff;
      transform: translateY(-3px);
    }
    /* responsive */
    @media (max-width: 991px) {
      .highlight-grid { grid-template-columns: 1fr; gap: 30px; }
      .highlight-content h2 { font-size: 30px; }
      .jfs-career-info-grid { grid-template-columns: repeat(2,1fr); }
    }
    @media (max-width: 768px) {
      .inner-title h1 { font-size: 2rem; }
      .jfs-career-heading h2 { font-size: 30px; }
      .jfs-career-details { padding: 20px; }
      .jfs-career-info-grid { grid-template-columns: 1fr; }
      .jfs-career-apply { flex-direction: column; align-items: stretch; }
      .jfs-career-apply-btn { width: 100%; justify-content: center; }
    }
    @media (max-width: 480px) {
      .jfs-career-title { font-size: 17px; }
      .highlight-content h2 { font-size: 26px; }
    }
  </style>

{{-- =========================================================
     JOB OPENINGS
========================================================= --}}


{{-- =========================================================
     JOB OPENINGS SECTION
========================================================= --}}

<section id="job-openings" class="jfs-career-section">

    <div class="container">

        {{-- =================================================
             SECTION HEADER
        ================================================== --}}

        <div class="jfs-career-heading">

            <span class="jfs-career-label">
                CAREER OPPORTUNITIES
            </span>

            <h2>
                Current Job Openings
            </h2>

            <p>
                Explore opportunities to build your career with
                JFS Technologies. Find a role where your skills,
                ambition and ideas can create meaningful impact.
            </p>

        </div>


        {{-- =================================================
             DYNAMIC CAREER LIST
        ================================================== --}}

      @if(isset($jobs) && $jobs->count() > 0)

    <div class="jfs-career-list">

        @foreach($jobs as $career)

                    <div class="jfs-career-card">


                        {{-- =================================
                             JOB HEADER
                        ================================== --}}

                        <button type="button"
                                class="jfs-career-header"
                                aria-expanded="false">

                            <div class="jfs-career-header-content">

                                <h3 class="jfs-career-title">
                                    {{ $career->job_title }}
                                </h3>


                                <div class="jfs-career-meta">

                                    {{-- Department --}}

                                    @if(!empty($career->department))

                                        <span class="jfs-career-badge jfs-career-department">

                                            <i class="bx bx-buildings"></i>

                                            {{ $career->department }}

                                        </span>

                                    @endif


                                    {{-- Location --}}

                                    @if(!empty($career->location))

                                        <span class="jfs-career-badge">

                                            <i class="bx bx-map"></i>

                                            {{ $career->location }}

                                        </span>

                                    @endif


                                    {{-- Employment Type --}}

                                    @if(!empty($career->employment_type))

                                        <span class="jfs-career-badge">

                                            <i class="bx bx-briefcase"></i>

                                            {{ $career->employment_type }}

                                        </span>

                                    @endif

                                </div>

                            </div>


                            {{-- Arrow --}}

                            <span class="jfs-career-arrow">

                                <i class="bx bx-chevron-down"></i>

                            </span>

                        </button>


                        {{-- =================================
                             JOB CONTENT
                        ================================== --}}

                        <div class="jfs-career-content">

                            <div class="jfs-career-details">


                                {{-- =================================
                                     JOB DESCRIPTION
                                ================================== --}}

                                @if(!empty($career->description))

                                    <div class="jfs-career-description">

                                        <h4 class="jfs-career-subtitle">
                                            Job Description
                                        </h4>

                                        <div class="jfs-career-description-content">

                                            {!! $career->description !!}

                                        </div>

                                    </div>

                                @endif


                                {{-- =================================
                                     JOB INFORMATION
                                ================================== --}}

                                <div class="jfs-career-info-grid">


                                    {{-- Location --}}

                                    @if(!empty($career->location))

                                        <div class="jfs-career-info-card">

                                            <div class="jfs-career-info-icon">

                                                <i class="bx bx-map"></i>

                                            </div>

                                            <div>

                                                <span class="jfs-career-info-label">
                                                    Location
                                                </span>

                                                <span class="jfs-career-info-value">
                                                    {{ $career->location }}
                                                </span>

                                            </div>

                                        </div>

                                    @endif


                                    {{-- Employment Type --}}

                                    @if(!empty($career->employment_type))

                                        <div class="jfs-career-info-card">

                                            <div class="jfs-career-info-icon">

                                                <i class="bx bx-briefcase"></i>

                                            </div>

                                            <div>

                                                <span class="jfs-career-info-label">
                                                    Employment Type
                                                </span>

                                                <span class="jfs-career-info-value">
                                                    {{ $career->employment_type }}
                                                </span>

                                            </div>

                                        </div>

                                    @endif


                                    {{-- Department --}}

                                    @if(!empty($career->department))

                                        <div class="jfs-career-info-card">

                                            <div class="jfs-career-info-icon">

                                                <i class="bx bx-buildings"></i>

                                            </div>

                                            <div>

                                                <span class="jfs-career-info-label">
                                                    Department
                                                </span>

                                                <span class="jfs-career-info-value">
                                                    {{ $career->department }}
                                                </span>

                                            </div>

                                        </div>

                                    @endif

                                </div>


                                {{-- =================================
                                     APPLY AREA
                                ================================== --}}

                                <div class="jfs-career-apply">

                                    <div class="jfs-career-apply-content">

                                        <span class="jfs-career-apply-label">
                                            Ready to take the next step?
                                        </span>

                                        <span class="jfs-career-apply-text">
                                            Interested in this opportunity?
                                        </span>

                                    </div>


                                    <button type="button"
                                            class="jfs-career-apply-btn open-resume-modal"
                                            data-bs-toggle="modal"
                                            data-bs-target="#resumeModal"
                                            data-id="{{ $career->id }}"
                                            data-title="{{ $career->job_title }}">

                                        Apply Now

                                        <i class="bx bx-right-arrow-alt"></i>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


        @else

            {{-- =============================================
                 NO JOBS
            ============================================== --}}

            <div class="jfs-career-empty">

                <div class="jfs-career-empty-icon">

                    <i class="bx bx-briefcase-alt-2"></i>

                </div>

                <h4>
                    No Job Openings Available
                </h4>

                <p>
                    Please check back later for new career opportunities.
                </p>

            </div>

        @endif

    </div>

</section>
<style>

.jfs-career-section {
    width: 100%;
    padding: 80px 0;
    background: #f5f9ff;
}

.jfs-career-section > .container {
    max-width: 1120px;
}


/* =========================================================
   HEADING
========================================================= */

.jfs-career-heading {
    max-width: 760px;
    margin: 0 auto 45px;
    text-align: center;
}

.jfs-career-label {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 8px 18px;
    margin-bottom: 16px;

    background: #e8f2ff;
    border: 1px solid #d2e5fa;
    border-radius: 50px;

    color: #1769d2;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 1.7px;
    text-transform: uppercase;
}

.jfs-career-heading h2 {
    margin: 0 0 14px;

    color: #0b2f63;

    font-size: 42px;
    font-weight: 800;

    line-height: 1.2;
}

.jfs-career-heading p {
    max-width: 700px;
    margin: auto;

    color: #607895;

    font-size: 16px;
    line-height: 1.8;
}


/* =========================================================
   LIST
========================================================= */

.jfs-career-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
}


/* =========================================================
   CARD
========================================================= */

.jfs-career-card {
    background: #ffffff;

    border: 1px solid #dce8f5;
    border-radius: 16px;

    overflow: hidden;

    box-shadow:
        0 6px 22px rgba(25, 83, 140, 0.06);

    transition: all .3s ease;
}

.jfs-career-card:hover {
    border-color: #b7d3f2;

    box-shadow:
        0 12px 32px rgba(25, 83, 140, 0.10);

    transform: translateY(-2px);
}


/* =========================================================
   HEADER
========================================================= */

.jfs-career-header {
    width: 100%;

    padding: 23px 26px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;

    background: #ffffff;

    border: 0;
    outline: 0;

    cursor: pointer;

    text-align: left;

    transition: background .25s ease;
}

.jfs-career-header:hover {
    background: #fafdff;
}

.jfs-career-header-content {
    flex: 1;
    min-width: 0;
}

.jfs-career-title {
    margin: 0 0 12px;

    color: #0b2f63;

    font-size: 20px;
    font-weight: 750;

    line-height: 1.4;
}


/* =========================================================
   META
========================================================= */

.jfs-career-meta {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

    gap: 8px;
}

.jfs-career-badge {
    display: inline-flex;
    align-items: center;

    gap: 6px;

    padding: 7px 11px;

    background: #f3f7fc;

    border: 1px solid #e2ebf5;

    border-radius: 50px;

    color: #55718e;

    font-size: 12px;
    font-weight: 600;
}

.jfs-career-badge i {
    color: #1769d2;
    font-size: 15px;
}

.jfs-career-department {
    background: #e8f2ff;
    border-color: #d2e5fa;

    color: #1769d2;
}


/* =========================================================
   ARROW
========================================================= */

.jfs-career-arrow {
    width: 44px;
    height: 44px;
    min-width: 44px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #edf5ff;

    border-radius: 50%;

    color: #1769d2;

    transition: all .3s ease;
}

.jfs-career-arrow i {
    font-size: 24px;

    transition: transform .3s ease;
}


/* =========================================================
   CONTENT
========================================================= */

.jfs-career-content {
    max-height: 0;

    opacity: 0;

    overflow: hidden;

    padding: 0;

    border-top: 0 solid #e5edf7;

    transition:
        max-height .45s ease,
        opacity .3s ease,
        padding .3s ease,
        border-color .3s ease;
}

.jfs-career-content.jfs-career-open {
    max-height: 1000px; /* Fixed max-height for animation */
    opacity: 1;

    padding: 0;

    border-top: 1px solid #e5edf7;
}


/* =========================================================
   DETAILS
========================================================= */

.jfs-career-details {
    padding: 30px;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.jfs-career-description {
    margin-bottom: 28px;
}

.jfs-career-subtitle {
    position: relative;

    margin: 0 0 16px;

    padding-left: 14px;

    color: #0b2f63;

    font-size: 21px;
    font-weight: 750;
}

.jfs-career-subtitle::before {
    content: "";

    position: absolute;

    left: 0;
    top: 2px;

    width: 4px;
    height: 22px;

    background: #1769d2;

    border-radius: 5px;
}

.jfs-career-description-content {
    color: #58718d;

    font-size: 15px;

    line-height: 1.8;
}

.jfs-career-description-content p {
    margin-bottom: 12px;
}

.jfs-career-description-content ul,
.jfs-career-description-content ol {
    margin: 12px 0 18px;

    padding-left: 24px;
}

.jfs-career-description-content li {
    margin-bottom: 8px;
}

.jfs-career-description-content ul li::marker {
    color: #1769d2;
}

.jfs-career-description-content h1,
.jfs-career-description-content h2,
.jfs-career-description-content h3,
.jfs-career-description-content h4,
.jfs-career-description-content h5,
.jfs-career-description-content h6 {
    color: #0b2f63;

    margin-top: 22px;
    margin-bottom: 10px;

    font-weight: 750;
}


/* =========================================================
   INFORMATION
========================================================= */

.jfs-career-info-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 14px;

    padding: 22px 0;

    border-top: 1px solid #e6eef7;
    border-bottom: 1px solid #e6eef7;
}

.jfs-career-info-card {
    display: flex;
    align-items: center;

    gap: 12px;

    padding: 13px;

    background: #f8fbff;

    border: 1px solid #e8f0f8;

    border-radius: 12px;
}

.jfs-career-info-icon {
    width: 43px;
    height: 43px;
    min-width: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #e8f2ff;

    border-radius: 11px;

    color: #1769d2;
}

.jfs-career-info-icon i {
    font-size: 21px;
}

.jfs-career-info-label {
    display: block;

    margin-bottom: 4px;

    color: #8799ad;

    font-size: 10px;
    font-weight: 750;

    text-transform: uppercase;
    letter-spacing: .7px;
}

.jfs-career-info-value {
    display: block;

    color: #173f6c;

    font-size: 14px;
    font-weight: 700;

    line-height: 1.4;
}


/* =========================================================
   APPLY
========================================================= */

.jfs-career-apply {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-top: 24px;

    padding: 20px 22px;

    background: linear-gradient(
        135deg,
        #edf6ff,
        #f8fbff
    );

    border: 1px solid #dbeafa;

    border-radius: 13px;
}

.jfs-career-apply-content {
    display: flex;
    flex-direction: column;

    gap: 4px;
}

.jfs-career-apply-label {
    color: #1769d2;

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .7px;
}

.jfs-career-apply-text {
    color: #58718d;

    font-size: 14px;
}


/* =========================================================
   BUTTON
========================================================= */

.jfs-career-apply-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    min-width: 160px;

    padding: 13px 22px;

    background: #1769d2;

    border: 0;
    border-radius: 8px;

    color: #ffffff !important;

    font-size: 14px;
    font-weight: 700;

    cursor: pointer;

    box-shadow:
        0 8px 20px rgba(23, 105, 210, .20);

    transition: all .3s ease;
}

.jfs-career-apply-btn:hover {
    background: #0d55b5;

    color: #ffffff !important;

    transform: translateY(-2px);

    box-shadow:
        0 12px 25px rgba(23, 105, 210, .28);
}

.jfs-career-apply-btn i {
    font-size: 19px;

    transition: transform .25s ease;
}

.jfs-career-apply-btn:hover i {
    transform: translateX(4px);
}


/* =========================================================
   EMPTY
========================================================= */

.jfs-career-empty {
    padding: 65px 20px;

    text-align: center;

    background: #ffffff;

    border: 1px solid #dfeaf6;

    border-radius: 18px;

    box-shadow:
        0 8px 25px rgba(20, 78, 140, .05);
}

.jfs-career-empty-icon {
    width: 70px;
    height: 70px;

    margin: 0 auto 18px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #edf5ff;

    border-radius: 50%;

    color: #1769d2;
}

.jfs-career-empty-icon i {
    font-size: 34px;
}

.jfs-career-empty h4 {
    margin: 0 0 8px;

    color: #0b2f63;

    font-size: 21px;
    font-weight: 750;
}

.jfs-career-empty p {
    margin: 0;

    color: #70859d;

    font-size: 14px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .jfs-career-section {
        padding: 65px 0;
    }

    .jfs-career-heading h2 {
        font-size: 36px;
    }

    .jfs-career-info-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}


@media (max-width: 767px) {

    .jfs-career-section {
        padding: 50px 0;
    }

    .jfs-career-heading {
        margin-bottom: 30px;
    }

    .jfs-career-heading h2 {
        font-size: 29px;
    }

    .jfs-career-heading p {
        font-size: 14px;
    }

    .jfs-career-header {
        padding: 20px;
    }

    .jfs-career-title {
        font-size: 18px;
    }

    .jfs-career-details {
        padding: 23px 20px;
    }

    .jfs-career-info-grid {
        grid-template-columns: 1fr;
    }

    .jfs-career-apply {
        flex-direction: column;
        align-items: stretch;
    }

    .jfs-career-apply-btn {
        width: 100%;
    }
}


@media (max-width: 480px) {

    .jfs-career-heading h2 {
        font-size: 25px;
    }

    .jfs-career-label {
        font-size: 10px;
        padding: 7px 13px;
    }

    .jfs-career-header {
        padding: 17px;
    }

    .jfs-career-title {
        font-size: 16px;
    }

    .jfs-career-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .jfs-career-details {
        padding: 20px 16px;
    }

    .jfs-career-description-content {
        font-size: 14px;
    }
}

</style>
{{-- =========================================================
     CAREER JAVASCRIPT
========================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =========================================================
       APPLY NOW - MODAL DATA
    ========================================================= */

    const applyButtons = document.querySelectorAll(
        '.open-resume-modal'
    );

    applyButtons.forEach(function (button) {

        button.addEventListener('click', function (event) {

            /*
             * Prevent the job accordion from opening/closing
             * when clicking Apply Now.
             */
            event.stopPropagation();

            const jobId = this.getAttribute('data-id');
            const jobTitle = this.getAttribute('data-title');

            const modalJobId = document.getElementById('modalJobId');
            const modalJobTitle = document.getElementById('modalJobTitle');
            const modalJobTitle2 = document.getElementById('modalJobTitle2');


            /* Set Job ID */

            if (modalJobId) {
                modalJobId.value = jobId || '';
            }


            /* Set Job Title */

            if (modalJobTitle) {
                modalJobTitle.textContent = jobTitle || '';
            }


            /* Set Job Title inside alert */

            if (modalJobTitle2) {
                modalJobTitle2.textContent = jobTitle || '';
            }

        });

    });



    /* =========================================================
       JOB ACCORDION
    ========================================================= */

    const careerHeaders = document.querySelectorAll(
        '.jfs-career-header'
    );


    careerHeaders.forEach(function (header) {

        header.addEventListener('click', function () {

            const currentCard =
                this.closest('.jfs-career-card');


            if (!currentCard) {
                return;
            }


            const currentContent =
                currentCard.querySelector(
                    '.jfs-career-content'
                );


            const currentArrow =
                currentCard.querySelector(
                    '.jfs-career-arrow i'
                );


            if (!currentContent) {
                return;
            }


            /*
             * Check whether current job is already open.
             */

            const isOpen =
                currentContent.classList.contains(
                    'jfs-career-open'
                );



            /* =================================================
               CLOSE ALL JOBS
            ================================================= */

            document.querySelectorAll(
                '.jfs-career-card'
            ).forEach(function (card) {

                card.classList.remove(
                    'jfs-career-active'
                );


                const content =
                    card.querySelector(
                        '.jfs-career-content'
                    );


                const arrow =
                    card.querySelector(
                        '.jfs-career-arrow i'
                    );


                const cardHeader =
                    card.querySelector(
                        '.jfs-career-header'
                    );


                if (content) {

                    content.classList.remove(
                        'jfs-career-open'
                    );

                    content.style.maxHeight = '0px';

                    content.style.padding = '0';

                }


                if (arrow) {

                    arrow.style.transform =
                        'rotate(0deg)';

                }


                if (cardHeader) {

                    cardHeader.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            });



            /* =================================================
               OPEN CLICKED JOB
            ================================================= */

            if (!isOpen) {

                currentCard.classList.add(
                    'jfs-career-active'
                );


                currentContent.classList.add(
                    'jfs-career-open'
                );


                /*
                 * First remove inline padding.
                 */

                currentContent.style.padding = '0';


                /*
                 * Calculate content height after
                 * browser applies the open class.
                 */

                requestAnimationFrame(function () {

                    currentContent.style.maxHeight =
                        currentContent.scrollHeight + 'px';

                });


                /*
                 * Rotate arrow.
                 */

                if (currentArrow) {

                    currentArrow.style.transform =
                        'rotate(180deg)';

                }


                /*
                 * Accessibility.
                 */

                this.setAttribute(
                    'aria-expanded',
                    'true'
                );

            }

        });

    });



    /* =========================================================
       KEEP HEIGHT CORRECT WHEN WINDOW RESIZES
    ========================================================= */

    window.addEventListener('resize', function () {

        const openedContent =
            document.querySelector(
                '.jfs-career-content.jfs-career-open'
            );


        if (openedContent) {

            openedContent.style.maxHeight =
                openedContent.scrollHeight + 'px';

        }

    });

});
</script>

{{-- =========================================================
     RESUME FORM
========================================================= --}}
<!-- <div class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-md-7">
                <div class="faq-area">
                    <div class="container">
                        <div class="section-title mb-5">
                            <h2>Start Your Journey with Us</h2>
                        </div>
                        <div class="contact-form">
                            <form action="{{ route('careers.resume.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="job_id" id="job_id" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" required placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" required class="form-control" placeholder="Phone Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span>*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Upload Resume <span>*</span></label>
                                            <input type="file" name="resume" id="resume" class="form-control" required accept=".pdf,.doc,.docx">
                                            <div class="help-block with-errors"></div>
                                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="agree-label">
                                            <label for="chb1" class="m-0 small text-muted">
                                                <em><strong><u>NOTE:</u></strong> Your resume will be used only to recommend the relevant job openings based on your job profile. Kindly be informed that JFS Technologies does not store your resume for any future purpose.</em>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                            Upload <i class="bx bx-chevron-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="choose-img">
                    <img src="{{ asset('theme/assets/images/faq-1.png') }}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div> -->

{{-- =========================================================
     MODAL FOR APPLY
========================================================= --}}
<div class="modal fade" id="resumeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apply for <span id="modalJobTitle"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please fill out the form below to apply for this position.</p>
                <div class="alert alert-info">
                    <strong>Position:</strong> <span id="modalJobTitle2"></span>
                </div>
                <form id="modalApplicationForm" action="{{ route('careers.resume.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job_id" id="modalJobId">
                    
                    <div class="mb-3">
                        <label for="modalName" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="modalName" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="modalPhone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="phone_number" id="modalPhone" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="modalEmail" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="modalEmail" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="modalResume" class="form-label">Upload Resume <span class="text-danger">*</span></label>
                        <input type="file" name="resume" id="modalResume" class="form-control" required accept=".pdf,.doc,.docx">
                        <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    /* ============================================
       JOB OPENINGS - UI MATCHING IMAGE
    ============================================ */

    .job-opening-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.06);
        border: 1px solid #e8edf4;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .job-opening-card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    /* JOB HEADER */
    .job-opening-header {
        width: 100%;
        background: transparent;
        border: none;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        transition: background 0.2s ease;
        text-align: left;
        gap: 16px;
    }

    .job-opening-header:hover {
        background: #f7faff;
    }

    .job-header-content {
        flex: 1;
        min-width: 0;
    }

    .job-title {
        font-size: 18px;
        font-weight: 600;
        color: #1a1a2e;
        margin: 0 0 4px 0;
        line-height: 1.4;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .job-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 4px 10px;
    }

    .job-badge {
        font-size: 13px;
        color: #4a5568;
        padding: 2px 0;
        position: relative;
        text-transform: lowercase;
    }

    .job-badge:not(:last-child)::after {
        content: "•";
        margin-left: 10px;
        color: #b0bccd;
    }

    .job-arrow {
        color: #8896a8;
        font-size: 20px;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }

    .job-arrow i {
        transition: transform 0.3s ease;
        display: inline-block;
    }

    /* JOB CONTENT */
    .job-opening-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s ease;
        padding: 0 20px;
        border-top: 1px solid transparent;
    }

    .job-opening-content.active {
        max-height: 800px;
        padding: 16px 20px 20px 20px;
        border-top-color: #e8edf4;
    }

    .job-details {
        animation: fadeSlideIn 0.3s ease;
    }

    @keyframes fadeSlideIn {
        from {
            opacity: 0;
            transform: translateY(-6px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Job Sections */
    .job-section {
        margin-bottom: 14px;
    }

    .job-section:last-child {
        margin-bottom: 0;
    }

    .job-section h4 {
        font-size: 14px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0 0 6px 0;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .job-description-content {
        font-size: 14px;
        color: #4a5568;
        line-height: 1.7;
    }

    .job-description-content p {
        margin: 0 0 8px 0;
    }

    .job-description-content p:last-child {
        margin-bottom: 0;
    }

    /* Job Detail Rows - matching image style */
    .job-detail-row {
        display: flex;
        align-items: baseline;
        gap: 12px;
        padding: 4px 0;
        border-bottom: 1px solid #f0f2f5;
    }

    .job-detail-row:last-of-type {
        border-bottom: none;
        margin-bottom: 0;
    }

    .job-detail-label {
        font-size: 13px;
        font-weight: 600;
        color: #1a1a2e;
        min-width: 130px;
        text-transform: capitalize;
    }

    .job-detail-value {
        font-size: 13px;
        color: #4a5568;
    }

    /* JOB APPLY AREA */
    .job-apply-area {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-top: 14px;
        padding-top: 14px;
        border-top: 1px solid #e8edf4;
    }

    .job-apply-text {
        font-size: 14px;
        font-weight: 500;
        color: #1a1a2e;
    }

    .job-apply-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 22px;
        background: #0d6efd;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .job-apply-btn:hover {
        background: #0b5ed7;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 4px 14px rgba(13, 110, 253, 0.3);
    }

    .job-apply-btn i {
        font-size: 15px;
        transition: transform 0.3s ease;
    }

    .job-apply-btn:hover i {
        transform: translateX(3px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .job-opening-header {
            padding: 12px 16px;
        }

        .job-title {
            font-size: 15px;
        }

        .job-badge {
            font-size: 12px;
        }

        .job-badge:not(:last-child)::after {
            margin-left: 7px;
        }

        .job-opening-content.active {
            padding: 12px 16px 16px 16px;
        }

        .job-detail-row {
            flex-direction: column;
            gap: 2px;
            padding: 6px 0;
        }

        .job-detail-label {
            min-width: auto;
            font-size: 12px;
            color: #8896a8;
        }

        .job-detail-value {
            font-size: 13px;
        }

        .job-apply-area {
            flex-direction: column;
            align-items: stretch;
        }

        .job-apply-btn {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .job-title {
            font-size: 14px;
        }

        .job-meta {
            gap: 3px 6px;
        }

        .job-badge {
            font-size: 11px;
        }

        .job-section h4 {
            font-size: 13px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Handle modal data
    document.addEventListener('DOMContentLoaded', function() {
        const applyButtons = document.querySelectorAll('.open-resume-modal');
        
        applyButtons.forEach(button => {
            button.addEventListener('click', function() {
                const jobId = this.dataset.id;
                const jobTitle = this.dataset.title;
                
                document.getElementById('modalJobId').value = jobId;
                document.getElementById('modalJobTitle').textContent = jobTitle;
                document.getElementById('modalJobTitle2').textContent = jobTitle;
            });
        });
    });
    
    // Toggle job opening content
    document.addEventListener('DOMContentLoaded', function() {
        const headers = document.querySelectorAll('.job-opening-header');
        
        headers.forEach(header => {
            header.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('.job-arrow i');
                const isActive = content.classList.contains('active');
                
                // Close all panels
                document.querySelectorAll('.job-opening-content').forEach(c => {
                    c.classList.remove('active');
                    c.style.maxHeight = '0';
                    c.style.padding = '0';
                });
                document.querySelectorAll('.job-arrow i').forEach(a => {
                    a.style.transform = 'rotate(0deg)';
                });
                document.querySelectorAll('.job-opening-header').forEach(h => {
                    h.setAttribute('aria-expanded', 'false');
                });
                
                // If the clicked panel wasn't active, open it
                if (!isActive) {
                    content.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.padding = '16px 20px 20px 20px';
                    arrow.style.transform = 'rotate(180deg)';
                    this.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });

    // Display success/error messages
    @if(session('success'))
        alert('{{ session('success') }}');
    @endif
    
    @if(session('error'))
        alert('{{ session('error') }}');
    @endif
</script>
@endpush