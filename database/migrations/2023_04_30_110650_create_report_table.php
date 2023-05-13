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
        Schema::create('report', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('name');
            $table->integer('age');
            $table->enum('gender',["Male","Female","Other"]);
            $table->Date('date_of_birth');
            $table->text('address');
            $table->text('address_found');
            $table->text('appearance');
            $table->integer('height');
            $table->text('memory');
            $table->text('other_info');
            $table->string('image');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
