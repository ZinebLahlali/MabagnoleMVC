<?php
 require __DIR__ . '/vendor/autoload.php';
 
use App\controllers\BaseController;
 $url = $_SERVER['REQUEST_URI'];
 $parts = explode('/', $url);
print_r ($parts);

if($parts[2]== ""){
        // $controller = new BaseController();
        // echo $controller->index();
        require_once "app/view/layout/Home.php";
        
}elseif($parts[2]== "vehicule"){
        $id=$parts[3];
        require './app/view/layout/vehicule.php';
}






?>