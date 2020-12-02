<?php
//views/users/login.php
?>
<div class="container">
    <h1>Đăng Nhập</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" class="form-control"
                   value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>">
        </div>
        <div class="form-group">
            <label for="password">Nhập khẩu</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="checkbox"  name="remember" value="">Ghi nhớ đăng nhập?
            </label>
        </div>
        <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
        <p>Chưa có tài khoản, <a href="index.php?controller=user&action=register">Đăng ký</a></p>
    </form>
</div>
