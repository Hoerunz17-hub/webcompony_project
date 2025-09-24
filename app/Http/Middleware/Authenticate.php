<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ...

    public function logout(Request $request)
    {
        Auth::logout(); // logout user

        // invalidate session biar aman
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // arahkan ke login page
        return redirect()->route('login')->with('success', 'Anda berhasil logout!');
    }
}
