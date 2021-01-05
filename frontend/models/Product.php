<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 14/11/2020
 * Time: 13:01
 */
require_once 'models/Model.php';
class Product extends Model{
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
        $sql_select_all = $this->connection->prepare("Select products.*, categories.name from products, categories 
                                                where products.category_id = categories.id where true $this->str_search order by created_at desc");
        $sql_select_all->execute();
        $obj = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $obj;
    }
    public function getAllPagination($arr_params)
    {
        $limit = $arr_params['limit'];
        $page = $arr_params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = products.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.updated_at DESC, products.created_at DESC
                        LIMIT $start, $limit
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
    public function getProducts(){
 
      $sql_select_limit = $this->connection->
      prepare("SELECT products.*, categories.name AS category_name FROM products 
                  INNER JOIN categories ON categories.id = products.category_id
                --   WHERE categories.name LIKE '%ÁO thể thao%'
                  ORDER BY products.updated_at DESC, products.created_at DESC
                  LIMIT 8
              ");
      $sql_select_limit ->execute();

      $products = $sql_select_limit->fetchAll(PDO::FETCH_ASSOC);

      return $products;

    }
    
    




    /**
     * Tính tổng số bản ghi đang có trong bảng products
     * @return mixed
     */
    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM products WHERE TRUE $this->str_search");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }
    public function getCreate(){
        $sql_insert = $this->connection->prepare("insert into products(category_id,title,avatar,price,amount,summary,content,status,seo_title,seo_description,seo_keywords)
                                           values (:category_id,:title,:avatar,:price,:amount,:summary,:content,:status,:seo_title,:seo_description,:seo_keywords)");
        $obj = $sql_insert->execute([
            ':category_id' => $this->category_id,
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':price' => $this->price,
            ':amount' => $this->amount,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':seo_title' => $this->seo_title,
            ':seo_description' => $this->seo_description,
            ':seo_keywords' => $this->seo_keywords,
            ':status' => $this->status,
        ]);
        return $obj;
    }
    public function getProductId($id){
        $sql_select = $this->connection
            ->prepare("SELECT products.*, categories.name FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

        $sql_select->execute();
        return $sql_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getUpdate($id){
        {
            $sql_update = $this->connection
                ->prepare("UPDATE products SET category_id=:category_id, title=:title, avatar=:avatar, price=:price,amount=:amount,
            summary=:summary, content=:content, seo_title=:seo_title, seo_description=:seo_description, seo_keywords=:seo_keywords, status=:status, updated_at=:updated_at WHERE id = $id
");
            $arr_update = [
                ':category_id' => $this->category_id,
                ':title' => $this->title,
                ':avatar' => $this->avatar,
                ':price' => $this->price,
                ':amount' => $this->amount,
                ':summary' => $this->summary,
                ':content' => $this->content,
                ':seo_title' => $this->seo_title,
                ':seo_description' => $this->seo_description,
                ':seo_keywords' => $this->seo_keywords,
                ':status' => $this->status,
                ':updated_at' => $this->updated_at,
            ];
            return $sql_update->execute($arr_update);
        }
    }
    public function getDelete($id){
        $sql_delete = $this->connection
            ->prepare("DELETE FROM products WHERE id = $id");
        return $sql_delete->execute();
    }
}
?>