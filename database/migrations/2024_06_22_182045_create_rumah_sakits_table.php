<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rumah_sakit', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pasien')->unique();
            $table->string('nama_pasien', 25)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('JK',['L', 'P']);
            $table->text('Alamat');
            $table->string('keluhan_penyakit', 35)->nullable();
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumah_sakit');
    }
};
