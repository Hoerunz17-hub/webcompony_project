<?php

namespace App\Http\Controllers\Backend;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutusBackendController extends Controller
{
     public function index()
    {
        $aboutss = Aboutus ::all();

        return view('page.backend.about.index', compact('aboutss'));
    }

    public function create()
    {
        $abouts = Aboutus::all();

        return view('page.backend.about.create', compact('abouts'));
    }

    public function store(Request $request){
        // validasi data
        $request->validate([
            'description' => 'required',
            'foto' => 'required',

        ]);

        $dataabout_store = [
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            $dataabout_store['photo'] = $request->file('foto')->store('about', 'public');
        }

        Aboutus::create($dataabout_store);
        return redirect('/admin/about')->with('success', 'Data Berhasil Ditambahkan');


      }

        public function destroy($id){
            $dataabouts = Aboutus::find($id);

            if ($dataabouts) {
                $dataabouts->delete();

                return redirect('/admin/about')->with('success', 'Data Berhasil Dihapus');
            }
        }

        public function edit($id){
            $aboutus = Aboutus::find($id);

            if (!$aboutus) {
                return redirect('/admin/about')->with('error', 'Data Tidak Ditemukan');
            }
            return view('page.backend.about.edit', compact('aboutus'));

        }

        public function update(Request $request, $id){
            $request->validate([
                'description' => 'required',

            ]);
            $dataabouts = Aboutus::find($id);

            $dataabouts_update = [
                'description' => $request->description,

            ];
            if  ($request->hasFile('foto')){
                Storage::disk('public')->delete($dataabouts->photo);
                $dataabouts_update['photo'] = $request->file('foto')->store('about', 'public');
            }

            $dataabouts->update($dataabouts_update);

            return redirect('/admin/about')->with('success', 'Data Berhasil Diupdate');
        }

        public function toggle(Request $request, $id)
        {
            $about = Aboutus::findOrFail($id);

            // kalau status = 1 berarti aktif, kalau 0 berarti inactive
            $about->is_active = $request->status == 1 ? 'active' : 'inactive';


            $about->save();

            return response()->json([
                'success' => true,
                'is_active' => $about->is_active
            ]);
        }


}
