<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Category.php';
    require_once 'models/Product.php';
    class ProductController extends Controller{
        public function detail(){
            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                $_SESSION['error'] = 'ID không hợp lệ';
                header('Location: OopError.html');
                exit();
            }
            $id = $_GET['id'];
            $product_model = new Product();
            $product = $product_model->getProductId($id);
            if(empty($product)){
                header('Location: OopError.html');
                exit();
            }

            $size_model = new Product();
            $size = $size_model->getSize($id);

            $category_model = new Category();
            $categories = $category_model->getAll();

            $this->content = $this->render('views/products/detail.php', [
                'product' => $product,
                'categories' => $categories,
                'size' => [$size],

            ]);
            require_once 'views/layouts/main.php';
        }
        public function product(){
            if (!isset($_GET['categoryid']) || !is_numeric($_GET['categoryid'])) {
                $_SESSION['error'] = 'ID không hợp lệ';
                header('Location:OopError.html');
                exit();
            }
            $id = $_GET['categoryid'];
            $product_model = new Product();
            $products = $product_model->getCategoryId($id);
//            var_dump($products);
            if(empty($products)){
                header('Location: OopError.html');
                exit();
            }
            $category_model = new Category();
            $categories = $category_model->getAll();
            $num = $product_model->count($id);
            $this->content = $this->render("views/products/product_categories.php",[
                'products' => $products,
                'categories' => $categories,
                'num'=>   $num
            ]);
            require_once 'views/layouts/main.php';

        }
        public function load_ajax_product(){
            $i = $_POST['i'];
            $id = $_POST['id'];
            $product_model = new Product();
            $total_records = $product_model->count($id);
            $limit = 8;
//            echo $total_records;
            $total_page = ceil($total_records / $limit);
            if ($i > $total_page){
                $i = $total_page;
            }else if ($i < 1){
                $i = 1;
            }
            $start = ($i - 1) * $limit;
            $products = $product_model->load($id, $start, $limit);
            foreach ($products as $product) {
                echo '<div class="col-4">';
                if (!empty($product['avatar'])):
                    $text_url = "-".str_replace(' ' ,'-', $product['title']).".html";
                    echo '<a href="ChiTietSanPham' . $product["id"] . $text_url.'">';
                    echo ' <img src="../backend/assets/uploads/' . $product['avatar'] . '">';
                    echo '</a>';
                    echo '<h4><a href="ChiTietSanPham' . $product["id"] . $text_url.'">';
                    echo $product['title'];
                    echo '</a></h4>';
                    echo '<p>';
                    // Format lại dạng tiền, ngăn cách hàng nghìn bằng ,
                    $price_format = number_format($product['price']);
                    echo $price_format;
                    echo '₫</p>';
                    echo "</div>";
                endif;
            }


        }
        public function sort(){
            $sort = $_POST['sort'];
            $id = $_POST['id'];
            $product_model = new Product();
            $products = $product_model->sort($sort,$id);
            foreach ($products as $product) {
                echo '<div class="col-4">';
                if (!empty($product['avatar'])):
                    $text_url = "-".str_replace(' ' ,'-', $product['title']).".html";
                    echo '<a href="ChiTietSanPham' . $product["id"] . $text_url.'">';
                    echo ' <img src="../backend/assets/uploads/' . $product['avatar'] . '">';
                    echo '</a>';
                    echo '<h4><a href="ChiTietSanPham' . $product["id"] . $text_url.'">';
                    echo $product['title'];
                    echo '</a></h4>';
                    echo '<p>';
                    // Format lại dạng tiền, ngăn cách hàng nghìn bằng ,
                    $price_format = number_format($product['price']);
                    echo $price_format;
                    echo '₫</p>';
                    echo "</div>";
                endif;
            }

        }
    }
?>