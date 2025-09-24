<?php

namespace App\Http\Controllers\Backend;

use App\Models\Populer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PopulerBackendController extends Controller
{
    public function index()
    {
        $destinasis = Populer::all();
        return view('page.backend.populerdestinasi.index', compact('destinasis'));
    }

    public function create()
    {
        $destinasi = Populer::all();

        return view('page.backend.populerdestinasi.create', compact('destinasi'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $datadestinasi_store = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datadestinasi_store['photo'] = $request->file('foto')->store('populerdestinasi', 'public');
        }
        Populer::create($datadestinasi_store);
        return redirect('/admin/destinasi')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function destroy($id){
        $datadestinasi = Populer::find($id);

        if ($datadestinasi) {
            $datadestinasi->delete();

            return redirect('/admin/destinasi')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $destinasi = Populer::find($id);

        if (!$destinasi) {
            return redirect('/admin/destinasi')->with('error', 'Data tidak ditemukan');
        }
        return view('page.backend.populerdestinasi.edit', compact('destinasi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $datadestinasi = Populer::find($id);
        $datadestinasi_update = [
            'title' => $request->title,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datadestinasi->photo);
            $datadestinasi_update['photo'] = $request->file('foto')->store('sectionoffers', 'public');


        }
         $datadestinasi->update($datadestinasi_update);
            return redirect('/admin/destinasi')->with('success', 'Data Berhasil Diupdate');
    }

           public function toggle(Request $request, $id)
{
    $destinasi = Populer::findOrFail($id);

    // kalau status = 1 berarti aktif, kalau 0 berarti inactive
    $destinasi->is_active = $request->status == 1 ? 'active' : 'inactive';
    $destinasi->save();

    return response()->json([
        'success' => true,
        'is_active' => $destinasi->is_active
    ]);
}

}
