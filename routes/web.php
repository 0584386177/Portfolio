<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CategoryPostController;
use App\Http\Controllers\Frontend\CategorySoftwareController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\SoftwareController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;


// PortFolio Routes
Route::get('/', [PortfolioController::class, 'portfolio'])
    ->name('index');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])
    ->name('portfolio');
// Service Website Routes
Route::get('/thiet-ke-website', [HomeController::class, 'serviceWebsite'])
    ->name('thiet-ke-website');

// Category Post Routes
Route::get('/category/{slug}', [CategoryPostController::class, 'show'])
    ->name('category.post.show');

// Blog Routes
Route::get('/blog', [BlogController::class, 'blog'])
    ->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'blog_detail'])
    ->name('blog-detail');

// Software Routes
Route::get('/software', [SoftwareController::class, 'index'])
    ->name('software');
Route::get('software/danh-muc/{slug}', [CategorySoftwareController::class, 'show'])
    ->name('category.software.show');

Route::get('/softwares/download/{software:slug}', [SoftwareController::class, 'download'])->name('software.download');
// Customer Routes
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');


// Pages Routes about
Route::get('/about', [PagesController::class, 'about'])
    ->name('about');
// Pages Routes 
Route::get('/team', [PagesController::class, 'team'])
    ->name('team');
Route::get('/team-carousel', [PagesController::class, 'team_carousel'])
    ->name('team-carousel');
Route::get('/team-details', [PagesController::class, 'team_details'])
    ->name('team-details');
Route::get('/testimonials', [PagesController::class, 'testimonials'])
    ->name('testimonials');
Route::get('/testimonials-carousel', [PagesController::class, 'testimonials_carousel'])
    ->name('testimonials-carousel');
Route::get('/pricing', [PagesController::class, 'pricing'])
    ->name('pricing');
Route::get('/gallery', [PagesController::class, 'gallery'])
    ->name('gallery');
Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');
Route::get('/404', [PagesController::class, 'notfound'])
    ->name('404');
Route::get('/coming-soon', [PagesController::class, 'coming_soon'])
    ->name('coming-soon');


// Services Routes
Route::get('/services', [PagesController::class, 'services'])
    ->name('services');
Route::get('/services-carousel', [PagesController::class, 'services_carousel'])
    ->name('services-carousel');
Route::get('/threat-detection-prevention', [PagesController::class, 'threat_detection_prevention'])
    ->name('threat-detection-prevention');
Route::get('/endpoint-device-security', [PagesController::class, 'endpoint_device_security'])
    ->name('endpoint-device-security');
Route::get('/data-protection-privacy', [PagesController::class, 'data_protection_privacy'])
    ->name('data-protection-privacy');
Route::get('/backup-recovery', [PagesController::class, 'backup_recovery'])
    ->name('backup-recovery');
Route::get('/advanced-technology', [PagesController::class, 'advanced_technology'])
    ->name('advanced-technology');
Route::get('/cloud-managed-services', [PagesController::class, 'cloud_managed_services'])
    ->name('cloud-managed-services');


// Products Routes
Route::get('/products', [PagesController::class, 'products'])
    ->name('products');
Route::get('/product-details', [PagesController::class, 'product_details'])
    ->name('product-details');
Route::get('/cart', [PagesController::class, 'cart'])
    ->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])
    ->name('checkout');
Route::get('/wishlist', [PagesController::class, 'wishlist'])
    ->name('wishlist');
Route::get('/sign-up', [PagesController::class, 'sign_up'])
    ->name('sign-up');
Route::get('/login', [PagesController::class, 'login'])
    ->name('login');




// Contact Routes
Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
})->name('fallback');
