<?php
require_once __DIR__.'/vendor/autoload.php';
 
use app\controllers\BaseController;
use app\models\Vehicule;
use app\models\Categorie;

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
// $path= trim($path, '/');
$parts = explode('/', $path);
// print_r($parts);


// if($parts[2]== ""){
//         $controller = new BaseController();
//         require_once "app/view/layout/Home.php";
        
// }elseif($parts[2]== "vehicule"){
//         $id=$parts[3];
//         require './app/view/layout/vehicule.php';
// }
switch(true) {
        case $parts[2] === 'home':
            $vehicule = new Vehicule();
            $data = ['showCate'=>$vehicule->loadVehicules()];
            BaseController::render('Home', $data);
            break;
        case $parts[2] === 'list':
             $category= new Categorie();
             $data = ['showCate' =>$category->getAllWithVehicules()];
             BaseController::render('list', $data);
             break;     
}


// $catManager = new CategoriesController($pdo);
// $categories = $catManager->loadVehicules();
// var_dump($categories);

?>