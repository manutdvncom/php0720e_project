<?php
require_once 'helpers/Helper.php';
 echo "<pre>";
// print_r($products);
// print_r($categories);
 echo "</pre>";

?>
<div class="categories">
    <h2 class="title__Categories"> KHÁM PHÁ NHƯNG SẢN PHẨM CHÚNG TÔI</h2>
    <?php if (!empty($categories)): ?>
            <div class="small-container">
                <div class="row">
                    <?php foreach ($categories as $value): ?>
                        <?php $text_url = "-".str_replace(' ' ,'-', $value['name']); ?>
                    <a href="TheLoai<?php echo $value['id']?><?php echo $text_url?>.html" class="col-3" >
                        <img src="../backend/assets/uploads/<?php echo $value['avatar'] ?>">
                        <div><h3 class="categories_Name" ><?php echo $value['name'] ?> </h3></div>
                    </a>
                    <?php endforeach;?>
                </div>
    <?php endif;?>
</div>
<div class="small-container">
        <h2 class="title">Những Sản Phẩm Thể Thao Mới Nhất</h2>
        <div class="row">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $value): ?>
                    <?php $text_url = str_replace(' ' ,'-', $value['title']); ?>
                    <a href="ChiTietSanPham<?php echo $value['id']?><?php echo $text_url?>.html" class="col-4" data-id="<?php echo $value['id'] ?>">
                        <img src="../backend/assets/uploads/<?php echo $value['avatar'] ?>">
                        <h4><?php echo $value['title'] ?></h4>
                        <p><?php echo number_format($value['price'],0,"","."); ?> ₫ </p>
                        <!-- <div class="view__Detail">
                            <span>Xem Chi Tiết Sản Phẩm</span>
                        </div> -->
                    </a>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <!-- <a href="" class="viewMore">Xem Thêm Các Sản Phẩm Khác</a> -->
</div>
<div class="brands">
    <div class="small-container">
        <h2 class=" title ">Các Đơn Vị Hợp Tác</h2>
        <div class="row">
            <div class="col-5"><img src="assets/images/png-transparent-michelin-logo-michelin-man-logo-tire-gladiator-miscellaneous-white-mammal.png"></div>
            <div class="col-5"><img src="assets/images/bc7344df7f59e23c20cd8e48e7417280.png"></div>
            <div class="col-5"><img src="assets/images/football_Adidas-logo_design.png"></div>
            <div class="col-5"><img src="assets/images/1724-Yamaha-Logo.png"></div>
            <div class="col-5"><img src="assets/images/logo-philips.png"></div>
        </div>
    </div>
</div>

