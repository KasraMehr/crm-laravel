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
        Schema::create('teachers_employment', function (Blueprint $table) {
            $table->id();

            //teachers employment status
            $table->string('working')->default(null);
            $table->string('govermental')->default(null);
            $table->string('company_name')->default(null);
            $table->string('insurance')->default(null);
            $table->string('insurance_number')->default(null);
            $table->string('insurance_serial_number')->default(null);
            $table->string('place_of_employment')->defaul(null);
            $table->string('employment_phone_number')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_employment');
    }
};