<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all()->sortByDesc('id');
        return view('admin.gallery.index')->with([
            'title' => 'Gallery',
            'galleries' => $galleries
        ]);
    }

    public function create()
    {
        return view('admin.gallery.form')->with([
            'title' => 'Add Gallery'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:2000'
        ]);

        if($request->file('image'))
        {
            $request->file('image')->storePubliclyAs('public/galleries', $request->file('image')->hashName());
            $validatedData['image'] = $request->file('image')->hashName();
        }

        Gallery::create($validatedData);
        return redirect('admin/gallery')->with('success', 'Gallery Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        Storage::disk('public')->delete('galleries/'.$gallery->image);
        Gallery::where('id', $id)->first()->delete();
        return redirect('admin/gallery')->with('success', 'Gallery Berhasil Dihapus');
    }
}
