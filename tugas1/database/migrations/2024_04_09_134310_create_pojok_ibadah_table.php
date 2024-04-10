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
        Schema::create('pojok_ibadah', function (Blueprint $table) {
            $table->integer('id_pojok_ibadah')->autoIncrement();
            $table->string('gambar');
            $table->binary('video');
            $table->string('comment');
            $table->integer('id_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pojok_ibadah');
    }
};
