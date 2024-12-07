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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dosen')->unique(); // kode_dosen dengan panjang 3 karakter dan harus unik
            $table->string('nama_dosen'); // nama_dosen
            $table->string('nip')->unique(); // nip yang unik
            $table->string('email')->unique(); // email yang unik
            $table->string('no_telepon')->nullable();
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
        Schema::dropIfExists('dosens');
    }
};
