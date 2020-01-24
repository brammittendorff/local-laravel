<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    // Mass Assignment
    protected $fillable = [
        'question', 'description'
    ];

    public function answers()
    {
        return $this->hasMany('App\Answers');
    }
}
