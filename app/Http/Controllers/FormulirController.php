<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MigrantsInOneVillage;
use App\Models\MigrantsBeetWenCounties;
use App\Models\MigrantsBeetwenVillages;
use App\Models\DeathCertificate;
use App\Models\BirthCertificate;

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

    public function pindah_masuk_kab_kec(){
        return view('pindah_masuk_kab_kec')->with([
            'title' => 'SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Dalam Satu Kabupaten / Antar Kecamatan)'
        ]);
    }
    public function pindah_masuk_kab_kec_store(Request $request){
        MigrantsBeetwenVillages::create($request->all());

        return redirect('/form/pindah-masuk-kab-kec')->with('success', 'Data Berhasil Disimpan');
    }

    public function pindah_masuk_kab_prov(){
        return view('pindah_masuk_kab_prov')->with([
            'title' => 'SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Antar Kabupaten / Antar Provinsi)'
        ]);
    }
    public function pindah_masuk_kab_prov_store(Request $request){
        MigrantsBeetWenCounties::create($request->all());
        return redirect('/form/pindah-masuk-kab-prov')->with('success', 'Data Berhasil Disimpan');
    }
    public function akte_kelahiran(){
        return view('akte_kelahiran')->with([
            'title' => 'Akte Kelahiran'
        ]);
    }
    public function akte_kelahiran_store(Request $request){
        BirthCertificate::create($request->all());
        return redirect('/form/akte-kelahiran')->with('success', 'Data Berhasil Disimpan');
    }

    public function akte_kematian(){
        return view('akte_kematian')->with([
            'title' => 'Akte Kematian'
        ]);
    }
    public function akte_kematian_store(Request $request){
        // return request()->all();
        DeathCertificate::create($request->all());
        return redirect('/form/akte-kematian')->with('success', 'Data Berhasil Disimpan');
    }
}
