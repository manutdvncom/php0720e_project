<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Category.php';
    require_once 'models/Product.php';
    class ProductController extends Controller{


        public function detail(){
            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                $_SESSION['error'] = 'ID không hợp lệ';
                header('Location: index.php');
                exit();
            }
            $id = $_GET['id'];
            $product_model = new Product();
            $product = $product_model->getProductId($id);
            $this->content = $this->render('views/products/detail.php', [
                'product' => $product
            ]);
            require_once 'views/layouts/main.php';
        }


    }



?>