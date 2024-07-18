<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionOption;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'no_soal' => 1,
                'soal' => 'Rasa nasionalisme penting dimiliki oleh bangsa Indonesia dalam menghadapi pandemi covid-19. ...',
                'options' => [
                    ['inisial' => 'A', 'jawaban' => 'Menumbuhkan kesadaran ...', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'B', 'jawaban' => 'Meningkatkan kesadaran ...', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'C', 'jawaban' => 'Percaya terhadap isu-isu ...', 'iscorrect' => true, 'nilai' => 5],
                    ['inisial' => 'D', 'jawaban' => 'Memberikan bantuan ...', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'E', 'jawaban' => 'Membangun solidaritas ...', 'iscorrect' => false, 'nilai' => 0],
                ]
            ],
            // Tambahkan data soal lainnya di sini...
        ];

        foreach ($questions as $q) {
            $question = Question::create([
                'no_soal' => $q['no_soal'],
                'soal' => $q['soal'],
            ]);

            foreach ($q['options'] as $option) {
                QuestionOption::create([
                    'question_id' => $question->id,
                    'inisial' => $option['inisial'],
                    'jawaban' => $option['jawaban'],
                    'iscorrect' => $option['iscorrect'],
                    'nilai' => $option['nilai'],
                ]);
            }
        }
    }
}

