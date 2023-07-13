<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisWisata;

class JenisWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $JeWis = JenisWisata::all();
        return view('admin.jenis.index', compact('JeWis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|min:4|max:50',
    ]);

    JenisWisata::create([
        'nama' => $validated['nama'],
    ]);

    return redirect('/admin/jenis')->with('success', 'Data berhasil ditambahkan');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $JenisWisata = JenisWisata::find($id);
        return view('admin.jenis.edit', [
            'JenisWisata' => $JenisWisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $JenisWisata = JenisWisata::find($id);

    $validated = $request->validate([
        'nama' => 'required|min:4|max:50',
    ]);

    $JenisWisata->nama = $validated['nama'];

    $JenisWisata->save();
    return redirect('/admin/jenis')->with('success', 'Data berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mencari data berdasarkan id
        $JenisWisata = JenisWisata::find($id);
        $JenisWisata->delete();
        return redirect('/admin/jenis')->with('success', 'Data berhasil dihapus');
    }
}
