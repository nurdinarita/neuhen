<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sejarah()
    {
        return view('sejarah')->with([
            'title' => 'Sejarah Gampong Neuhen'
        ]);
    }
    public function visimisi()
    {
        return view('visi&misi')->with([
            'title' => 'Visi & Misi'
        ]);
    }
    public function struktur_organisasi()
    {
        return view('struktur_organisasi')->with([
            'title' => 'Struktur Organisasi'
        ]);
    }
}
