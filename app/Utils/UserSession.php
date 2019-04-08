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
        // l'utilisateur est considéré comme connecté si on a stocké un objet non vide pour l'index INDEX_USER de $_SESSION
        return (!empty($_SESSION[self::INDEX_USER]));
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

    /**
     * Méthode permettant de charger le Model User de l'utilisateur actuellement connecté
     */
    // appel = UserSession::getUser()
    public static function getUser(){
        if (self::isConnected()){
            return $_SESSION[self::INDEX_USER];
        } else {
            return false;
        }
    }
}