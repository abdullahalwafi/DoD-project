<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);
        $rekomendasi = News::orderBy('views', 'desc')->take(5)->get();
        return view('landing.news.index', compact('news', 'rekomendasi'));
    }
    public function show(string $slug)
    {
        // update views
        News::where('slug', $slug)->increment('views');
        $news = News::where('slug', $slug)->first();
        $rekomendasi = News::orderBy('views', 'desc')->take(5)->get();
        $terkait = News::where('id', '!=', $news->id)->orderBy('views', 'desc')->take(3)->get();
        return view('landing.news.show', compact('news', 'rekomendasi', 'terkait'));
    }
}
