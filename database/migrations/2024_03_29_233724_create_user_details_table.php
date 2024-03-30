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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                -> constrained() -> cascadeOnDelete() -> cascadeOnUpdate();
            $table->string('nci') -> unique();
            $table->date('date_de_naissance');
            $table->string('genre') -> nullable();
            $table->string('tel');
            $table->string('adresse');
            $table->string('langues')->nullable();
            $table->string('competences') -> nullable();
            $table->string('habilitations') -> nullable();
            $table->integer('evaluations')->nullable();
            $table->string('affectation')->nullable();
            $table->string('emploi')->nullable();
            $table->integer('remuneration')->nullable();
            $table->string('document_cv');
            $table->string('document_demande_prem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
