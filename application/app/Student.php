<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Mass Assignment
    protected $fillable = [
        'first_name', 'last_name', 'email'
    ];

    public function roles()
    {
        return $this->belongsToMany(Student::class, 'student_answers');
    }
}
