<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/10/2020
 * Time: 6:51 PM
 */
require_once 'controllers/Controller.php';
require_once 'models/User.php';
require_once 'models/Pagination.php';
class UserController extends Controller{
    public function index(){
        $user_model = new User();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $user_model->getTotal();
        $query_additional = '';
        if (isset($_GET['username'])) {
            $query_additional .= "&username=" . $_GET['username'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'user',
            'action' => 'index',
            'full_mode' => false,
            'page' => $page,
            'query_additional' => $query_additional
        ];
        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $users = $user_model->getAllPagination($params);
        $this->page_title = 'Danh sách user';
        $this->content = $this->render('views/users/index.php', [
            'users' => $users,
            'pages' => $pages,
        ]);

        require_once 'views/layouts/main.php';
    }
    //Phương thức đăng ký user
    //index.php?controller=user&action=register
    public function register(){
        if (isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $user_model = new User();
            $user = $user_model->getUser($username);
            if (empty($username)||empty($password)||empty($confirm_password)){
                $this->error = 'Không được để trống';
            }elseif ($confirm_password != $password){
                $this->error = 'Mật khẩu nhập lại phải trùng';
            }else if (!empty($user)){
                $this->error = "Username $username đã tồn tại";
            }
            if (empty($this->error)){
                $user_model->username = $username;
                $user_model->password = md5($password);
                $user_model->getRegister();
                if ($user_model->getRegister()){
                    $_SESSION['success'] = 'Đăng ký thành công';
                    header("Location: index.php?controller=user&action=login");
                    exit();
                } else {
                    $this->error = 'Đăng ký thất bại';
                }
            }
        }
        //Hiển thị ra view - form đăng ký cho user
        //Lấy nội dung view
        $this->content = $this->render('views/users/register.php');
        //Gọi layout để hiển thị nội dung view vừa lấy được
        //Tạo 1 layout khác tương đương với user chưa login
        require_once 'views/layouts/main_login.php';
    }
    public function login(){
        if (isset($_SESSION['user'])){
            $_SESSION['success'] = 'Bạn đã đăng nhập rồi';
            header("Location: index.php?controller=category&action=create");
            exit();
        }
        if (isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user_model = new User();
            if (empty($username)||empty($password)){
                $this->error = 'Không được để trống';
            }
            if (empty($this->error)){
                $user_model->username = $username;
                $user_model->password = $password;
                $user = $user_model->getLogin();
                if ($user){
                    if (isset($_POST['remember'])){
                        setcookie('username',$username,time()+7200);
                        // dùng mã hóa md5 để mã hóa password khi lưu cookie
                        setcookie('password',md5($password),time()+7200);
                    }
                    $_SESSION['user'] = $user;
                    $_SESSION['success'] = 'Đăng nhập thành công';
                    header("Location: index.php?controller=category&action=index");
                    exit();
                }else {
                    $this->error = 'Sai username/password';
                }
            }
        }
        if (isset($_COOKIE['username'])&&isset($_COOKIE['password'])){
            $_SESSION['user'] = $_COOKIE['username'];
            header('Location: index.php');
            exit();
        }
        $this->content = $this->render('views/users/login.php');
        require_once 'views/layouts/main_login.php';
    }
    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }

        $id = $_GET['id'];
        $user_model = new User();
        $user = $user_model->getById($id);
        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'Email không đúng định dạng';
            } else if (!empty($facebook) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
                $this->error = 'Link facebook không đúng định dạng url';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Phải upload avatar dạng ảnh';
                } else if ($file_size_mb > 5) {
                    $this->error = 'File upload không được lớn hơn 5Mb';
                }
            }

            //xủ lý lưu dữ liệu khi biến error rỗng
            if (empty($this->error)) {
                $filename = $user['avatar'];
                //xử lý upload ảnh nếu có
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    //xóa file ảnh đã update trc đó
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-user-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                if (empty($this->error)) {
                    $user_model->first_name = $fname;
                    $user_model->last_name = $lname;
                    $user_model->phone = $phone;
                    $user_model->address = $address;
                    $user_model->email = $email;
                    $user_model->avatar = $filename;
                    $user_model->updated_at = date('Y-m-d H:i:s');
                    $is_update = $user_model->getUpdate($id);
                    if ($is_update) {
                        $_SESSION['success'] = 'Cập nhật thành công';
                        header("Location: index.php?controller=user&action=index");
                        exit();
                    } else {
                        $this->error = 'Cập nhật thất bại';
                    }
                }
            }
        }
        $this->page_title = 'Cập nhật user';
        $this->content = $this->render('views/users/update.php');
        require_once 'views/layouts/main.php';
    }
    public function delete() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=user');
            exit();
        }

        $id = $_GET['id'];
        $user_model = new User();
        $is_delete = $user_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=user');
        exit();
    }
    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }
        $id = $_GET['id'];
        $user_model = new User();
        $user = $user_model->getById($id);
        $this->page_title = 'Chi tiết user';
        $this->content = $this->render('views/users/detail.php', [
            'user' => $user
        ]);

        require_once 'views/layouts/main.php';
    }
    public function profile(){
        if (!isset($_SESSION['user']['id']) || !is_numeric($_SESSION['user']['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }
        $id = $_SESSION['user']['id'];
        $user_model = new User();
        $user = $user_model->getById($id);
        $this->page_title = 'Hồ sơ cá nhân';
        $this->content = $this->render('views/users/profile.php', [
            'user' => $user
        ]);

        require_once 'views/layouts/main.php';
    }
    public function update_profile(){
        if (!isset($_SESSION['user']['id']) || !is_numeric($_SESSION['user']['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }
        $id = $_SESSION['user']['id'];
        $user_model = new User();
        $user = $user_model->getById($id);
        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'Email không đúng định dạng';
            } else if (!empty($facebook) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
                $this->error = 'Link facebook không đúng định dạng url';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Phải upload avatar dạng ảnh';
                } else if ($file_size_mb > 5) {
                    $this->error = 'File upload không được lớn hơn 5Mb';
                }
            }

            //xủ lý lưu dữ liệu khi biến error rỗng
            if (empty($this->error)) {
                $filename = $user['avatar'];
                //xử lý upload ảnh nếu có
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    //xóa file ảnh đã update trc đó
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-user-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                if (empty($this->error)) {
                    $user_model->first_name = $fname;
                    $user_model->last_name = $lname;
                    $user_model->phone = $phone;
                    $user_model->address = $address;
                    $user_model->email = $email;
                    $user_model->avatar = $filename;
                    $user_model->updated_at = date('Y-m-d H:i:s');
                    $is_update = $user_model->getUpdate($id);
                    if ($is_update) {
                        $_SESSION['success'] = 'Cập nhật thành công';
                        header("Location: index.php?controller=user&action=index");
                        exit();
                    } else {
                        $this->error = 'Cập nhật thất bại';
                    }
                }
            }
        }
        $this->page_title = 'Cập nhật hồ sơ';
        $this->content = $this->render('views/users/update_profile.php');

        require_once 'views/layouts/main.php';
    }
    public function logout(){
        unset($_SESSION['user']);
        setcookie('username','username',time()-1);
        setcookie('password','password',time()-1);
        $_SESSION['success'] = 'Logout thành công';
        header("Location: index.php?controller=user&action=login");
        exit();
    }
}
?>