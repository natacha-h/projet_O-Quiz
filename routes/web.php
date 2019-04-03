<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@home'
    ]
);

$router->get('quiz/[i:id]', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz'
]
);

$router->post('quiz/[i:id]', [
    'as' => 'quiz-post',
    'uses' => 'QuizController@quizPost'
]
);

