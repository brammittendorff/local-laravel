<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    // Mass Assignment
    protected $fillable = [
        'question', 'description'
    ];
}
