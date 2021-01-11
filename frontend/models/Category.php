<?php
require_once 'models/Model.php';
class Category extends Model {
    public $id,$name,$type,$avatar,$description,$status,$updated_at;
    public $str_search;
    public function __construct() {
        parent::__construct();
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $name = addslashes($_GET['name']);
            $this->str_search .= " AND categories.name LIKE '%$name%'";
        }
    }

  public function getAll() {
    $sql_select_all = "SELECT * FROM categories WHERE `status` = 1";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
    $categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
  }
}