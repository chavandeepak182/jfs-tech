<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function ServicesView()    {
        return view('frontend.services');
    }

    public function AboutView()    {
        return view('frontend.about');
    }

    public function ContactView()    {
        return view('frontend.contact');
    }

    public function PrivacyView()    {
        return view('frontend.privacy-policy');
    }

    public function DigitalMarketingView()    {
        return view('frontend.digital-marketing');
    }

    public function SEOView()    {
        return view('frontend.seo-services');
    }

    public function SMOView()    {
        return view('frontend.smo-services');
    }

    public function PPCView()    {
        return view('frontend.ppc-services');
    }

    public function WebDevView()    {
        return view('frontend.website-development');
    }

    public function MobileAppView()    {
        return view('frontend.app-development');
    }
}
