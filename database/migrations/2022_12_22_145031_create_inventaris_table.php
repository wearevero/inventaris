<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->foreignId('bagian_id')->nullable();
            $table->integer('th_pembelian')->nullable();
            $table->string('memory')->default('-');
            $table->string('cpu')->default('-');
            $table->string('kode')->default('-');
            $table->string('merk')->default('-');
            $table->string('keterangan')->nullable('-');
            $table->string('posisi')->nullable();
            $table->string('size_monitor')->default('-');
            $table->foreignId('kategori_id')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
};
