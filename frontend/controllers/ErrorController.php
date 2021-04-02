<?php
    require_once 'controllers/Controller.php';
    class ErrorController extends Controller{
        public function index(){
//                echo "hacker";
            $this->content = $this->render('views/errors/index.php' );
//            // Gọi layout để hiển thị ra view vừa lấy đc
           echo $this->content;


        }
    }




?>