<?php
    require_once 'controllers/Controller.php';
    require_once 'models/OrderDetail.php';
    require_once 'models/Order.php';
    require_once 'models/Product.php';




    class PayController extends Controller{

        public function index(){
            if (!isset($_SESSION['cart'])) {
                $_SESSION['error'] = 'Bạn chưa có sản phẩm nào trong giỏ hàng';
                header("Location: YourCart.html");
                exit();
            }
            $this->content = $this->render('views/pays/index.php' );
            // Gọi layout để hiển thị ra view vừa lấy đc
            require_once 'views/layouts/main.php';
        }
        public function des_session(){

            session_destroy();
            header('Location:BigFamily.html');
            exit();
        }
        public function insert(){
            if (!isset($_SESSION['cart'])) {
                $_SESSION['error'] = 'Bạn chưa có sản phẩm nào trong giỏ hàng';
                header("Location: OopError.html");
                exit();
            }
            if(isset($_POST['submit'])){
//                echo"<pre>";
//                print_r($_POST);
//                echo"</pre>";
                $FullName =$_POST['FullName'];
                $gender =$_POST['gender'];
                $PhoneNumber =$_POST['PhoneNumber'];
                $address = $_POST['address'];
//                $ship =$_POST['ship'];
                $Email =$_POST['Email'];
                $OrderNote =$_POST['OrderNote'];
                $TimeDelivery =$_POST['TimeDelivery'];
                $totalmoney =$_POST['totalmoney'];
                $price_total = 0;
                foreach ($_SESSION['cart'] as $cart) {
                    $price_total += $cart['quantity'] * $cart['price'];
                }
                if (empty($FullName) || empty($gender) || empty($PhoneNumber) || empty($address) || empty($Email) || empty($OrderNote) || empty($TimeDelivery)|| empty($totalmoney)  ) {
                    $this->error = 'không được để trống các trường';
                }elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                    $this->error = 'Email chưa đúng định dạng';
                }elseif($totalmoney != $price_total){
                    $this->error =" nghe có vẻ bạn đã can thiệp hệ thống";
                }
                if(empty($this->error)){
                    $order_model = new Order();
                    $order_model ->fullname = $FullName;
                    $order_model ->gender = $gender;
                    $order_model ->mobile = $PhoneNumber;
                    $order_model ->address = $address;
//                    echo $address;
//                    $order_model ->ship = $ship;
                    $order_model ->email = $Email;
                    $order_model ->note = $OrderNote;
//                    $order_model ->ship = $ship;
                    $order_model ->TimeDelivery = $TimeDelivery;
                    $order_model ->price_total = $price_total;
                    // mặc định là chưa thanh toán
                    $order_model -> payment_status= 0;
                    // lưu vào bảng orders
                    $order_id = $order_model->insertOrder();
//                    var_dump($order_id);
                    foreach ($_SESSION['cart'] AS $product_id => $cart) {
                        $order_detail_model = new OrderDetail();
                        $order_detail_model->order_id = $order_id;
                        $order_detail_model->product_id = $cart['id'];
                        $order_detail_model->quantity = $cart['quantity'];
                        $order_detail_model->select_size = $cart['select_size'];
                        $order_detail_model->insertOrderDetail($order_id);
                    }
                    unset($_SESSION['cart']);
                }
            }
        }
    }





?>