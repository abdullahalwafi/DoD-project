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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('admin.kecamatan.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|min:5|max:50',
        ]);
        
        Kecamatan::create($validated);
        return redirect('/admin/Kecamatan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
