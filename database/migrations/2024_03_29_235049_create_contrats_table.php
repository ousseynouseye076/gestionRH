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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['CDI', 'CDD', 'Prestation']);
            $table->date('debut');
            $table->date('fin') -> nullable();
            $table->string('document_contrat');
            $table->string('attestation_de_travail');
            $table->foreignId('user_id') -> constrained()
                ->cascadeOnUpdate()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
