<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Tag;
use App\Models\User;

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

        // on récupère l'id du quiz et on le convertit en int
        $id = intval($id);
        //dump($id); exit;
        // récupérer les infos du quiz
        $currentQuiz = Quiz::find($id);
        //dump($currentQuiz); exit;

        // On récupère l'id du user qui a créé le quiz
        $userId= $currentQuiz->app_users_id;

        // on récupère le Model pour la table app_users
        $author = User::find($userId);
        
        // on test que l'id existe en DB
        // => find return "null" s'il ne trouve pas la ligne
        if (!empty($currentQuiz)) {

        
        // récupérer les questions du quiz concerné
        $questions=Quiz::find($id)->questions;
        //dump($questions); exit;

        /* 
        *********** Solution sans relationship, en utilisant le query builder **************
       
        $questiontList = Question::where('quizzes_id', $id)->get();

        /!\ ne pas oublier la méthode get() à la fin car c'est un query builder. Si on oublie le get() on aura rien à la fin
        */

        // récupérer les réponses de chaque question
        $answersList = [];
        foreach($questions as $currentQuestion){
            $question = Question::find($currentQuestion->id);
            $answersList [$currentQuestion->id]= $question->answer;
        }
        /*
        // récupérer les tags du quiz
        $tagList = [];
        foreach ($currentQuiz->tags as $tag) {
            $tagList[]= $tag->name; 
        }
        */

        // dump($tagList);
        // exit;
        //dump($tags); exit;
        //dump($answersList); exit;
        // afficher les questions sur la page du quiz


            return view('quizConsult', [
                'currentQuiz' => $currentQuiz,
                //'author' => $author,
                'questions' => $questions,
                //'answers' => $answersList,
                //'taglist' => $tagList
            ]);
        } else {
            // on lance NotDoundHttpException afin d'afficher la page 404
            abort(404);
        }
        
    }

    public function quizPost(){
        // envoyer en DB l'ID du quiz à afficher
    }
}
