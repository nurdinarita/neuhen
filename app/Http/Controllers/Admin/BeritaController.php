<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::all()->sortByDesc('id');
        return view('admin.berita.index')->with([
            'title' => 'Berita Gampong',
            'news' => $news
        ]);
    }

    public function create()
    {
        return view('admin.berita.form')->with([
            'title' => 'Post Berita'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:news',
            'image' => 'required|image',
            'body' => 'required'
        ]);
        
        if(request()->file('image')){
            request()->file('image')->storePubliclyAs('public/news-image', request()->file('image')->hashName());
            $validatedData['image'] = request()->file('image')->hashName();
        }

        // $validatedData['excerpt'] = Str::limit(strip_tags(request()->body), 120);

        News::create($validatedData);
        return Redirect('admin/berita-gampong')->with('success', 'Berita Berhasil Ditambahkan');
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('admin.berita.show')->with([
            'title' => 'Detail Berita',
            'news' => $news
        ]);
    }

    public function edit($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('admin.berita.form')->with([
            'title' => 'Edit Berita',
            'news' => $news
        ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::all()->where('id', $id)->first();
        $rules = [
            'title' => 'required',
            'image' => 'image|max:2000',
            'body' => 'required'
        ];

        if($request->slug != $news->slug){
            $rules['slug'] = 'required|unique:news'; 
        }

        $validatedData = $request->validate($rules);

        if(request()->file('image')){
            Storage::disk('public')->delete('news-image/'.$news->image);
            request()->file('image')->storePubliclyAs('public/news-image', request()->file('image')->hashName());
            $validatedData['image'] = request()->file('image')->hashName();
        }

        News::where('id', $id)->update($validatedData);
        return redirect('admin/berita-gampong')->with('success', 'Berita Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $news = News::where('id', $id)->first();
        storage::disk('public')->delete('news-image/'. $news->image);
        $news->delete();
        return redirect('admin/berita-gampong')->with('success', 'Berita Berhasil Dihapus');
    }
}
