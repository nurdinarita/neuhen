<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('admin.struktur.index')->with([
            'title' => 'Struktur Organisasi',
            'organizations' => $organizations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.struktur.form')->with([
            'title' => 'Tambah Struktur Organisasi',
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
            'year' => 'required',
            'image' => 'required|max:2000'
        ]);

        if($request->file('image'))
        {
            $request->file('image')->storePubliclyAs('public/organizations-image', $request->file('image')->hashName());
            $validatedData['image'] = $request->file('image')->hashName();
        }

        Organization::create($validatedData);
        return redirect('admin/organizations')->with('success', 'Struktur Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.struktur.show')->with([
            'title' => 'Detail Struktur Organisasi',
            'organization' => Organization::find($id)
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
        return view('admin.struktur.form')->with([
            'title' => 'Edit Struktur Organisasi',
            'organization' => Organization::find($id)
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
        $organization = Organization::find($id);
        $rules = [
            'year' => 'required',
            'image' => 'image|max:2000',
        ];

        $validatedData = $request->validate($rules);

        if(request()->file('image')){
            Storage::disk('public')->delete('organizations-image/'.$organization->image);
            request()->file('image')->storePubliclyAs('public/organizations-image', request()->file('image')->hashName());
            $validatedData['image'] = request()->file('image')->hashName();
        }

        Organization::where('id', $id)->update($validatedData);
        return redirect('admin/organizations')->with('success', 'Struktur Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization = Organization::where('id', $id)->first();
        storage::disk('public')->delete('organizations-image/'. $organization->image);
        $organization->delete();
        return redirect('admin/organizations')->with('success', 'Struktur Berhasil Dihapus');
    }
}
