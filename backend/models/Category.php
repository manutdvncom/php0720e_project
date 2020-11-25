<?php
require_once 'models/Model.php';
class Category extends Model {
    public $id,$name,$type,$avatar,$description,$status,$updated_at;
    public function getAll(){
        $sql_select_all = $this->conn->prepare("select id,name,description,avatar,status,created_at,updated_at
                                                        from categories order by created_at desc");
        $sql_select_all->execute();
        $categories = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    public function getCreate(){
        $sql_insert = $this->conn->prepare("insert into categories(name,avatar,description,status)
                                           values (:name,:avatar,:description,:status)");
        $obj_insert = $sql_insert->execute([
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':description' => $this->description,
            ':status' => $this->status,
        ]);
        return $obj_insert;

    }
    public function getCategoryID($id){
        $sql_select_once = $this->conn->prepare("select * from categories where id = $id ");
        $sql_select_once->execute();
        $obj_select = $sql_select_once->fetch(PDO::FETCH_ASSOC);
        return $obj_select;
    }
    public function getUpdate($id)
    {
        $sql_update = $this->conn->prepare("UPDATE categories SET name = :name, avatar = :avatar, description = :description, status = :status, updated_at = :updated_at
         WHERE id = $id ");
        $arr_update = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':description' => $this->description,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];

        return $sql_update->execute($arr_update);
    }
    public function getDelete($id)
    {
        $sql_delete = $this->connection
            ->prepare("DELETE FROM categories WHERE id = $id");
        $is_delete = $sql_delete->execute();
        //để đảm bảo toàn vẹn dữ liệu, sau khi xóa categories thì cần xóa cả các product nào đang thuộc về categories này
        $sql_delete_product = $this->connection
            ->prepare("DELETE FROM products WHERE category_id = $id");
        $sql_delete_product->execute();

        return $is_delete;
    }
}
?>