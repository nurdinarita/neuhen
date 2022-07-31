@extends('layout.main')

@section('container')
<div class="container">
    <div class="row mt-3 text-center">
        <h2>Surat Keterangan Kelahiran</h2>
        <hr>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ url('/form/akte-kelahiran') }}" method="post">@csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nomor_kk">Nomor Kartu Keluarga</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="nomor_kk" placeholder="No Kartu Keluarga" name="nomor_kk">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_kepala_keluarga" id="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga">
                            </div>
                        </div>
                        <h5>Bayi/Anak</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_bayi">Nama</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_bayi" id="nama_bayi" placeholder="Nama Anak">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jenis_kelamin_bayi">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <select name="jenis_kelamin_bayi" id="jenis_kelamin_bayi" class="form-control" required>
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tempat_dilahirkan">Tempat Dilahirkan</label>
                            </div>
                            <div class="col-md-10">
                                <select name="tempat_dilahirkan" id="tempat_dilahirkan" class="form-control" required>
                                    <option value="">-- Tempat Dilahirkan --</option>
                                    <option value="RS/RB">RS/RB</option>
                                    <option value="Puskesmas">Puskesmas</option>
                                    <option value="Polindes">Polindes</option>
                                    <option value="Rumah">Rumah</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tempat_kelahiran">Tempat Kelahiran</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="tempat_kelahiran" id="tempat_kelahiran" class="form-control" placeholder="Tempat Kelahiran" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tanggal_kelahiran">Tanggal Kelahiran</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_kelahiran" id="tanggal_kelahiran" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jenis_kelahiran">Jenis Kelahiran</label>
                            </div>
                            <div class="col-md-10">
                                <select name="jenis_kelahiran" id="jenis_kelahiran" class="form-control" required>
                                    <option value="">-- Jenis Kelahiran --</option>
                                    <option value="Tunggal">Tunggal</option>
                                    <option value="Kembar 2">Kembar 2</option>
                                    <option value="Kembar 3">Kembar 3</option>
                                    <option value="Kembar 4">Kembar 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kelahiran_ke">Kelahiran Ke</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="kelahiran_ke" id="kelahiran_ke" class="form-control" placeholder="Kelahiran Ke (1, 2, 3, ...)" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="penolong_kelahiran">Penolong Kelahiran</label>
                            </div>
                            <div class="col-md-10">
                                <select name="penolong_kelahiran" id="penolong_kelahiran" class="form-control" required>
                                    <option value="">-- Penolong Kelahiran --</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Bidan/Perawat">Bidan/Perawat</option>
                                    <option value="Dukun">Dukun</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="berat_bayi">Berat Bayi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="berat_bayi" id="berat_bayi" class="form-control" placeholder="Berat Bayi (Kg)" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="panjang_bayi">Panjang Bayi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="panjang_bayi" id="panjang_bayi" class="form-control" placeholder="Panjang Bayi (cm)" required>
                            </div>
                        </div>
                        <h5>Ibu</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nik_ibu">Nik</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" placeholder="NIK Ibu" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap_ibu">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nama_lengkap_ibu" id="nama_lengkap_ibu" class="form-control" placeholder="Nama Lengkap Ibu" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_ibu">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_ibu">Desa/Kelurahan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_ibu" id="desa_ibu" class="form-control" placeholder="Desa/Kelurahan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan_ibu">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kecamatan_ibu" id="kecamatan_ibu" class="form-control" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kab_ibu">Kab/Kota</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kab_ibu" id="kab_ibu" class="form-control" placeholder="Kab/Kota" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="prov_ibu">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="prov_ibu" id="prov_ibu" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
                            </div>
                            <div class="col-md-10">
                                <select name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control" required>
                                    <option value="">-- Kewarganegaraan --</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kebangsaan_ibu">Kebangsaan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kebangsaan_ibu" id="kebangsaan_ibu" class="form-control" placeholder="Kebangsaan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tanggal_perkawinan">Tanggal Pencatatan Perkawinan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_perkawinan" id="tanggal_perkawinan" class="form-control" placeholder="Kebangsaan" required>
                            </div>
                        </div>

                        <h5>Ayah</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nik_ayah">Nik</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" placeholder="NIK ayah" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap_ayah">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nama_lengkap_ayah" id="nama_lengkap_ayah" class="form-control" placeholder="Nama Lengkap ayah" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_ayah">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_ayah">Desa/Kelurahan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_ayah" id="desa_ayah" class="form-control" placeholder="Desa/Kelurahan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan_ayah">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kecamatan_ayah" id="kecamatan_ayah" class="form-control" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kab_ayah">Kab/Kota</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kab_ayah" id="kab_ayah" class="form-control" placeholder="Kab/Kota" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="prov_ayah">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="prov_ayah" id="prov_ayah" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kewarganegaraan_ayah">Kewarganegaraan</label>
                            </div>
                            <div class="col-md-10">
                                <select name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control" required>
                                    <option value="">-- Kewarganegaraan --</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kebangsaan_ayah">Kebangsaan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kebangsaan_ayah" id="kebangsaan_ayah" class="form-control" placeholder="Kebangsaan" required>
                            </div>
                        </div>

                        <h5>Pelapor</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nik_pelapor">Nik</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nik_pelapor" id="nik_pelapor" class="form-control" placeholder="NIK pelapor" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap_pelapor">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nama_lengkap_pelapor" id="nama_lengkap_pelapor" class="form-control" placeholder="Nama Lengkap pelapor" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="umur_pelapor">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="umur_pelapor" id="umur_pelapor" class="form-control" placeholder="Umur (Tahun)" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jenis_kelamin_pelapor">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <select name="jenis_kelamin_pelapor" id="jenis_kelamin_pelapor" class="form-control" required>
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_pelapor">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="alamat_pelapor" id="alamat_pelapor" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_pelapor">Desa/Kelurahan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_pelapor" id="desa_pelapor" class="form-control" placeholder="Desa/Kelurahan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan_pelapor">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kecamatan_pelapor" id="kecamatan_pelapor" class="form-control" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kab_pelapor">Kab/Kota</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kab_pelapor" id="kab_pelapor" class="form-control" placeholder="Kab/Kota" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="prov_pelapor">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="prov_pelapor" id="prov_pelapor" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>

                        <h5>Saksi 1</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nik_saksi_1">Nik</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nik_saksi_1" id="nik_saksi_1" class="form-control" placeholder="NIK saksi_1" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap_saksi_1">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nama_lengkap_saksi_1" id="nama_lengkap_saksi_1" class="form-control" placeholder="Nama Lengkap Saksi 1" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="umur_saksi_1">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="umur_saksi_1" id="umur_saksi_1" class="form-control" placeholder="Umur (Tahun)" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jenis_kelamin_saksi_1">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <select name="jenis_kelamin_saksi_1" id="jenis_kelamin_saksi_1" class="form-control" required>
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_saksi_1">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="alamat_saksi_1" id="alamat_saksi_1" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_saksi_1">Desa/Kelurahan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_saksi_1" id="desa_saksi_1" class="form-control" placeholder="Desa/Kelurahan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan_saksi_1">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kecamatan_saksi_1" id="kecamatan_saksi_1" class="form-control" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kab_saksi_1">Kab/Kota</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kab_saksi_1" id="kab_saksi_1" class="form-control" placeholder="Kab/Kota" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="prov_saksi_1">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="prov_saksi_1" id="prov_saksi_1" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>

                        <h5>Saksi 2</h5>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nik_saksi_2">Nik</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nik_saksi_2" id="nik_saksi_2" class="form-control" placeholder="NIK saksi_2" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="nama_lengkap_saksi_2">Nama Lengkap</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="nama_lengkap_saksi_2" id="nama_lengkap_saksi_2" class="form-control" placeholder="Nama Lengkap Saksi 1" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="umur_saksi_2">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" name="umur_saksi_2" id="umur_saksi_2" class="form-control" placeholder="Umur (Tahun)" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jenis_kelamin_saksi_2">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <select name="jenis_kelamin_saksi_2" id="jenis_kelamin_saksi_2" class="form-control" required>
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="alamat_saksi_2">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="alamat_saksi_2" id="alamat_saksi_2" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="desa_saksi_2">Desa/Kelurahan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="desa_saksi_2" id="desa_saksi_2" class="form-control" placeholder="Desa/Kelurahan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kecamatan_saksi_2">Kecamatan</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kecamatan_saksi_2" id="kecamatan_saksi_2" class="form-control" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="kab_saksi_2">Kab/Kota</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="kab_saksi_2" id="kab_saksi_2" class="form-control" placeholder="Kab/Kota" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="prov_saksi_2">Provinsi</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="prov_saksi_2" id="prov_saksi_2" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/formulir') }}" class="text-decoration-none">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection