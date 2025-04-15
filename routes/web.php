<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CareerController;


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

Route::get('/careers', [BlogController::class, 'bloglist']);
Route::post('/careers/upload-resume', [CareerController::class, 'uploadResume'])->name('careers.resume.upload');

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

// Jfinmate k addresses
require __DIR__.'/auth.php';

//permission
    Route::prefix('admin')->group(function () {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);
//roles
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'givePermissionToRole']);
//users
    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::get('users/{UserId}/delete', [App\Http\Controllers\UsersController::class, 'destroy']);
});

//blog crud
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', BlogCategoryController::class);
    Route::resource('blogs', BlogController::class);
});

//user routes
Route::get('login', [AdminController::class, 'loginView'])->name('login');
Route::post('userLogin', [FrontendController::class, 'userLogin'])->name('userLogin');
Route::get('logout', [FrontendController::class, 'logout'])->name('logout');
Route::get('forgot', [FrontendController::class, 'forgot'])->name('forgot');
Route::get('userAuth/{user_id}/{auth_code}', [FrontendController::class, 'activate'])->name('activate');

//reset password
Route::post('reset_password_link', [FrontendController::class, 'reset_password_link'])->name('reset_password_link');
Route::get('reset_password/{auth_id}', [FrontendController::class, 'reset_password'])->name('reset_password');
Route::post('update_password', [FrontendController::class, 'update_password'])->name('update_password');


Route::middleware('isAdmin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/admindashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
});

//admin user profile

Route::get('admin/profile/edit', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
Route::get('admin/profile', [ProfileController::class, 'showProfile'])->name('admin.profile');
//customer register
Route::post('/register', [UsersController::class, 'registerUser'])->name('registerUser');


Route::middleware('isAdmin')->group(function () {
    Route::get('admin/profile/edit', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
    Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
});

Route::post('/blogs/comment', [BlogController::class, 'storeComment'])->name('blogs.comment');
Route::get('/blogs/id/{id}', [BlogController::class, 'showById'])->name('blogs.showById');
Route::patch('/admin/blogs/{id}/toggle-status', [BlogController::class, 'toggleStatus'])->name('admin.blogs.toggleStatus');
Route::get('/admin/blog-comments', [BlogController::class, 'pendingComments'])->name('admin.blog-comments');
Route::post('/admin/blog-comments/{id}/approve', [BlogController::class, 'approveComment'])->name('admin.blog-comments.approve');
Route::delete('/admin/blog-comments/{id}', [BlogController::class, 'deleteComment'])->name('admin.blog-comments.delete');

Route::delete('/admin/blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
