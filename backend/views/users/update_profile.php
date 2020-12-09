<?php
/**
 * Created by PhpStorm.
 * User: vu son
 * Date: 25/11/2020
 * Time: 13:11
 */
?>
<div class="container">
    <h1>Hồ sơ cá nhân</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fname">Họ</label>
            <input type="text" name="fname" id="fname" class="form-control"
                   value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''?>">
        </div>
        <div class="form-group">
            <label for="lname">Tên</label>
            <input type="text" name="lname" id="lname" class="form-control"
                   value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''?>">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="number" name="phone" id="phone" class="form-control"
                   value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                   value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''?>">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control"
                   value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''?>">
        </div>
        <div class="form-group">
            <label for="avatar">Ảnh đại diện</label>
            <input type="file" name="avatar" id="avatar" class="form-control"
                   width="80px">
        </div>
        <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
        <a href="index.php?controller=user&action=index" class="btn btn-primary">Quay lại</a>
    </form>
</div>
