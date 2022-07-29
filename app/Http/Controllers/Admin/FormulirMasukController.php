<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MigrantsInOneVillage;


class FormulirMasukController extends Controller
{
    public function index()
    {
        return view('admin.formulir.index')->with([
            'title'=> 'Formulir Masuk'
        ]);
    }
    public function formulirPindahSatuGampong()
    {
        return view('admin.formulir.formulirPindahSatuGampong')->with([
            'title'=> 'Formulir Permohonan Pindah WNI (Dalam Satu Gampong)',
            'data' => MigrantsInOneVillage::all()
        ]);
    }
    public function formulirPindahSatuGampongShow($id)
    {
        return view('admin.formulir.formulirPindahSatuGampongShow')->with([
            'title'=> 'Detail Formulir Permohonan Pindah WNI (Dalam Satu Gampong)',
            'data' => MigrantsInOneVillage::find($id)
        ]);
    }
}
