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
Route::redirect('/services/infrastructure-management', '/services/infrastructure-management-services', 301);

Route::get('/services/application-modernisation-services', function () {
    return view('frontend.application-modernisation');
});
Route::redirect('/services/application-modernisation', '/services/application-modernisation-services', 301);

Route::get('/services/ar-vr-services', function () {
    return view('frontend.ar-vr');
});
Route::redirect('/services/ar-vr', '/services/ar-vr-services', 301);

Route::get('/services/data-science-services', function () {
    return view('frontend.data-science');
});
Route::redirect('/services/data-science', '/services/data-science-services', 301);

Route::get('/services/best-digital-marketing-agency', function () {
    return view('frontend.digital-marketing');
});
Route::redirect('/services/digital-marketing-company', '/services/best-digital-marketing-agency', 301);

Route::get('/services/best-seo-service-agency', function () {
    return view('frontend.seo-services');
});
Route::redirect('/services/seo-services', '/services/best-seo-service-agency', 301);

Route::get('/services/social-media-advertising', function () {
    return view('frontend.smo-services');
});
Route::redirect('/services/smo-services', '/services/social-media-advertising', 301);


Route::get('/services/ppc-management-company', function () {
    return view('frontend.ppc-services');
});
Route::redirect('/services/ppc-services', '/services/ppc-management-company', 301);


Route::get('/services/website-development-company', function () {
    return view('frontend.website-development');
});
Route::redirect('/services/website-development', '/services/website-development-company', 301);

Route::get('/services/mobile-app-development', function () {
    return view('frontend.app-development');
});

Route::get('/success-stories', function () {
    return view('frontend.success-stories');
});

Route::get('/services/creative-service-agency', function () {
    return view('frontend.creative-services');
});
Route::redirect('/services/creative-services', '/services/creative-service-agency', 301);

Route::get('/services/ui-ux-design-services', function () {
    return view('frontend.uiux-design');
});
Route::redirect('/services/uiux-design', '/services/ui-ux-design-services', 301);

Route::get('/services/graphics-design-services', function () {
    return view('frontend.graphics-design');
});
Route::redirect('/services/graphics-design', '/services/graphics-design-services', 301);


Route::get('/services/content-creation-services', function () {
    return view('frontend.content-creation');
});
Route::redirect('/services/content-creation', '/services/content-creation-services', 301);

Route::get('/services/professional-3d-design-services', function () {
    return view('frontend.3d-design');
});
Route::redirect('/services/3d-design', '/services/professional-3d-design-services', 301);

Route::get('/services/digital-transformation-services', function () {
    return view('frontend.digital-transformation');
});
Route::redirect('/services/digital-transformation', '/services/digital-transformation-services', 301);

Route::get('/services/digital-experience', function () {
    return view('frontend.digital-experience');
});

Route::get('/services/devops-software-development', function () {
    return view('frontend.devops');
});
Route::redirect('/services/devops', '/services/devops-software-development', 301);


Route::get('/services/resource-augmentation-services', function () {
    return view('frontend.resource-augmentation');
});
Route::redirect('/services/resource-augmentation', '/services/resource-augmentation-services', 301);

Route::get('/services/it-support-engineers', function () {
    return view('frontend.support-engineers');
});
Route::redirect('/services/support-engineers', '/services/it-support-engineers', 301);

Route::get('/services/fullstack-development-services', function () {
    return view('frontend.fullstack-developers');
});
Route::redirect('/services/fullstack-developers', '/services/fullstack-development-services', 301);

Route::get('/services/backend-development-services', function () {
    return view('frontend.backend-developers');
});
Route::redirect('/services/backend-developers', '/services/backend-development-services', 301);

Route::get('/services/frontend-development-company', function () {
    return view('frontend.frontend-developers');
});
Route::redirect('/services/frontend-developers', '/services/frontend-development-company', 301);

Route::get('/services/devsecops-software-development', function () {
    return view('frontend.devsecops');
});
Route::redirect('/services/devsecops', '/services/devsecops-software-development', 301);

Route::get('/services/container-based-microservices', function () {
    return view('frontend.containers-and-microservices');
});
Route::redirect('/services/containers-and-microservices', '/services/container-based-microservices', 301);

Route::get('/services/process-automation-services', function () {
    return view('frontend.process-automation');
});
Route::redirect('/services/process-automation', '/services/process-automation-services', 301);

Route::get('/services/ci-cd-pipeline-deployment', function () {
    return view('frontend.ci-cd-pipelines');
});
Route::redirect('/services/ci-cd-pipelines', '/services/ci-cd-pipeline-deployment', 301);

// Route::get('/services/infrastructure-management', function () {
//     return view('frontend.infrastructure-management');
// });

Route::get('/life-at-jfs', function () {
    return view('frontend.life-at-jfs');
});

Route::get('/services/email-marketing-services', function () {
    return view('frontend.email-marketing');
});
Route::redirect('/services/email-marketing', '/services/email-marketing-services', 301);

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
