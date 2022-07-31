<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrantsBeetwenCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrants_beetwen_counties', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kk');
            $table->string('nama_kepala_keluarga');
            $table->string('alamat');
            $table->string('dusun');
            $table->string('gampong');
            $table->string('kecamatan');
            $table->string('kabupaten')->default('Aceh Besar');
            $table->string('provinsi')->default('Aceh');
            $table->string('kode_pos');
            $table->string('no_telepon');
            $table->string('nik_pemohon');
            $table->string('nama_lengkap');
            $table->string('alasan_pindah');
            $table->string('alamat_tujuan_pindah');
            $table->string('desa_tujuan_pindah');
            $table->string('kec_tujuan_pindah');
            $table->string('kode_pos_tujuan_pindah');
            $table->string('status_kk_yang_tidak_pindah');
            $table->string('status_kk_yang_pindah');
            for($i=1; $i<=10; $i++){
                $table->string('nik_anggota_'.$i)->nullable();
                $table->string('nama_anggota_'.$i)->nullable();
            }
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
        Schema::dropIfExists('migrants_beetwen_counties');
    }
}
