<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    // Mass Assignment
    protected $fillable = [
        'question', 'description'
    ];
}
