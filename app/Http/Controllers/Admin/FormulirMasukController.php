<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MigrantsInOneVillage;
use App\Models\MigrantsBeetWenCounties;
use App\Models\MigrantsBeetwenVillages;
use App\Models\BirthCertificate;
use App\Models\DeathCertificate;


class FormulirMasukController extends Controller
{
    public function index()
    {
        return view('admin.formulir.index')->with([
            'title'=> 'Formulir Masuk'
        ]);
    }

    //FORMULIR PERMOHONAN PINDAH WNI (Dalam Satu Gampong)
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
    public function formulirPindahSatuGampongDestroy($id)
    {
        MigrantsInOneVillage::destroy($id);
        return redirect('/admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong')->with('success', 'Data Berhasil Dihapus');
    }

    //SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Dalam Satu Kabupaten / Antar Kecamatan)
    public function formulirPindahSatuKabupaten()
    {
        return view('admin.formulir.formulirPindahSatuKabupaten')->with([
            'title'=> 'Formulir Permohonan Pindah WNI (Dalam Satu Kabupaten / Antar Kecamatan)',
            'data' => MigrantsBeetwenVillages::all()
        ]);
    }
    public function formulirPindahSatuKabupatenShow($id)
    {
        return view('admin.formulir.formulirPindahSatuKabupatenShow')->with([
            'title'=> 'Detail Formulir Permohonan Pindah WNI (Dalam Satu Kabupaten / Antar Kecamatan)',
            'data' => MigrantsBeetwenVillages::find($id)
        ]);
    }
    public function formulirPindahSatuKabupatenDestroy($id)
    {
        MigrantsBeetwenVillages::destroy($id);
        return redirect('/admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-kabupaten')->with('success', 'Data Berhasil Dihapus');
    }

    //SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Dalam Antar Kabupaten / Antar Provinsi)
    public function formulirAntarKabupatenProvinsi()
    {
        return view('admin.formulir.formulirAntarKabupatenProvinsi')->with([
            'title'=> 'Surat Keterangan Pindah/Masuk Gampong Neuhen (Dalam Antar Kabupaten / Antar Provinsi)',
            'data' => MigrantsBeetWenCounties::all()
        ]);
    }
    public function formulirAntarKabupatenProvinsiShow($id)
    {
        return view('admin.formulir.formulirAntarKabupatenProvinsiShow')->with([
            'title'=> 'Detail Surat Keterangan Pindah/Masuk Gampong Neuhen (Dalam Antar Kabupaten / Antar Provinsi)',
            'data' => MigrantsBeetWenCounties::find($id)
        ]);
    }
    public function formulirAntarKabupatenProvinsiDestroy($id)
    {
        MigrantsBeetWenCounties::destroy($id);
        return redirect('/admin/formulir-masuk/surat-keterangan-pindah-masuk-gampong-neuhen-dalam-antar-kabupaten-antar-provinsi')->with('success', 'Data Berhasil Dihapus');
    }

    //Akte Kelahiran
    public function akteKelahiran()
    {
        return view('admin.formulir.akteKelahiran')->with([
            'title'=> 'Surat Keterangan Kelahiran',
            'data' => BirthCertificate::all()
        ]);
    }
    public function akteKelahiranShow($id)
    {
        return view('admin.formulir.akteKelahiranShow')->with([
            'title'=> 'Detail Surat Keterangan Kelahiran',
            'data' => BirthCertificate::find($id)
        ]);
    }
    public function akteKelahiranDestroy($id)
    {
        BirthCertificate::destroy($id);
        return redirect('/admin/formulir-masuk/akte-kelahiran')->with('success', 'Data Berhasil Dihapus');
    }

    //Akte Kematian
    public function akteKematian()
    {
        return view('admin.formulir.akteKematian')->with([
            'title'=> 'Surat Keterangan Kematian',
            'data' => DeathCertificate::all()
        ]);
    }
    public function akteKematianShow($id)
    {
        return view('admin.formulir.akteKematianShow')->with([
            'title'=> 'Detail Surat Keterangan Keatian',
            'data' => DeathCertificate::find($id)
        ]);
    }
    public function akteKematianDestroy($id)
    {
        DeathCertificate::destroy($id);
        return redirect('/admin/formulir-masuk/akte-kematian')->with('success', 'Data Berhasil Dihapus');
    }
}
