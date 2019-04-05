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

    /**
     * propriété statique contenant les classes CSS par id
     *
     * @var array
     */
    private static $cssClasses = [
        1 => self::CSS_CLASS_BEGINNER,
        2 => self::CSS_CLASS_MEDIUM,
        3 => self::CSS_CLASS_EXPERT
    ];
    // on définit une constante pour chaque classe CSS possible
    const CSS_CLASS_BEGINNER = 'beginner';
    const CSS_CLASS_MEDIUM = 'medium';
    const CSS_CLASS_EXPERT = 'expert';


    /**
     * méthode récupérant toutes les questions correspondant à un level
     */
    public function question()
    {
        return $this->hasMany('App\Models\Question', 'levels_id');
    }
    // => en fait on avait pas besoin de cette méthode ici, il suffisait juste de faire la méthode level() dans le Model Question pour dire à Question qu'il belongs to Level

    /**
     * Méthode permettant de récupérer la classe CSS pour le niveau de difficulté
     */
    public function getCssClass()
    {
        // Si l'id de l'objet actuel existe comme clé dans le tableau des classes CSS
        if (array_key_exists($this->id, self::$cssClasses)) {
            // alors je retourne la classe
            return self::$cssClasses[$this->id];
        } else {
            return false;
        }
    }
    

}