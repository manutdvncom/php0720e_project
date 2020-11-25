<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
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
            <img src="../images/cart.png" width="30px" height="30px">
            <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <a href="" onclick="topFunction()" id="top-btn" class="btn">&#x021D1</a>
    </div>
</div>
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/buy-1.jpg">
                    <div>
                        <p>Red T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/buy-2.jpg">
                    <div>
                        <p>Red T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/buy-3.jpg">
                    <div>
                        <p>Red T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$250.00</td>
            </tr>
        </table>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and IOS mobile phone</p>
                <div class="app-logo">
                    <img src="../images/play-store.png">
                    <img src="../images/app-store.png">
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
</body>
</html>