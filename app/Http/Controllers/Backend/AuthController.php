<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan form login
    public function showLoginForm()
    {
        return view('page.auth.login.index');
    }

    // proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email:dns',
            'password' => 'required',
        ]);

        // cek login
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin'); // arahkan ke dashboard
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
