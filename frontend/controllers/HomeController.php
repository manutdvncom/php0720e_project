<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 17:27
 */
require_once "controllers/Controller.php";
require_once "models/Home.php";
class HomeController extends Controller{
    public function index(){
        $product_model = new Home();
        $categories = $product_model->getAllCategory();
        $this->content = $this->render('views/index.php',[
            'categories' => $categories
        ]);
        require_once "views/layout.php";
    }
}