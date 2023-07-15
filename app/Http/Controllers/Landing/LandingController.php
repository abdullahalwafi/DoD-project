<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\JenisWisata;
use App\Models\Komentar;
use App\Models\News;
use App\Models\Wisata;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $jeniswisata = JenisWisata::orderBy('id', 'desc')->limit(4)->get();
        $randomwisata1 = Wisata::inRandomOrder()->limit(2)->get();
        $randomwisata2 = Wisata::inRandomOrder()->limit(3)->get();  
        $tigakomentar = Komentar::orderBy('id', 'desc')->limit(3)->get();
        $newsterbaru = News::orderBy('id', 'desc')->limit(3)->get();    
        return view('landing.index', [
            'jeniswisata' => $jeniswisata,
            'randomwisata1' => $randomwisata1,
            'randomwisata2' => $randomwisata2,
            'tigakomentar' => $tigakomentar,
            'newsterbaru' => $newsterbaru,
        ]);
    }
}
