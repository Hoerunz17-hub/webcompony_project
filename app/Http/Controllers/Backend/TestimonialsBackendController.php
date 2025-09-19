<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialsBackendController extends Controller
{
    public function index()
    {
        $testimonis = Testimonials ::all();
        return view('page.backend.testimoni.index', compact('testimonis'));
    }

    public function create()
    {
        $testimoni = Testimonials ::all();
        return view('page.backend.testimoni.create', compact('testimoni'));

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);

         $datatestimoni_store = [
            'name' => $request->name,
            'description' => $request->description,
            'rating' => $request->rating,
        ];

        if ($request->hasFile('photo_profile')){
            $datatestimoni_store['photo_profile'] = $request->file('photo_profile')->store('testimoni', 'public');
        }
        Testimonials::create($datatestimoni_store);
        return redirect('/admin/testimoni')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $datatestimonis = Testimonials::find($id);

        if ($datatestimonis) {
            $datatestimonis->delete();

            return redirect('/admin/testimoni')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $testimoni = Testimonials::find($id);

        if (!$testimoni) {
            return redirect('/admin/testimoni')->with('error', 'Data Tidak Ditemukan');
        }

        return view('page.backend.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);

        $datatestimoni_updates = Testimonials::find($id);
        $datatestimoni_update = [
            'name' => $request->name,
            'description' => $request->description,
            'rating' => $request->rating,
        ];
        if ($request->hasFile('photo_profile')) {
            Storage::disk('public')->delete($datatestimoni_updates->photo_profile);

            $datatestimoni_update['photo_profile'] = $request->file('photo_profile')->store('testimoni', 'public');
        }

        $datatestimoni_updates->update($datatestimoni_update);
        return redirect('/admin/testimoni')->with('success', 'Data Berhasil Diupdate');

    }

                public function toggle(Request $request, $id)
        {
            $testimoni = Testimonials::findOrFail($id);
            $testimoni->is_active = $request->status == 1 ? 'active' : 'inactive';
            $testimoni->save();

            return response()->json([
                'success'   => true,
                'is_active' => $testimoni->is_active
            ]);
        }

}
