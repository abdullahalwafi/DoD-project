<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisWisata;
use App\Models\Kecamatan;
use App\Models\Komentar;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totaljenis = JenisWisata::count();
        $totalkecamatan = Kecamatan::count();
        $totalwisata = Wisata::count();
        $totalkomentar = Komentar::count();
        $lastkomentar = Komentar::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.index', compact('totaljenis', 'totalkecamatan', 'totalwisata', 'totalkomentar', 'lastkomentar'));
    }
}
