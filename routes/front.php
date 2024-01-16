<?php

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\boardOfDirectorsController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\CertificateController;
use App\Http\Controllers\Front\CodeOfConductController;
use App\Http\Controllers\Front\CommitteesController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\ExecutiveManagementController;
use App\Http\Controllers\Front\FinancialReportController;
use App\Http\Controllers\Front\GeneralAssemblyMeetingController;
use App\Http\Controllers\Front\GovernanceController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\InvestorServiceController;
use App\Http\Controllers\Front\MemberController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\ResponsibilityController;
use App\Http\Controllers\Front\SitemapController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\SliderController;
use App\Http\Controllers\Front\StockPriceController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home page slider section and about page
Route::get('/', [HomeController::class , 'index'] )->name('home.index');
Route::get('slider/{id}/', [SliderController::class , 'show'] )->name('slider.show');
Route::get('/about', [AboutController::class , 'index'] )->name('about.index');

// Privacy Policy && Terms and Conditions
Route::get('/pages/{key}', [PageController::class , 'index'] )->name('pages.index');

// News Pages
Route::match( ['get' , 'post'], '/news', [ArticleController::class , 'index'] )->name('article.index');
Route::get('/news/{obj}', [ArticleController::class , 'show'] )->name('article.show');

// page showe members
Route::get('members/{obj}/show', [MemberController::class , 'show'] )->name('members.show');

//social-responsibility page and two section In it
Route::get('social-responsibility', [ResponsibilityController::class , 'index'] )->name('social-responsibility.index');
Route::get('our-environment', [ResponsibilityController::class , 'environment'] )->name('our-environment.index');
Route::get('our-community', [ResponsibilityController::class , 'community'] )->name('our-community.index');

// product Pages
Route::match(['get' , 'post'] ,'/product/{type}', [ProductController::class , 'index'] )->name('products.index');
Route::get('/product/show/{id}', [ProductController::class , 'show'] )->name('products.show');

// Stock Price Page
Route::get('stock-price', [StockPriceController::class , 'index'] )->name('stock-price.index');

// investor-services  Page
Route::get('investor-services', [InvestorServiceController::class , 'index'] )->name('investor-services.index');
Route::post('investor-services/store', [InvestorServiceController::class , 'store'] )->name('investor-services.store');

// Financial Reports Page
Route::match(['get' , 'post'] ,'financial-report', [FinancialReportController::class , 'index'] )->name('financial-report.index');

// page governance
Route::get('governance', [GovernanceController::class , 'index'] )->name('governance.index');

// section governance to pages
Route::get('committees', [CommitteesController::class , 'index'] )->name('committees.index');
Route::get('board-of-directors', [boardOfDirectorsController::class , 'index'] )->name('board-of-directors.index');
Route::get('executive-management', [ExecutiveManagementController::class , 'index'] )->name('executive-management.index');
Route::get('general-assembly-meeting', [GeneralAssemblyMeetingController::class , 'index'] )->name('general-assembly-meeting.index');
Route::get('code-of-conduct', [CodeOfConductController::class , 'index'] )->name('code-of-conduct.index');

// Contact Us Page
Route::get('contact', [ContactController::class , 'index'] )->name('contact.index');
Route::post('contact/store', [ContactController::class , 'store'] )->name('contact.store');


// certificates Page
Route::get('/certificates', [CertificateController::class , 'index'] )->name('certificates.index');


// careers Page
Route::get('/careers', [CareerController::class , 'index'] )->name('careers.index');

// careers form
Route::get('/career/{obj}', [CareerController::class , 'show'] )->name('careers.form');
Route::post('/career/{obj}/store', [CareerController::class , 'store'] )->name('careers.store');


Route::get('sitemap', [SitemapController::class , 'index'] )->name('sitemap.index');

// landing page
Route::get('landing', [LandingController::class , 'index'] )->name('landing.index');

