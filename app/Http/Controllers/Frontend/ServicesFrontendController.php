<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesFrontendController extends Controller
{
    public function index()
    {
        $services = Services::where('is_active', 'active')->get();
        $sejarahs = Sejarah::where('is_active', 'active')->get();
        return view('page.frontend.service.index', compact('services', 'sejarahs'));
    }
}
