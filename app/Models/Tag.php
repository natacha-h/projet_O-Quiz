<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    /**
     * La table associée au modèle
     *
     * @var string
     */
    protected $table = 'tags';

    // méthode pour indiquer à Quiz qu'il a plusieurs questions
    public function quiz()
    {
        return $this->belongsToMany('App\Models\Quiz','quizzes_has_tags', 'tags_id','quizzes_id' );
    }

}