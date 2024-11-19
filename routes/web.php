<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});

Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});

Route::get('/services/infrastructure-management', function () {
    return view('frontend.infrastructure-management');
});

Route::get('/services/application-modernisation', function () {
    return view('frontend.application-modernisation');
});

Route::get('/services/ar-vr', function () {
    return view('frontend.ar-vr');
});

Route::get('/services/data-science', function () {
    return view('frontend.data-science');
});

Route::get('/services/digital-marketing-company', function () {
    return view('frontend.digital-marketing');
});

Route::get('/services/seo-services', function () {
    return view('frontend.seo-services');
});

Route::get('/services/smo-services', function () {
    return view('frontend.smo-services');
});

Route::get('/services/ppc-services', function () {
    return view('frontend.ppc-services');
});

Route::get('/services/website-design-and-development', function () {
    return view('frontend.website-development');
});

Route::get('/services/mobile-app-development', function () {
    return view('frontend.app-development');
});

Route::get('/success-stories', function () {
    return view('frontend.success-stories');
});

Route::get('/services/creative-services', function () {
    return view('frontend.creative-services');
});

Route::get('/services/uiux-design', function () {
    return view('frontend.uiux-design');
});

Route::get('/services/graphics-design', function () {
    return view('frontend.graphics-design');
});

Route::get('/services/content-creation', function () {
    return view('frontend.content-creation');
});

Route::get('/services/3d-design', function () {
    return view('frontend.3d-design');
});

Route::get('/services/digital-transformation', function () {
    return view('frontend.digital-transformation');
});

Route::get('/services/digital-experience', function () {
    return view('frontend.digital-experience');
});

Route::get('/services/devops', function () {
    return view('frontend.devops');
});

Route::get('/services/resource-augmentation', function () {
    return view('frontend.resource-augmentation');
});

Route::get('/services/support-engineers', function () {
    return view('frontend.support-engineers');
});

Route::get('/services/fullstack-developers', function () {
    return view('frontend.fullstack-developers');
});

Route::get('/services/backend-developers', function () {
    return view('frontend.backend-developers');
});

Route::get('/services/frontend-developers', function () {
    return view('frontend.frontend-developers');
});

Route::get('/services/devsecops', function () {
    return view('frontend.devsecops');
});

Route::get('/services/containers-and-microservices', function () {
    return view('frontend.containers-and-microservices');
});

Route::get('/services/process-automation', function () {
    return view('frontend.process-automation');
});

Route::get('/services/ci-cd-pipelines', function () {
    return view('frontend.ci-cd-pipelines');
});

Route::get('/services/infrastructure-management', function () {
    return view('frontend.infrastructure-management');
});

Route::get('/careers', function () {
    return view('frontend.careers');
});

Route::get('/services/email-marketing', function () {
    return view('frontend.email-marketing');
});

Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');
