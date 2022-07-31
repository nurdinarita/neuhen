<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('death_certificate', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kk');
            $table->string('nama_kepala_keluarga');
            $table->string('nama_jenazah');
            $table->string('jenis_kelamin_jenazah');
            $table->string('tempat_kelahiran');
            $table->date('tanggal_kelahiran');
            $table->string('agama_jenazah');
            $table->string('alamat_jenazah');
            $table->string('desa_jenazah');
            $table->string('kecamatan_jenazah');
            $table->string('kab_jenazah');
            $table->string('prov_jenazah');
            $table->string('anak_ke');
            $table->datetime('tanggal_kematian');
            $table->string('sebab_kematian');
            $table->string('tempat_kematian');
            $table->string('yang_menerangkan');
            
            $table->string('nik_ayah');
            $table->string('nama_lengkap_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('alamat_ayah');
            $table->string('desa_ayah');
            $table->string('kecamatan_ayah');
            $table->string('kab_ayah');
            $table->string('prov_ayah');
            
            $table->string('nik_ibu');
            $table->string('nama_lengkap_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('alamat_ibu');
            $table->string('desa_ibu');
            $table->string('kecamatan_ibu');
            $table->string('kab_ibu');
            $table->string('prov_ibu');
            
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
        Schema::dropIfExists('death_certificate');
    }
}
