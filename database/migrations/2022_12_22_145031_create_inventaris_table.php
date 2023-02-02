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
            $table->string('id_bagian');
            $table->year('th_pembelian')->nullable();
            $table->string('memory')->nullable();
            $table->string('cpu')->nullable();
            $table->string('kode')->nullable();
            $table->string('merk')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('posisi')->nullable();
            $table->string('size_monitor')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
};
