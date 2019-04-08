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
// on contraint le contenu attendu pour la partie dynamique "id"
// après le ":", c'est une expression régulière
// [0-9] = caractère de 0 à 9
// + = au moins une fois
// pour plus de détail sur les expressions régulières => https://regex101.com/
$router->get('/quiz/{id:[0-9]+}', [ 
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

// la route pour se déconnecter
$router->get('/logout', [
    'as' => 'deconnexion',
    'uses' => 'UserController@logout'
    ]
);

// la route pour afficher la page profil du user
$router->get ('/account', [
    'as' => 'profil',
    'uses' => 'UserController@profile'
]);

// la route pour visualiser tous les sujets
$router->get('/tags', [
    'as' => 'sujet',
    'uses' => 'TagController@tags'
]);

// la route pour afficher les quiz par sujet
$router->get ('/tags/{id:[0-9]+}/quiz', [
    'as' => 'quiz-par-sujet',
    'uses' => 'TagController@quiz'
]);
