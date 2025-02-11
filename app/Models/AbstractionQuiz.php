<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbstractionQuiz extends Model
{
    use HasFactory;

    protected $table = 'abstraction_quizzes';

    protected $fillable = [
        'question', 
        'a', 
        'b', 
        'c', 
        'd', 
        'correct', 
        'explanation',
        'code',
    ];

    public $timestamps = true;
}
