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
        Schema::create('courses_works', function (Blueprint $table) {
            $table->id();

            //course records
            $table->string('first_course1');
            $table->string('course1_info');
            $table->string('second_course2');
            $table->string('course2_info');
            $table->string('third_course3');
            $table->string('course3_info');
            $table->string('fourth_course4');
            $table->string('course4_info');
            $table->string('fivth_course5');
            $table->string('course5_info');
            $table->string('sixth_course6');
            $table->string('course6_info');
            $table->string('seventh_course7');
            $table->string('course7_info');

            //work records
            $table->string('first_work');
            $table->string('work_info1');
            $table->string('second_work');
            $table->string('work_info2');
            $table->string('third_work');
            $table->string('work_info3');
            $table->string('fourth_work');
            $table->string('work_info4');

            //project records
            $table->string('first_project');
            $table->string('project_info1');
            $table->string('second_project');
            $table->string('project_info2');
            $table->string('third_project');
            $table->string('project_info3');
            $table->string('fourth_project');
            $table->string('project_info4');
            $table->string('fivth_project');
            $table->string('project_info5');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_works');
    }
};
