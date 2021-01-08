<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 08/01/2021
 * Time: 21:10
 */
require_once "models/Model.php";
class Home extends Model{
    public function getAllCategory(){

        $sql_select_all = $this->conn->prepare("select * from categories");
        $sql_select_all->execute();
        $categories = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}
?>