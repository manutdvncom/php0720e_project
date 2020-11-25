<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
    </div>
</div>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../assets/images/image1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="loginForm">
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>
                    <form id="regForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
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
    var loginForm = document.getElementById("loginForm");
    var regForm = document.getElementById("regForm");
    var indicator = document.getElementById("Indicator");
    function register() {
        regForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
    }
    function login() {
        regForm.style.transform = "translateX(300px)";
        loginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
    }

</script>
</body>
</html>