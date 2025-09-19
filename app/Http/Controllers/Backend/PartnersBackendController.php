<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class PartnersBackendController extends Controller
{
    public function index()
    {
        $partner = Partners::all();
        return view('page.backend.partner.index', compact('partner'));
    }

    public function create()
    {
        $partner = Partners::all();
        return view('page.backend.partner.create', compact('partner'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $datapartner_store = [
            'name' => $request->name,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datapartner_store['photo'] = $request->file('foto')->store('partner', 'public');
        }
        Partners::create($datapartner_store);
        return redirect('/admin/partner')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function destroy($id){
        $datapartners = Partners::find($id);

        if ($datapartners) {
            $datapartners->delete();

            return redirect('/admin/partner')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $partners = Partners::find($id);

        if (!$partners) {
            return redirect('/admin/partner')->with('error', 'Data tidak ditemukan');
        }

        return view('page.backend.partner.edit', compact('partners'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);
        $datapartners = Partners::find($id);
        $datapartner_update = [
            'name' => $request->name,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datapartners->photo);
            $datapartner_update['photo'] = $request->file('foto')->store('partner', 'public');
        }

        $datapartners->update($datapartner_update);
        return redirect('/admin/partner')->with('success', 'Data Berhasil Diupdate');



    }

                        public function toggle(Request $request, $id)
        {
            $partner = Partners::findOrFail($id);

            // kalau status = 1 berarti aktif, kalau 0 berarti inactive
            $partner->is_active = $request->status == 1 ? 'active' : 'inactive';

            $partner->save();

            return response()->json([
                'success' => true,
                'is_active' => $partner->is_active
            ]);
        }




}
