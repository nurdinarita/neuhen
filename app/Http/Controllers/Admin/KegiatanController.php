<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->get();
        return view('admin.kegiatan.index')->with([
            'title' => 'Kegiatan Gampong',
            'activities' => $activities
        ]);
    }

    public function create()
    {
        return view('admin.kegiatan.form')->with([
            'title' => 'Post Kegiatan Baru'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2000',
            'description' => 'required'
        ]);

        if($request->file('image')){
            $request->file('image')->storePubliclyAs('public/activities-image', $request->file('image')->hashName());
            $validatedData['image'] = $request->file('image')->hashName();
        }
        Activity::create($validatedData);
        
        return redirect('admin/kegiatan-gampong')->with('success', 'Kegiatan Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $activity = Activity::where('id', $id)->first();
        return view('admin.kegiatan.form')->with([
            'title' => 'Edit Kegiatan',
            'activity' => $activity
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|max:2000',
            'description' => 'required'
        ]);
        if($request->file('image')){
            $request->file('image')->storePubliclyAs('public/activities-image', $request->file('image')->hashName());
            $validatedData['image'] = $request->file('image')->hashName();
        }

        Activity::where('id', $id)->update($validatedData);
        return redirect('admin/kegiatan-gampong')->with('success', 'Berita Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $activity = Activity::where('id', $id)->first();
        storage::disk('public')->delete('activities-image/'. $activity->image);
        $activity->delete();
        return redirect('admin/kegiatan-gampong')->with('success', 'Kegiatan Berhasil Dihapus');
    }
}
