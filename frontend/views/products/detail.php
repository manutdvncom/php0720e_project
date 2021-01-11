


<?php
require_once 'helpers/Helper.php';
// echo "<pre>";
// print_r($product);
//// print_r($category);
// echo "</pre>";

?>

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="../backend/assets/uploads/<?php echo $product['avatar']?>" width="100%" id="product-img">
<!--            <div class="small-img-row">-->
<!--                <div class="small-img-col">-->
<!--                    <img src="assets/images/gallery-1.jpg" width="100%" class="small-img">-->
<!--                </div>-->
<!--                <div class="small-img-col">-->
<!--                    <img src="assets/images/gallery-2.jpg" width="100%" class="small-img">-->
<!--                </div>-->
<!--                <div class="small-img-col">-->
<!--                    <img src="assets/images/gallery-3.jpg" width="100%" class="small-img">-->
<!--                </div>-->
<!--                <div class="small-img-col">-->
<!--                    <img src="assets/images/gallery-4.jpg" width="100%" class="small-img">-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <div class="col-2">
            <p>Home / <?php echo $product['name'] ?> /</p>
            <h1><?php echo $product['title'] ?></h1>
            <h4><?php echo number_format($product['price'],0,"","."); ?> ₫</h4>
<!--            <select>-->
<!--                <option></option>-->
<!--                <option>XXL</option>-->
<!--                <option>XL</option>-->
<!--                <option>L</option>-->
<!--                <option>M</option>-->
<!--                <option>S</option>-->
<!--            </select>-->
<!--            <input type="number" value="1">-->
            <a href="" class="btn">Add To Cart</a>
            <h3>Chi Tiết Sản Phẩm</h3>
            <br>
            <p class="product__Details"><?php echo $product['content'] ?></p>


        </div>
    </div>
</div>
<div class="small-container">
    <div class="row row-2">
        <h2>Sản Phẩm Liên Quan</h2>
        <p>Xem Thêm</p>
    </div>
</div>
<div class="small-container">
    <div class="row">
        <div class="col-4">
            <img src="../assets/images/product-1.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="../assets/images/product-2.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="../assets/images/product-3.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="../assets/images/product-4.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
</div>