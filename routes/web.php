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

// la route de la home
$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@home'
    ]
);

// les routes en get et post pour afficher un quiz selon son id
$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz'
    ]
);
// en post pour envoyer l'info en DB
$router->post('/quiz/{id}', [
    'as' => 'quiz-post',
    'uses' => 'QuizController@quizPost'
    ]
);

// les routes en get et post pour accédeer à la page d'inscription
$router->get('/signup', [
    'as' => 'inscription',
    'uses' => 'UserController@signup'
    ]
);
// en post pour envoyer les données en DB
$router->post('/signup', [
    'as' => 'inscription-post',
    'uses' => 'UserController@signupPost'
    ]
);

// les routes en get et post pour accéder à la page de connexion
$router->get('/signin', [
    'as' => 'connexion',
    'uses' => 'UserController@signin'
    ]
);
// en post pour envoyer les infos de connexion
$router->post('/signin', [
    'as' => 'connexion',
    'uses' => 'UserController@signinPost'
    ]
);
