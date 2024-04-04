<?php
require_once "Modeles/CategorieModel.php";
require_once "Controllers/NavController.php";
class HomeController extends NavController{
  public function afficherPageAcceuil(){
      $categories = CategorieModel::getCategories();
      include 'Views/home.php';
  }
}