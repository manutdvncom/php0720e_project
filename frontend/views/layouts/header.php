
<div class="header" id="header">
    <div class="container" id="#container-header">
        <div class="navbar">
            <div class="logo" title="Trang Chủ">
                <h1><a href="BigFamily.html"><span>BIG</span>FAMILY</a></h1>
            </div>
            <div class="menu">
                <ul id="menuitems">
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <?php $text_url = "-".str_replace(' ' ,'-', $category['name']); ?>
                            <a href="TheLoai<?php echo $category['id']?><?php echo $text_url?>.html">
                            <?php echo $category['name'] ?>
                            </a>
                        </li>
                    <?php endforeach;?>
                    <li><a href="" title="about"> Về Chúng tôi </a></li>
                </ul>
                <a href="YourCart.html" style="position: relative;">
                    <img src="assets/images/cart.png" class="cart-icon" width="30px" height="30px">
                    <i class="cart-amount">
                        <?php
                        $cart_total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] AS $cart) {
                                $cart_total += $cart['quantity'];
                            }
                        }
                        echo $cart_total;
                        ?>
                    </i>
                </a>
                <img src="assets/images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-2-header">
                <h1>GIÀY BÓNG ĐÁ COPA<br>SENSE.3 FIRM GROUND</h1>
                <p>Đôi giày bóng đá bằng da cho độ vừa vặn tối ưu, tăng cường cảm nhận và cảm giác bóng.</p>
                <a href="ChiTietSanPham14COPA-SENSE.3-FIRM-GROUND.html" class="btn">Xem Ngay &#8594</a>
            </div>
            <div class="col-2 col-2-header">
                <img src="assets/images/test3.png" >
            </div>
        </div>
        <a href="#header"  id="top-btn" class="btn" title="về đầu trang">&#x021D1</a>
        <a href="YourCart.html" class="btn" id="btn-cart" title="giỏ hàng của bạn">
            <img src="assets/images/icon_cart--white.png"  width="25px" height="25px" style="vertical-align: middle">
            <i class="cart-amount" id="cart-button">
                <?php echo $cart_total;?>
            </i>
        </a>
        <span class="ajax-message " id="notification">
        </span>
    </div>
</div>