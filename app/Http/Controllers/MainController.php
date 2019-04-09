<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

class MainController extends Controller
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

    // méthode pour la route 'home'
    public function home()
    {
        // je récupère les quiz en DB
        $quizList = Quiz::all();
        // dump($quizList);
        // exit;
        
        // afficher les titres des quiz sur la home
        return $this->show('home', [
            'quizList' => $quizList
        ]);
    }
}
