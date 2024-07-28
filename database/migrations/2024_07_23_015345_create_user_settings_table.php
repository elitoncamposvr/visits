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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('primary_color')->default('#000000');
            $table->string('secondary_color')->default('#000000');
            $table->string('tertiary_color')->default('#000000');
            $table->string('bg_color')->default('#000000');
            $table->string('primary_color_dark')->default('#000000');
            $table->string('secondary_color_dark')->default('#000000');
            $table->string('tertiary_color_dark')->default('#000000');
            $table->string('bg_color_dark')->default('#000000');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
