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
        Schema::create('burndown_charts', function (Blueprint $table) {
            $table->id();
            $table->string('datosSeguimiento_BurndownChart');
            $table->foreignId('productOwner_id')->references('id')->on('product_owners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burndown_charts');
    }
};