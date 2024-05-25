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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('id_servis');
            $table->string('judul');
            $table->text('konten');
            $table->string('gambar');
            $table->string('keterangan_gambar')->nullable();
            $table->string('inisial_penerbit')->nullable();
            $table->date('tanggal');
            $table->integer('jumlah_tampilan')->nullable();
            $table->enum('berita_hangat', ['0', '1']);
            $table->enum('status', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
