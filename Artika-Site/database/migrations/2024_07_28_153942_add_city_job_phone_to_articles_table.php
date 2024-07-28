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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('city')->after('description'); // Ville de l'artisan
            $table->string('job')->after('city'); // Métier de l'artisan
            $table->string('phone')->after('job'); // Numéro de téléphone de l'artisan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('job');
            $table->dropColumn('phone');
        });
    }
};
