<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class PengunjungBackendController extends Controller
{
    public function index()
    {
        $pengunjungs = Pengunjung::all();
        return view('page.backend.sectionpengunjung.index', compact('pengunjungs'));
    }

    public function create()
    {
        $pengunjungs = Pengunjung::all();
        return view('page.backend.sectionpengunjung.create', compact('pengunjungs'));
    }

    public function store(Request $request){
         // validasi data
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $datapengunjung_store = [
            'name' => $request->name,
            'description' => $request->description,

        ];

        Pengunjung::create($datapengunjung_store);
        return redirect('/admin/pengunjung')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function destroy($id){
        $datapengunjungs = Pengunjung::find($id);

        if ($datapengunjungs) {
            $datapengunjungs->delete();

            return redirect('/admin/pengunjung')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $datapengunjungs= Pengunjung::find($id);

        if (!$datapengunjungs) {
            return redirect('/admin/pengunjung')->with('error', 'Data tidak ditemukan');
        }

        return view('page.backend.sectionpengunjung.edit', compact('datapengunjungs'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);
        $datapengunjungs = Pengunjung::find($id);
        $datapengunjung_update = [
            'name' => $request->name,
            'description' => $request->description,

        ];
        $datapengunjungs->update($datapengunjung_update);
        return redirect('/admin/pengunjung')->with('success', 'Data Berhasil Diupdate');



    }

                        public function toggle(Request $request, $id)
        {
            $pengunjung = Pengunjung::findOrFail($id);

            // kalau status = 1 berarti aktif, kalau 0 berarti inactive
            $pengunjung->is_active = $request->status == 1 ? 'active' : 'inactive';

            $pengunjung->save();

            return response()->json([
                'success' => true,
                'is_active' => $pengunjung->is_active
            ]);
        }

}
