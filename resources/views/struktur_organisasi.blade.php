@extends('layout.main')

@section('container')
<div class="container">
    <div class="row mt-3 text-center">
        <h2>{{ $title }}</h2>
        <hr>
    </div>
    <div class="row mt-3">
        <h4>TAHUN {{ isset($struktur) ? $struktur->year : '' }}</h4>
    </div>
    <div class="row mt-3">
        <img src="{{ isset($struktur) ? asset('storage/organizations-image/'.$struktur->image) : '' }}">
    </div>
</div>
@endsection