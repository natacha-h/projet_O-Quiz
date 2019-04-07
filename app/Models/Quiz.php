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

    /**
     * get all related tags
     */
    public function tags()
    {

        // Ici, on définit une relation Many to Many
        // => belongsToMany
        // => 1er argument : le FQCN du Model à lier
        // => 2e argument : le nom de la table pivot
        // => 3e argument : la clé étrangère permettant la "jointure" vers le Model (la table) actuel
        // => 4e argument : la clé étrangère permettant la "jointure" vers l'autre Model (l'autre table)
        return $this->belongsToMany('App\Models\Tag','quizzes_has_tags', 'quizzes_id', 'tags_id');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'app_users_id');
    }
}