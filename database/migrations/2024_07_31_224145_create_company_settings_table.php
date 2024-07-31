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
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('tertiary_color');
            $table->string('bg_color');
            $table->string('primary_dark_color');
            $table->string('secondary_dark_color');
            $table->string('tertiary_dark_color');
            $table->string('bg_dark_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
