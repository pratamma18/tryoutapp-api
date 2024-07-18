<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['no_soal', 'soal'];

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }
}

class QuestionOption extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'inisial', 'jawaban', 'iscorrect', 'nilai'];
}
