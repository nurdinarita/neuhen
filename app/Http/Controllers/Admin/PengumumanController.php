<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all()->sortByDesc('id');
        return view('admin.pengumuman.index')->with([
            'title' => 'Pengumuman Gampong',
            'announcements' => $announcements
        ]);
    }

    public function create()
    {
        return view('admin.pengumuman.form')->with([
            'title' => 'Buat Pengumuman'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'announcement' => 'required'
        ]);

        Announcement::create($validatedData);
        return redirect('admin/pengumuman')->with('success', 'Pengumuman Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $announcement = Announcement::where('id', $id)->first();
        return view('admin.pengumuman.form')->with([
            'title' => 'Edit Pengumuman',
            'announcement' => $announcement
        ]);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'announcement' => 'required'
        ]);

        Announcement::where('id', $id)->update($validatedData);
        return redirect('admin/pengumuman')->with('success', 'Pengumuman Berhasil Diupdate');
    }

    public function destroy($id)
    {
        Announcement::find($id)->delete();
        return redirect('admin/pengumuman')->with('success', 'Pengumuman Berhasil Dihapus');
    }
}
