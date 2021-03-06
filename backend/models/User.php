<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/10/2020
 * Time: 7:37 PM
 */
require_once 'models/Model.php';
class User extends Model{
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $phone;
    public $address;
    public $email;
    public $avatar;
    public $updated_at;
    public $str_search;
    public function __construct() {
        parent::__construct();
        if (isset($_GET['username']) && !empty($_GET['username'])) {
            $username = addslashes($_GET['username']);
            $this->str_search .= " AND users.username LIKE '%$username%'";
        }
    }
    public function getAll(){
        $sql_select = $this->conn->prepare("select * from users order by created_at desc");
        $sql_select->execute();
        $obj = $sql_select->fetchAll(PDO::FETCH_ASSOC);
        return $obj;
    }
    public function getAllPagination($params = []) {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->conn
            ->prepare("SELECT * FROM users WHERE TRUE $this->str_search
              ORDER BY created_at DESC
              LIMIT $start, $limit");

        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getTotal() {
        $obj_select = $this->conn
            ->prepare("SELECT COUNT(id) FROM users WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }
    public function getById($id) {
        $obj_select = $this->conn
            ->prepare("SELECT * FROM users WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getUser($username){
        $sql_select_once = $this->conn->prepare("select * from users where username = :username");
        $sql_select_once->execute([
            ':username' => $username
        ]);
        $user = $sql_select_once->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getRegister(){
        $sql_insert = $this->conn->prepare("insert into users (username,password) values (:username,:password)");
        $obj_insert = $sql_insert->execute([
            ':username' => $this->username,
            ':password' => $this->password,
        ]);
        return $obj_insert;
    }
    public function getLogin(){
        $sql_select = $this->conn->prepare("select * from users where username = :username
                                                    and password = :password");
        $sql_select->execute([
            ':username' => $this->username,
            ':password' => md5($this->password)
        ]);
        $user = $sql_select->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getUpdate($id){
        $sql_update = $this->conn->prepare("update users set first_name=:first_name,last_name=:last_name,phone=:phone,email=:email,
                                           address=:address,avatar=:avatar,updated_at=:updated_at where id = $id");
        $obj_update = $sql_update->execute([
            ':first_name' => $this->first_name,
            ':last_name' => $this->last_name,
            ':phone' => $this->phone,
            ':address' => $this->address,
            ':email' => $this->email,
            ':avatar' => $this->avatar,
            ':updated_at' => $this->updated_at
        ]);
        return $obj_update;
    }
    public function delete($id)
    {
        $obj_delete = $this->conn
            ->prepare("DELETE FROM users WHERE id = $id");
        return $obj_delete->execute();
    }
}
?>