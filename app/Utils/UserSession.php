<?php

namespace App\Utils;
use App\Models\User;


abstract class UserSession {

    // on défini la constante contenant l'index du tableau de session
    // La constante de ne peut pas être modifiée => évite les erreurs
    const INDEX_USER = 'connectedUser';

    // appel = UserSession::isConnected
    public static function isConnected()
    {

    }

    // appel = UserSession::connect($userModel)
    public static function connect($userModel)
    {
        $_SESSION[self::INDEX_USER] = $userModel;
    }

    // appel = UserSession::disconnect()
    public static function disconnect()
    {

    }

    // appel = UserSession::isAdmin()
    public static function isAdmin(){

    }
}