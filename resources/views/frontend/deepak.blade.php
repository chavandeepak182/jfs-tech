@extends('frontend.layouts.header')

@section('title', 'Deepak Chavan — JFS Technologies')

@section('content')

<style>
/* =========================================================
   DEEPAK PAGE - COMPLETELY ISOLATED
========================================================= */

.dp-page,
.dp-page * {
    box-sizing: border-box !important;
}

.dp-page {
    width: 100% !important;
    min-height: calc(100vh - 124px) !important;

    margin: 0 !important;
    padding: 40px 20px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    background:
        linear-gradient(
            135deg,
            #f4f8fc 0%,
            #eef6fb 50%,
            #f8fbfd 100%
        ) !important;

    color: #14213d !important;
    font-family: "Inter", sans-serif !important;

    position: relative !important;
    overflow: hidden !important;
}

/* MAIN WRAPPER */
.dp-page .dp-wrap {
    width: 100% !important;
    max-width: 1060px !important;
    margin: 0 auto !important;
    padding: 0 !important;
}

/* MAIN CARD */
.dp-page .dp-card {
    width: 100% !important;

    display: grid !important;
    grid-template-columns: 340px minmax(0, 1fr) !important;

    background: #ffffff !important;

    border-radius: 24px !important;

    overflow: hidden !important;

    border: 1px solid #e5edf5 !important;

    box-shadow:
        0 20px 60px rgba(20, 50, 80, 0.10),
        0 4px 15px rgba(20, 50, 80, 0.05) !important;

    position: relative !important;
}

/* =========================================================
   LEFT PANEL
========================================================= */

.dp-page .dp-panel {
    width: 100% !important;

    position: relative !important;

    padding: 42px 34px !important;

    min-height: 560px !important;

    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;

    background:
        linear-gradient(
            160deg,
            #0f4f82 0%,
            #1769aa 55%,
            #1687b9 100%
        ) !important;

    color: #ffffff !important;

    overflow: hidden !important;
}

/* Decorative circles */
.dp-page .dp-panel::before {
    content: "" !important;

    position: absolute !important;

    width: 220px !important;
    height: 220px !important;

    border-radius: 50% !important;

    background: rgba(255,255,255,0.07) !important;

    top: -100px !important;
    right: -80px !important;

    pointer-events: none !important;
}

.dp-page .dp-panel::after {
    content: "" !important;

    position: absolute !important;

    width: 180px !important;
    height: 180px !important;

    border-radius: 50% !important;

    background: rgba(255,255,255,0.05) !important;

    bottom: -80px !important;
    left: -80px !important;

    pointer-events: none !important;
}

/* PROFILE */
.dp-page .dp-profile {
    width: 100% !important;

    position: relative !important;
    z-index: 5 !important;

    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
}

/* =========================================================
   PHOTO - IMPORTANT
========================================================= */

.dp-page .dp-photo {
    width: 118px !important;
    min-width: 118px !important;

    height: 118px !important;
    min-height: 118px !important;

    padding: 4px !important;

    margin: 0 0 22px 0 !important;

    border-radius: 50% !important;

    background: #ffffff !important;

    overflow: hidden !important;

    position: relative !important;

    flex: 0 0 118px !important;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.18) !important;
}

.dp-page .dp-photo img {
    width: 100% !important;
    max-width: 100% !important;

    height: 100% !important;
    max-height: 100% !important;

    padding: 0 !important;
    margin: 0 !important;

    display: block !important;

    object-fit: cover !important;

    border-radius: 50% !important;

    position: static !important;

    transform: none !important;
}

/* FALLBACK */
.dp-page .dp-photo-fallback {
    width: 100% !important;
    height: 100% !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    border-radius: 50% !important;

    background:
        linear-gradient(
            135deg,
            #0f4f82,
            #22a6d5
        ) !important;

    color: #ffffff !important;

    font-size: 34px !important;
    font-weight: 800 !important;
}

/* =========================================================
   PROFILE TEXT
========================================================= */

.dp-page .dp-name {
    margin: 0 0 8px 0 !important;

    font-size: 28px !important;
    line-height: 1.2 !important;

    font-weight: 800 !important;

    color: #ffffff !important;

    letter-spacing: -0.7px !important;
}

