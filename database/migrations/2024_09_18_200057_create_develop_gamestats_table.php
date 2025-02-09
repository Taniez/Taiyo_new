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
        Schema::create('develop_gamestats', function (Blueprint $table) {
            $table->bigIncrements('iddevelop_gamestats');
            $table->foreignId('idgame')->constrained('games', 'idgames');
            $table->string("dowload_stat");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('develop_gamestats', function (Blueprint $table) {
            $table->dropSoftDeletes();
            });
    }
};
