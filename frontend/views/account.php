
<body>
<?php require_once "header.php" ?>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="assets/images/image1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="loginForm" action="" method="post">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <p style="color: red"><?php echo $this->error ?></p>
                        <button name="submitLogin" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>
                    <form id="regForm" action="" method="post">
                        <input type="text" name="username1" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password1" placeholder="Password">
                        <p style="color: red"><?php echo $this->error ?></p>
                        <button name="submitReg" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>
</body>
<script type="text/javascript" src="assets/js/script.js"></script>
</html>