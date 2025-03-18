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

Route::get('/services/infrastructure-management-services', function () {
    return view('frontend.infrastructure-management');
});

Route::get('/services/application-modernisation-services', function () {
    return view('frontend.application-modernisation');
});

Route::get('/services/ar-vr-services', function () {
    return view('frontend.ar-vr');
});

Route::get('/services/data-science-services', function () {
    return view('frontend.data-science');
});

Route::get('/services/best-digital-marketing-agency', function () {
    return view('frontend.digital-marketing');
});

Route::get('/services/best-seo-service-agency', function () {
    return view('frontend.seo-services');
});

Route::get('/services/social-media-advertising', function () {
    return view('frontend.smo-services');
});

Route::get('/services/ppc-management-company', function () {
    return view('frontend.ppc-services');
});

Route::get('/services/website-development-company', function () {
    return view('frontend.website-development');
});

Route::get('/services/mobile-app-development', function () {
    return view('frontend.app-development');
});

Route::get('/success-stories', function () {
    return view('frontend.success-stories');
});

Route::get('/services/creative-service-agency', function () {
    return view('frontend.creative-services');
});

Route::get('/services/ui-ux-design-services', function () {
    return view('frontend.uiux-design');
});

Route::get('/services/graphics-design-services', function () {
    return view('frontend.graphics-design');
});

Route::get('/services/content-creation-services', function () {
    return view('frontend.content-creation');
});

Route::get('/services/professional-3d-design-services', function () {
    return view('frontend.3d-design');
});

Route::get('/services/digital-transformation-services', function () {
    return view('frontend.digital-transformation');
});

Route::get('/services/digital-experience', function () {
    return view('frontend.digital-experience');
});

Route::get('/services/devops-software-development', function () {
    return view('frontend.devops');
});

Route::get('/services/resource-augmentation-services', function () {
    return view('frontend.resource-augmentation');
});

Route::get('/services/it-support-engineers', function () {
    return view('frontend.support-engineers');
});

Route::get('/services/fullstack-development-services', function () {
    return view('frontend.fullstack-developers');
});

Route::get('/services/backend-development-services', function () {
    return view('frontend.backend-developers');
});

Route::get('/services/frontend-development-company', function () {
    return view('frontend.frontend-developers');
});

Route::get('/services/devsecops-software-development', function () {
    return view('frontend.devsecops');
});

Route::get('/services/container-based-microservices', function () {
    return view('frontend.containers-and-microservices');
});

Route::get('/services/process-automation-services', function () {
    return view('frontend.process-automation');
});

Route::get('/services/ci-cd-pipeline-deployment', function () {
    return view('frontend.ci-cd-pipelines');
});

// Route::get('/services/infrastructure-management', function () {
//     return view('frontend.infrastructure-management');
// });

Route::get('/life-at-jfs', function () {
    return view('frontend.life-at-jfs');
});

Route::get('/services/email-marketing-services', function () {
    return view('frontend.email-marketing');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/newsroom', function () {
    return view('frontend.newsroom');
});

Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');

Route::get('/thankyou', function () {
    return view('frontend.thankyou');
});
