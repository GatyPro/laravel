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
        Schema::create('scrum_masters', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_scrumMaster');
            $table->string('certificacion_scrumMaster');
            $table->integer('contacto_scrumMaster');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrum_masters');
    }
};