.dp-page .dp-role {
    margin: 0 0 5px 0 !important;

    font-size: 14px !important;

    font-weight: 700 !important;

    color: #dff5ff !important;
}

.dp-page .dp-company {
    margin: 0 0 30px 0 !important;

    font-size: 13px !important;

    color: rgba(255,255,255,0.72) !important;
}

/* =========================================================
   CONTACT
========================================================= */

.dp-page .dp-contact-list {
    width: 100% !important;

    display: flex !important;
    flex-direction: column !important;

    gap: 11px !important;
}

.dp-page .dp-contact-item {
    width: 100% !important;
    min-height: 58px !important;

    padding: 9px 16px !important;
    margin: 0 !important;

    display: flex !important;
    align-items: center !important;

    gap: 14px !important;

    border-radius: 13px !important;

    text-decoration: none !important;

    background: #ffffff !important;

    color: #14213d !important;

    box-shadow:
        0 4px 14px rgba(9,20,45,0.16) !important;

    overflow: hidden !important;
}

.dp-page .dp-contact-item.phone {
    background: #fdebf0 !important;
}

.dp-page .dp-contact-item.whatsapp {
    background: #e9fbe8 !important;
}

.dp-page .dp-contact-item.linkedin {
    background: #e8f2fb !important;
}

.dp-page .dp-contact-icon {
    width: 40px !important;
    min-width: 40px !important;

    height: 40px !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    border-radius: 50% !important;

    color: #ffffff !important;
}

.dp-page .dp-contact-item.phone .dp-contact-icon {
    background: #e50e44 !important;
}

.dp-page .dp-contact-item.whatsapp .dp-contact-icon {
    background: #2ed325 !important;
}

.dp-page .dp-contact-item.linkedin .dp-contact-icon {
    background: #0a66c2 !important;
}

.dp-page .dp-contact-icon svg {
    width: 18px !important;
    height: 18px !important;

    max-width: 18px !important;
    max-height: 18px !important;

    stroke: currentColor !important;
}

.dp-page .dp-contact-text {
    min-width: 0 !important;

    display: flex !important;
    flex-direction: column !important;

    gap: 1px !important;
}

.dp-page .dp-contact-label {
    font-size: 10px !important;

    font-weight: 700 !important;

    text-transform: uppercase !important;

    letter-spacing: 0.5px !important;

    color: #98a2b3 !important;
}

.dp-page .dp-contact-value {
    font-size: 14px !important;

    font-weight: 700 !important;

    color: #14213d !important;

    white-space: nowrap !important;

    overflow: hidden !important;

    text-overflow: ellipsis !important;
}

.dp-page .dp-chevron {
    width: 16px !important;
    height: 16px !important;

    min-width: 16px !important;

    margin-left: auto !important;

    color: #b6bccb !important;
}

/* SAVE BUTTON */
.dp-page .dp-save {
    width: 100% !important;

    margin: 24px 0 0 0 !important;

    padding: 13px 18px !important;

    border: 1px solid rgba(255,255,255,0.35) !important;

    border-radius: 10px !important;

    background: #ffffff !important;

    color: #1769aa !important;

    font-family: "Inter", sans-serif !important;

    font-size: 13.5px !important;

    font-weight: 700 !important;

    cursor: pointer !important;
}

/* =========================================================
   RIGHT CONTENT
========================================================= */

.dp-page .dp-profile-content {
    width: 100% !important;
    min-width: 0 !important;

    display: flex !important;
    flex-direction: column !important;

    background: #ffffff !important;

    position: relative !important;

    z-index: 2 !important;
}

/* COMPANY HERO */
.dp-page .dp-company-hero {
    width: 100% !important;

    min-height: 138px !important;

    padding: 36px 48px !important;

    display: flex !important;

    align-items: center !important;

    gap: 20px !important;

    background: #eaf5ff !important;
}

.dp-page .dp-hero-logo {
    width: 100px !important;
    min-width: 100px !important;

    height: 60px !important;

    padding: 10px !important;

    border-radius: 16px !important;

    background: #0A2155 !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    overflow: hidden !important;
}

.dp-page .dp-hero-logo img {
    width: 100% !important;
    max-width: 100% !important;

    height: 100% !important;
    max-height: 100% !important;

    margin: 0 !important;
    padding: 0 !important;

    display: block !important;

    object-fit: contain !important;
}

