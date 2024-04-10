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
        Schema::create('profil', function (Blueprint $table) {
            $table->integer('id_profil')->autoIncrement();
            $table->string('nama_profil');
            $table->integer('id_admin');
            $table->string('deskripsi_profil');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('lokasi');
            $table->string('url_wa');
            $table->string('url_fb');
            $table->string('url_ig');
            $table->string('website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
