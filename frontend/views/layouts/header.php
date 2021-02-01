<div class="header" id="header">
    <div class="container" id="#container-header">
        <div class="navbar">
            <div class="logo" title="Trang Chủ">
                <h1><a href="index.php"><span>BIG</span>FAMILY</a></h1>
            </div>
            <div class="menu">
                <ul id="menuitems">
                    <li><a href="" title="giày thể thao">GIÀY THỂ THAO</a></li>
                    <li><a href="" title="áo thể thao">ÁO THỂ THAO</a></li>
                    <li><a href="" title="quần thể thao">QUẦN THỂ THAO</a></li>
                    <li><a href="" title="about">VỀ CHÚNG TÔI</a></li>
<!--                    <li><a href="" title="">ACCOUNT</a></li>-->
                </ul>
<!--                <a href="index.php?controller=cart&action=index">-->
<!--                    <img src="assets/images/cart.png" class="cart-icon" width="30px" height="30px">-->
<!--                    <i class="cart-amount">-->
<!--                        --><?php
//                        $cart_total = 0;
//                        if (isset($_SESSION['cart'])) {
//                            foreach ($_SESSION['cart'] AS $cart) {
//                                $cart_total += $cart['quantity'];
//                            }
//                        }
//                        echo $cart_total;
//                        ?>
<!--                    </i>-->
<!--                </a>-->
                <a href="index.php?controller=cart&action=index" style="position: relative;">
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
            <div class="col-2">
                <h1>Give Your Workout<br>A New Style!</h1>
                <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard
                    word gains success. Greatness will come</p>
                <a href="#" class="btn">Explore Now &#8594</a>
            </div>
            <div class="col-2">
                <img src="assets/images/image1.png" >
            </div>
        </div>
        <a href="#header"  id="top-btn" class="btn" title="về đầu trang">&#x021D1</a>
        <a href="index.php?controller=cart&action=index" class="btn" id="btn-cart" title="giỏ hàng của bạn">
            <img src="assets/images/icon_cart--white.png"  width="25px" height="25px" style="vertical-align: middle">
            <i class="cart-amount" id="cart-button">
                <?php echo $cart_total;?>
            </i>
        </a>
        <span class="ajax-message " id="notification">

        </span>
    </div>
</div>