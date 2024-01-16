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
    Route::get('users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('users/{obj}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::post('users/{obj}/update', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('users/{obj}/delete', [UserController::class, 'destroy'])->name('dashboard.users.destroy');

    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('dashboard.settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('dashboard.settings.update');

    //pages Home
    Route::get('pages/home', [PageHomeController::class, 'index'])->name('dashboard.pageHome.index');
    Route::get('pages/home/{obj}/edit', [PageHomeController::class, 'edit'])->name('dashboard.pageHome.edit');
    Route::post('pages/home/update/{obj}', [PageHomeController::class, 'update'])->name('dashboard.pageHome.update');

    //Sliders
    Route::get('sliders', [SliderController::class, 'index'])->name('dashboard.sliders.index');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('dashboard.sliders.create');
    Route::post('sliders/store', [SliderController::class, 'store'])->name('dashboard.sliders.store');
    Route::get('sliders/{obj}/edit', [SliderController::class, 'edit'])->name('dashboard.sliders.edit');
    Route::post('sliders/{obj}/update', [SliderController::class, 'update'])->name('dashboard.sliders.update');
    Route::delete('sliders/{obj}/delete', [SliderController::class, 'destroy'])->name('dashboard.sliders.destroy');
    Route::post('sliders/uploads/remove', [SliderController::class, 'removeUpload'])->name('dashboard.sliders.uploads.remove');

    //news
    Route::get('news', [ArticleController::class, 'index'])->name('dashboard.articles.index');
    Route::get('news/create', [ArticleController::class, 'create'])->name('dashboard.articles.create');
    Route::post('news/store', [ArticleController::class, 'store'])->name('dashboard.articles.store');
    Route::get('news/{obj}/edit', [ArticleController::class, 'edit'])->name('dashboard.articles.edit');
    Route::post('news/{obj}/update', [ArticleController::class, 'update'])->name('dashboard.articles.update');
    Route::delete('news/{obj}/delete', [ArticleController::class, 'destroy'])->name('dashboard.articles.destroy');
    Route::post('news/uploads/remove', [ArticleController::class, 'removeUpload'])->name('dashboard.articles.uploads.remove');

    //news Letter
    Route::get('news-letter', [NewsLetterController::class, 'index'])->name('dashboard.news-letter.index');
    Route::get('news-letter/edit', [NewsLetterController::class, 'edit'])->name('dashboard.news-letter.edit');
    Route::post('news-letter/update', [NewsLetterController::class, 'update'])->name('dashboard.news-letter.update');
    Route::post('news-letter/uploads/remove', [NewsLetterController::class, 'removeUpload'])->name('dashboard.news-letter.uploads.remove');

    //pages About
    Route::get('pages/about', [PageAboutController::class, 'index'])->name('dashboard.pageAbout.index');
    Route::get('pages/about/{obj}/edit', [PageAboutController::class, 'edit'])->name('dashboard.pageAbout.edit');
    Route::post('pages/about/update/{obj}', [PageAboutController::class, 'update'])->name('dashboard.pageAbout.update');

    //pages Product
    Route::get('products', [ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('dashboard.products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('dashboard.products.store');
    Route::get('products/{obj}/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit');
    Route::post('products/{obj}/update', [ProductController::class, 'update'])->name('dashboard.products.update');
    Route::delete('products/{obj}/delete', [ProductController::class, 'destroy'])->name('dashboard.products.destroy');
    Route::post('products/uploads/remove', [ProductController::class, 'removeUpload'])->name('dashboard.products.uploads.remove');

    // Route::get('products/{obj}/images', [ProductController::class, 'images'])->name('dashboard.products.images');

    //page social Responsibility
    Route::get('social-responsibility', [PageResponsibility::class, 'index'])->name('dashboard.social-responsibility.index');
    Route::get('social-responsibility/edit', [PageResponsibility::class, 'edit'])->name('dashboard.social-responsibility.edit');
    Route::post('social-responsibility/edit', [PageResponsibility::class, 'update'])->name('dashboard.social-responsibility.update');

    //page our community
    Route::get('community/edit', [PageResponsibility::class, 'community'])->name('dashboard.community.edit');
    Route::post('community/update', [PageResponsibility::class, 'communityupdate'])->name('dashboard.community.update');

    //page our environment
    Route::get('environment', [PageEnvironmentConteroller::class, 'index'])->name('dashboard.environment.index');
    Route::get('environment/edit', [PageEnvironmentConteroller::class, 'edit'])->name('dashboard.environment.edit');
    Route::post('environment/update', [PageEnvironmentConteroller::class, 'update'])->name('dashboard.environment.update');
    Route::get('environment/lists/{obj}/edit', [PageEnvironmentConteroller::class, 'lists'])->name('dashboard.environment.lists.edit');
    Route::post('environment/lists/{obj}/update', [PageEnvironmentConteroller::class, 'listsUpdate'])->name('dashboard.environment.lists.update');

    //page investor-relations
    Route::get('investor-relations', [PageInvestorRelationsController::class, 'index'])->name('dashboard.investor-relations.index');

    // page stok-price
    Route::get('stok-price/edit', [PageStokPriceController::class, 'edit'])->name('dashboard.stok-price.edit');
    Route::post('stok-price/update', [PageStokPriceController::class, 'update'])->name('dashboard.stok-price.update');

    // page investor-services
    Route::get('page-investor-services', [PageInvestorServicesController::class, 'edit'])->name('dashboard.page-investor-services.edit');
    Route::post('page-investor-services/update', [PageInvestorServicesController::class, 'update'])->name('dashboard.page-investor-services.update');

    // page financial-reports
    Route::get('financial-reports', [PageFinancialReportsController::class, 'index'])->name('dashboard.financial-reports.index');
    Route::get('financial-reports/edit', [PageFinancialReportsController::class, 'edit'])->name('dashboard.financial-reports.edit');
    Route::post('financial-reports/update', [PageFinancialReportsController::class, 'update'])->name('dashboard.financial-reports.update');

    // Section financial-reports-annual
    Route::get('financial-reports-annual', [ReportsController::class, 'index'])->name('dashboard.financial-reports-annual.index');
    Route::get('financial-reports-annual/create', [ReportsController::class, 'create'])->name('dashboard.financial-reports-annual.create');
    Route::post('financial-reports-annual/store', [ReportsController::class, 'store'])->name('dashboard.financial-reports-annual.store');
    Route::get('financial-reports-annual/{obj}/edit', [ReportsController::class, 'edit'])->name('dashboard.financial-reports-annual.edit');
    Route::post('financial-reports-annual/{obj}/update', [ReportsController::class, 'update'])->name('dashboard.financial-reports-annual.update');
    Route::delete('financial-reports-annual/{obj}/delete', [ReportsController::class, 'destroy'])->name('dashboard.financial-reports-annual.destroy');
    Route::post('financial-reports-annual/uploads/remove', [ReportsController::class, 'removeUpload'])->name('dashboard.financial-reports-annual.uploads.remove');

    // Section financial-reports-annual
    Route::get('financial-reports-quarter', [ReportsController::class, 'index'])->name('dashboard.financial-reports-quarter.index');
    Route::get('financial-reports-quarter/create', [ReportsController::class, 'create'])->name('dashboard.financial-reports-quarter.create');
    Route::post('financial-reports-quarter/store', [ReportsController::class, 'store'])->name('dashboard.financial-reports-quarter.store');
    Route::get('financial-reports-quarter/{obj}/edit', [ReportsController::class, 'edit'])->name('dashboard.financial-reports-quarter.edit');
    Route::post('financial-reports-quarter/{obj}/update', [ReportsController::class, 'update'])->name('dashboard.financial-reports-quarter.update');
    Route::delete('financial-reports-quarter/{obj}/delete', [ReportsController::class, 'destroy'])->name('dashboard.financial-reports-quarter.destroy');
    Route::post('financial-reports-quarter/uploads/remove', [ReportsController::class, 'removeUpload'])->name('dashboard.financial-reports-quarter.uploads.remove');

    // Governance Page
    Route::get('governance', [GovernanceController::class, 'index'])->name('dashboard.governance.index');
    Route::get('governance/{obj}/edit', [GovernanceController::class, 'edit'])->name('dashboard.governance.edit');
    Route::post('governance/{obj}/update', [GovernanceController::class, 'update'])->name('dashboard.governance.update');

     // page-board-of-directors
    Route::get('page-board-of-directors/', [GovernanceSectionController::class, 'index'])->name('dashboard.page-board-of-directors.index');
    Route::get('page-board-of-directors/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-board-of-directors.edit');
    Route::post('page-board-of-directors/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-board-of-directors.update');

    // page-committees
    Route::get('page-committees', [GovernanceSectionController::class, 'index'])->name('dashboard.page-committees.index');
    Route::get('page-committees/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-committees.edit');
    Route::post('page-committees/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-committees.update');

    //page-code-of-conduct
    Route::get('page-code-of-conduct', [GovernanceSectionController::class, 'index'])->name('dashboard.page-code-of-conduct.index');
    Route::get('page-code-of-conduct/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-code-of-conduct.edit');
    Route::post('page-code-of-conduct/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-code-of-conduct.update');
    Route::post('page-code-of-conduct/uploads/remove', [GovernanceSectionController::class, 'removeUpload'])->name('dashboard.page-code-of-conduct.uploads.remove');

    //page-general-assembly-meeting
    Route::get('page-general-assembly-meeting', [GovernanceSectionController::class, 'index'])->name('dashboard.page-general-assembly-meeting.index');
    Route::get('page-general-assembly-meeting/{obj}/edit', [GovernanceSectionController::class, 'edit'])->name('dashboard.page-general-assembly-meeting.edit');
    Route::post('page-general-assembly-meeting/{obj}/update', [GovernanceSectionController::class, 'update'])->name('dashboard.page-general-assembly-meeting.update');
    Route::post('page-general-assembly-meeting/uploads/remove', [GovernanceSectionController::class, 'removeUpload'])->name('dashboard.page-general-assembly-meeting.uploads.remove');

    //will change controller
    Route::get('page-contact', [PageContactController::class, 'index'])->name('dashboard.page-contact.index');
    Route::get('page-contact/edit', [PageContactController::class, 'edit'])->name('dashboard.page-contact.edit');
    Route::post('page-contact/update', [PageContactController::class, 'update'])->name('dashboard.page-contact.update');

    // Branhc Sections
    Route::get('branches', [BranchController::class, 'index'])->name('dashboard.branches.index');
    Route::get('branches/create', [BranchController::class, 'create'])->name('dashboard.branches.create');
    Route::post('branches/store', [BranchController::class, 'store'])->name('dashboard.branches.store');
    Route::get('branches/{obj}/edit', [BranchController::class, 'edit'])->name('dashboard.branches.edit');
    Route::post('branches/{obj}/update', [BranchController::class, 'update'])->name('dashboard.branches.update');
    Route::delete('branches/{obj}/delete', [BranchController::class, 'destroy'])->name('dashboard.branches.destroy');



    //other-page
    Route::get('pages/other', [OtherPageController::class, 'index'])->name('dashboard.other-page.index');
    Route::get('pages/other/{obj}/edit', [OtherPageController::class, 'edit'])->name('dashboard.other-page.edit');
    Route::post('pages/other/update/{obj}', [OtherPageController::class, 'update'])->name('dashboard.other-page.update');

    // Product Type
    Route::get('product-types', [ProductTypeController::class, 'index'])->name('dashboard.product-types.index');
    Route::get('product-types/edit/{obj}', [ProductTypeController::class, 'edit'])->name('dashboard.product-types.edit');
    Route::post('product-types/update/{obj}', [ProductTypeController::class, 'update'])->name('dashboard.product-types.update');

    // Categories
    Route::get('categories', [CategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('dashboard.categories.create');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::get('categories/{obj}/edit', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
    Route::post('categories/{obj}/update', [CategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('categories/{obj}/delete', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

    // Productivity
    Route::get('productivity', [ProductivityController::class, 'index'])->name('dashboard.productivity.index');
    Route::get('product-types/{obj}/edit', [ProductivityController::class, 'edit'])->name('dashboard.productivity.edit');
    Route::post('product-types/{obj}/update', [ProductivityController::class, 'update'])->name('dashboard.productivity.update');

    // board-of-directors
    Route::get('board-of-directors', [MemberController::class, 'index'])->name('dashboard.board-of-directors.index');
    Route::get('board-of-directors/create', [MemberController::class, 'create'])->name('dashboard.board-of-directors.create');
    Route::post('board-of-directors/store', [MemberController::class, 'store'])->name('dashboard.board-of-directors.store');
    Route::get('board-of-directors/{obj}/edit', [MemberController::class, 'edit'])->name('dashboard.board-of-directors.edit');
    Route::post('board-of-directors/{obj}/update', [MemberController::class, 'update'])->name('dashboard.board-of-directors.update');
    Route::delete('board-of-directors/{obj}/delete', [MemberController::class, 'destroy'])->name('dashboard.board-of-directors.destroy');

    // executive-management
    Route::get('executive-management', [MemberController::class, 'index'])->name('dashboard.executive-management.index');
    Route::get('executive-management/create', [MemberController::class, 'create'])->name('dashboard.executive-management.create');
    Route::post('executive-management/store', [MemberController::class, 'store'])->name('dashboard.executive-management.store');
    Route::get('executive-management/{obj}/edit', [MemberController::class, 'edit'])->name('dashboard.executive-management.edit');
    Route::post('executive-management/{obj}/update', [MemberController::class, 'update'])->name('dashboard.executive-management.update');
    Route::delete('executive-management/{obj}/delete', [MemberController::class, 'destroy'])->name('dashboard.executive-management.destroy');

    // contact
    Route::get('contact', [ContactController::class, 'index'])->name('dashboard.contacts.index');
    Route::delete('contact/{obj}/delete', [ContactController::class, 'destroy'])->name('dashboard.contacts.delete');

    // investor-services
    Route::get('investor-services', [InvestorServiceController::class, 'index'])->name('dashboard.investor-services.index');
    Route::delete('investor-services/{obj}/delete', [InvestorServiceController::class, 'destroy'])->name('dashboard.investor-services.delete');

    // Certificates
    Route::get('certificates', [CertificatController::class, 'index'])->name('dashboard.certificates.index');
    Route::get('certificates/create', [CertificatController::class, 'create'])->name('dashboard.certificates.create');
    Route::post('certificates/store', [CertificatController::class, 'store'])->name('dashboard.certificates.store');
    Route::get('certificates/{obj}/edit', [CertificatController::class, 'edit'])->name('dashboard.certificates.edit');
    Route::post('certificates/{obj}/update', [CertificatController::class, 'update'])->name('dashboard.certificates.update');
    Route::delete('certificates/{obj}/delete', [CertificatController::class, 'destroy'])->name('dashboard.certificates.destroy');

    // type news secition
    Route::get('article-type', [ArticleTypeController::class, 'index'])->name('dashboard.article-type.index');
    Route::get('article-type/create', [ArticleTypeController::class, 'create'])->name('dashboard.article-type.create');
    Route::post('article-type/store', [ArticleTypeController::class, 'store'])->name('dashboard.article-type.store');
    Route::get('article-type/{obj}/edit', [ArticleTypeController::class, 'edit'])->name('dashboard.article-type.edit');
    Route::post('article-type/{obj}/update', [ArticleTypeController::class, 'update'])->name('dashboard.article-type.update');
    Route::delete('article-type/{obj}/delete', [ArticleTypeController::class, 'destroy'])->name('dashboard.article-type.destroy');


    // Constanse
    Route::get('constants', [ConstantController::class, 'index'])->name('dashboard.constants.index');
    Route::get('constants/create', [ConstantController::class, 'create'])->name('dashboard.constants.create');
    Route::post('constants/store', [ConstantController::class, 'store'])->name('dashboard.constants.store');
    Route::get('constants/{obj}/show', [ConstantController::class, 'show'])->name('dashboard.constants.show');
    Route::post('constants/store', [ConstantController::class, 'store'])->name('dashboard.constants.store');
    Route::get('constants/{obj}/edit', [ConstantController::class, 'edit'])->name('dashboard.constants.edit');
    Route::post('constants/{obj}/update', [ConstantController::class, 'update'])->name('dashboard.constants.update');
    Route::delete('constants/{obj}/delete', [ConstantController::class, 'destroy'])->name('dashboard.constants.destroy');

    //careers Info
    Route::get('career', [CarerrController::class, 'index'])->name('dashboard.career-information.index');
    Route::get('career/create', [CarerrController::class, 'create'])->name('dashboard.career-information.create');
    Route::post('career/store', [CarerrController::class, 'store'])->name('dashboard.career-information.store');
    Route::get('career/{obj}/show', [CarerrController::class, 'show'])->name('dashboard.career-information.show');
    Route::post('career/store', [CarerrController::class, 'store'])->name('dashboard.career-information.store');
    Route::get('career/{obj}/edit', [CarerrController::class, 'edit'])->name('dashboard.career-information.edit');
    Route::post('career/{obj}/update', [CarerrController::class, 'update'])->name('dashboard.career-information.update');
    Route::delete('career/delete/{obj}', [CarerrController::class, 'destroy'])->name('dashboard.career-information.destroy');
    Route::post('career/uploads/remove', [CarerrController::class, 'removeUpload'])->name('dashboard.career-information.uploads.remove');

    //careers form
    Route::get('career-form', [CarerrController::class, 'showForm'])->name('dashboard.career-form.index');
    Route::delete('career/{obj}/delete', [CarerrController::class, 'destroyForm'])->name('dashboard.career.delete');


});


include 'front.php';



