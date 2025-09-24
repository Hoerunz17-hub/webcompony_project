<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\HeroBackendController;
use App\Http\Controllers\Backend\LoginBackendController;
use App\Http\Controllers\Backend\AboutusBackendController;
use App\Http\Controllers\Backend\DashboardBackendController;
use App\Http\Controllers\Frontend\AboutusFrontendController;
use App\Http\Controllers\Frontend\GalleryFrontendController;
use App\Http\Controllers\Frontend\PartnersFrontendController;
use App\Http\Controllers\Frontend\ServicesFrontendController;
use App\Http\Controllers\Backend\MediasocialBackendController;
use App\Http\Controllers\Frontend\ContactusFrontendController;
use App\Http\Controllers\Frontend\DestinasiFrontendController;
use App\Http\Controllers\Frontend\GreencanyonFrontendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\SearchFrontendController;
use App\Http\Controllers\Frontend\TestimonialsFrontendController;

//Route view frontend
Route::get('/', [HomeFrontendController::class, 'index']);
Route::get('/about', [AboutusFrontendController::class, 'index']);
Route::get('/service', [ServicesFrontendController::class, 'index']);
Route::get('/galery', [GalleryFrontendController::class, 'index']);
Route::get('/partner', [PartnersFrontendController::class, 'index']);



// Frontend Contact Us
Route::get('/contact', [ContactusFrontendController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\Frontend\ContactusFrontendController::class, 'index']);
Route::post('/contact/store', [App\Http\Controllers\Frontend\ContactusFrontendController::class, 'store']);


//Route view backend
Route::get('/admin', [DashboardBackendController::class, 'index'])->middleware('auth');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//route about
Route::get('/admin/about', [AboutusBackendController::class, 'index']);
Route::get('/admin/about/create', [AboutusBackendController::class, 'create']);
Route::post('/admin/about/store', [AboutusBackendController::class, 'store']);
Route::get('/admin/about/delete/{id}', [AboutusBackendController::class, 'destroy']);
Route::get('/admin/about/edit/{id}', [AboutusBackendController::class, 'edit']);
Route::post('/admin/about/update/{id}', [AboutusBackendController::class, 'update']);
Route::post('/admin/about/toggle/{id}', [AboutusBackendController::class, 'toggle']);



//Route hero
Route::get('/admin/hero/create', [HeroBackendController::class, 'create']);
Route::get('/admin/hero', [HeroBackendController::class, 'index']);
Route::post('/admin/hero/store', [HeroBackendController::class, 'store']);
Route::get('/admin/hero/delete/{id}', [HeroBackendController::class, 'destroy']);
Route::get('/admin/hero/edit/{id}', [HeroBackendController::class, 'edit']);
Route::post('/admin/hero/update/{id}', [HeroBackendController::class, 'update']);
Route::post('/admin/hero/toggle/{id}', [HeroBackendController::class, 'toggle']);

//Route services
Route::get('/admin/service', [App\Http\Controllers\Backend\ServicesBackendController::class, 'index']);
Route::get('/admin/service/create', [App\Http\Controllers\Backend\ServicesBackendController::class, 'create']);
Route::post('/admin/service/store', [App\Http\Controllers\Backend\ServicesBackendController::class, 'store']);
Route::get('/admin/service/delete/{id}', [App\Http\Controllers\Backend\ServicesBackendController::class, 'destroy']);
Route::get('/admin/service/edit/{id}', [App\Http\Controllers\Backend\ServicesBackendController::class, 'edit']);
Route::post('/admin/service/update/{id}', [App\Http\Controllers\Backend\ServicesBackendController::class, 'update']);
Route::post('/admin/service/toggle/{id}', [App\Http\Controllers\Backend\ServicesBackendController::class, 'toggle']);

//Route gallery
Route::get('/admin/galery', [App\Http\Controllers\Backend\GalleryBackendController::class, 'index']);
Route::get('/admin/galery/create', [App\Http\Controllers\Backend\GalleryBackendController::class, 'create']);
Route::post('/admin/galery/store', [App\Http\Controllers\Backend\GalleryBackendController::class, 'store']);
Route::get('/admin/galery/delete/{id}', [App\Http\Controllers\Backend\GalleryBackendController::class, 'destroy']);
Route::get('/admin/galery/edit/{id}', [App\Http\Controllers\Backend\GalleryBackendController::class, 'edit']);
Route::post('/admin/galery/update/{id}', [App\Http\Controllers\Backend\GalleryBackendController::class, 'update']);
Route::post('/admin/galery/toggle/{id}', [App\Http\Controllers\Backend\GalleryBackendController::class, 'toggleStatus']);

//Route testimoni
Route::get('/admin/testimoni', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'index']);
Route::get('/admin/testimoni/create', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'create']);
Route::post('/admin/testimoni/store', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'store']);
Route::get('/admin/testimoni/delete/{id}', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'destroy']);
Route::get('/admin/testimoni/edit/{id}', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'edit']);
Route::post('/admin/testimoni/update/{id}', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'update']);
Route::post('/admin/testimoni/toggle/{id}', [App\Http\Controllers\Backend\TestimonialsBackendController::class, 'toggle']);


