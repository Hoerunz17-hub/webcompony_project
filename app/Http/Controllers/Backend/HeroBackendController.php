<?php

namespace App\Http\Controllers\Backend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroBackendController extends Controller
{
    public function index()
    {
        $heroes = Hero ::all();
        return view('page.backend.hero.index', compact('heroes'));
    }

    public function create()
    {
        // siapkan data yang akan dipanggil
        $heros = Hero::all();

        return view('page.backend.hero.create', compact('heros'));
    }

    public function store(Request $request){
        // validasi data
        $request->validate([
            'title' => 'required',
            'foto' => 'required',

        ]);

        $datahero_store = [
            'title' => $request->title,

        ];
        if ($request->hasFile('foto')){
            $datahero_store['photo'] = $request->file('foto')->store('hero', 'public');
        }

        Hero::create($datahero_store);
        return redirect('/admin/hero')->with('success', 'Data Berhasil Ditambahkan');


    }
    public function destroy($id){
        $dataheros = Hero::find($id);

        if ($dataheros) {

            $dataheros->delete();

            return redirect('/admin/hero')->with('success', 'Data Berhasil Dihapus');
        }

        return redirect('/admin/hero')->with('error', 'Data Tidak Ditemukan');

    }

    public function edit($id)
    {
         $hero = Hero::find($id);

    if (!$hero) {
        return redirect('/admin/hero')->with('error', 'Data Tidak Ditemukan');
    }

    return view('page.backend.hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',


        ]);
        $dataheros = Hero::find($id);

        $dataheros_update = [
            'title' => $request->title,

        ];
        if  ($request->hasFile('foto')){
            Storage::disk('public')->delete($dataheros->photo);

            $dataheros_update['photo'] = $request->file('foto')->store('hero', 'public');
        }

        $dataheros->update($dataheros_update);

        return redirect('/admin/hero')->with('success', 'Data Berhasil Diupdate');
    }

     public function toggle(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);
        $hero->is_active = $request->status == 1 ? 'active' : 'inactive';
        $hero->save();

        return response()->json([
            'success'   => true,
            'is_active' => $hero->is_active
        ]);
    }




}
