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





        public function show($id){
            $datacontact = Contactus::find($id);
            if($datacontact == null){
                return redirect('/admin/contact')->with( 'success', 'Data Berhasil Ditambahkan');
            }

            return view('page.backend.contact.show', compact('datacontact'));
        }

            public function toggleStatus($id)
        {
            $contact = Contactus::findOrFail($id);

            $contact->is_active = $contact->is_active === 'active' ? 'inactive' : 'active';
            $contact->save();

            return response()->json([
                'success' => true,
                'status' => $contact->is_active
            ]);
        }

}
