<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = true;

    public static function answersWhere($questionId){
        return Answer::where('question_id', $questionId)->join('users', 'users.id', "=", "user_id")->select('answers.*','users.name')->get();
    }
}
