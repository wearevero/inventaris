<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("status", function (Blueprint $table) {
            $table->id();
            $table->string("nama_status");
            $table->string("slug");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("status");
    }
};
