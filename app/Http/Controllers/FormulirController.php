<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MigrantsInOneVillage;

class FormulirController extends Controller
{
    public function index(){
        return view('formulir')->with([
            'title' => 'Formulir'
        ]);
    }
    public function formulir_permohonan_pindah_wni_dalam_satu_gampong(){
        return view('formulir_permohonan_pindah_wni_dalam_satu_gampong')->with([
            'title' => 'Formulir Permohonan Pindah WNI (Dalam Satu Gampong)'
        ]);
    }
    public function formulir_permohonan_pindah_wni_dalam_satu_gampong_store(Request $request){
        // return request()->all();
        MigrantsInOneVillage::create($request->all());
        return redirect('/form/formulir-permohonan-pindah-wni-dalam-satu-gampong')->with('success', 'Data Berhasil Disimpan');
    }
}
