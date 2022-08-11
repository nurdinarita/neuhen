<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Activity;
use App\Models\Dusun;
use App\Models\KartuKeluarga;
use App\Models\Announcement;

use App\Models\MigrantsInOneVillage;
use App\Models\MigrantsBeetWenCounties;
use App\Models\MigrantsBeetwenVillages;
use App\Models\BirthCertificate;
use App\Models\DeathCertificate;

class DashboardController extends Controller
{
    public function index()
    {
        $news = News::all()->count();
        $activity = Activity::all()->count();
        $announcement = Announcement::all()->count();
        $dusun = Dusun::all()->count();
        $kartu_keluarga = KartuKeluarga::all()->count();
        $anggota_kartu_keluarga = KartuKeluarga::all()->sum('jumlah_anggota_keluarga');
        $total_penduduk = $kartu_keluarga + $anggota_kartu_keluarga;
        $formulir1 = MigrantsInOneVillage::all()->count();
        $formulir2 = MigrantsBeetWenCounties::all()->count();
        $formulir3 = MigrantsBeetwenVillages::all()->count();
        $formulir4 = BirthCertificate::all()->count();
        $formulir5 = DeathCertificate::all()->count();
        $total_formulir = $formulir1 + $formulir2 + $formulir3 + $formulir4 + $formulir5;

        return view('admin.dashboard')->with([
            'title' => 'Dashboard',
            'news' => $news,
            'activity' => $activity,
            'announcement' => $announcement,
            'dusun' => $dusun,
            'kartu_keluarga' => $kartu_keluarga,
            'total_penduduk' => $total_penduduk,
            'total_formulir' => $total_formulir,
        ]);
    }
}
