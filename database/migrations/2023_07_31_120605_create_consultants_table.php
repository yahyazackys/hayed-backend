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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('nama_asli');
            $table->string('nama_gelar');
            $table->string('pekerjaan');
            $table->string('no_hp')->nullable();
            $table->string('email')->unique();
            $table->text('keterangan');
            $table->string('gambar_bg');
            $table->string('gambar_nonbg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
