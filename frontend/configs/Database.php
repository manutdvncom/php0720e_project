<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 27/12/2020
 * Time: 15:35
 */
class Database{
    public function connection(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=php0720e_project;port=3306;charset=utf8'
                ,'root','');
            return $conn;
        } catch (PDOException $e){
            die("Error: ".$e->getMessage());
        }
    }
}
?>
