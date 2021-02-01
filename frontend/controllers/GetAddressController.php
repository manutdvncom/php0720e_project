<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Address.php';

    class GetAddressController extends Controller{
        public function get_province(){

            $province_model = new Address();
            $province = $province_model->province();

//            $this->content = $this->render('views/carts/index.php',[
//                'province' =>$province,
//            ]);
//            $province = $this->model("GetAddress")->province();
            foreach ($province as $value) {
                echo '<div class="list province" value="'.$value["id"].'">'.$value["_name"].'</div>';
            }
        }
        public function get_ward(){

              $_district_id = $_POST['id'];
              $ward_model = new Address();
              $ward = $ward_model->ward($_district_id);
              $street_model = new Address();
              $street = $street_model->street($_district_id);

//            $ward = $this->model("GetAddress")->ward( $_district_id);
//            $street = $this->model("GetAddress")->street( $_district_id);
            foreach ($ward as $value) {
                echo '<div class="list listward" value="'.$value["id"].'">'.$value['_prefix']." ".$value["_name"].'</div>';
            }
            foreach ($street as $value) {
                echo '<div class="list listward" value="'.$value["id"].'">'.$value['_prefix']." ".$value["_name"].'</div>';
            }
        }
        public function get_district(){

            $_province_id = $_POST['id'];

            $district_model = new Address();

            $district = $district_model->district( $_province_id );

//            echo "<pre>";
//            print_r($district);
//            echo "</pre>";
//            $district_array = [
//                'id'     => $_province_id['id'],
//                'name'   => $_province_id['_name'],
//                'prefix' => $_province_id['_prefix'],
//                'province_id' => $_province_id['_province_id']
//
//
//            ];

//            $district = $this->model("GetAddress")->district($_province_id);
            foreach ($district as $value) {
                echo '<div class="list listdist" value="'.$value["id"].'">'.$value['_prefix']." ".$value["_name"].'</div>';
            }
        }






    }



?>