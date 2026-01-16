<?php
 namespace app\controllers;

 use app\models\Categorie;
 use config\database;
 
class CategoriesController{
      private $category;

    public function showCate()
    {    
        $this->category = new Categorie();
        return $this->category->getAllWithVehicules();
    }

   }

  $cate = new CategoriesController();
  $show = $cate->showCate();

  print_r($show);



?>