<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndustriesCategoryController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

// ==========================================
// PUBLIC FRONTEND ROUTES
// ==========================================

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});

Route::get('/life-at-jfs', function () {
    return view('frontend.life-at-jfs');
})->name('life.at.jfs');


Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');

Route::get('/thankyou', function () {
    return view('frontend.thankyou');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});

// ==========================================
// BLOG ROUTES
// ==========================================

Route::get('/blogs/{slug}', [FrontendController::class, 'showBlog'])->name('blog.show');
Route::get('/blogs', [FrontendController::class, 'blog'])->name('blog');

// ==========================================
// CAREERS (Frontend)
// ==========================================

Route::get('/careers', [JobController::class, 'careers'])->name('careers');
Route::post('/careers/upload-resume', [JobController::class, 'uploadResume'])->name('careers.resume.upload');
Route::patch('/jobs/{id}/toggle-status', [JobController::class, 'toggleStatus'])
    ->name('admin.jobs.toggle-status');
// ==========================================
// SERVICE PAGES (Static)
// ==========================================

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

// ==========================================
// AUTHENTICATION ROUTES
// ==========================================

Route::get('login', [AdminController::class, 'loginView'])->name('login');
Route::post('login', [FrontendController::class, 'userLogin'])->name('userLogin');
Route::get('logout', [FrontendController::class, 'logout'])->name('logout');
Route::get('forgot', [FrontendController::class, 'forgot'])->name('forgot');
Route::get('userAuth/{user_id}/{auth_code}', [FrontendController::class, 'activate'])->name('activate');
Route::post('reset_password_link', [FrontendController::class, 'reset_password_link'])->name('reset_password_link');
Route::get('reset_password/{auth_id}', [FrontendController::class, 'reset_password'])->name('reset_password');
Route::post('update_password', [FrontendController::class, 'update_password'])->name('update_password');
Route::post('/register', [UsersController::class, 'registerUser'])->name('registerUser');

// ==========================================
// ADMIN ROUTES (Protected)
// ==========================================

Route::middleware('isAdmin')->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admindashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
    
    // Profile
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    
    // ==========================================
    // BLOG MANAGEMENT
    // ==========================================
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs/store', [BlogController::class, 'storeService'])->name('blogs.store');
    Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::post('/blogs/delete/{id}', [BlogController::class, 'deleteService'])->name('blogs.delete');
    
    // Blog Categories
    Route::get('/blog-categories', [BlogCategoryController::class, 'index'])->name('blog.categories.index');
    Route::post('/blog-categories/store', [BlogCategoryController::class, 'store'])->name('blog.categories.store');
    Route::get('/blog-categories/edit/{pid}', [BlogCategoryController::class, 'edit'])->name('blog.categories.edit');
    Route::post('/blog-categories/update/{pid}', [BlogCategoryController::class, 'update'])->name('blog.categories.update');
    Route::post('/blog-categories/delete/{pid}', [BlogCategoryController::class, 'destroy'])->name('blog.categories.delete');
    
    // ==========================================
    // JOB MANAGEMENT
    // ==========================================
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
    
    // ==========================================
    // CAREER MANAGEMENT
    // ==========================================
    Route::resource('careers', CareerController::class)->except(['show']);
    Route::get('careers/{career}', [CareerController::class, 'show'])->name('careers.show');
    
    // ==========================================
    // CAREER APPLICATIONS (FIXED WITH ALL ROUTES)
    // ==========================================
    Route::get('/career-applications', [CareerApplicationController::class, 'index'])->name('career-applications.index');
    Route::get('/career-applications/{id}', [CareerApplicationController::class, 'show'])->name('career-applications.show');
    Route::get('/career-applications/{id}/resume', [CareerApplicationController::class, 'previewResume'])->name('career-applications.resume');
    Route::get('/career-applications/{id}/resume/download', [CareerApplicationController::class, 'downloadResume'])->name('career-applications.resume.download');
    Route::post('/career-applications/{id}/status', [CareerApplicationController::class, 'updateStatus'])->name('career-applications.status');
    Route::delete('/career-applications/{id}', [CareerApplicationController::class, 'destroy'])->name('career-applications.destroy');
    
    // ==========================================
    // PERMISSIONS & ROLES
    // ==========================================
    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
    
    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
    
    // Users
    Route::resource('users', UsersController::class);
    Route::get('users/{UserId}/delete', [UsersController::class, 'destroy']);
});

// ==========================================
// 404 FALLBACK
// ==========================================

Route::fallback(function () {
    return view('errors.404');
});