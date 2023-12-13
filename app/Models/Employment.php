<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'teachers_employment';
    protected $primarykey = 'id';
    protected $fillable = [

        //teachers employment status
        'working',
        'govermental',
        'company_name',
        'insurance',
        'insurance_number',
        'insurance_serial_number',
        'place_of_employment',
        'employment_phone_number'
    ];
    use HasFactory;
}
