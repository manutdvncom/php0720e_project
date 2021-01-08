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
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<?php
//echo "<pre>";
//print_r($categories);
//echo "</pre>";
?>
<div class="header" style="background: white">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1><a href="index.php?controller=home" ><span>BIG</span>FAMILY</a></h1>
            </div>
            <div class="menu">
                <ul id="menuitems">
                    <li><a href="index.php?controller=home&action=index" title="Trang chủ">Home</a></li>
                    <li class="dropdown">
                        <a href="index.php?controller=product&action=index" title="Sản phẩm">Products</a>
                        <div class="dropdown-menu">
                            <?php foreach ($categories as $category): ?>
                                <a class="dropdown-item" href="index.php?controller=product&action=product&categoryid=<?php echo $category['id'] ?>">
                                    <?php echo $category['name'] ?></a>
                            <?php endforeach;?>
                        </div>
                    </li>
                    <li><a href="index.php?controller=about&action=index" title="Về chúng tôi">About</a></li>
                    <li><a href="index.php?controller=contact&action=index" title="Liên hệ">Contact</a></li>
                    <li><a href="index.php?controller=customer&action=account" title="Tài khoản"> Account</a></li>
                </ul>
                <img src="assets/images/cart.png" width="30px" height="30px">
                <img src="assets/images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
        <a href="" onclick="topFunction()" id="top-btn" class="btn">&#x021D1</a>
    </div>
</div>
