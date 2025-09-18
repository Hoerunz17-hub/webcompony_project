<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Services;
use App\Models\Testimonials;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function index()
    {
        $heros = Hero::where('is_active', 'active')->get();
        $hirotiles = $heros->pluck('title');
         $services = Services::where('is_active', 'active')->get();
         $testimonials = Testimonials::where('is_active', 'active')->get();
         $gallerys = Gallery::where('is_active', 'active')->get();

        return view('page.frontend.home.index', compact('heros', 'hirotiles', 'services', 'testimonials', 'gallerys'));
    }


}
