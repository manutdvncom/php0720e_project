<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Product.php';
    require_once 'models/Order.php';
//    require_once 'libraries/PHPMailer/src/PHPMailer.php';
//    require_once 'libraries/PHPMailer/src/SMTP.php';
//    require_once 'libraries/PHPMailer/src/Exception.php';


    class PayController extends Controller{
        public function index(){
            $this->content
                = $this->render('views/pays/index.php' );
            // Gọi layout để hiển thị ra view vừa lấy đc
//            require_once 'views/layouts/main.php';

            echo "<pre>";
            print_r($_GET);
//            print_r($_SESSION);
            echo "</pre>";
//            if(isset($_POST['submit'])){
//
////
////                $timeString = implode(" "[$_POST['TimeDelivery']]);
////                var_dump($timeString);
                $_SESSION['totalmoney'] = $_POST['totalmoney'];
                $_SESSION['gender']     = $_POST['gender'];
                $_SESSION['size']    = $_POST['size'];
                $_SESSION['fullname']   = $_POST['FullName'];
                $_SESSION['phonenumber'] = $_POST['PhoneNumber'];
                $_SESSION['email']       = $_POST['Email'];
                $_SESSION['OrderNote']   = $_POST['OrderNote'];
                $_SESSION['ship']        = $_POST['ship'];
                //$_SESSION['BillingAddress'] = $_POST['BillingAddress'];
                //$_SESSION['province']       = $_POST['province'];
                $district       = $_POST['district'];
                $ward           = $_POST['ward'];
                $TimeDelivery   = $_POST['TimeDelivery'];
                $_SESSION['addressDetails'] = implode(",", [$_POST['BillingAddress'],$_POST['district'],$_POST['ward'],$_POST['province']]);
//                $TimeOrder      = $_POST['TimeOrder'];
//                if(empty($fullname) || empty($BillingAddress) || empty($phonenumber) || empty($district) || empty($ward)){
//                    $this->error = "Tên, Địa Chỉ, SĐT  ko được để trống";
//                }
//                if(empty($this->error)){
//                    $order_model = new  Order();
//                    $order_model->fullname = $fullname;
//                    $order_model->address = implode(" ", [$BillingAddress,$district,$ward,$province]);
//                    $order_model->email = $email;
//                    $order_model->mobile = $phonenumber;
//                    $order_model->note = $OrderNote;
//                    $order_model->ship = $ship;
//                    $order_model->price_total = $totalmoney;
//                    $order_model->EstimatedDeliveryTime = $TimeDelivery;
//                    $order_model->price_total = $totalmoney;
////                    $price_total = 0;
////                    foreach ($_SESSION['cart'] as $cart){
////                        $price_total += $cart['quantity'] * $cart['price'];
////                    }
////                    echo $price_total;
//                    echo "<pre>";
//                    print_r($order_model->address);
//                    echo "</pre>";
//
//
//                    $order_model ->payment_status = 0; // auto cho bằng 0
//                    $order_id = $order_model->insert();
//                    if($order_id > 0 ){
//                    }
//                }
//
//            }



        }
    }





?>