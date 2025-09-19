<?php

namespace App\Http\Controllers\Backend;

use App\Models\Mediasocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MediasocialBackendController extends Controller
{
    public function index()
    {
        $mediasosials = Mediasocial::all();
        return view('page.backend.mediasosial.index' , compact('mediasosials'));
    }

    public function create()
    {
        $media = Mediasocial::all();
        return view('page.backend.mediasosial.create', compact('media'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'link' => 'required',
            'nameaccount' => 'required',
            'mediasosial' => 'required',


        ]);

        $datamedia_store = [
            'link' => $request->link,
            'nameaccount' => $request->nameaccount,
            'namemediasocial' => $request->mediasosial,

        ];

        if ($request->hasFile('foto')){
            $datamedia_store['photo'] = $request->file('foto')->store('mediasocial', 'public');
        }
        Mediasocial::create($datamedia_store);
        return redirect('/admin/media')->with('success', 'Data Berhasil Ditambahkan');

    }
    public function destroy($id){
        $datamedias = Mediasocial::find($id);

        if ($datamedias) {
            $datamedias->delete();

            return redirect('/admin/media')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $mediasosial = Mediasocial::find($id);

        if (!$mediasosial) {
            return redirect('/admin/media')->with('error', 'Data Tidak Ditemukan');
        }

        return view('page.backend.mediasosial.edit', compact('mediasosial'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'link' => 'required',
            'nameaccount' => 'required',
            'mediasosial' => 'required',


        ]);

        $datamedia = Mediasocial::find($id);
        $datamedia_update = [
            'link' => $request->link,
            'nameaccount' => $request->nameaccount,
            'namemediasocial' => $request->mediasosial,

        ];

        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datamedia->photo);
            $datamedia_update['photo'] = $request->file('foto')->store('mediasocial', 'public');
        }

            $datamedia->update($datamedia_update);
                return redirect('/admin/media')->with('success', 'Data Berhasil Diupdate');
    }
            public function toggle(Request $request, $id)
            {
                $media = Mediasocial::findOrFail($id);

                // kalau status = 1 berarti aktif, kalau 0 berarti inactive
                $media->is_active = $request->status == 1 ? 'active' : 'inactive';

                $media->save();

                return response()->json([
                    'success' => true,
                    'is_active' => $media->is_active
                ]);
            }


}
