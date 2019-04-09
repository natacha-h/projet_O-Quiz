<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Utils\UserSession;

class Controller extends BaseController
{
   //Méthode show pour pouvoir plus facilement partager le connectedUSer avec toutes les vues
   public function show($viewName, $viewVars=[]){

      view()->share('connectedUser', UserSession::getUser());

      $header = view('layout.header', $viewVars);
      $view = view($viewName, $viewVars);
      $footer = view('layout.footer', $viewVars);

      return $header.$view.$footer;
   }
}
