<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryFrontendController extends Controller
{
    public function index()
    {
           $gallerys = Gallery::where('is_active', 'active')->get();
        return view('page.frontend.galery.index', compact('gallerys'));
    }
}
