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
        Schema::create('pos_pendakian', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('luas_pos');
            $table->boolean('is_warung');
            $table->boolean('is_toilet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_pendakian');
    }
};
