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
        Schema::create('comend', function (Blueprint $table) {
            $table->integer('id_comend')->autoIncrement();
            $table->integer('id_admin');
            $table->string('nama_comend');
            $table->string('email');
            $table->string('message');
            $table->date('tgl_message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comend');
    }
};
