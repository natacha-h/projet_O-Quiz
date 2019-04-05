<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
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

    public function signup()
    {
        return view('signup');
    }

    public function signupPost()
    {
        //On vérifie que $_POST n'est pas vide
        if (!empty($_POST)){
        //     // si le formulaire n'est pas vide, on vérifie que chaque champ n'est pas vide
            $firstName = (!empty($_POST['firstname'])) ? trim($_POST['firstname']): '';
            //dump($firstName);
            $lastName = (!empty($_POST['lastname'])) ? trim($_POST['lastname']): '';
            //dump($lastName);
            if(!empty($_POST['email'])){
                //on vérifie que l'email est bien un email
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    // on vérifie que l'email n'est pas déjà en BD
                    $checkEmailList = User::all();
                    // dump($checkEmailList);
                    // exit;
                    foreach($checkEmailList as $registeredEmail){
                        if ($_POST['email'] == $registeredEmail->email){
                            echo 'L\'adresse existe déjà avec l\'id '. $registeredEmail->id;
                        } else {
                            $emailAddress = trim($_POST['email']);
                        }
                    }
                }
            }
            //dump($emailAddress);
            if ((!empty($_POST['password'])) && (!empty($_POST['password_verif']))){
                if ($_POST['password'] == ($_POST['password_verif'])){
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } else {
                    echo 'Il y a une erreur sur le password';
                }
            }
            //dump($password);
  
        }
        $newUser = new User;
        $newUser->firstname = $firstName;
        $newUser->lastname = $lastName;
        $newUser->email = $emailAddress;
        $newUser->password = $password;

        //$newUser->save();


        return view('signup');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signinPost()
    {
        //
    }
}
