<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chirps', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chirps');
    }
};
