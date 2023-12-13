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
        Schema::create('teacher_education', function (Blueprint $table) {
            $table->id();

            //education
            $table->string('education_type');
            $table->string('first_degree');
            $table->string('degree_info1')->default(null);
            $table->string('second_degree')->default(null);
            $table->string('degree_info2')->default(null);
            $table->string('third_degree')->default(null);
            $table->string('degree_info3')->default(null);
            $table->string('first_course')->default(null);
            $table->string('course_info1')->default(null);
            $table->string('second_course')->default(null);
            $table->string('course_info2')->default(null);
            $table->string('third_course')->default(null);
            $table->string('course_info3')->default(null);
            $table->string('first_language');
            $table->string('language_info1')->default(null);
            $table->string('second_language')->default(null);
            $table->string('language_info2')->default(null);
            $table->string('english_degree');
            $table->string('score_date')->default(null);
            $table->string('other_language_degree');
            $table->string('degree_topic')->default(null);
            $table->string('teaching_institute')->defaul(null);
            $table->string('receive_date')->default(null);
            $table->string('validity_duration')->default(null);
            $table->string('univercity_teacher')->default(null);
            $table->string('univercity_name')->default(null);
            $table->string('univercity_topics')->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_education');
    }
};