//Route Sejarah
Route::get('/admin/sejarah', [App\Http\Controllers\Backend\SejarahBackendController::class, 'index']);
Route::get('/admin/sejarah/create', [App\Http\Controllers\Backend\SejarahBackendController::class, 'create']);
Route::post('/admin/sejarah/store', [App\Http\Controllers\Backend\SejarahBackendController::class, 'store']);
Route::get('/admin/sejarah/delete/{id}', [App\Http\Controllers\Backend\SejarahBackendController::class, 'destroy']);
Route::get('/admin/sejarah/edit/{id}', [App\Http\Controllers\Backend\SejarahBackendController::class, 'edit']);
Route::post('/admin/sejarah/update/{id}', [App\Http\Controllers\Backend\SejarahBackendController::class, 'update']);
Route::post('/admin/sejarah/toggle/{id}', [App\Http\Controllers\Backend\SejarahBackendController::class, 'toggleStatus']);




//Route Tenaga Kerja
Route::get('/admin/tenagakerja', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'index']);
Route::get('/admin/tenagakerja/create', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'create']);
Route::post('/admin/tenagakerja/store', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'store']);
Route::get('/admin/tenagakerja/delete/{id}', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'destroy']);
Route::get('/admin/tenagakerja/edit/{id}', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'edit']);
Route::post('/admin/tenagakerja/update/{id}', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'update']);
Route::post('/admin/tenagakerja/toggle/{id}', [App\Http\Controllers\Backend\TenagakerjaBackendController::class, 'toggle']);

//Route Partners
Route::get('/admin/partner', [App\Http\Controllers\Backend\PartnersBackendController::class, 'index']);
Route::get('/admin/partner/create', [App\Http\Controllers\Backend\PartnersBackendController::class, 'create']);
Route::post('/admin/partner/store', [App\Http\Controllers\Backend\PartnersBackendController::class, 'store']);
Route::get('/admin/partner/delete/{id}', [App\Http\Controllers\Backend\PartnersBackendController::class, 'destroy']);
Route::get('/admin/partner/edit/{id}', [App\Http\Controllers\Backend\PartnersBackendController::class, 'edit']);
Route::post('/admin/partner/update/{id}', [App\Http\Controllers\Backend\PartnersBackendController::class, 'update']);
Route::post('/admin/partner/toggle/{id}', [App\Http\Controllers\Backend\PartnersBackendController::class, 'toggle']);



//Route Pengunjungsection
Route::get('/admin/pengunjung', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'index']);
Route::get('/admin/pengunjung/create', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'create']);
Route::post('/admin/pengunjung/store', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'store']);
Route::get('/admin/pengunjung/delete/{id}', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'destroy']);
Route::get('/admin/pengunjung/edit/{id}', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'edit']);
Route::post('/admin/pengunjung/update/{id}', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'update']);
Route::post('/admin/pengunjung/toggle/{id}', [App\Http\Controllers\Backend\PengunjungBackendController::class, 'toggle']);


//Route sectionoffers
Route::get('/admin/discont', [App\Http\Controllers\Backend\OffersBackendController::class, 'index']);
Route::get('/admin/discont/create', [App\Http\Controllers\Backend\OffersBackendController::class, 'create']);
Route::post('/admin/discont/store', [App\Http\Controllers\Backend\OffersBackendController::class, 'store']);
Route::get('/admin/discont/delete/{id}', [App\Http\Controllers\Backend\OffersBackendController::class, 'destroy']);
Route::get('/admin/discont/edit/{id}', [App\Http\Controllers\Backend\OffersBackendController::class, 'edit']);
Route::post('/admin/discont/update/{id}', [App\Http\Controllers\Backend\OffersBackendController::class, 'update']);
Route::post('/admin/discont/toggle/{id}', [App\Http\Controllers\Backend\OffersBackendController::class, 'toggle']);


//Route Sectiondestinasi
Route::get('/admin/destinasi', [App\Http\Controllers\Backend\PopulerBackendController::class, 'index']);
Route::get('/admin/destinasi/create', [App\Http\Controllers\Backend\PopulerBackendController::class, 'create']);
Route::post('/admin/destinasi/store', [App\Http\Controllers\Backend\PopulerBackendController::class, 'store']);
Route::get('/admin/destinasi/delete/{id}', [App\Http\Controllers\Backend\PopulerBackendController::class, 'destroy']);
Route::get('/admin/destinasi/edit/{id}', [App\Http\Controllers\Backend\PopulerBackendController::class, 'edit']);
Route::post('/admin/destinasi/update/{id}', [App\Http\Controllers\Backend\PopulerBackendController::class, 'update']);
Route::post('/admin/destinasi/toggle/{id}', [App\Http\Controllers\Backend\PopulerBackendController::class, 'toggle']);





//Route Contact Us
Route::get('/admin/contact',[App\Http\Controllers\Backend\ContactusBackendController::class, 'index']);
Route::get('/admin/contact/show/{id}', [App\Http\Controllers\Backend\ContactusBackendController::class, 'show']);


//Route Media Social
Route::get('/admin/media',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'index']);
Route::get('/admin/media/create',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'create']);
Route::post('/admin/media/store',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'store']);
Route::get('/admin/media/delete/{id}',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'destroy']);
Route::get('/admin/media/edit/{id}',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'edit']);
Route::post('/admin/media/update/{id}',[App\Http\Controllers\Backend\MediasocialBackendController::class, 'update']);
Route::post('/admin/media/toggle/{id}', [App\Http\Controllers\Backend\MediasocialBackendController::class, 'toggle']);















































//serch
Route::get('/search', [SearchFrontendController::class, 'index'])->name('search');
Route::get('/{slug}', [DestinasiFrontendController::class, 'show'])
    ->where('slug', '[a-z0-9-]+')
    ->name('destinasi.show');
