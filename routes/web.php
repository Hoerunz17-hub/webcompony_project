<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutusFrontendController;
use App\Http\Controllers\Frontend\ContactusFrontendController;
use App\Http\Controllers\Frontend\GalleryFrontendController;
use App\Http\Controllers\Frontend\PartnersFrontendController;
use App\Http\Controllers\Frontend\ServicesFrontendController;
use App\Http\Controllers\Frontend\TestimonialsFrontendController;

//Route frontend
Route::get('/', function () {
    return view('page.frontend.home.index');
});
Route::get('/about', [AboutusFrontendController::class, 'index']);
Route::get('/service', [ServicesFrontendController::class, 'index']);
Route::get('/testimoni', [TestimonialsFrontendController::class, 'index']);
Route::get('/galery', [GalleryFrontendController::class, 'index']);
Route::get('/partner', [PartnersFrontendController::class, 'index']);
Route::get('/contact', [ContactusFrontendController::class, 'index']);
