<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigFamily</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.min.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1><a href="#" ><span>BIG</span>FAMILY</a></h1>
                </div>
                <div class="menu">
                    <ul id="menuitems">
                        <li><a href="index.php?controller=home" title="Trang chủ">Home</a></li>
                        <li class="dropdown">
                            <a href="index.php?controller=product&action=index" title="Sản phẩm">Products</a>
                            <div class="dropdown-menu">
                                <?php foreach ($categories as $category): ?>
                                    <a class="dropdown-item" href="index.php?controller=product&action=product&categoryid=<?php echo $category['id'] ?>">
                                        <?php echo $category['name'] ?></a>
                                <?php endforeach;?>
                            </div>
                        </li>
                        <li><a href="" title="Về chúng tôi">About</a></li>
                        <li><a href="" title="Liên hệ">Contact</a></li>
                        <li><a href="index.php?controller=customer&action=account" title="Tài khoản">Account</a></li>
                    </ul>
                    <img src="assets/images/cart.png" width="30px" height="30px">
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
            <a href="" onclick="topFunction()" id="top-btn" class="btn">&#x021D1</a>
        </div>
    </div>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3"><img src="assets/images/category-1.jpg"></div>
                <div class="col-3"><img src="assets/images/category-2.jpg"></div>
                <div class="col-3"><img src="assets/images/category-3.jpg"></div>
            </div>
        </div>
    </div>
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="assets/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-2.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-3.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-4.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="assets/images/product-5.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-6.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-7.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/images/product-8.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
    <div class="offer">
        <ul id="autoplay" class="cs-hidden">
            <li>
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/images/exclusive.png" class="offer-img">
                        </div>
                        <div class="col-2">
                            <p>Exclusively Available on RedStore</p>
                            <h1>Smart Band 4</h1>
                            <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch
                                display with adjustable brightness, so everything is clear as can be.</small>
                            <br>
                            <a href="" class="btn">Buy Now &#8594</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/images/banner_01.png" class="offer-img" width="72%">
                        </div>
                        <div class="col-2">
                            <p>Exclusively Available on RedStore</p>
                            <h1>Apple Iphone 11</h1>
                            <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch
                                display with adjustable brightness, so everything is clear as can be.</small>
                            <br>
                            <a href="" class="btn">Buy Now &#8594</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/images/banner_02.png" class="offer-img" width="72%">
                        </div>
                        <div class="col-2">
                            <p>Exclusively Available on RedStore</p>
                            <h1>Apple Iphone 11 Pro Max</h1>
                            <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch
                                display with adjustable brightness, so everything is clear as can be.</small>
                            <br>
                            <a href="" class="btn">Buy Now &#8594</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Almost before we knew it, we had left the ground.Almost before we knew it, we had left the ground.
                        Almost before we knew it, we had left the ground.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="assets/images/user-1.png">
                    <h3>Nguyen Dac Dai</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Almost before we knew it, we had left the ground.Almost before we knew it, we had left the ground.
                        Almost before we knew it, we had left the ground.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="assets/images/user-2.png">
                    <h3>Vu Hoang Son</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Almost before we knew it, we had left the ground.Almost before we knew it, we had left the ground.
                        Almost before we knew it, we had left the ground.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <img src="assets/images/user-3.png">
                    <h3>Nguyen Xuan Phuong</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5"><img src="assets/images/logo-godrej.png"></div>
                <div class="col-5"><img src="assets/images/logo-coca-cola.png"></div>
                <div class="col-5"><img src="assets/images/logo-oppo.png"></div>
                <div class="col-5"><img src="assets/images/logo-paypal.png"></div>
                <div class="col-5"><img src="assets/images/logo-philips.png"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="assets/images/play-store.png">
                        <img src="assets/images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="assets/images/logo-footer.PNG">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Easy Tutorials</p>
        </div>
    </div>
<script>
    $(document).ready(function() {
        var autoplaySlider = $('#autoplay').lightSlider({
            adaptiveHeight:true,
            item:1,
            slideMargin:0,
            auto:true,
            loop:true,
            pauseOnHover: true,
            onBeforeSlide: function (el) {
                $('#current').text(el.getCurrentSlideCount());
            }
        });
        $('#total').text(autoplaySlider.getTotalSlideCount());
    });
</script>
</body>
</html>