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
        Schema::create('kaum_bapak', function (Blueprint $table) {
            $table->integer('id_kaum_bapak')->autoIncrement();
            $table->string('name');
            $table->string('deskripsi');
            $table->date('tgl');
            $table->integer('id_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaum_bapak');
    }
};
