<?php
require_once 'models/Model.php';
class OrderDetail extends Model {
    public  $order_id,$product_id,$select_size,$quantity;

    public function insertOrderDetail(){
        $sql_insert = $this->connection->prepare("INSERT INTO `order_details`(`order_id`, `product_id`, `quantity`, `sizeSelect`) VALUES (:order_id,:product_id,:quantity,:select_size)");
        $obj = $sql_insert->execute([
            ':order_id' =>$this->order_id,
            ':product_id' =>$this->product_id,
            ':select_size' =>$this->select_size,
            ':quantity' =>$this->quantity,
        ]);
        return $obj;
    }
}