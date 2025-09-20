<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersFrontendController extends Controller
{
    public function index()
    {
         $partner = Partners::where('is_active', 'active')->get();
        return view('page.frontend.partner.index', compact('partner'));
    }
}
