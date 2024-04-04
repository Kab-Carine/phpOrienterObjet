<?php
require_once "Modeles/CategorieModel.php";
require_once "Controllers/NavController.php";
abstract class NavController{
  public function afficherNav(){
    $categories = CategorieModel::getCategories();
    
     include 'Views/header.php';
  }
}