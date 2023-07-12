<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisWisata;
use App\Models\Kecamatan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('admin.wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis_wisata = JenisWisata::all();
        $kecamatan = Kecamatan::all();
        return view('admin.wisata.create', compact('jenis_wisata', 'kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valited = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'skor_rating' => 'required|integer',
            'harga_tiket' => 'required|integer',
            'deskripsi' => 'required',
            'jenis_wisata_id' => 'required',
            'kecamatan_id' => 'required',
        ]);
        Wisata::create($valited);
        return redirect('/admin/wisata')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis_wisata = JenisWisata::all();
        $kecamatan = Kecamatan::all();
        $wisata = Wisata::find($id);
        return view('admin.wisata.edit', compact('wisata', 'jenis_wisata', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valited = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'skor_rating' => 'required|integer',
            'harga_tiket' => 'required|integer',
            'deskripsi' => 'required',
            'jenis_wisata_id' => 'required',
            'kecamatan_id' => 'required',
        ]);
        $wisata = Wisata::find($id);
        $wisata->update($valited);
        return redirect('/admin/wisata')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Wisata::destroy($id);
        return redirect('/admin/wisata')->with('success', 'Data berhasil dihapus');
    }
}
