<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
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

    public function quiz($id){

        //dump($id); exit;
        // récupérer les questions du quiz concerné
        $questions=Quiz::find($id)->questions;
        dump($questions); exit;
        
    }

    public function quizPost(){
        // envoyer en DB l'ID du quiz à afficher
    }
}
