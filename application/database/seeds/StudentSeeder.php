<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'first_name' => 'Ken',
                'last_name' => 'Geurts',
                'email' => 'KenGeurts@teleworm.us',
            ],
            [
                'first_name' => 'Ganesh',
                'last_name' => 'Ponsen',
                'email' => 'GaneshPonsen@dayrep.com',
            ],
            [
                'first_name' => 'Saeed',
                'last_name' => 'Velema',
                'email' => 'SaeedVelema@armyspy.com',
            ],
            [
                'first_name' => 'Chyenne',
                'last_name' => 'van Wijhe',
                'email' => 'ChyennevanWijhe@teleworm.us',
            ],
            [
                'first_name' => 'Birsen',
                'last_name' => 'Oosting',
                'email' => 'BirsenOosting@teleworm.us',
            ],
        ];

        foreach ($students as $student) {
            Student::create(array(
                'first_name' => $student['first_name'],
                'last_name' => $student['last_name'],
                'email' => $student['email'],
            ));
        }
    }
}
