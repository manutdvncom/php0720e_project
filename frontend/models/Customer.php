<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 15:39
 */
require_once 'models/Model.php';
class Customer extends Model {
    public $id, $username, $password, $name, $phone, $address, $email, $avatar, $updated_at;
    public function getRegister(){
        $sql_insert = $this->conn->prepare("insert into customers(username,email,password) 
                                            values(:username,:email,:password)");
        $obj_insert = $sql_insert->execute([
            ':username' => $this->username,
            ':email' => $this->email,
            ':password' => $this->password
        ]);
        return $obj_insert;
    }
    public function getLogin(){
        $sql_select = $this->conn->prepare("select * from customers where username = :username, password = :password");
        $sql_select->execute([
            ':username' => $this->username,
            ':password' => md5($this->password)
        ]);
        $obj_select = $sql_select->fetch(PDO::FETCH_ASSOC);
        return $obj_select;
    }
    public function getUser($username){
        $sql_select_once = $this->conn->prepare("select * from customers where username = :username");
        $sql_select_once->execute([
            ':username' => $username
        ]);
        $user = $sql_select_once->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}