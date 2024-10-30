<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [FrontendController::class, 'HomePageView'])->name('home');

Route::get('services', [FrontendController::class, 'ServicesView'])->name('services');
Route::get('about-us', [FrontendController::class, 'AboutView'])->name('about-us');
Route::get('contact-us', [FrontendController::class, 'ContactView'])->name('contact-us');
Route::get('privacy-policy', [FrontendController::class, 'PrivacyView']);
Route::get('services/digital-marketing-company', [FrontendController::class, 'DigitalMarketingView'])->name('services.digital-marketing-company');
Route::get('services/seo-services', [FrontendController::class, 'SEOView'])->name('services.seo-services');
Route::get('services/smo-services', [FrontendController::class, 'SMOView'])->name('services.smo-services');
Route::get('services/ppc-services', [FrontendController::class, 'PPCView'])->name('services.ppc-services');
Route::get('services/website-design-and-development', [FrontendController::class, 'WebDevView'])->name('services.website-design-and-development');
Route::get('services/mobile-app-development', [FrontendController::class, 'MobileAppView'])->name('services.mobile-app-development');
Route::get('success-stories', [FrontendController::class, 'SuccessStoriesView'])->name('success-stories');
Route::get('services/digital-transformation', [FrontendController::class, 'DigitalTransformationView'])->name('services.digital-transformation');
Route::get('services/digital-experience', [FrontendController::class, 'DigitalExperienceView'])->name('services.digital-experience');
Route::get('services/cloud-solution', [FrontendController::class, 'CloudSolutionView'])->name('services.cloud-solution');
Route::get('services/resource-augmentation', [FrontendController::class, 'ResourceAugmentationView'])->name('services.resource-augmentation');


Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');
