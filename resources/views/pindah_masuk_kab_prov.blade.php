@extends('layout.main')

@section('container')
<div class="container">
    <div class="row mt-3 text-center">
        <h2>SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN<br>(<i>Antar Kabupaten / Provinsi</i>)</h2>
        <hr>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Data Daerah Asal</h5>
                    <form action="{{ url('/form/pindah-masuk-kab-prov') }}" method="post">@csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nomor_kk">Nomor Kartu Keluarga</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="nomor_kk" placeholder="No Kartu Keluarga" name="nomor_kk" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_kepala_keluarga" id="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <textarea rows="3" class="form-control" name="alamat" id="alamat" placeholder="Jln.Contoh Jalan" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="dusun">Dusun</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="dusun" id="dusun" placeholder="Dusun" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="gampong">Gampong</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="gampong" id="gampong" placeholder="Gampong" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kabupaten">Kabupaten</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="Aceh Besar" placeholder="Kabupaten" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="provinsi">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="provinsi" id="provinsi" value="Aceh" placeholder="Provinsi" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kode_pos">Kode Pos</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="kode_pos" id="kode_pos"  placeholder="Kode Pos" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="telepon">Telepon</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="no_telepon" id="telepon"  placeholder="Telepon" required>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-2">
                                <label for="nik_pemohon">NIK Pemohon</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nik_pemohon" id="nik_pemohon"  placeholder="NIK Pemohon" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"  placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <h5>Data Kepindahan</h5>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alasan_pindah">Alasan Pindah</label>
                            </div>
                            <div class="col-md-10">
                                <select name="alasan_pindah" id="alasan_pindah" class="form-control" required>
                                    <option value="">-- Alasan Pindah --</option>
                                    <option value="Pekerjaan">Pekerjaan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Perumahan">Perumahan</option>
                                    <option value="Keluarga">Keluarga</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_tujuan_pindah">Alamat Tujuan Pindah</label>
                            </div>
                            <div class="col-md-10">
                                <textarea rows="3" type="text" name="alamat_tujuan_pindah" id="alamat_tujuan_pindah" class="form-control" placeholder="Jln.Contoh Jalan" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_tujuan_pindah">Desa/Kelurahan/Gmpong</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_tujuan_pindah" id="desa_tujuan_pindah" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kec_tujuan_pindah">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kec_tujuan_pindah" id="kec_tujuan_pindah" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kode_pos_tujuan_pindah">Kode Pos</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kode_pos_tujuan_pindah" id="kode_pos_tujuan_pindah" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="status_kk_yang_tidak_pindah">Status KK Bagi Yang Tidak Pindah</label>
                            </div>
                            <div class="col-md-10">
                                <select name="status_kk_yang_tidak_pindah" id="status_kk_yang_tidak_pindah" class="form-control" required>
                                    <option value="">-- Status KK Bagi Yang Tidak Pindah --</option>
                                    <option value="Numpang KK">Numpang KK</option>
                                    <option value="Membuat KK Baru">Membuat KK Baru</option>
                                    <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="status_kk_yang_pindah">Status KK Bagi Yang Pindah</label>
                            </div>
                            <div class="col-md-10">
                                <select name="status_kk_yang_pindah" id="status_kk_yang_pindah" class="form-control" required>
                                    <option value="">-- Status KK Bagi Yang Pindah --</option>
                                    <option value="Numpang KK">Numpang KK</option>
                                    <option value="Membuat KK Baru">Membuat KK Baru</option>
                                    <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <h5>Data Keluarga Yang Pindah</h5>
                        </div>
                        @for($i = 1; $i <= 10; $i++)
                        <div class="row mb-2" style="{{ ($i > 1) ? 'border-top:1px solid grey; padding-top: 10px;' : ''}}">
                            <div class="col-md-2">
                                <label for="nik_anggota_{{ $i }}">{{ $i }}. NIK</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="nik_anggota_{{ $i }}" id="nik_anggota_{{ $i }}" placeholder="NIK">
                            </div>
                            <div class="col-md-2">
                                <label for="nama_anggota_{{ $i }}">Nama</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="nama_anggota_{{ $i }}" id="nama_anggota_{{ $i }}" placeholder="Nama">
                            </div>
                        </div>
                        @endfor
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/formulir') }}" class="text-decoration-none">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection