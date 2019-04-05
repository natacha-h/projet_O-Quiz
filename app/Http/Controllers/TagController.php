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
}
