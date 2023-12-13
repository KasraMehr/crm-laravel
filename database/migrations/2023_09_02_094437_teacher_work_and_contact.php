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
        Schema::create('teacher_work_and_contact', function (Blueprint $table) {
            $table->id();

            //work with center
            $table->string('working_time');
            $table->string('max_work_time');
            $table->string('working_type');
            
            //contact information
            $table->string('country');
            $table->string('state');
            $table->string('town');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('email')->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_work_and_contact');
    }
};
