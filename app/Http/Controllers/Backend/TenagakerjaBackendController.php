<?php

namespace App\Http\Controllers\Backend;

use App\Models\TenagaKerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TenagakerjaBackendController extends Controller
{
    public function index()
    {
        $tenagakerjas = TenagaKerja::all();
        return view('page.backend.tenagakerja.index' , compact('tenagakerjas'));
    }

    public function create()
    {
        $tenagakrja = TenagaKerja::all();
        return view('page.backend.tenagakerja.create', compact('tenagakrja'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'description' => 'required',

        ]);

        $datatenagakerja_store = [
            'name' => $request->name,
            'position' => $request->posisi,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $datatenagakerja_store['photo'] = $request->file('foto')->store('tenagakerja', 'public');
        }
        TenagaKerja::create($datatenagakerja_store);
        return redirect('/admin/tenagakerja')->with('success', 'Data Berhasil Ditambahkan');

    }
    public function destroy($id){
        $datatenagakerjas = TenagaKerja::find($id);

        if ($datatenagakerjas) {
            $datatenagakerjas->delete();

            return redirect('/admin/tenagakerja')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $tenagakerja = TenagaKerja::find($id);

        if (!$tenagakerja) {
            return redirect('/admin/tenagakerja')->with('error', 'Data Tidak Ditemukan');
        }

        return view('page.backend.tenagakerja.edit', compact('tenagakerja'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'description' => 'required',

        ]);

        $datatenagakerja = TenagaKerja::find($id);
        $datatenagakerja_update = [
            'name' => $request->name,
            'position' => $request->posisi,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($datatenagakerja->photo);
            $datatenagakerja_update['photo'] = $request->file('foto')->store('tenagakerja', 'public');
        }

            $datatenagakerja->update($datatenagakerja_update);
                return redirect('/admin/tenagakerja')->with('success', 'Data Berhasil Diupdate');
    }

    public function toggle(Request $request, $id)
    {
        $tenagakerja = Tenagakerja::findOrFail($id);
        $tenagakerja->is_active = $request->status == 1 ? 'active' : 'inactive';
        $tenagakerja->save();

        return response()->json([
            'success'   => true,
            'is_active' => $tenagakerja->is_active
        ]);
    }
}
