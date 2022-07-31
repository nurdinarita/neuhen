<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_certificate', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kk');
            $table->string('nama_kepala_keluarga');
            $table->string('nama_bayi');
            $table->string('jenis_kelamin_bayi');
            $table->string('tempat_dilahirkan');
            $table->string('tempat_kelahiran');
            $table->date('tanggal_kelahiran');
            $table->string('jenis_kelahiran');
            $table->integer('kelahiran_ke');
            $table->string('penolong_kelahiran');
            $table->integer('berat_bayi');
            $table->integer('panjang_bayi');
        
            $table->string('nik_ibu');
            $table->string('nama_lengkap_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('alamat_ibu');
            $table->string('desa_ibu');
            $table->string('kecamatan_ibu');
            $table->string('kab_ibu');
            $table->string('prov_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('kebangsaan_ibu');
            $table->date('tanggal_perkawinan');

            $table->string('nik_ayah');
            $table->string('nama_lengkap_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('alamat_ayah');
            $table->string('desa_ayah');
            $table->string('kecamatan_ayah');
            $table->string('kab_ayah');
            $table->string('prov_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('kebangsaan_ayah');
            
            $table->string('nik_pelapor');
            $table->string('nama_lengkap_pelapor');
            $table->string('umur_pelapor');
            $table->string('jenis_kelamin_pelapor');
            $table->string('alamat_pelapor');
            $table->string('desa_pelapor');
            $table->string('kecamatan_pelapor');
            $table->string('kab_pelapor');
            $table->string('prov_pelapor');
            
            $table->string('nik_saksi_1');
            $table->string('nama_lengkap_saksi_1');
            $table->string('umur_saksi_1');
            $table->string('jenis_kelamin_saksi_1');
            $table->string('alamat_saksi_1');
            $table->string('desa_saksi_1');
            $table->string('kecamatan_saksi_1');
            $table->string('kab_saksi_1');
            $table->string('prov_saksi_1');
            
            $table->string('nik_saksi_2');
            $table->string('nama_lengkap_saksi_2');
            $table->string('umur_saksi_2');
            $table->string('jenis_kelamin_saksi_2');
            $table->string('alamat_saksi_2');
            $table->string('desa_saksi_2');
            $table->string('kecamatan_saksi_2');
            $table->string('kab_saksi_2');
            $table->string('prov_saksi_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birth_certificate');
    }
}
