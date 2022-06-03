@extends('layout.main')

@section('style-sejarah')
    div.container div.row p{
        text-indent: 45px;
    }
@endsection

@section('container')
<div class="container">
    <div class="row mt-3 text-center">
        <h2>{{ $title }}</h2>
        <hr>
    </div>
    <div class="row mt-3">
        <div class="col-md">
            <ol>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN KURANG MAMPU.docx') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN KURANG MAMPU</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN USAHA.docx') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN USAHA</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN YATIM.docx') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN YATIM</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN PIATU.docx') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN PIATU</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN YATIM PIATU.docx') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN YATIM PIATU</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT SKCK.doc') }}"><i class="fa-solid fa-download"></i> SURAT SKCK</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/asset/file_formulir/SURAT KETERANGAN KEMATIAN.doc') }}"><i class="fa-solid fa-download"></i> SURAT KETERANGAN KEMATIAN</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/form/formulir-permohonan-pindah-wni-dalam-satu-gampong') }}">FORMULIR PERMOHONAN PINDAH WNI (<i>Dalam Satu Gampong</i>)</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/form/pindah-masuk-kab-kec') }}">SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (<i>Dalam Satu Kabupaten / Antar Kecamatan</i>)</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/form/pindah-masuk-kab-prov') }}">SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (<i>Dalam Antar Kabupaten / Antar Provinsi</i>)</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/form/pindah_masuk') }}">AKTE KELAHIRAN</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/form/pindah_masuk') }}">AKTE KEMATIAN</a>
                </li>
            </ol>
        </div>
    </div>

</div>
@endsection