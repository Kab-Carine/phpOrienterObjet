<?php

session_start();

require_once 'Controllers/HomeController.php';
require_once 'Controllers/UserController.php';

// recuperer l'url
$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';

switch($url){
  case 'home' : 
    $controller = new HomeController();
    $controller ->afficherPageAcceuil();
    break;
  case "inscription":
    $controller = new UserController();
    $controller-> registerForm();
    break;
    case "register":// valide de l'inscription
      $controller = new UserController();
      $controller-> register();
      break;
    case "connexion":
        $controller = new UserController();
        $controller-> loginForm();
        break;
    case "login":
          $controller = new UserController();
          $controller-> login();
          break;
          case "logout": //permet de deconnecter le user
            $controller = new UserController();
            $controller-> logout();
            break;
    default:
        echo '404 not found !';

}
