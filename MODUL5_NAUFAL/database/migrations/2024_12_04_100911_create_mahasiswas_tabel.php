<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique(); // nim mahasiswa, harus unik
            $table->string('nama_mahasiswa'); // nama mahasiswa
            $table->string('email')->unique(); // email mahasiswa, harus unik
            $table->string('jurusan'); // jurusan mahasiswa
            $table->unsignedBigInteger('kode_dosen'); 
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
        Schema::dropIfExists('mahasiswas');
    }
};
