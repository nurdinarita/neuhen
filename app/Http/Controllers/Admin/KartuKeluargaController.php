<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use Illuminate\Support\Facades\Storage;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kartu_keluarga.index')->with([
            'title' => 'Kartu Keluarga',
            'kartu_keluarga' => KartuKeluarga::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kartu_keluarga.form')->with([
            'title' => 'Tambah Data Kartu Keluarga'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_kk' => 'required|numeric|unique:kartu_keluarga',
            'nama_kepala_keluarga' => 'required',
            'jumlah_anggota_keluarga' => 'required|numeric',
            'file_kk' => 'required|image'
        ]);

        if(request()->file('file_kk')){
            request()->file('file_kk')->storePubliclyAs('public/file-kk', request()->file('file_kk')->hashName());
            $validatedData['file_kk'] = request()->file('file_kk')->hashName();
        }

        // $validatedData['excerpt'] = Str::limit(strip_tags(request()->body), 120);

        KartuKeluarga::create($validatedData);
        return Redirect('admin/kartu-keluarga')->with('success', 'Data KK Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.kartu_keluarga.show')->with([
            'title' => 'Detail Data Kartu Keluarga',
            'kartu_keluarga' => KartuKeluarga::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.kartu_keluarga.form')->with([
            'title' => 'Edit Data Kartu Keluarga',
            'kartu_keluarga' => KartuKeluarga::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kartu_keluarga = KartuKeluarga::all()->where('id', $id)->first();
        $rules = [
            'no_kk' => 'required|numeric',
            'nama_kepala_keluarga' => 'required',
            'jumlah_anggota_keluarga' => 'required|numeric',
        ];

        if($request->no_kk != $kartu_keluarga->no_kk){
            $rules['no_kk'] = 'required|numeric|unique:kartu_keluarga'; 
        }

        $validatedData = $request->validate($rules);

        if(request()->file('file_kk')){
            Storage::disk('public')->delete('file-kk/'.$kartu_keluarga->file_kk);
            request()->file('file_kk')->storePubliclyAs('public/file-kk', request()->file('file_kk')->hashName());
            $validatedData['file_kk'] = request()->file('file_kk')->hashName();
        }

        KartuKeluarga::where('id', $id)->update($validatedData);
        return redirect('admin/kartu-keluarga')->with('success', 'Data KK Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu_keluarga = KartuKeluarga::where('id', $id)->first();
        storage::disk('public')->delete('file-kk/'. $kartu_keluarga->file_kk);
        $kartu_keluarga->delete();
        return redirect('admin/kartu-keluarga')->with('success', 'Data Berhasil Dihapus');
    }
}
