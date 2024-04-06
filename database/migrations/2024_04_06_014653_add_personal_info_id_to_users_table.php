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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('personal_info_id')
                ->nullable()->after('password')
                ->constrained() ->onDelete('cascade');

            $table->foreignId('professional_info_id')
                ->nullable()->after('personal_info_id')
                ->constrained() ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['personal_info_id']);
            $table->dropForeign(['professional_info_id']);
            $table->dropColumn(['personal_info_id', 'professional_info_id']);
        });
    }
};
