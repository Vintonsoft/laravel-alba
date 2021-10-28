<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ProductController;
use App\Http\Controllers\AdminPanel\UserController;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SiteUserController;
use App\Http\Controllers\Site\SiteProductController;

////////////////////////////////////////////////////// ADMIN PANEL /////////////////////////////////////////////////////
///
/// GİRİŞ ALANI

Route::middleware(['LoginAdmin'])->group(function () {
    Route::prefix('AdminPanel')->group(function () {
        //////////////////////////////////////// LOGIN PAGE ////////////////////////////////////////////////////////
        Route::get('/',[UserController::class,'login'])->name('Users.login');
        Route::post('/',[UserController::class,'auth'])->name('Users.auth');
    });
});

///////////////////////////////////////////////////////// PANEL ////////////////////////////////////////////////////////

Route::middleware(['CheckAdmin'])->group(function (){
    Route::prefix('AdminPanel')->group(function () {
        //Homepage
        Route::get('Dashboard',[DashboardController::class,'index'])->name('Dashboard.index');
        //Products
        Route::resource('Products',ProductController::class);
        //Categories
        Route::resource('Categories',CategoryController::class);
        //Users
        Route::resource('Users', UserController::class);
        Route::get('logout',[UserController::class,'logout'])->name('Users.exit');
    });
});

///////////////////////////////////////////////////// WEBSITE //////////////////////////////////////////////////////////
///
///WEBSITE SITE
Route::namespace('Site')->group(function () {
    //Homepage
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    //Product List
    Route::get('kategori/{seo_url}', [SiteProductController::class, 'index']);
    //Product Detail
    Route::get('urun/{seo_url}', [SiteProductController::class, 'detail']);
    Route::get('logout',[SiteUserController::class,'logout'])->name('site.logout');
});

Route::namespace('Site')->group(function () {
    Route::middleware(['LoginUser'])->group(function () {
        //Üye Kayıt | Üye Giriş
        Route::get('ucretsiz-uyelik', [SiteUserController::class,'create'])->name('Users.site.create');
        Route::post('ucretsiz-uyelik',[SiteUserController::class,'store'])->name('Users.site.store');
        Route::get('uye-girisi',[SiteUserController::class,'login'])->name('Users.site.login');
        Route::post('uye-girisi',[SiteUserController::class,'auth'])->name('Users.site.auth');
    });
});
