<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'question_id',
        'inisial',
        'jawaban',
        'iscorrect',
        'nilai',
    ];

    // Definisikan relasi ke model Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
