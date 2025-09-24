<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusBackendController extends Controller
{
   public function index()
   {
        $contacts = Contactus::all();
       return view('page.backend.contact.index', compact('contacts'));
   }





                    public function show($id)
                {
                    $datacontact = Contactus::find($id);

                    if (!$datacontact) {
                        return redirect('/admin/contact')->with('error', 'Data tidak ditemukan');
                    }

                    // kalau belum dibaca → ubah jadi dibaca
                    if ($datacontact->is_active !== 'active') {
                        $datacontact->is_active = 'active';
                        $datacontact->save();
                    }

                    return view('page.backend.contact.show', compact('datacontact'));
                }



}
