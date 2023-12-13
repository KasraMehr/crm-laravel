<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_Works extends Model
{
    protected $table = 'courses_works';
    protected $primarykey = 'id';
    protected $fillable = [

        'first_course1',
        'course1_info',
        'second_course2',
        'course2_info',
        'third_course3',
        'course3_info',
        'fourth_course4',
        'course4_info',
        'fivth_course5',
        'course5_info',
        'sixth_course6',
        'course6_info',
        'seventh_course7',
        'course7_info',

        //work records
        'first_work',
        'work_info1',
        'second_work',
        'work_info2',
        'third_work',
        'work_info3',
        'fourth_work',
        'work_info4',

        //project records
        'first_project',
        'project_info1',
        'second_project',
        'project_info2',
        'third_project',
        'project_info3',
        'fourth_project',
        'project_info4',
        'fivth_project',
        'project_info5'
    ];
    use HasFactory;
}
