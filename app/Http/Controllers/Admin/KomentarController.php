<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();
        return view('admin.komentar.index', compact('komentar'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'isi' => 'required',
            'rating' => 'required',
            'wisata_id' => 'required',
            'user_id' => 'required',
        ]);

        Komentar::create($validated);

        return redirect()->route('wisata.show', $request->wisata_id);
    }

    public function destroy(string $id)
    {
        Komentar::destroy($id);
        return redirect('/admin/komentar')->with('success', 'Data berhasil dihapus');
    }
}
