<?php
//mvc_demo/views/categories/create.php
?>
<form action="" method="post" enctype="multipart/form-data">
    <h1>Thêm mới danh mục</h1>
    <div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh:</label>
        <input type="file" class="form-control" id="avatar" name="avatar">
    </div>
    <div class="form-group">
        <label for="description">Mô tả:</label>
        <textarea class="form-control" rows="5" id="description" name="description">
            <?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?>
        </textarea>
    </div>
    <div class="form-group">
        <?php
        $selected_active = '';
        $selected_disabled = '';
        if (isset($_POST['status'])) {
            switch ($_POST['status']) {
                case 0:
                    $selected_disabled = 'selected';
                    break;
                case 1:
                    $selected_active = 'selected';
                    break;
            }
        }
        ?>
        <label>Trạng thái</label>
        <select name="status" class="form-control">
            <option value="0" <?php echo $selected_disabled ?> >Active</option>
            <option value="1" <?php echo $selected_active ?> >Disabled</option>
        </select>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Lưu">
    <input type="reset" class="btn btn-primary" value="Reset">
    <a href="index.php?controller=category&action=index" class="btn btn-primary">Quay lại</a>
</form>

