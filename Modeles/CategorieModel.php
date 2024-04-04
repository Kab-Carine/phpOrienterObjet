<?php
 require_once "core/Connect.php";

 class CategorieModel{
  // retourne toutes les catégories
     public static function getCategories(){
      $db = Connect::dbConnect();
      // preparer la requet
      $request = $db->prepare("SELECT id_categorie, nom FROM categories");
      // executer la requette
      $request->execute();
      //recuperer le resultat dans un tableau
      $categories = $request->fetchAll();
      return $categories;
     }
 }