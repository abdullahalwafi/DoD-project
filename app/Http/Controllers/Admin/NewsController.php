<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);
        // upload img
        News::create([
            'title' => $request->title,
            'image' => $request->file('image')->store('news', 'public'),
            'content' => $request->content,
            'views' => 0,
            'slug' => SlugService::createSlug(News::class, 'slug', $request->title)
        ]);
        
        return redirect('/admin/news')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
        // kalo kosong pake yg sebelumnya
        if (!$request->file('image')) {
            $news['image'] = News::findOrFail($id)->image;
        } else {
            // upload img
            $news['image'] = $request->file('image')->store('news', 'public');
        }
        $news['views'] = 0;
        $news['slug'] = SlugService::createSlug(News::class, 'slug', $request->title);
        News::findOrFail($id)->update($news);
        return redirect('/admin/news')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        unlink(storage_path('app/public/' . $news->image));
        $news->delete();

        return redirect('/admin/news')->with('success', 'News deleted successfully');
    }
}
