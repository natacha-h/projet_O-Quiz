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

    public function home()
    {
        $quizList = Quiz::all();
        // dump($quizList);
        // exit;
        // afficher les titres des quiz sur la home
        return view('home', [
            'quizList' => $quizList
        ]);
    }
}
