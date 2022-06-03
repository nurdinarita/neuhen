<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrantsInOneVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrants_in_one_village', function (Blueprint $table) {
            $table->id();
            $table->string('status_kk');
            $table->string('nama_kepala_keluarga');
            $table->string('alamat');
            $table->string('dusun');
            $table->string('gampong');
            $table->string('kecamatan');
            $table->string('kabupaten')->default('Aceh Besar');
            $table->string('provinsi')->default('Aceh');
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
        Schema::dropIfExists('migrants_in_one_village');
    }
}
