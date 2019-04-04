<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Tag;

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
        // récupérer les infos du quiz
        $currentQuiz = Quiz::find($id);
        //dump($currentQuiz); exit;
        // récupérer les questions du quiz concerné
        $questions=Quiz::find($id)->questions;
        //dump($questions); exit;

        // récupérer les réponses de chaque question
        $answersList = [];
        foreach($questions as $currentQuestion){
            $question = Question::find($currentQuestion->id);
            $answersList [$currentQuestion->id]= $question->answer;
        }
        // récupérer les tags du quiz
        $tagList = [];
        foreach ($currentQuiz->tags as $tag) {
            $tagList[]= $tag->name; 
        }
        // dump($tagList);
        // exit;
        //dump($tags); exit;
        //dump($answersList); exit;
        // afficher les questions sur la page du quiz
        return view('quizConsult', [
            'currentQuiz' => $currentQuiz,
            'questions' => $questions,
            'answers' => $answersList,
            'taglist' => $tagList
        ]);
        
    }

    public function quizPost(){
        // envoyer en DB l'ID du quiz à afficher
    }
}
