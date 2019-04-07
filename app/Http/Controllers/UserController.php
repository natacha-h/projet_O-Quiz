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
        return view('signup', [
            'inputValues' => [
                'firstname' =>'',
                'lastname' => '',
                'email' => ''
                ]
        ]);
    }

    public function signupPost()
    {

        // on crée un tableau d'erreurs
        $error = [];
        //On vérifie que $_POST n'est pas vide
        if (!empty($_POST)){
            // si le formulaire n'est pas vide, on vérifie que chaque champ est rempli

            // si le prénom est rempli, on le stocke dans $firstName, sinon on ajoute une ligne dans le tableau d'erreur 
            $firstName = (!empty($_POST['firstname'])) ? trim($_POST['firstname']): $error[]= 'Merci d\'indiquer votre prénom';
            //dump($firstName);

            // si le nom est rempli, on le stocke dans $lastName, sinon on ajoute une ligne dans le tableau d'erreur 
            $lastName = (!empty($_POST['lastname'])) ? trim($_POST['lastname']): $error[]= 'Merci d\'indiquer votre nom';
            //dump($lastName);

            // si l'email est rempli
            if(!empty($_POST['email'])){
                //on vérifie que l'email est bien un email
                // si oui
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    // on vérifie que l'email n'est pas déjà en BD
                    $checkEmailList = User::all();
                    // dump($checkEmailList);
                    // exit;
                    foreach($checkEmailList as $registeredEmail){
                        // si l'email est déjà en BD
                        if ($_POST['email'] == $registeredEmail->email){
                            // on ajoute l'erreur dans le tableau d'erreur
                            $error[]= 'L\'adresse existe déjà avec l\'id '. $registeredEmail->id;
                        } 
                        // sinon
                        else {
                            // on stocke l'email dans $emailAddress
                            $emailAddress = trim($_POST['email']);
                        }
                    }
                } 
                // si l'email n'est pas au bon format
                else {
                    // on ajoute l'erreur au tableau d'erreur
                    $error[]= 'Merci d\'indiquer une adresse e-mail valide';
                    $emailAddress='';
                }
            } // sinon si l'e-mail est vide
            else {
                $error[]= 'Merci d\'indiquer une adresse e-mail valide';
                $emailAddress = '';
            }
            //dump($emailAddress);

            // si password et password vérif sont remplis
            if ((!empty($_POST['password'])) && (!empty($_POST['password_verif']))){
                //on vérifie que le password est bien 2 fois le même
                if ($_POST['password'] == ($_POST['password_verif'])){
                    // si oui
                    // on le crypte
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } 
                // si non
                else {
                    // on stocke l'erreur dans le tableau d'erreurs
                    $error[]= 'Le mot de passe ne correspond pas';
                }
            } // si le champ est vide
            else {
                // on l'ajoute en erreur
                $error[]= 'Merci de renseigner un mot de passe';
                $password = '';
            }
            //dump($password);
  
        }
        // On vérifie si il $error est vide
        if (count($error) == 0) {
            // on ajoute l'utilisateur en BD
            $newUser = new User;
            $newUser->firstname = $firstName;
            $newUser->lastname = $lastName;
            $newUser->email = $emailAddress;
            $newUser->password = $password;
    
            $newUser->save();

            // et on renvoie à la page de connexion
            return redirect()->route('connexion');
        }
        // si il y a des erreurs
        else {
            // on les affiche dans le formulaire
            return view('signup', [
                'errorList' => $error,
                'inputValues' => [
                    'firstname' => $firstName,
                    'lastname' => $lastName,
                    'email' => $emailAddress
                ]
            ]);

        }





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
