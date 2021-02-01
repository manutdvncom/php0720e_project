<?php
require_once 'models/Model.php';
class Order extends Model {
public  $id,
        $user_id,
        $fullname,
        $address,
        $mobile,
        $email,
        $ship,
        $note,
        $price_total,
        $payment_status,
        $created_at,
        $EstimatedDeliveryTime,
        $updated_at;


        public function insert(){
            $sql_insert = $this->connection->prepare("INSERT INTO orders(user_id,fullname,address,mobile,email,ship,note,price_total, payment_status,created_at,EstimatedDeliveryTime,updated_at) VALUES (:user_id,:fullname,:address,:mobile,:email,:ship,:note,:price_total,:payment_status,:created_at,:EstimatedDeliveryTime,:updated_at)");
            $obj = $sql_insert->execute([
                ':user_id' => $this->user_id,
                ':fullname' => $this->fullname,
                ':address' => $this->address,
                ':mobile' => $this->mobile,
                ':email' => $this->email,
                ':ship' => $this->ship,
                ':note' => $this->note,
                ':price_total' => $this->price_total,
                ':payment_status' => $this->payment_status,
                ':created_at' => $this->created_at,
                ':EstimatedDeliveryTime' => $this->EstimatedDeliveryTime,
                ':updated_at' => $this->updated_at,

            ]);
            return $obj;


        }

}