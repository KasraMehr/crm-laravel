<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primarykey = 'id';
    protected $fillable = [
        
        //teachers personnal information
        'name',
        'father_name',
        'ID_number',
        'identity_serial_number',
        'birth_place',
        'hometown',
        'birth_time',
        'national_number',
        'nationality',
        'religion',
        'gender',
        'married',
        'military_service',
        'Reason_for_exemption'
    ];
    use HasFactory;
}
