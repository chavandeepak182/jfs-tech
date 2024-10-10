<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('services', [FrontendController::class, 'ServicesView']);
Route::get('about-us', [FrontendController::class, 'AboutView']);
Route::get('contact-us', [FrontendController::class, 'ContactView']);
Route::get('privacy-policy', [FrontendController::class, 'PrivacyView']);
Route::get('digital-marketing-company', [FrontendController::class, 'DigitalMarketingView']);