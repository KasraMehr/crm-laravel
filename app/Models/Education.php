<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'teacher_education';
    protected $primarykey = 'id';
    protected $fillable = [
        
        //education
        'education_type',
        'first_degree',
        'degree_info1',
        'second_degree',
        'degree_info2',
        'third_degree',
        'degree_info3',
        'first_course',
        'course_info1',
        'second_course',
        'course_info2',
        'third_course',
        'course_info3',
        'first_language',
        'language_info1',
        'second_language',
        'language_info2',
        'english_degree',
        'score_date',
        'other_language_degree',
        'degree_topic',
        'teaching_institute',
        'receive_date',
        'validity_duration',
        'univercity_teacher',
        'univercity_name',
        'univercity_topics'
    ];
    use HasFactory;
}
