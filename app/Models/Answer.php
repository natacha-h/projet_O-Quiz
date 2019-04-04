<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model {
    /**
     * La table associée au modèle
     *
     * @var string
     */
    protected $table = 'answers';

    // méthode pour indiquer à Quiz qu'il a plusieurs questions
    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'questions_id');
    }


}