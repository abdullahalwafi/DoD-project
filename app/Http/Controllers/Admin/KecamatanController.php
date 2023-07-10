<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Camats = Kecamatan::all();
        return view('admin.kecamatan.index', compact('Camats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:4|max:50',
        ]);
        
        Kecamatan::create($validated);
        return redirect('/admin/kecamatan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Kecamatan = Kecamatan::find($id);
        return view('admin.kecamatan.edit', [
            'Kecamatan' => $Kecamatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Kecamatan = Kecamatan::find($id);

        $validated = $request->validate([
            'nama' => 'required|min:4|max:50',            
        ]);

        $Kecamatan->nama = $request->input('nama');        
        $Kecamatan->save();
        
        return redirect('/admin/kecamatan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mencari data berdasarkan id
        $Kecamatan = Kecamatan::find($id);
        $Kecamatan->delete();
        return redirect('/admin/kecamatan')->with('success', 'Data berhasil dihapus');
    }
}
