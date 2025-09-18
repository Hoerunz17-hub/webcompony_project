<?php

namespace App\Http\Controllers\Backend;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesBackendController extends Controller
{
    public function index()
    {
            $services = Services::all();
        return view('page.backend.service.index' , compact('services'));
    }

    public function create()
    {
        $service = Services::all();
        return view('page.backend.service.create', compact('service'));
    }

    public function store(Request $request){
        // validasi data
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $dataservice_store = [
            'title' => $request->title,
            'description' => $request->description,

        ];

        if ($request->hasFile('foto')){
            $dataservice_store['photo'] = $request->file('foto')->store('service', 'public');
        }
        Services::create($dataservice_store);
        return redirect('/admin/service')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $dataservices = Services::find($id);

        if ($dataservices) {
            $dataservices->delete();

            return redirect('/admin/service')->with('success', 'Data Berhasil Dihapus');
        }
    }

    public function edit($id){
        $service = Services::find($id);

        if (!$service) {
            return redirect('/admin/service')->with('error', 'Data tidak ditemukan');
        }
        return view('page.backend.service.edit', compact('service'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $dataservices = Services::find($id);
        $dataservices_update = [
            'title' => $request->title,
            'description' => $request->description,

        ];
        if ($request->hasFile('foto')){
            Storage::disk('public')->delete($dataservices->photo);
            $dataservices_update['photo'] = $request->file('foto')->store('service', 'public');


        }
         $dataservices->update($dataservices_update);
            return redirect('/admin/service')->with('success', 'Data Berhasil Diupdate');
    }

     public function toggle(Request $request, $id)
    {
        $service = Services::findOrFail($id);
        $service->is_active = $request->status == 1 ? 'active' : 'inactive';
        $service->save();

        return response()->json([
            'success'   => true,
            'is_active' => $service->is_active
        ]);
    }
}
