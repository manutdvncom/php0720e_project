<?php
//views/users/register.php
?>
<div class="container">
    <h1>Đăng Ký</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" class="form-control"
                   value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="confirm-password">Nhập lại mật khẩu</label>
            <input type="password" id="confirm-password" name="confirm_password" class="form-control">
        </div>
        <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary">
        <p>Đã có tài khoản, <a href="index.php?controller=user&action=login">Đăng nhập</a></p>
    </form>
</div>