<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Contact extends Model
{
    protected $table = 'teacher_work_and_contact';
    protected $primarykey = 'id';
    protected $fillable = [

        //work with center
        'working_time',
        'max_work_time',
        'working_type',

        //contact information
        'country',
        'state',
        'town',
        'address',
        'postal_code',
        'phone_number',
        'mobile_number',
        'email'
    ];
    use HasFactory;
}
