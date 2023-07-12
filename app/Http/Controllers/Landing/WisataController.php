<?php

namespace App\Http\Controllers\Landing;

use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Komentar;
use App\Models\User;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all();
        return view('landing.wisata.index', compact('wisata'));
    }
    public function show(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        $users = User::all();
        $komentar = Komentar::where('wisata_id', $wisata->id)->get();
        return view('landing.wisata.show', compact('wisata', 'users', 'komentar'));
    }

}
