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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            //teachers personnal information
            $table->string('name');
            $table->string('father_name');
            $table->string('birth_place');
            $table->string('hometown');
            $table->string('national_number');
            $table->string('birth_time');
            $table->string('nationality');
            $table->string('religion');
            $table->string('gender');
            $table->string('married');
            $table->string('military_service');
            $table->string('Reason_for_exemption')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_personal_information');
    }
};
