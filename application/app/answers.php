<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    // Mass Assignment
    protected $fillable = [
        'answer', 'score'
    ];
}
