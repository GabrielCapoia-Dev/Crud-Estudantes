<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// salaId - Estudantes

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('estudantes', function (Blueprint $table) {
            $table->foreignId('sala_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('estudantes', function (Blueprint $table) {
            $table->dropForeign(['sala_id']);
            $table->dropColumn('sala_id');
        });
    }
};
