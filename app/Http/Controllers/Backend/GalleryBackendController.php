<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryBackendController extends Controller
{
    public function index()
    {
        $galerys = Gallery::all();
        return view('page.backend.galery.index', compact('galerys'));
    }

    public function create()
    {
        $galery = Gallery::all();

        return view('page.backend.galery.create', compact('galery'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $datagalery_store = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datagalery_store['photo'] = $request->file('foto')->store('galery', 'public');
        }
        Gallery::create($datagalery_store);
        return redirect('/admin/galery')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function destroy($id){
        $datagalerys = Gallery::find($id);

        if ($datagalerys) {
            $datagalerys->delete();

            return redirect('/admin/galery')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $galery = Gallery::find($id);

        if (!$galery) {
            return redirect('/admin/galery')->with('error', 'Data tidak ditemukan');
        }
        return view('page.backend.galery.edit', compact('galery'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $datagalerys = Gallery::find($id);
        $datagalerys_update = [
            'title' => $request->title,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datagalerys->photo);
            $datagalerys_update['photo'] = $request->file('foto')->store('galery', 'public');


        }
         $datagalerys->update($datagalerys_update);
            return redirect('/admin/galery')->with('success', 'Data Berhasil Diupdate');
    }

            public function toggleStatus($id)
        {
            $gallery = Gallery::findOrFail($id);

            $gallery->is_active = $gallery->is_active === 'active' ? 'inactive' : 'active';
            $gallery->save();

            return response()->json([
                'success' => true,
                'status' => $gallery->is_active
            ]);
        }

}