.dp-page .dp-hero-text {
    min-width: 0 !important;
}

.dp-page .dp-hero-name {
    margin: 0 0 4px 0 !important;

    font-size: 23px !important;

    line-height: 1.25 !important;

    font-weight: 800 !important;

    color: #0f4f82 !important;

    letter-spacing: -0.5px !important;
}

.dp-page .dp-hero-tag {
    margin: 0 !important;

    font-size: 13px !important;

    font-weight: 600 !important;

    color: #1769aa !important;
}

/* =========================================================
   BODY
========================================================= */

.dp-page .dp-content-body {
    width: 100% !important;

    padding: 36px 48px 48px !important;

    background: #ffffff !important;
}

.dp-page .dp-section-header {
    display: flex !important;

    align-items: center !important;

    gap: 12px !important;

    margin: 0 0 18px 0 !important;
}

.dp-page .dp-section-line {
    width: 34px !important;
    height: 4px !important;

    flex-shrink: 0 !important;

    border-radius: 20px !important;

    background: #22a6d5 !important;
}

.dp-page .dp-block-label {
    margin: 0 !important;

    font-size: 12px !important;

    font-weight: 800 !important;

    letter-spacing: 0.7px !important;

    text-transform: uppercase !important;

    color: #1769aa !important;
}

.dp-page .dp-about-text {
    margin: 0 0 34px 0 !important;

    max-width: 520px !important;

    font-size: 14px !important;

    line-height: 1.8 !important;

    color: #667085 !important;
}

/* INFO GRID */
.dp-page .dp-info-grid {
    width: 100% !important;

    display: grid !important;

    grid-template-columns:
        repeat(2, minmax(0, 1fr)) !important;

    gap: 12px !important;

    margin: 0 0 28px 0 !important;
}

.dp-page .dp-info-card {
    min-width: 0 !important;

    padding: 15px !important;

    display: flex !important;

    align-items: center !important;

    gap: 13px !important;

    background: #f8fbfe !important;

    border: 1px solid #e5edf5 !important;

    border-radius: 12px !important;
}

.dp-page .dp-info-icon {
    width: 38px !important;
    min-width: 38px !important;

    height: 38px !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    border-radius: 9px !important;

    background: #eaf5ff !important;
}

.dp-page .dp-info-icon svg {
    width: 18px !important;
    height: 18px !important;

    stroke: #1769aa !important;
}

.dp-page .dp-info-label {
    margin: 0 0 3px 0 !important;

    font-size: 10px !important;

    text-transform: uppercase !important;

    letter-spacing: 0.5px !important;

    color: #98a2b3 !important;

    font-weight: 700 !important;
}

.dp-page .dp-info-value {
    margin: 0 !important;

    font-size: 12px !important;

    color: #14213d !important;

    font-weight: 600 !important;

    word-break: break-word !important;
}

.dp-page .dp-info-value a {
    color: #14213d !important;

    text-decoration: none !important;
}

/* FOOTER */
.dp-page .dp-company-footer {
    width: 100% !important;

    padding-top: 24px !important;

    border-top: 1px solid #e5edf5 !important;

    display: flex !important;

    align-items: center !important;

    justify-content: space-between !important;

    gap: 15px !important;
}

.dp-page .dp-footer-title {
    margin: 0 !important;

    font-size: 12px !important;

    color: #667085 !important;
}

