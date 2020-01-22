<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    // Mass Assignment
    protected $fillable = [
        'answer', 'score'
    ];
}
