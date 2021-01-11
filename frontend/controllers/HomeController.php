<?php
require_once 'controllers/Controller.php';
require_once 'models/Category.php';
require_once 'models/Product.php';


class HomeController extends Controller {
      public function index() {
          $category_model = new Category();
          $categories = $category_model->getAll();
          $product_model = new Product();
          $products = $product_model->getProducts();
          $this->content = $this->render('views/homes/index.php', [
              'categories' => $categories,
              'products' => $products,
          ]);
          require_once 'views/layouts/main.php';
      }
}