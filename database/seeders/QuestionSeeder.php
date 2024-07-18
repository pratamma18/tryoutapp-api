<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'no_soal' => 2,
                'soal' => 'Salah satu partai yang merupakan gerakan nasionalisme pada masa perjuangan kemerdekaan. Partai ini didirikan pada tahun ....',
                'options' => [
                    ['inisial' => 'A', 'jawaban' => '1927', 'iscorrect' => true, 'nilai' => 5],
                    ['inisial' => 'B', 'jawaban' => '1922', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'C', 'jawaban' => '1912', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'D', 'jawaban' => '1914', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'E', 'jawaban' => '1921', 'iscorrect' => false, 'nilai' => 0],
                ]
            ],
            [
                'no_soal' => 3,
                'soal' => 'Nasionalisme atau semangat kebangsaan merupakan cerminan dari sila Pancasila yang ....&nbsp;',
                'options' => [
                    ['inisial' => 'A', 'jawaban' => 'pertama', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'B', 'jawaban' => 'kedua', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'C', 'jawaban' => 'ketiga', 'iscorrect' => true, 'nilai' => 5],
                    ['inisial' => 'D', 'jawaban' => 'keempat', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'E', 'jawaban' => 'kelima', 'iscorrect' => false, 'nilai' => 0],
                ]
            ],
            [
                'no_soal' => 4,
                'soal' => 'Berikut ini yang termasuk dalam faktor pendorong nasionalisme dari luar Indonesia pada awal pergerakan nasional, kecuali ....',
                'options' => [
                    ['inisial' => 'A', 'jawaban' => 'kemenangan jepang atas rusia', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'B', 'jawaban' => 'kebangkitan nasionalisme asia afrika', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'C', 'jawaban' => 'adanya kelompok masyarakat berpendidikan tinggi', 'iscorrect' => true, 'nilai' => 5],
                    ['inisial' => 'D', 'jawaban' => 'timbulnya paham baru nasionalisme', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'E', 'jawaban' => 'lahirnya ideologi baru', 'iscorrect' => false, 'nilai' => 0],
                ]
            ],
            [
                'no_soal' => 5,
                'soal' => 'Era globalisasi saat ini membawa perubahan besar dalam berbagai aspek kehidupan berbangsa dan bernegara. ...',
                'options' => [
                    ['inisial' => 'A', 'jawaban' => 'Lebih memilih produk luar negeri karena gengsi daripada produk lokal', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'B', 'jawaban' => 'Menganggap Bahasa Indonesia lebih rendah daripada bahasa asing', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'C', 'jawaban' => 'Selalu mengikuti trend luar negeri yang viral di media sosial', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'D', 'jawaban' => 'Menjadikan gaya hidup orang barat sebagai acuan', 'iscorrect' => false, 'nilai' => 0],
                    ['inisial' => 'E', 'jawaban' => 'Melestarikan kebudayaan lokal supaya tidak diklaim bangsa lain', 'iscorrect' => true, 'nilai' => 5],
                ]
            ],
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
