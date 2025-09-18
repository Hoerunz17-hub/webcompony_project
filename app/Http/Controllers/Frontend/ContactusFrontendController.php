<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactusFrontendController extends Controller
{
    // tampilkan form contact us di FE
    public function index()
    {
        return view('page.frontend.contact.index');
    }

    // simpan data dari form contact us FE
    public function store(Request $request)
    {
        $request->validate([
            'firstname'   => 'required',
            'lastname'    => 'required',
            'subject'     => 'required',
            'description' => 'required',
        ]);

        Contactus::create([
            'first_name'  => $request->firstname,
            'last_name'   => $request->lastname,
            'subject'     => $request->subject,
            'description' => $request->description,
        ]);

        // kembali ke halaman contact FE, bukan admin
        return redirect('/contact')->with('success', 'Pesan berhasil dikirim!');
    }
}
