<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Contact; // untuk pesan masuk
use App\Models\Contactus;
use App\Models\LoginHistory;
use App\Models\Partners;
use App\Models\Testimonials;

class DashboardBackendController extends Controller
{
    public function index()
    {
        $galleryCount = Gallery::count();
        $testimonialCount = Testimonials::count();
        $partnerCount = Partners::count();
      $pesanMasukCount = Contactus::where('is_active', 'inactive')->count();// contoh hanya yang belum dibaca

       // ambil 5 login history terakhir
        $loginHistories = LoginHistory::with('user')
            ->latest()
            ->take(5)
            ->get();

        return view('page.backend.dashboard.index', compact(
            'galleryCount',
            'testimonialCount',
            'partnerCount',
            'pesanMasukCount',
            'loginHistories'
        ));
    }
}
