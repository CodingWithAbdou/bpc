<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleTypeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CarerrController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificatController;
use App\Http\Controllers\Admin\ConstantController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GovernanceController;
use App\Http\Controllers\Admin\GovernanceSectionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InvestorServiceController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\OtherPageController;
use App\Http\Controllers\Admin\PageAboutController;
use App\Http\Controllers\Admin\PageContactController;
use App\Http\Controllers\Admin\PageEnvironmentConteroller;
use App\Http\Controllers\Admin\PageFinancialReportsController;
use App\Http\Controllers\Admin\PageHomeController;
use App\Http\Controllers\Admin\PageInvestorRelationsController;
use App\Http\Controllers\Admin\PageInvestorServicesController;
use App\Http\Controllers\Admin\PageResponsibility;
use App\Http\Controllers\Admin\PageStokPriceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductivityController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReorderController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
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

//language switch route
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switchLang');



Route::group([ 'prefix' => 'admin' , 'middleware' => 'guest' ] , function() {
    //auth
    Route::get('login', [LoginController::class , 'index'] )->name('dashboard.login.index');
    Route::post('admin/login/submit', [LoginController::class , 'login'] )->name('dashboard.login.form');
});



Route::group([ 'prefix' => 'admin'  , 'middleware' => 'auth'] , function() {
    //general
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard.home');
    Route::get('/{segment}/translation/get', [HomeController::class, 'translationGet'])->name('dashboard.translation.get');
    Route::get('logout', [LoginController::class, 'logout'])->name('dashboard.logout');

    // item order
    Route::get('/{segment}/re-order/{id?}', [ReorderController::class, 'index'])->name('dashboard.reorder.index');
    Route::post('/re-order/update', [ReorderController::class, 'update'])->name('dashboard.reorder.update');

    //profile
    Route::get('profile', [ProfileController::class, 'index'])->name('dashboard.profile.index');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('dashboard.profile.update');
    Route::get('password', [ProfileController::class, 'password'])->name('dashboard.password.index');
    Route::post('password/change', [ProfileController::class, 'update_password'])->name('dashboard.password.update');

    //users
    Route::get('users', [UserController::class, 'index'])->name('dashboard.users.index')->middleware(['permission:admin.users.view|admin.users.add|admin.users.edit|admin.users.delete']);
    Route::get('users/create', [UserController::class, 'create'])->name('dashboard.users.create')->middleware(['permission:admin.users.add']);
    Route::post('users/store', [UserController::class, 'store'])->name('dashboard.users.store')->middleware(['permission:admin.users.add']);
    Route::get('users/{obj}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit')->middleware(['permission:admin.users.edit']);
    Route::post('users/{obj}/update', [UserController::class, 'update'])->name('dashboard.users.update')->middleware(['permission:admin.users.edit']);
    Route::delete('users/{obj}/delete', [UserController::class, 'destroy'])->name('dashboard.users.destroy')->middleware(['permission:admin.users.delete']);

    //roles
    Route::get('roles', [RoleController::class, 'index'])->name('dashboard.roles.index')->middleware(['permission:admin.roles.view|admin.roles.add|admin.roles.edit|admin.roles.delete']);
    Route::get('roles/create', [RoleController::class, 'create'])->name('dashboard.roles.create')->middleware(['permission:admin.roles.add']);
    Route::post('roles', [RoleController::class, 'store'])->name('dashboard.roles.store')->middleware(['permission:admin.roles.add']);
    Route::get('roles/{obj}/edit', [RoleController::class, 'edit'])->name('dashboard.roles.edit')->middleware(['permission:admin.roles.edit']);
    Route::post('roles/update/{obj}', [RoleController::class, 'update'])->name('dashboard.roles.update')->middleware(['permission:admin.roles.edit']);
    Route::delete('roles/{obj}', [RoleController::class, 'destroy'])->name('dashboard.roles.destroy')->middleware(['permission:admin.roles.delete']);
    Route::get('roles/{role}/permissions', [RoleController::class, 'permissions'])->name('dashboard.roles.permissions.index')->middleware(['permission:admin.roles.permissions']);
    Route::post('roles/{role}/permissions', [RoleController::class, 'permissionsStore'])->name('dashboard.roles.permissions.store')->middleware(['permission:admin.roles.permissions']);


    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('dashboard.settings.index')->middleware(['permission:admin.settings.view'])->middleware(['permission:admin.settings.view|admin.settings.edit']);
    Route::post('/settings', [SettingController::class, 'update'])->name('dashboard.settings.update')->middleware(['permission:admin.settings.edit'])->middleware(['permission:admin.settings.edit']);

    //pages Home
    Route::get('pages/home', [PageHomeController::class, 'index'])->name('dashboard.pageHome.index')->middleware(['permission:admin.pageHome.view|admin.pageHome.edit']);
    Route::get('pages/home/{obj}/edit', [PageHomeController::class, 'edit'])->name('dashboard.pageHome.edit')->middleware(['permission:admin.pageHome.edit']);
    Route::post('pages/home/update/{obj}', [PageHomeController::class, 'update'])->name('dashboard.pageHome.update')->middleware(['permission:admin.pageHome.edit']);

    //Sliders
    Route::get('sliders', [SliderController::class, 'index'])->name('dashboard.sliders.index')->middleware(['permission:admin.sliders.view|admin.sliders.add|admin.sliders.edit|admin.sliders.delete']);
    Route::get('sliders/create', [SliderController::class, 'create'])->name('dashboard.sliders.create')->middleware(['permission:admin.sliders.add']);
    Route::post('sliders/store', [SliderController::class, 'store'])->name('dashboard.sliders.store')->middleware(['permission:admin.sliders.add']);
    Route::get('sliders/{obj}/edit', [SliderController::class, 'edit'])->name('dashboard.sliders.edit')->middleware(['permission:admin.sliders.edit']);
    Route::post('sliders/{obj}/update', [SliderController::class, 'update'])->name('dashboard.sliders.update')->middleware(['permission:admin.sliders.edit']);
    Route::delete('sliders/{obj}/delete', [SliderController::class, 'destroy'])->name('dashboard.sliders.destroy')->middleware(['permission:admin.sliders.delete']);
    Route::post('sliders/uploads/remove', [SliderController::class, 'removeUpload'])->name('dashboard.sliders.uploads.remove');

    //news
    Route::get('news', [ArticleController::class, 'index'])->name('dashboard.articles.index')->middleware(['permission:admin.articles.view|admin.articles.add|admin.articles.edit|admin.articles.delete']);
    Route::get('news/create', [ArticleController::class, 'create'])->name('dashboard.articles.create')->middleware(['permission:admin.articles.add']);
    Route::post('news/store', [ArticleController::class, 'store'])->name('dashboard.articles.store')->middleware(['permission:admin.articles.add']);
    Route::get('news/{obj}/edit', [ArticleController::class, 'edit'])->name('dashboard.articles.edit')->middleware(['permission:admin.articles.edit']);
    Route::post('news/{obj}/update', [ArticleController::class, 'update'])->name('dashboard.articles.update')->middleware(['permission:admin.articles.edit']);
    Route::delete('news/{obj}/delete', [ArticleController::class, 'destroy'])->name('dashboard.articles.destroy')->middleware(['permission:admin.articles.delete']);
    Route::post('news/uploads/remove', [ArticleController::class, 'removeUpload'])->name('dashboard.articles.uploads.remove');

    //news Letter
    Route::get('news-letter', [NewsLetterController::class, 'index'])->name('dashboard.news-letter.index')->middleware(['permission:admin.news-letter.view|permission:admin.news-letter.edit']);
    Route::get('news-letter/edit', [NewsLetterController::class, 'edit'])->name('dashboard.news-letter.edit')->middleware(['permission:admin.news-letter.edit']);
    Route::post('news-letter/update', [NewsLetterController::class, 'update'])->name('dashboard.news-letter.update')->middleware(['permission:admin.news-letter.edit']);
    Route::post('news-letter/uploads/remove', [NewsLetterController::class, 'removeUpload'])->name('dashboard.news-letter.uploads.remove');

    //pages About
    Route::get('pages/about', [PageAboutController::class, 'index'])->name('dashboard.pageAbout.index')->middleware(['permission:admin.pageAbout.view|admin.pageAbout.edit']);
    Route::get('pages/about/{obj}/edit', [PageAboutController::class, 'edit'])->name('dashboard.pageAbout.edit')->middleware(['permission:admin.pageAbout.edit']);
    Route::post('pages/about/update/{obj}', [PageAboutController::class, 'update'])->name('dashboard.pageAbout.update')->middleware(['permission:admin.pageAbout.edit']);

    //pages Product
    Route::get('products', [ProductController::class, 'index'])->name('dashboard.products.index')->middleware(['permission:admin.products.view|admin.products.add|admin.products.edit|admin.products.delete']);
    Route::get('products/create', [ProductController::class, 'create'])->name('dashboard.products.create')->middleware(['permission:admin.products.add']);
    Route::post('products/store', [ProductController::class, 'store'])->name('dashboard.products.store')->middleware(['permission:admin.products.add']);
    Route::get('products/{obj}/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit')->middleware(['permission:admin.products.edit']);
    Route::post('products/{obj}/update', [ProductController::class, 'update'])->name('dashboard.products.update')->middleware(['permission:admin.products.edit']);
    Route::delete('products/{obj}/delete', [ProductController::class, 'destroy'])->name('dashboard.products.destroy')->middleware(['permission:admin.products.delete']);
    Route::post('products/uploads/remove', [ProductController::class, 'removeUpload'])->name('dashboard.products.uploads.remove');


    //page social Responsibility
    Route::get('social-responsibility', [PageResponsibility::class, 'index'])->name('dashboard.social-responsibility.index')->middleware(['permission:admin.social-responsibility.view|admin.social-responsibility.edit']);
    Route::get('social-responsibility/edit', [PageResponsibility::class, 'edit'])->name('dashboard.social-responsibility.edit')->middleware(['permission:admin.social-responsibility.edit']);
    Route::post('social-responsibility/edit', [PageResponsibility::class, 'update'])->name('dashboard.social-responsibility.update')->middleware(['permission:admin.social-responsibility.edit']);

    //page our community
    Route::get('community/edit', [PageResponsibility::class, 'community'])->name('dashboard.community.edit')->middleware(['permission:admin.community.view|admin.community.edit']);
    Route::post('community/update', [PageResponsibility::class, 'communityupdate'])->name('dashboard.community.update')->middleware(['permission:admin.community.edit']);

    //page our environment
    Route::get('environment', [PageEnvironmentConteroller::class, 'index'])->name('dashboard.environment.index')->middleware(['permission:admin.environment.view|admin.environment.edit']);
    Route::get('environment/edit', [PageEnvironmentConteroller::class, 'edit'])->name('dashboard.environment.edit')->middleware(['permission:admin.environment.edit']);
    Route::post('environment/update', [PageEnvironmentConteroller::class, 'update'])->name('dashboard.environment.update')->middleware(['permission:admin.environment.edit']);
    Route::get('environment/lists/{obj}/edit', [PageEnvironmentConteroller::class, 'lists'])->name('dashboard.environment.lists.edit')->middleware(['permission:admin.environment.edit']);
    Route::post('environment/lists/{obj}/update', [PageEnvironmentConteroller::class, 'listsUpdate'])->name('dashboard.environment.lists.update')->middleware(['permission:admin.environment.edit']);

    //page investor-relations
    Route::get('investor-relations', [PageInvestorRelationsController::class, 'index'])->name('dashboard.investor-relations.index')->middleware(['permission:admin.investor-relations.view']);

    // page stok-price
    Route::get('stok-price/edit', [PageStokPriceController::class, 'edit'])->name('dashboard.stok-price.edit')->middleware(['permission:admin.stok-price.view|admin.stok-price.edit']);
    Route::post('stok-price/update', [PageStokPriceController::class, 'update'])->name('dashboard.stok-price.update')->middleware(['permission:admin.stok-price.edit']);

    // page investor-services
    Route::get('page-investor-services', [PageInvestorServicesController::class, 'edit'])->name('dashboard.page-investor-services.edit')->middleware(['permission:admin.page-investor-services.view|admin.page-investor-services.edit']);
    Route::post('page-investor-services/update', [PageInvestorServicesController::class, 'update'])->name('dashboard.page-investor-services.update')->middleware(['permission:admin.page-investor-services.edit']);

    // page financial-reports
    Route::get('financial-reports', [PageFinancialReportsController::class, 'index'])->name('dashboard.financial-reports.index')->middleware(['permission:admin.financial-reports.view|admin.financial-reports.edit']);
    Route::get('financial-reports/edit', [PageFinancialReportsController::class, 'edit'])->name('dashboard.financial-reports.edit')->middleware(['permission:admin.financial-reports.edit']);
    Route::post('financial-reports/update', [PageFinancialReportsController::class, 'update'])->name('dashboard.financial-reports.update')->middleware(['permission:admin.financial-reports.edit']);

    // Section financial-reports-annual
    Route::get('financial-reports-annual', [ReportsController::class, 'index'])->name('dashboard.financial-reports-annual.index')->middleware(['permission:admin.financial-reports-annual.view|financial-reports-annual.add|financial-reports-annual.edit|financial-reports-annual.delete']);
    Route::get('financial-reports-annual/create', [ReportsController::class, 'create'])->name('dashboard.financial-reports-annual.create')->middleware(['permission:admin.financial-reports-annual.add']);
    Route::post('financial-reports-annual/store', [ReportsController::class, 'store'])->name('dashboard.financial-reports-annual.store')->middleware(['permission:admin.financial-reports-annual.add']);
    Route::get('financial-reports-annual/{obj}/edit', [ReportsController::class, 'edit'])->name('dashboard.financial-reports-annual.edit')->middleware(['permission:admin.financial-reports-annual.edit']);
    Route::post('financial-reports-annual/{obj}/update', [ReportsController::class, 'update'])->name('dashboard.financial-reports-annual.update')->middleware(['permission:admin.financial-reports-annual.edit']);
    Route::delete('financial-reports-annual/{obj}/delete', [ReportsController::class, 'destroy'])->name('dashboard.financial-reports-annual.destroy')->middleware(['permission:admin.financial-reports-annual.delete']);
    Route::post('financial-reports-annual/uploads/remove', [ReportsController::class, 'removeUpload'])->name('dashboard.financial-reports-annual.uploads.remove');

    // Section financial-reports-quarter
    Route::get('financial-reports-quarter', [ReportsController::class, 'index'])->name('dashboard.financial-reports-quarter.index')->middleware(['permission:admin.financial-reports-quarter.view|financial-reports-quarter.add|financial-reports-quarter.edit|financial-reports-quarter.delete']);
    Route::get('financial-reports-quarter/create', [ReportsController::class, 'create'])->name('dashboard.financial-reports-quarter.create')->middleware(['permission:admin.financial-reports-quarter.add']);
    Route::post('financial-reports-quarter/store', [ReportsController::class, 'store'])->name('dashboard.financial-reports-quarter.store')->middleware(['permission:admin.financial-reports-quarter.add']);
    Route::get('financial-reports-quarter/{obj}/edit', [ReportsController::class, 'edit'])->name('dashboard.financial-reports-quarter.edit')->middleware(['permission:admin.financial-reports-quarter.edit']);
    Route::post('financial-reports-quarter/{obj}/update', [ReportsController::class, 'update'])->name('dashboard.financial-reports-quarter.update')->middleware(['permission:admin.financial-reports-quarter.edit']);
    Route::delete('financial-reports-quarter/{obj}/delete', [ReportsController::class, 'destroy'])->name('dashboard.financial-reports-quarter.destroy')->middleware(['permission:admin.financial-reports-quarter.delete']);
    Route::post('financial-reports-quarter/uploads/remove', [ReportsController::class, 'removeUpload'])->name('dashboard.financial-reports-quarter.uploads.remove');

    // Governance Page
    Route::get('governance', [GovernanceController::class, 'index'])->name('dashboard.governance.index')->middleware(['permission:admin.governance.view|admin.governance.edit']);
    Route::get('governance/{obj}/edit', [GovernanceController::class, 'edit'])->name('dashboard.governance.edit')->middleware(['permission:admin.governance.edit']);
    Route::post('governance/{obj}/update', [GovernanceController::class, 'update'])->name('dashboard.governance.update')->middleware(['permission:admin.governance.edit']);

    // page-board-of-directors
    Route::get('page-board-of-directors/', [GovernanceSectionController::class, 'index'])->name('dashboard.page-board-of-directors.index')->middleware(['permission:admin.page-board-of-directors.view|admin.page-board-of-directors.edit']);
    Route::get('page-board-of-directors/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-board-of-directors.edit')->middleware(['permission:admin.page-board-of-directors.edit']);
    Route::post('page-board-of-directors/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-board-of-directors.update')->middleware(['permission:admin.page-board-of-directors.edit']);

    // page-committees
    Route::get('page-committees', [GovernanceSectionController::class, 'index'])->name('dashboard.page-committees.index')->middleware(['permission:admin.page-committees.view|admin.page-committees.edit']);
    Route::get('page-committees/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-committees.edit')->middleware(['permission:admin.page-committees.edit']);
    Route::post('page-committees/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-committees.update')->middleware(['permission:admin.page-committees.edit']);

    //page-code-of-conduct
    Route::get('page-code-of-conduct', [GovernanceSectionController::class, 'index'])->name('dashboard.page-code-of-conduct.index')->middleware(['permission:admin.page-code-of-conduct.view|admin.page-code-of-conduct.edit']);
    Route::get('page-code-of-conduct/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-code-of-conduct.edit')->middleware(['permission:admin.page-code-of-conduct.edit']);
    Route::post('page-code-of-conduct/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-code-of-conduct.update')->middleware(['permission:admin.page-code-of-conduct.edit']);
    Route::post('page-code-of-conduct/uploads/remove', [GovernanceSectionController::class, 'removeUpload'])->name('dashboard.page-code-of-conduct.uploads.remove');

    //page-general-assembly-meeting
    Route::get('page-general-assembly-meeting', [GovernanceSectionController::class, 'index'])->name('dashboard.page-general-assembly-meeting.index')->middleware(['permission:admin.page-general-assembly-meeting.view|admin.page-general-assembly-meeting.edit']);
    Route::get('page-general-assembly-meeting/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-general-assembly-meeting.edit')->middleware(['permission:admin.page-general-assembly-meeting.edit']);
    Route::post('page-general-assembly-meeting/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-general-assembly-meeting.update')->middleware(['permission:admin.page-general-assembly-meeting.edit']);
    Route::post('page-general-assembly-meeting/uploads/remove', [GovernanceSectionController::class, 'removeUpload'])->name('dashboard.page-general-assembly-meeting.uploads.remove');

    //page-contact
    Route::get('page-contact', [PageContactController::class, 'index'])->name('dashboard.page-contact.index')->middleware(['permission:admin.page-contact.view|admin.page-contact.edit']);
    Route::get('page-contact/edit', [PageContactController::class, 'edit'])->name('dashboard.page-contact.edit')->middleware(['permission:admin.page-contact.edit']);
    Route::post('page-contact/update', [PageContactController::class, 'update'])->name('dashboard.page-contact.update')->middleware(['permission:admin.page-contact.edit']);

    // Branch Sections
    Route::get('branches', [BranchController::class, 'index'])->name('dashboard.branches.index')->middleware(['permission:admin.branches.view|admin.branches.add|admin.branches.edit|admin.branches.delete']);
    Route::get('branches/create', [BranchController::class, 'create'])->name('dashboard.branches.create')->middleware(['permission:admin.branches.add']);
    Route::post('branches/store', [BranchController::class, 'store'])->name('dashboard.branches.store')->middleware(['permission:admin.branches.add']);
    Route::get('branches/{obj}/edit', [BranchController::class, 'edit'])->name('dashboard.branches.edit')->middleware(['permission:admin.branches.edit']);
    Route::post('branches/{obj}/update', [BranchController::class, 'update'])->name('dashboard.branches.update')->middleware(['permission:admin.branches.edit']);
    Route::delete('branches/{obj}/delete', [BranchController::class, 'destroy'])->name('dashboard.branches.destroy')->middleware(['permission:admin.branches.delete']);

    //other-page
    Route::get('pages/other', [OtherPageController::class, 'index'])->name('dashboard.other-page.index')->middleware(['permission:admin.other-page.view|admin.other-page.edit']);
    Route::get('pages/other/{obj}/edit', [OtherPageController::class, 'edit'])->name('dashboard.other-page.edit')->middleware(['permission:admin.other-page.edit']);
    Route::post('pages/other/update/{obj}', [OtherPageController::class, 'update'])->name('dashboard.other-page.update')->middleware(['permission:admin.other-page.edit']);

    // Product Type
    Route::get('product-types', [ProductTypeController::class, 'index'])->name('dashboard.product-types.index')->middleware(['permission:admin.product-types.view|admin.product-types.edit']);
    Route::get('product-types/edit/{obj}', [ProductTypeController::class, 'edit'])->name('dashboard.product-types.edit')->middleware(['permission:admin.product-types.edit']);
    Route::post('product-types/update/{obj}', [ProductTypeController::class, 'update'])->name('dashboard.product-types.update')->middleware(['permission:admin.product-types.edit']);

    // Categories
    Route::get('categories', [CategoryController::class, 'index'])->name('dashboard.categories.index')->middleware(['permission:admin.categories.view|admin.categories.add|admin.categories.edit|admin.categories.delete']);
    Route::get('categories/create', [CategoryController::class, 'create'])->name('dashboard.categories.create')->middleware(['permission:admin.categories.add']);
    Route::post('categories/store', [CategoryController::class, 'store'])->name('dashboard.categories.store')->middleware(['permission:admin.categories.add']);
    Route::get('categories/{obj}/edit', [CategoryController::class, 'edit'])->name('dashboard.categories.edit')->middleware(['permission:admin.categories.edit']);
    Route::post('categories/{obj}/update', [CategoryController::class, 'update'])->name('dashboard.categories.update')->middleware(['permission:admin.categories.edit']);
    Route::delete('categories/{obj}/delete', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy')->middleware(['permission:admin.categories.delete']);

    // Productivity
    Route::get('productivity', [ProductivityController::class, 'index'])->name('dashboard.productivity.index')->middleware(['permission:admin.productivity.view|admin.productivity.edit']);
    Route::get('product-types/{obj}/edit', [ProductivityController::class, 'edit'])->name('dashboard.productivity.edit')->middleware(['permission:admin.productivity.edit']);
    Route::post('product-types/{obj}/update', [ProductivityController::class, 'update'])->name('dashboard.productivity.update')->middleware(['permission:admin.productivity.edit']);

    // board-of-directors
    Route::get('board-of-directors', [MemberController::class, 'index'])->name('dashboard.board-of-directors.index')->middleware(['permission:admin.board-of-directors.view|admin.board-of-directors.add|admin.board-of-directors.edit|admin.board-of-directors.delete']);
    Route::get('board-of-directors/create', [MemberController::class, 'create'])->name('dashboard.board-of-directors.create')->middleware(['permission:admin.board-of-directors.add']);
    Route::post('board-of-directors/store', [MemberController::class, 'store'])->name('dashboard.board-of-directors.store')->middleware(['permission:admin.board-of-directors.add']);
    Route::get('board-of-directors/{obj}/edit', [MemberController::class, 'edit'])->name('dashboard.board-of-directors.edit')->middleware(['permission:admin.board-of-directors.edit']);
    Route::post('board-of-directors/{obj}/update', [MemberController::class, 'update'])->name('dashboard.board-of-directors.update')->middleware(['permission:admin.board-of-directors.edit']);
    Route::delete('board-of-directors/{obj}/delete', [MemberController::class, 'destroy'])->name('dashboard.board-of-directors.destroy')->middleware(['permission:admin.board-of-directors.delete']);

    // executive-management
    Route::get('executive-management', [MemberController::class, 'index'])->name('dashboard.executive-management.index')->middleware(['permission:admin.executive-management.view|admin.executive-management.add|admin.executive-management.edit|admin.executive-management.delete']);
    Route::get('executive-management/create', [MemberController::class, 'create'])->name('dashboard.executive-management.create')->middleware(['permission:admin.executive-management.add']);
    Route::post('executive-management/store', [MemberController::class, 'store'])->name('dashboard.executive-management.store')->middleware(['permission:admin.executive-management.add']);
    Route::get('executive-management/{obj}/edit', [MemberController::class, 'edit'])->name('dashboard.executive-management.edit')->middleware(['permission:admin.executive-management.edit']);
    Route::post('executive-management/{obj}/update', [MemberController::class, 'update'])->name('dashboard.executive-management.update')->middleware(['permission:admin.executive-management.edit']);
    Route::delete('executive-management/{obj}/delete', [MemberController::class, 'destroy'])->name('dashboard.executive-management.destroy')->middleware(['permission:admin.executive-management.delete']);

    // contact
    Route::get('contact', [ContactController::class, 'index'])->name('dashboard.contacts.index')->middleware(['permission:admin.contacts.view|admin.contacts.delete']);
    Route::delete('contact/{obj}/delete', [ContactController::class, 'destroy'])->name('dashboard.contacts.delete')->middleware(['permission:admin.contacts.delete']);

    // investor-services
    Route::get('investor-services', [InvestorServiceController::class, 'index'])->name('dashboard.investor-services.index')->middleware(['permission:admin.investor-services.view|admin.investor-services.delete']);
    Route::delete('investor-services/{obj}/delete', [InvestorServiceController::class, 'destroy'])->name('dashboard.investor-services.delete')->middleware(['permission:admin.investor-services.delete']);

    // Certificates
    Route::get('certificates', [CertificatController::class, 'index'])->name('dashboard.certificates.index')->middleware(['permission:admin.certificates.view|admin.certificates.add|admin.certificates.edit|admin.certificates.delete']);
    Route::get('certificates/create', [CertificatController::class, 'create'])->name('dashboard.certificates.create')->middleware(['permission:admin.certificates.add']);
    Route::post('certificates/store', [CertificatController::class, 'store'])->name('dashboard.certificates.store')->middleware(['permission:admin.certificates.add']);
    Route::get('certificates/{obj}/edit', [CertificatController::class, 'edit'])->name('dashboard.certificates.edit')->middleware(['permission:admin.certificates.edit']);
    Route::post('certificates/{obj}/update', [CertificatController::class, 'update'])->name('dashboard.certificates.update')->middleware(['permission:admin.certificates.edit']);
    Route::delete('certificates/{obj}/delete', [CertificatController::class, 'destroy'])->name('dashboard.certificates.destroy')->middleware(['permission:admin.certificates.delete']);

    // type news secition
    Route::get('article-type', [ArticleTypeController::class, 'index'])->name('dashboard.article-type.index')->middleware(['permission:admin.article-type.view|admin.article-type.add|admin.article-type.edit|admin.article-type.delete']);
    Route::get('article-type/create', [ArticleTypeController::class, 'create'])->name('dashboard.article-type.create')->middleware(['permission:admin.article-type.add']);
    Route::post('article-type/store', [ArticleTypeController::class, 'store'])->name('dashboard.article-type.store')->middleware(['permission:admin.article-type.add']);
    Route::get('article-type/{obj}/edit', [ArticleTypeController::class, 'edit'])->name('dashboard.article-type.edit')->middleware(['permission:admin.article-type.edit']);
    Route::post('article-type/{obj}/update', [ArticleTypeController::class, 'update'])->name('dashboard.article-type.update')->middleware(['permission:admin.article-type.edit']);
    Route::delete('article-type/{obj}/delete', [ArticleTypeController::class, 'destroy'])->name('dashboard.article-type.destroy')->middleware(['permission:admin.article-type.delete']);

    // Constanse
    Route::get('constants', [ConstantController::class, 'index'])->name('dashboard.constants.index')->middleware(['permission:admin.constants.view|admin.constants.add|admin.constants.edit|admin.constants.show|admin.constants.delete']);
    Route::get('constants/{obj}/show', [ConstantController::class, 'show'])->name('dashboard.constants.show')->middleware(['permission:admin.constants.view']);
    Route::get('constants/create', [ConstantController::class, 'create'])->name('dashboard.constants.create')->middleware(['permission:admin.constants.add']);
    Route::post('constants/store', [ConstantController::class, 'store'])->name('dashboard.constants.store')->middleware(['permission:admin.constants.add']);
    Route::get('constants/{obj}/edit', [ConstantController::class, 'edit'])->name('dashboard.constants.edit')->middleware(['permission:admin.constants.edit']);
    Route::post('constants/{obj}/update', [ConstantController::class, 'update'])->name('dashboard.constants.update')->middleware(['permission:admin.constants.edit']);
    Route::delete('constants/{obj}/delete', [ConstantController::class, 'destroy'])->name('dashboard.constants.destroy')->middleware(['permission:admin.constants.delete']);

    //careers Info
    Route::get('career', [CarerrController::class, 'index'])->name('dashboard.career-information.index')->middleware(['permission:admin.career-information.view|admin.career-information.add|admin.career-information.edit|admin.career-information.show|admin.career-information.delete']);
    Route::get('career/create', [CarerrController::class, 'create'])->name('dashboard.career-information.create')->middleware(['permission:admin.career-information.add']);
    Route::post('career/store', [CarerrController::class, 'store'])->name('dashboard.career-information.store')->middleware(['permission:admin.career-information.add']);
    Route::get('career/{obj}/edit', [CarerrController::class, 'edit'])->name('dashboard.career-information.edit')->middleware(['permission:admin.career-information.edit']);
    Route::post('career/{obj}/update', [CarerrController::class, 'update'])->name('dashboard.career-information.update')->middleware(['permission:admin.career-information.edit']);
    Route::delete('career/delete/{obj}', [CarerrController::class, 'destroy'])->name('dashboard.career-information.destroy')->middleware(['permission:admin.career-information.delete']);
    Route::post('career/uploads/remove', [CarerrController::class, 'removeUpload'])->name('dashboard.career-information.uploads.remove');

    //careers form
    Route::get('career-form', [CarerrController::class, 'showForm'])->name('dashboard.career-form.index')->middleware(['permission:admin.career-form.view|admin.career-form.delete']);
    Route::delete('career/{obj}/delete', [CarerrController::class, 'destroyForm'])->name('dashboard.career.delete')->middleware(['permission:admin.career-form.delete']);
});


include 'front.php';



