<?php

namespace App\Http\Controllers\Backend;

use App\Models\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OffersBackendController extends Controller
{
        public function index()
    {
        $disconts = Special::all();
        return view('page.backend.sectionoffers.index', compact('disconts'));
    }

    public function create()
    {
        $discont = Special::all();

        return view('page.backend.sectionoffers.create', compact('discont'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $datadiscont_store = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datadiscont_store['photo'] = $request->file('foto')->store('sectionoffers', 'public');
        }
        Special::create($datadiscont_store);
        return redirect('/admin/discont')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function destroy($id){
        $datadiscont = Special::find($id);

        if ($datadiscont) {
            $datadiscont->delete();

            return redirect('/admin/discont')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $discont = Special::find($id);

        if (!$discont) {
            return redirect('/admin/discont')->with('error', 'Data tidak ditemukan');
        }
        return view('page.backend.sectionoffers.edit', compact('discont'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $datadiscont = Special::find($id);
        $datadiscont_update = [
            'title' => $request->title,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datadiscont->photo);
            $datadiscont_update['photo'] = $request->file('foto')->store('sectionoffers', 'public');


        }
         $datadiscont->update($datadiscont_update);
            return redirect('/admin/discont')->with('success', 'Data Berhasil Diupdate');
    }

          public function toggle(Request $request, $id)
{
    $discont = Special::findOrFail($id);

    // kalau status = 1 berarti aktif, kalau 0 berarti inactive
    $discont->is_active = $request->status == 1 ? 'active' : 'inactive';
    $discont->save();

    return response()->json([
        'success' => true,
        'is_active' => $discont->is_active
    ]);
}

}
