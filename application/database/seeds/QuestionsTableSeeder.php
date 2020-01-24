<?php

use App\Questions;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Wat is je favoriete dag in de week?',
                'description' => 'Geurts',
            ],
            [
                'question' => 'Wat is je favoriete vervoersmiddel?',
                'description' => 'Geurts',
            ],
            [
                'question' => 'Wat is je motto?',
                'description' => 'Geurts',
            ],
            [
                'question' => 'Waarvan had je meer willen doen dit jaar?',
                'description' => 'Geurts',
            ],
        ];

        foreach ($questions as $student) {
            Questions::create(array(
                'question' => $student['question'],
                'description' => $student['description'],
            ));
        }
    }
}
