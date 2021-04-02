<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Pagination.php';
    require_once 'models/Order.php';
    require_once 'models/Product.php';
    class OrderController extends Controller{
        public function index(){
            $order_model = new Order();
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $total = $order_model->countTotal();
            $query_additional = '';
            if (isset($_GET['name'])) {
                $query_additional .= "&name=" . $_GET['name'];
            }
            $params = [
                'total' => $total,
                'limit' => 8, //giới hạn 5 bản ghi 1 trang
                'query_string' => 'page',
                'controller' => 'order',
                'action' => 'index',
                'full_mode' => FALSE,
                'page' => $page,
                'query_additional' => $query_additional
            ];
            $pagination = new Pagination($params);
            //lấy ra html phân trang
            $pages = $pagination->getPagination();
            $orders = $order_model->getAllPagination($params);
            $this->page_title = 'Danh sách đơn hàng';
            $this->content = $this->render('views/orders/index.php', [
                'orders' => $orders,
                'pages' => $pages
            ]);
            require_once 'views/layouts/main.php';




        }
        public function orderdetail(){
            $id = $_GET['id'];
            $order_model = new Order();
            $orders = $order_model->getOrder($id);
            $product_model = new Product();
            $product = $product_model->getProductOrderId($id);
            $this->content = $this->render('views/orders/order_detail.php',[
                'orders' => $orders,
                'product'=> $product
            ]);
            require_once 'views/layouts/main.php';
        }
        public function updatecancel(){
            if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                $_SESSION['error'] = 'ID categories không hợp lệ';
                header('Location: index.php?controller=order&action=index');
                exit();
            }
            $id = $_POST['id'];
            $payment_status = $_POST['payment_status'];
            $order_model = new Order();
//            $order = $order_model->getOrder($id);
            if(isset($_POST['submit'])){
                $adminNote = $_POST['admin__Note'];
                if(empty($adminNote)){
                    $this->error = 'cần nhập lý do hủy';
                }
                if(empty($this->error)){
                    $order_model->updated_at = date('Y-m-d H:i:s');
                    $order_model->payment_status = $payment_status;
                    $order_model->admin_note = $adminNote;
                    $is_update = $order_model->updateOrder($id);
                    if ($is_update) {
                        $_SESSION['success'] = 'Hủy Đơn Hàng Thành Công ';
                    } else {
                        $_SESSION['error'] = 'Hủy Đơn Hàng Thất Bại';
                    }
                    header('Location: index.php?controller=order&action=index');
                    exit();
                }

            }
        }
        public function updatesuccess(){
            if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                $_SESSION['error'] = 'ID categories không hợp lệ';
                header('Location: index.php?controller=order&action=index');
                exit();
            }
            $id = $_POST['id'];
            $payment_status = $_POST['payment_status'];
            $order_model = new Order();
//            $order = $order_model->getOrder($id);
            if(isset($_POST['submit'])){
                $adminNote = $_POST['admin__Note'];
                if(empty($adminNote)){
                    $this->error = 'cần nhập lý do hủy';
                }
                if(empty($this->error)){
                    $order_model->updated_at = date('Y-m-d H:i:s');
                    $order_model->payment_status = $payment_status;
                    $order_model->admin_note = $adminNote;
                    $is_update = $order_model->updateOrder($id);
                    $order = $order_model->getProductOrder($id);
                    foreach ($order as $value => $order){
                        $product_model = new Product();
                        $quantity = $product_model->getQuantity($order['product_id']);
                        foreach ($quantity as $item => $quantity){
                            $amountupdate = $quantity['amount'] - $order['quantity'];
                            $product_model->amount = $amountupdate;
                            $is_update = $product_model->updateQuantity($order['product_id']);
                        }
                    }
                    if ($is_update) {
                        $_SESSION['success'] = 'Đã Giao Hàng Thành Công ';
                    } else {
                        $_SESSION['error'] = 'Cập nhật Thất Bại';
                    }
                    header('Location: index.php?controller=order&action=index');
                    exit();
                }

            }
        }
    }




?>