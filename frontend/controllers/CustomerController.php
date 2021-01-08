<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 15:39
 */
require_once "controllers/Controller.php";
require_once "models/Customer.php";
class CustomerController extends Controller{
    public function account(){
//        echo "<pre>";
//        print_r($_SESSION['account']);
//        echo "</pre>";
        if (isset($_POST['submitReg'])){
            $username1 = $_POST['username1'];
            $password1 = $_POST['password1'];
            $account_model = new Customer();
            $account = $account_model->getUser($username1);
            $email = $_POST['email'];
            if (empty($username1)||empty($password1)||empty($email)){
                $this->error = "Điền vào chỗ trống";
            }elseif (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->error = "Email ko đúng định dạng";
            }elseif (!empty($account)){
                $this->error = "Tên đăng nhập $username1 đã tồn tại";
            }
            if (empty($this->error)){
                $account_model->username = $username1;
                $account_model->password = md5($password1);
                $account_model->email = $email;
                $account_model->getRegister();
                if ($account_model->getRegister()){
//                    $_SESSION['success'] = 'Đăng ký thành công';
                    header("Location: index.php?controller=home&action=index");
                    exit();
                } else {
                    $this->error = 'Đăng ký thất bại';
                }
            }
        }
        if (isset($_POST['submitLogin'])){
            if (isset($_SESSION['account'])){
                $_SESSION['success'] = 'Bạn đã đăng nhập rồi';
                header("Location: index.php?controller=home&action=index");
                exit();
            }
            $username = $_POST['username'];
            $password = $_POST['password'];
            $account_model = new Customer();
            if (empty($username)||empty($password)) {
                $this->error = "Điền vào chỗ trống";
            }
            if (empty($this->error)){
                $account_model->username = $username;
                $account_model->password = $password;
                $account = $account_model->getLogin();
                if ($account){
                    if (isset($_POST['remember'])){
                        setcookie('username',$username,time()+7200);
                        // dùng mã hóa md5 để mã hóa password khi lưu cookie
                        setcookie('password',md5($password),time()+7200);
                    }
                    $_SESSION['account'] = $account;
//                    $_SESSION['success'] = 'Đăng nhập thành công';
                    header("Location: index.php?controller=home&action=index");
                    exit();
                }else {
                    $this->error = 'Sai username/password';
                }
            }
        }
        require_once "views/account.php";
    }
}
?>