<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Tag;
use App\Models\User;
use App\Utils\UserSession;

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
        // récupérer les infos du quiz
        $currentQuiz = Quiz::find($id);

        // On récupère l'id du user qui a créé le quiz
        $userId= $currentQuiz->app_users_id;

        // on récupère le Model pour la table app_users
        $author = User::find($userId);
        
        // on test que l'id existe en DB
        // => find return "null" s'il ne trouve pas la ligne
        if (!empty($currentQuiz)) {

        
        // récupérer les questions du quiz concerné
        $questions=Quiz::find($id)->questions;

        /* *********** Solution sans relationship, en utilisant le query builder **************
       
        $questiontList = Question::where('quizzes_id', $id)->get();

        /!\ ne pas oublier la méthode get() à la fin car c'est un query builder. Si on oublie le get() on aura rien à la fin
        */

        // afficher les questions sur la page du quiz


            return $this->show('quizConsult', [
                'currentQuiz' => $currentQuiz,
                'questions' => $questions,
            ]);
        } else {
            // on lance NotFoundHttpException afin d'afficher la page 404
            abort(404);
        }
        
    }

    public function quizPost(Request $request, $id)
    {
        // récupérer l'id du quiz
        $quizId = intval($id);
        // récupérer les questions du quiz
        $quizQuestions = Quiz::find($id)->questions;
        // on initialise le compteur de bonne réponses à 0
        $correctAnswer = 0;
        // récupérer les réponses
        $answersList = [];
        // pour chaque input du formulaire on ajoute sa valeur dans une ligne du tableau de réponses
        foreach ($quizQuestions as $currentQuestion){
            $answer = $request->input('reponses'.$currentQuestion->id);
            $answersList[$currentQuestion->id] = $answer;
            // si l'id de la réponse  == l'id de la question
            if($answer == $currentQuestion->id){
                // on incrémente $correctAnswer de 1
                $correctAnswer++;
            }
        }

        //on affiche la page avec le résultat
        return $this->show('quizResult', [
            'currentQuiz' => Quiz::find($id),
            'questions' => $quizQuestions,
            'score' => $correctAnswer,
            'inputValues' => $answersList
        ]);
    }
}
