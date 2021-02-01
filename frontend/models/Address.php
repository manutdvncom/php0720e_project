<?php
    require_once 'models/Model.php';
    class Address extends Model{
        public $_district_id,$_province_id,$result;

        public function province(){
            $sql_select_all = $this->connection->prepare("SELECT * FROM province");
            $sql_select_all->execute();
            $result = $sql_select_all->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function district($_province_id){
            $sql_select_district = $this->connection->prepare("SELECT * FROM district WHERE _province_id = $_province_id");
            $sql_select_district->execute();
            $result = $sql_select_district->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function ward($_district_id){
            $sql_select_ward = $this->connection->prepare("SELECT * FROM ward WHERE _district_id = $_district_id");
            $sql_select_ward ->execute();
            $result = $sql_select_ward->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        }
        public function street($_district_id){
            $sql_select_street = $this->connection->prepare("SELECT * FROM street WHERE _district_id = $_district_id");
            $sql_select_street ->execute();
            $result = $sql_select_street->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }



?>