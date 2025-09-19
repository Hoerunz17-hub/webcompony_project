<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\TenagaKerja;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AboutusFrontendController extends Controller
{
    public function index()
    {
        $abouts = Aboutus::where('is_active', 'active')->get();
        $tenagakerjas = TenagaKerja::where('is_active', 'active')->get();
        $testimonials = Testimonials::where('is_active', 'active')->get();
        return view('page.frontend.about.index', compact('abouts','tenagakerjas', 'testimonials'));
    }
}
