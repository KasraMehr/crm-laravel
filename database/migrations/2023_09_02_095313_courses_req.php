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
        Schema::create('courses_req', function (Blueprint $table) {
            $table->id();


            //ability to take courses
            $table->string('first_course_topic')->default(null);
            $table->string('corse_info1')->default(null);
            $table->string('second_course_topic')->default(null);
            $table->string('corse_info2')->default(null);
            $table->string('third_course_topic')->default(null);
            $table->string('corse_info3')->default(null);
            $table->string('fourth_course_topic')->default(null);
            $table->string('corse_info4')->default(null);

            //course requirements
            $table->string('tools_needed')->default(null);
            $table->string('helping_tools')->default(null);
            $table->string('course_type');
            $table->string('course_days');
            $table->string('course_hour');
            $table->string('your_course_time')->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_req');
    }
};
