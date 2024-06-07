<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ques_vote extends Model
{
    protected $fillable = ['question_id', 'reponse'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
