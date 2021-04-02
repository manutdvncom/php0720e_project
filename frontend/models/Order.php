<?php
require_once 'models/Model.php';
class Order extends Model {
public  $id, $user_id, $fullname,$address, $mobile,
        $email,
        $ship,
        $note,
        $price_total,
        $payment_status,
        $created_at,
        $TimeDelivery,$gender,
        $updated_at;


        public function insertOrder(){
            $sql_insert = "INSERT INTO orders(fullname,address,mobile,email, note, price_total, payment_status, gender, TimeDelivery) 
                    VALUES (:fullname,:address,:mobile,:email,:note,:price_total,:payment_status,:gender,:TimeDelivery)";

            $obj_insert = $this->connection->prepare($sql_insert);

            $arr_insert = [
                ':fullname' => $this->fullname,
                ':address' => $this->address,
                ':mobile' => $this->mobile,
                ':email' => $this->email,
                ':note' => $this->note,
                ':gender' => $this->gender,
                ':price_total' => $this->price_total,
                ':payment_status' => $this->payment_status,
                ':TimeDelivery' => $this->TimeDelivery,
                ':gender' => $this->gender,

            ];
            $obj_insert->execute($arr_insert);

            $order_id = $this->connection->lastInsertId();
            return $order_id;


        }

}