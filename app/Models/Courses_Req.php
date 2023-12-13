<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_Req extends Model
{
    protected $table = 'courses_req';
    protected $primarykey = 'id';
    protected $fillable = [

        //ability to take courses
        'first_course_topic',
        'corse_info1',
        'second_course_topic',
        'corse_info2',
        'third_course_topic',
        'corse_info3',
        'fourth_course_topic',
        'corse_info4',

        //course requirements
        'tools_needed',
        'helping_tools',
        'course_type',
        'course_days',
        'course_hour',
        'your_course_time'
    ];
    use HasFactory;
}
