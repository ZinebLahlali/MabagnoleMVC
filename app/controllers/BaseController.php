<?php
 namespace app\controllers;

  abstract class BaseController
 {

     static function render(string $view, array $data = []): void 
     {
        extract($data);
        require "app/view/layout/header.php";
        require "app/view/categories/$view.php";
        require "app/view/layout/footer.php";
     }

 }





?>