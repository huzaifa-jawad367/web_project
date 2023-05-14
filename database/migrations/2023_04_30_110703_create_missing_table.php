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
        Schema::create('missing', function (Blueprint $table) {
            $table->id('missing_id');
            $table->string('missing_type');
            $table->string('name');
            $table->tinyInteger('age')->unsigned();
            $table->enum('gender', ["male","female","other"]);
            $table->date('date_of_birth');
            $table->string('birth_address');
            $table->string('missing_address');
            $table->date('missing_time');
            $table->integer('height_when_missing');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('appearance');
            $table->string('family_information');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missing');
    }
};
