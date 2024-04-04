<?php

require_once "Modeles/UserModel.php";
require_once "Controllers/NavController.php";
// affichage du formulaire d'incription
class UserController extends NavController{
    public function registerForm(){
      $this->afficherNav();
        include "Views/inscription.php";
    }

    public function register(){
      UserModel::register();
      if(isset($_POST['inscription'])){
        UserModel::register();
    }
  }

    // affichage du formulaire de connexion
     public function loginForm(){
      $this->afficherNav();
      include "Views/login.php";
     }

     public function login(){
      $user = UserModel::login();
      if(isset($_POST['login'])){
        $user = UserModel::login();
        if(empty($user)){
          echo "Cet email n'existe pas !";

        } else{
          if(password_verify($_POST['mdp'], $user['mdp'])){
            $_SESSION['user'] = $user;
            header("Location: ?url=home");
          }
        }
      }

     }
     // la fonction logout pour la deconnexion de l'utilisateur
     public function logout(){
      session_destroy();
      header("Location: ?url=home");
  }
}