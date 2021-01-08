<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 17:27
 */
require_once "controllers/Controller.php";
class HomeController extends Controller{
    public function index(){
        require_once "views/index.php";
    }
}