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
        // dump($tagsList);
        // exit;

        return view('subject', [
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
        //dump($currentTag);
        // exit;
        // foreach($currentTag->quiz as $quiz){
        //     dump($quiz);
        // }
        // exit;
        // récupérer les quiz correspondant à l'id du tag
        //$quizList

        return view('quizPerSubject', [
            'tags' =>$tagsList,
            'currentTag' => $currentTag
        ]);
    }
}
