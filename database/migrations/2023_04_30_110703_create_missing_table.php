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
            $table->id('ID');
            $table->string('missing_type');
            $table->string('name');
            $table->tinyInteger('age')->unsigned();
            $table->string('gender', 1);
            $table->date('date_of_birth');
            $table->string('birth_address');
            $table->string('missing_address');
            $table->date('missing_time');
            $table->tinyInteger('height_when_missing');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('feature_description');
            $table->string('family_information');
            $table->string('additional_instructions');
            $table->string('other_info');
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
