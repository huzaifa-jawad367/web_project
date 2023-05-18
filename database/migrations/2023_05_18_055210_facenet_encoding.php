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
        Schema::table('report', function (Blueprint $table) {
            $table->string('facenet_encode')->nullable();
        });
        Schema::table('missing', function (Blueprint $table) {
            $table->string('facenet_encode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report', function (Blueprint $table) {
            $table->dropColumn('facenet_encode');
        });
        Schema::table('missing', function (Blueprint $table) {
            $table->dropColumn('facenet_encode');
        });
    }
};
