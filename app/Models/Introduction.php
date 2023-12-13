<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $table = 'introduction';
    protected $primarykey = 'id';
    protected $filable = [

        //method of introduction
        'introduction_type',
        'friend_name',
        'company_name',
        'exhibition',
        'journal_newspaper_web'
    ];
    use HasFactory;
}
