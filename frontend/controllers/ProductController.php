<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 17:48
 */
require_once "controllers/Controller.php";
require_once "models/Product.php";
class ProductController extends Controller {
    public function index(){
        $product_model = new Product();
        $products = $product_model->getAll();
        $categories = $product_model->getAllCategory();
        $this->content = $this->render("views/products.php",[
            'products' => $products,
            'categories' => $categories,
        ]);
        require_once 'views/main.php';
    }
    public function detail(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }

        $id = $_GET['id'];
        $product_model = new Product();
        $product = $product_model->getProductId($id);
        $this->page_title = 'Chi tiết sản phẩm';
        $this->content = $this->render('views/products-detail.php', [
            'product' => $product
        ]);
        require_once 'views/main.php';
    }
    public function product(){
        if (!isset($_GET['categoryid']) || !is_numeric($_GET['categoryid'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }
        $id = $_GET['categoryid'];
        $product_model = new Product();
        $categories = $product_model->getAllCategory();
        $products = $product_model->getCategoryId($id);
        $this->content = $this->render("views/product_categories.php",[
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/main.php';
    }
}