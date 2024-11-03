<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function HomePageView()    {
        return view('frontend.index');
    }

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

    public function WebDevView(Request $request)
{
    $ipAddress = $request->ip();
    
    // Check if the IP is local
    if ($ipAddress === '127.0.0.1') {
        $countryCode = 'IN'; // or whatever default you prefer for testing
    } else {
        $countryCode = $this->getCountryCodeFromIP($ipAddress); // Fetch the country code
    }

    return $countryCode === 'IN' 
        ? view('frontend.website-development', compact('countryCode')) 
        : view('frontend.website-development-other', compact('countryCode'));
}
// public function WebDevView(Request $request)
// {
//     $ipAddress = $request->ip();
    
//     // Check if the IP is local or in the predefined list of external IPs
//     $externalIPs = ['203.0.113.5', '198.51.100.10']; // Add more IPs as needed for testing

//     // Check if the request is from a local or specified external IP
//     if ($ipAddress === '127.0.0.1' || in_array($ipAddress, $externalIPs)) {
//         $countryCode = 'OUT'; // Set a specific code for out of India or use an API
//     } else {
//         $countryCode = $this->getCountryCodeFromIP($ipAddress); // Fetch the country code
//     }

//     return $countryCode === 'IN' 
//         ? view('frontend.website-development', compact('countryCode')) 
//         : view('frontend.website-development-other', compact('countryCode'));
// }
private function getCountryCodeFromIP($ip)
{
    $response = file_get_contents("http://ip-api.com/json/{$ip}");
    $data = json_decode($response);
    
    \Log::info('Country Code Response:', (array) $data); // Log the full response for debugging

    return $data->countryCode ?? 'US'; // Default to US if not found
}

    public function MobileAppView()    {
        return view('frontend.app-development');
    }

    public function DigitalTransformationView()    {
        return view('frontend.digital-transformation');
    }
    
    public function DigitalExperienceView()    {
        return view('frontend.digital-experience');
    }
    
    public function DevOpsView()    {
        return view('frontend.devops');
    }

    public function ResourceAugmentationView()    {
        return view('frontend.resource-augmentation');
    }

    public function SuccessStoriesView()    {
        return view('frontend.success-stories');
    }

    public function DataScienceView()    {
        return view('frontend.data-science');
    }

    public function ArVrView()    {
        return view('frontend.ar-vr');
    }

    public function AppModernisationView()    {
        return view('frontend.application-modernisation');
    }

    public function InfrastructureManagementView()    {
        return view('frontend.infrastructure-management');
    }

    public function CICDView()    {
        return view('frontend.ci-cd-pipelines');
    }

    public function ProcessAutomationView()    {
        return view('frontend.process-automation');
    }

    public function ContainersMicroservicesView()    {
        return view('frontend.containers-and-microservices');
    }

    public function DevSecOpsView()    {
        return view('frontend.devsecops');
    }

    public function FrontendDevelopersView()    {
        return view('frontend.frontend-developers');
    }

    public function BackendDevelopersView()    {
        return view('frontend.backend-developers');
    }

    public function FullStackDevelopersView()    {
        return view('frontend.fullstack-developers');
    }

    public function SupportEngineersView()    {
        return view('frontend.support-engineers');
    }    
}
