<?php
    require_once "models/Model.php";


    class Order extends Model{
        public $str_search,$id,$updated_at,$admin_note,$payment_status;
        public function __construct() {
            parent::__construct();
            if (isset($_GET['name']) && !empty($_GET['name'])) {
                $name = addslashes($_GET['name']);
                $this->str_search .= " AND categories.name LIKE '%$name%'";
            }
        }
        public function countTotal(){
            $obj_select = $this->conn->prepare("SELECT COUNT(id) FROM orders where true $this->str_search");
            $obj_select->execute();

            return $obj_select->fetchColumn();
        }
        public function getAllPagination($params = []) {
            $limit = $params['limit'];
            $page = $params['page'];
            $start = ($page - 1) * $limit;
            $obj_select = $this->conn
                ->prepare("SELECT * FROM orders where true $this->str_search order by created_at desc LIMIT  $start, $limit ");
            $obj_select->execute();
            $orders = $obj_select->fetchAll(PDO::FETCH_ASSOC);

            return $orders;
        }
        public function getOrder($id){
            $sql_select = $this->conn->prepare("SELECT * FROM orders 
                WHERE orders.id = $id");
            $sql_select->execute();
            $orders = $sql_select->fetchAll(PDO::FETCH_ASSOC);
            return $orders;

        }
        public function updateOrder($id){
            $sql_update = $this->conn->prepare("UPDATE orders SET updated_at = :updated_at, admin_note = :admin_note, payment_status =:payment_status where id = $id");
            $arr_update = [
                ':updated_at' => $this->updated_at,
                ':admin_note' => $this->admin_note,
                ':payment_status' => $this->payment_status,
            ];
            return $sql_update->execute($arr_update);
        }
        public function getProductOrder($id){
            $sql_select = $this->conn->prepare("SELECT order_details.product_id, order_details.quantity FROM order_details WHERE order_details.order_id = $id");
            $sql_select->execute();
            $orders = $sql_select->fetchAll(PDO::FETCH_ASSOC);
            return $orders;
        }



    }






?>