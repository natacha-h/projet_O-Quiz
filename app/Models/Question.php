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

}