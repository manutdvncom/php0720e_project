<?php
//echo "<pre>";
//print_r($categories);
//echo "</pre>";

?>
<div>
    <h1>Danh sách danh mục các loại sản phẩm</h1>
    <a href="index.php?controller=category&action=create" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm Mới</a>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="8" cellspacing="0" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
                <th>Status</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật cuối</th>
                <th>Chức năng</th>
            </tr>
            <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $v): ?>
            <tr>
                <td><?php echo $v['id']?></td>
                <td><?php echo $v['name']; ?></td>
                <td>
                    <?php if (!empty($v['avatar'])): ?>
                        <img src="assets/uploads/<?php echo $v['avatar'] ?>" width="100"/>
                    <?php endif; ?>
                </td>
                <td><?php echo $v['description']; ?></td>
                <td>
                    <?php
                    $status_text = 'Active';
                    if ($v['status'] == 0) {
                        $status_text = 'Disabled';
                    }
                    echo $status_text;
                    ?>
                </td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($v['created_at'])); ?></td>
                <td>
                    <?php
                    if (!empty($v['updated_at'])) {
                        echo date('d-m-Y H:i:s', strtotime($v['updated_at']));
                    }
                    ?>
                </td>
                <td>
                    <a href="index.php?controller=category&action=detail&id=<?php echo $v['id'] ?>"
                       title="Chi tiết">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="index.php?controller=category&action=update&id=<?php echo $v['id'] ?>" title="Sửa">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="index.php?controller=category&action=delete&id=<?php echo $v['id'] ?>" title="Xóa"
                       onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </table>
    </form>
</div>
