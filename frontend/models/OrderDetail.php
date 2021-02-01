<?php
require_once 'models/Model.php';
class OrderDetail extends Model {
    public  $order_id,$product_id,$size_id,$quantity,$price;

    public function insert(){
        $sql_insert = $this->connection->prepare("INSERT INTO order_details(order_id,product_id,size_id,quantity,price) VALUES (:order_id,:product_id,:size_id,:quantity,:price)");
        $obj = [
            ':order_id' =>$this->order_id,
            ':product_id' =>$this->product_id,
            ':size_id' =>$this->size_id,
            ':quantity' =>$this->quantity,
            ':price' =>$this->price
        ];
    }
}