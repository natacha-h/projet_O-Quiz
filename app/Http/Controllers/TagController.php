<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Tag;


class TagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // fonction pour afficher tous les sujets
    public function tags()
    {
        // récupérer tous les tags en DB
        $tagsList = Tag::all();

        return $this->show('subject', [
            'tags' => $tagsList
        ]);
    }

    // fonction pour afficher les quiz correspondants à un sujet
    public function quiz($id)
    {

        // récupérer tous les tags en DB
        $tagsList = Tag::all();
        // récupérer le tag actuel
        $currentTag = Tag::find($id);

        return $this->show('quizPerSubject', [
            'tags' =>$tagsList,
            'currentTag' => $currentTag
        ]);
    }
}
