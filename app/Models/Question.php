<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    /**
     * La table associée au modèle
     *
     * @var string
     */
    protected $table = 'questions';

    // méthode pour indiquer à Quiz qu'il a plusieurs questions
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz', 'quizzes_id');
    }

    public function answer()
    {
        return $this->hasMany('App\Models\Answer', 'questions_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level', 'levels_id');
    }

}