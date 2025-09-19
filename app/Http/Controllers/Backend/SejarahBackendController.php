<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SejarahBackendController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('page.backend.sejarah.index', compact('sejarah'));
    }

    public function create()
    {
        $sejarahs = Sejarah::all();
        return view('page.backend.sejarah.create', compact('sejarahs'));
    }
    public function store(Request $request){
         $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $datasejarah_store = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datasejarah_store['photo'] = $request->file('foto')->store('sejarah', 'public');
        }
        Sejarah::create($datasejarah_store);
        return redirect('/admin/sejarah')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $datasejarahs = Sejarah::find($id);

        if ($datasejarahs) {
            $datasejarahs->delete();

            return redirect('/admin/sejarah')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $sejarah = Sejarah::find($id);

        if (!$sejarah) {
            return redirect('/admin/sejarah')->with('error', 'Data tidak ditemukan');
        }

        return view('page.backend.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $datasejarah = Sejarah::find($id);
        $datasejarah_update = [
            'title' => $request->title,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datasejarah->photo);
            $datasejarah_update['photo'] = $request->file('foto')->store('sejarah', 'public');


        }
         $datasejarah->update($datasejarah_update);
            return redirect('/admin/sejarah')->with('success', 'Data Berhasil Diupdate');
    }

                    public function toggleStatus($id)
        {
            $sejarah = Sejarah::findOrFail($id);

            $sejarah->is_active = $sejarah->is_active === 'active' ? 'inactive' : 'active';
            $sejarah->save();

            return response()->json([
                'success' => true,
                'status' => $sejarah->is_active
            ]);
        }

}
