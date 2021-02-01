<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Product.php';



    class CartController extends Controller{
        //        public function augment(){
        ////            echo "<pre>";
        ////            print_r($_GET);
        ////            echo "</pre>";
        ////            foreach ($_SESSION['cart'] as $product_id => $cart):
        ////                $cart['quantity'] = $_GET['quantity'];
        ////            endforeach;
        //            if($_REQUEST["value"]){
        //                $value = $_REQUEST['value'];
        //                foreach ($_SESSION['cart'] as $product_id => $cart):
        //                    $cart['quantity'] = $value;
        //                endforeach;
        //                 echo $cart['quantity'];
        ////                 echo $value;
        //            }
        //        }
        public function add() {
            $product_id = $_GET['id'];
            // Lấy thông tin sản phẩm dựa theo id
            $product_model = new Product();
            $product = $product_model->getProductId($product_id);

            $size_model = new Product();
            $size = $size_model->getSize($product_id);
            $cart_item = [
                'id'  =>$product['id'],
                'name' => $product['title'],
                'size' => [$size],
                'price' => $product['price'],
                'avatar' => $product['avatar'],
                'select_size'=>$product['select_size'],

                // Mặc định mỗi lần thêm vào giỏ sẽ tahêm 1 sp
                'quantity' => 1
            ];
            // Logic thêm vào giỏ hàng
            // + Tạo 1 session để lưu giỏ hàng $_SESSION['cart']
            // + Nếu sp thêm chưa tồn tại trong giỏ hàng ->
            //thêm phần tử mới cho mảng session giỏ hàng
            // + Nếu sp thêm đã tồn tại trong giỏ -> chỉ cập nhật
            //số lượng sản phẩm đó tăng lên 1
            // product_id => [title, price, avatar, quantity]

            // XỬ LÝ
            // + Nếu giỏ hàng chưa hề tồn tại, thì tạo session và
            //thêm sp đầu tiên vào giỏ
            if (!isset($_SESSION['cart'])) {
              $_SESSION['cart'] = [
                $product_id => $cart_item
              ];
                $_SESSION['cart'][$product_id] = $cart_item;
            } else {
                // Nếu thêm sản phẩm đã tồn tại trong giỏ, thì
                //chỉ tăng số lượng lên 1
                if (array_key_exists($product_id, $_SESSION['cart'])) {
                    $_SESSION['cart'][$product_id]['quantity']++;
                }
                // Nếu sp chưa tồn tại thì giống thêm mới
                else {
                    $_SESSION['cart'][$product_id] = $cart_item;
                }
            }
        }
        public function augment(){
            $product_id = $_GET['data'];
            if(isset($_SESSION['cart'])){
                if (array_key_exists($product_id, $_SESSION['cart'])) {
                    $_SESSION['cart'][$product_id]['quantity']++;
                }
            }

        }
        public function abate (){
            $product_id = $_GET['data'];
            if(isset($_SESSION['cart'])){
                if (array_key_exists($product_id, $_SESSION['cart'])) {
                    $_SESSION['cart'][$product_id]['quantity']--;
                }
            }

        }
        public function index() {
//                print_r($_POST['quantity']);
//            if (isset($_POST['submit'])) {
//                // Xử lý thêm trường hợp nếu số lượng âm thì
//                //ko cho update
//
//                // Update giỏ hàng là update lại số lượng từ form
//                //gửi lên
//                foreach ($_SESSION['cart'] AS $product_id => $cart) {
//                    $_SESSION['cart'][$product_id]['quantity'] =
//                        $_POST[$product_id];
//                }
//            }
            $this->content = $this->render('views/carts/index.php' );
            require_once 'views/layouts/main.php';
        }
        public function delete() {
            //    echo "<pre>";
            //    print_r($_GET);
            //    echo "</pre>";
            // Xóa sản phẩm khỏi giỏ hàng
            //    echo "<pre>";
            //    print_r($_SESSION['cart']);
            //    echo "</pre>";
            $id  = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            header('Location:index.php?controller=cart&action=index');
            exit();
        }
        public function des_session(){
            session_destroy();
            header('Location:index.php?controller=cart&action=index');
            exit();
        }
    }

?>