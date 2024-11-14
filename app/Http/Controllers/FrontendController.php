<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
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
}