.dp-page .dp-footer-company {
    margin: 0 !important;

    font-size: 12px !important;

    font-weight: 700 !important;

    color: #1769aa !important;

    text-align: right !important;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 850px) {

    .dp-page {
        padding: 30px 16px !important;
    }

    .dp-page .dp-card {
        grid-template-columns:
            290px minmax(0, 1fr) !important;
    }

    .dp-page .dp-panel {
        padding: 34px 25px !important;
    }

    .dp-page .dp-company-hero {
        padding: 28px 30px !important;
    }

    .dp-page .dp-content-body {
        padding: 30px !important;
    }

    .dp-page .dp-info-grid {
        grid-template-columns: 1fr !important;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 680px) {

    .dp-page {
        min-height: auto !important;

        padding: 0 !important;

        display: block !important;

        background: #f4f8fc !important;
    }

    .dp-page .dp-wrap {
        width: 100% !important;

        max-width: 100% !important;
    }

    .dp-page .dp-card {
        width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        border-radius: 0 !important;

        border: none !important;

        box-shadow: none !important;
    }

    .dp-page .dp-panel {
        width: 100% !important;

        min-height: auto !important;

        padding: 34px 20px 28px !important;

        align-items: center !important;

        text-align: center !important;
    }

    .dp-page .dp-profile {
        width: 100% !important;

        align-items: center !important;

        text-align: center !important;
    }

    .dp-page .dp-photo {
        width: 112px !important;
        min-width: 112px !important;

        height: 112px !important;
        min-height: 112px !important;

        flex-basis: 112px !important;
    }

    .dp-page .dp-name {
        font-size: 25px !important;
    }

    .dp-page .dp-contact-list {
        width: 100% !important;
    }

    .dp-page .dp-profile-content {
        width: 100% !important;
    }

    .dp-page .dp-company-hero {
        width: 100% !important;

        min-height: auto !important;

        padding: 28px 20px !important;

        flex-direction: column !important;

        text-align: center !important;
    }

    .dp-page .dp-content-body {
        padding: 28px 20px 36px !important;
    }

    .dp-page .dp-about-text {
        max-width: none !important;

        font-size: 13px !important;
    }

    .dp-page .dp-info-grid {
        grid-template-columns: 1fr !important;
    }

    .dp-page .dp-company-footer {
        flex-direction: column !important;

        align-items: flex-start !important;

        gap: 5px !important;
    }

    .dp-page .dp-footer-company {
        text-align: left !important;
    }
}
</style>


<div class="dp-page">

    <div class="dp-wrap">

        <div class="dp-card">

            <!-- LEFT PROFILE -->
            <aside class="dp-panel">

                <div class="dp-profile">

                    <div class="dp-photo">

                        <img
                            src="{{ asset('theme') }}/assets/images/team/deepak.webp"
                            alt="Deepak Chavan"
                            onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=&quot;dp-photo-fallback&quot;>DC</div>';"
                        >

                    </div>

                    <div class="dp-name">
                        Deepak Chavan
                    </div>

                    <div class="dp-role">
                        Technical Team Lead
                    </div>

                    <div class="dp-company">
                        JFS Technologies Pvt Ltd
                    </div>


                    <div class="dp-contact-list">

                        <!-- PHONE -->
                        <a
                            href="tel:+918788524747"
                            class="dp-contact-item phone"
                        >

                            <span class="dp-contact-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67 A2 2 0 0 1 4.11 2h3 a2 2 0 0 1 2 1.72 c.127.96.361 1.903.7 2.81 a2 2 0 0 1-.45 2.11L8.09 9.91 a16 16 0 0 0 6 6l1.27-1.27 a2 2 0 0 1 2.11-.45 c.907.339 1.85.573 2.81.7 A2 2 0 0 1 22 16.92z"/>
                                </svg>

                            </span>

                            <span class="dp-contact-text">

                                <span class="dp-contact-label">
                                    Call
                                </span>

                                <span class="dp-contact-value">
                                    +91 87885 24747
                                </span>

                            </span>

                            <svg
                                class="dp-chevron"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <polyline points="9 6 15 12 9 18"/>
                            </svg>

                        </a>


                        <!-- WHATSAPP -->
                        <a
                            href="https://wa.me/918788524747"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="dp-contact-item whatsapp"
                        >
<span class="dp-contact-icon">

    <svg
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
    >
        <path
            fill="#ffffff"
            d="M20.52 3.48A11.86 11.86 0 0 0 12.05 0C5.5 0 .18 5.32.18 11.87c0 2.09.55 4.14 1.59 5.94L.1 24l6.34-1.66a11.87 11.87 0 0 0 5.6 1.4h.01c6.54 0 11.86-5.32 11.86-11.87 0-3.17-1.23-6.15-3.39-8.39ZM12.06 21.8h-.01a9.88 9.88 0 0 1-5.04-1.38l-.36-.21-3.76.98 1-3.67-.23-.38a9.87 9.87 0 0 1-1.51-5.27c0-5.45 4.44-9.89 9.9-9.89 2.64 0 5.12 1.03 6.98 2.9a9.82 9.82 0 0 1 2.9 7c0 5.46-4.44 9.9-9.87 9.9Zm5.43-7.42c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.51-1.79-1.68-2.09-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51-.17-.01-.37-.01-.57-.01-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.21 5.09 4.5.71.31 1.27.5 1.7.64.71.23 1.36.2 1.87.12.57-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35Z"
        />
    </svg>

</span>

                            <span class="dp-contact-text">

                                <span class="dp-contact-label">
                                    Chat
                                </span>

                                <span class="dp-contact-value">
                                    WhatsApp
                                </span>

                            </span>

                            <svg
                                class="dp-chevron"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <polyline points="9 6 15 12 9 18"/>
                            </svg>

                        </a>


                        <!-- LINKEDIN -->
                        <a
                            href="https://www.linkedin.com/in/deepak-chavan-970a40193/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="dp-contact-item linkedin"
                        >

                            <span class="dp-contact-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7 a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7 a6 6 0 0 1 6-6z"/>
                                    <rect x="2" y="9" width="4" height="12"/>
                                    <circle cx="4" cy="4" r="2"/>
                                </svg>

                            </span>

                            <span class="dp-contact-text">

                                <span class="dp-contact-label">
                                    Connect
                                </span>

                                <span class="dp-contact-value">
                                    LinkedIn profile
                                </span>

                            </span>

                            <svg
                                class="dp-chevron"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <polyline points="9 6 15 12 9 18"/>
                            </svg>

                        </a>


                        <button
                            type="button"
                            class="dp-save"
                            onclick="saveContact()"
                        >
                            Save contact
                        </button>

                    </div>

                </div>

            </aside>


            <!-- RIGHT COMPANY -->
            <section class="dp-profile-content">

                <div class="dp-company-hero">

                    <div class="dp-hero-logo">

                        <img
                            src="{{ asset('theme') }}/assets/images/logos/logo-w.png"
                            alt="JFS Technologies Logo"
                        >

                    </div>

                    <div class="dp-hero-text">

                        <div class="dp-hero-name">
                            JFS Technologies Pvt Ltd
                        </div>

                        <div class="dp-hero-tag">
                            Technology &amp; Business Solutions
                        </div>

                    </div>

                </div>


                <div class="dp-content-body">

                    <div class="dp-section-header">

                        <div class="dp-section-line"></div>

                        <div class="dp-block-label">
                            About the company
                        </div>

                    </div>


                    <p class="dp-about-text">
                        Leading Digital Transformation Services Company meticulously crafted to transform your business, optimize processes, elevate customer experiences &amp; foster sustainable growth through innovation, advanced technology, strategic automation, and data-driven insights.
                    </p>


                    <div class="dp-info-grid">

                        <!-- WEBSITE -->
                        <div class="dp-info-card">

                            <div class="dp-info-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="2" y1="12" x2="22" y2="12"/>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                </svg>

                            </div>

                            <div>

                                <div class="dp-info-label">
                                    Website
                                </div>

                                <div class="dp-info-value">

                                    <a
                                        href="https://jfstechnologies.com/"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        www.jfs-technologies.com
                                    </a>

                                </div>

                            </div>

                        </div>


                        <!-- LOCATION -->
                        <div class="dp-info-card">

                            <div class="dp-info-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>

                            </div>

                            <div>

                                <div class="dp-info-label">
                                    Location
                                </div>

                                <div class="dp-info-value">
                                    India
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="dp-company-footer">

                        <div class="dp-footer-title">
                            Technology &amp; Business Solutions
                        </div>

                        <div class="dp-footer-company">
                            JFS Technologies Pvt Ltd
                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

</div>


<script>
function saveContact() {

    const vCard = `BEGIN:VCARD
VERSION:3.0
FN:Deepak Chavan
ORG:JFS Technologies Pvt Ltd
TITLE:Technical Team Lead
TEL;TYPE=CELL:+918788524747
TEL;TYPE=WHATSAPP:+918788524747
URL:https://www.linkedin.com/in/deepak-chavan-970a40193/
END:VCARD`;

    const dataUri =
        "data:text/vcard;charset=utf-8," +
        encodeURIComponent(vCard);

    const link = document.createElement("a");

    link.href = dataUri;
    link.target = "_blank";
    link.rel = "noopener";

    document.body.appendChild(link);

    link.click();

    document.body.removeChild(link);
}
</script>

@endsection