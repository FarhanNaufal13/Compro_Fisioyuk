<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerHomeController;
use App\Http\Controllers\BannerPromoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerConroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class,'index']);
Route::get('/informasi', [HomeController::class,'informasi']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/lokasi', [HomeController::class,'lokasi']);
Route::get('/service', [HomeController::class,'service']);

//artikel
Route::get('artikel/fisioterapi1', [ArticleController::class,'fisioterapi1']);
Route::get('artikel/fisioterapi2', [ArticleController::class,'fisioterapi2']);
Route::get('artikel/fisioterapi3', [ArticleController::class,'fisioterapi3']);
Route::get('artikel/gayaHidup1', [ArticleController::class,'gayaHidup1']);
Route::get('artikel/gayaHidup2', [ArticleController::class,'gayaHidup2']);
Route::get('artikel/gayaHidup3', [ArticleController::class,'gayaHidup3']);
Route::get('artikel/kesehatan1', [ArticleController::class,'kesehatan1']);
Route::get('artikel/kesehatan2', [ArticleController::class,'kesehatan2']);
Route::get('artikel/kesehatan3', [ArticleController::class,'kesehatan3']);


// auth
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

// dashboard

Route::prefix('/admin')->middleware('auth')->group(function (){

    Route::get('/dashboard',[DashboardController::class, 'index']);

    Route::resource('service', ServiceController::class);
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('fitur', FiturController::class);
    Route::resource('partner', PartnerConroller::class);
    Route::resource('user', UserController::class);
    Route::resource('artikel', ArtikelController::class);

    Route::get('bannerHome', [BannerHomeController::class, 'index']);
    Route::put('bannerHome/{id}', [BannerHomeController::class, 'update']);

    Route::get('bannerPromo', [BannerPromoController::class, 'index']);
    Route::put('bannerPromo/{id}', [BannerPromoController::class, 'update']);
    
    Route::get('/about', [AboutController::class, 'index']);
    Route::put('/about/{id}', [AboutController::class, 'update']);

    Route::get('/team', [TeamController::class, 'index']);
    Route::put('/team/{id}', [TeamController::class, 'update']);


    Route::get('/contact', [ContactController::class, 'index']);
    Route::put('/contact/{id}', [ContactController::class, 'update']);


});





