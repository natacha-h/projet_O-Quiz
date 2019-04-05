<?php

namespace App\Utils;

abstract class UserSession {

    // appel = UserSession::isConnected
    public static function isConnected()
    {

    }

    // appel = UserSession::connect($userModel)
    public static function connect(App\Models\User $userModel)
    {

    }

    // appel = UserSession::disconnect()
    public static function disconnect()
    {

    }

    // appel = UserSession::isAdmin()
    public static function isAdmin(){

    }
}