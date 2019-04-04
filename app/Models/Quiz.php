<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {
    /**
     * La table associée au modèle
     *
     * @var string
     */
    protected $table = 'quizzes';

    // méthode pour indiquer à Quiz qu'il a plusieurs questions
    public function questions()
    {
        return $this->hasMany('App\Models\Question', 'quizzes_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','quizzes_has_tags', 'quizzes_id', 'tags_id');
    }
}