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

    // méthode pour indiquer à Question qu'il appartient à un seul quiz
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz', 'quizzes_id');
    }

    // méthode pour indiquer à Question qu'il a plusieurs réponses
    public function answer()
    {
        return $this->hasMany('App\Models\Answer', 'questions_id');
    }

    // méthode pour indiquer à Question qu'il appartient à un seul level
    public function level()
    {
        return $this->belongsTo('App\Models\Level', 'levels_id');
    }

}