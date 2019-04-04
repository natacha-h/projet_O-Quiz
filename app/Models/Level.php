<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    /**
     * La table associée au modèle
     *
     * @var string
     */
    protected $table = 'levels';

    // méthode pour indiquer à Quiz qu'il a plusieurs questions
    public function question()
    {
        return $this->hasMany('App\Models\Question', 'levels_id');
    }

    

}