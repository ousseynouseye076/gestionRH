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
        Schema::create('professional_infos', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('competence')->nullable();
            $table->string('experience')->nullable();
            $table->string('other')->nullable();
            $table->string('languages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_infos');
    }
};
