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
            $table->string('nama_user', 100);
            $table->foreignId('bagian_id');
            $table->integer('th_pembelian', 4)->default( date('Y', strtotime(now())) );
            $table->string('memory', 15)->default(0);
            $table->string('cpu', 100)->default('-');
            $table->string('kode', 10)->default('-');
            $table->string('merk', 100)->default('-');
            $table->string('keterangan', 250)->default('-');
            $table->string('posisi');
            $table->string('size_monitor', 10)->default('-');
            $table->foreignId('kategori_id');
            $table->foreignId('status_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
};
