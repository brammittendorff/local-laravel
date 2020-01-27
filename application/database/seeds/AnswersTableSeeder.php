<?php

use App\Answers;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [
                'answer' => 'Maandag',
                'score' => 1,
                'questions_id' => 1,
            ],
            [
                'answer' => 'Dinsdag',
                'score' => 0,
                'questions_id' => 1,
            ],
            [
                'answer' => 'Woensdag',
                'score' => 0,
                'questions_id' => 1,
            ],
            [
                'answer' => 'Donderdag',
                'score' => 0,
                'questions_id' => 1,
            ],
        ];

        foreach ($answers as $answer) {
            Answers::create(array(
                'answer' => $answer['answer'],
                'score' => $answer['score'],
                'questions_id' => $answer['questions_id'],
            ));
        }
    }
}
