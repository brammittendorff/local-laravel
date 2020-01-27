<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    // Mass Assignment
    protected $fillable = [
        'answer', 'score', 'question_id'
    ];

    public function studentAnswers()
    {
        return $this->belongsToMany('App\StudentAnswers');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Questions');
    }
}
