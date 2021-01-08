<?php
require_once "models/Model.php";
class Product extends Model {
    public $id;
    public $category_id;
    public $title;
    public $avatar;
    public $price;
    public $amount;
    public $summary;
    public $content;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $status;
    public $created_at;
    public $updated_at;
    public $str_search;
    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
            $this->str_search .= " AND products.category_id = {$_GET['category_id']}";
        }
    }
    public function getAll(){
        $sql_select_all = $this->conn->prepare("Select products.*, categories.name from products, categories 
                                                where products.category_id = categories.id order by created_at desc");
        $sql_select_all->execute();
        $obj = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $obj;
    }
    public function getProductId($id){
        $sql_select = $this->conn
            ->prepare("SELECT products.*, categories.name FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

        $sql_select->execute();
        return $sql_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getAllCategory(){

        $sql_select_all = $this->conn->prepare("select * from categories");
        $sql_select_all->execute();
        $categories = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    public function getCategoryId($id){
        $sql_select = $this->conn
            ->prepare("SELECT products.*, categories.name FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.category_id = $id");

        $sql_select->execute();
        return $sql_select->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>