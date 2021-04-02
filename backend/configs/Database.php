<?php
//Tên class sẽ trùng với tên file
class Database {
    public function connection(){
        try {
           $conn = new PDO('mysql:host=localhost;dbname=PHP0720E_nhom7;port=3306;charset=utf8',
               'PHP0720E_nhom7','J2wUn5pte1');
           return $conn;
        } catch (PDOException $e){
            die('Lỗi: '.$e->getMessage());
        }
    }
//    public function connection(){
//    try {
//        $conn = new PDO('mysql:host=localhost;dbname=PHP0720E_nhom7;port=3306;charset=utf8',
//            'PHP0720E_nhom7','J2wUn5pte1');
//        return $conn;
//    } catch (PDOException $e){
//        die('Lỗi: '.$e->getMessage());
//    }
//}



}