<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Detail</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <h1><a href="#" ><span>BIG</span>FAMILY</a></h1>
        </div>
        <div class="menu">
            <ul id="menuitems">
                <li><a href="" title="">Home</a></li>
                <li><a href="" title="">Products</a></li>
                <li><a href="" title="">About</a></li>
                <li><a href="" title="">Contact</a></li>
                <li><a href="" title="">Account</a></li>
            </ul>
            <img src="../assets/images/cart.png" width="30px" height="30px">
            <img src="../assets/images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <a href="" onclick="topFunction()" id="top-btn" class="btn">&#x021D1</a>
    </div>
</div>
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="../assets/images/gallery-1.jpg" width="100%" id="product-img">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="../assets/images/gallery-1.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../assets/images/gallery-2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../assets/images/gallery-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../assets/images/gallery-4.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / T-Shirt</p>
            <h1>Red T-Shirt by HRX</h1>
            <h4>$50.00</h4>
            <select>
                <option>Select size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>
            <h3>Product Details</h3>
            <br>
            <p>Có chàng trai viết lên cây lời yêu thương cô gái ấy
                Mối tình như gió như mây, nhiều năm trôi qua vẫn thấy
                Giống như bức tranh vẽ bằng dịu êm ngày thơ
                Có khi trong tiềm thức ngỡ là mơ.</p>

        </div>
    </div>
</div>
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and IOS mobile phone</p>
                <div class="app-logo">
                    <img src="../assets/images/play-store.png">
                    <img src="../assets/images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <h1><span>BIG</span>FAMILY</h1>
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
    var menuitems = document.getElementById("menuitems");
    menuitems.style.maxHeight = "0px";
    function menutoggle() {
        if (menuitems.style.maxHeight=="0px"){
            menuitems.style.maxHeight = "200px";
        } else {
            menuitems.style.maxHeight = "0px";
        }
    }
</script>
<script>
    var mybutton = document.getElementById("top-btn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    var proImg = document.getElementById("product-img");
    var smallImg = document.getElementsByClassName("small-img");
    smallImg[0].onClick = function () {
        proImg.src = smallImg[0].src;
    };
    smallImg[1].onClick = function () {
        proImg.src = smallImg[1].src;
    };
    smallImg[2].onClick = function () {
        proImg.src = smallImg[2].src;
    };
    smallImg[3].onClick = function () {
        proImg.src = smallImg[3].src;
    };
</script>
</body>
</html>