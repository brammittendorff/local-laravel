<?php

namespace App;

use App\User;
use App\Answers;
use Illuminate\Database\Eloquent\Model;

class StudentAnswers extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function answers()
    {
        return $this->hasMany('App\Answers');
    }
}
