<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('services', [FrontendController::class, 'ServicesView']);
Route::get('about-us', [FrontendController::class, 'AboutView']);
Route::get('contact-us', [FrontendController::class, 'ContactView']);
Route::get('privacy-policy', [FrontendController::class, 'PrivacyView']);
Route::get('digital-marketing-company', [FrontendController::class, 'DigitalMarketingView']);
Route::get('seo-services', [FrontendController::class, 'SEOView']);
Route::get('smo-services', [FrontendController::class, 'SMOView']);
Route::get('ppc-services', [FrontendController::class, 'PPCView']);
Route::get('website-design-and-development', [FrontendController::class, 'WebDevView']);
Route::get('mobile-app-development', [FrontendController::class, 'MobileAppView']);
Route::get('success-stories', [FrontendController::class, 'SuccessStoriesView']);


Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');
