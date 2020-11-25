<div>
    <h1>Quản lý user</h1>
    <form action="" method="post" enctype="multipart/form-data"></form>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Lần đăng nhập gần nhất</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật cuối</th>
            <th></th>
        </tr>
        <?php if (!empty($user)): ?>
        <?php foreach ($user as $v): ?>
        <tr>
            <td><?php echo $v['id']?></td>
            <td><?php echo $v['username']?></td>
            <td><?php echo $v['password']?></td>
            <td><?php echo $v['first_name']?></td>
            <td><?php echo $v['last_name']?></td>
            <td><?php echo $v['phone']?></td>
            <td><?php echo $v['address']?></td>
            <td><?php echo $v['email']?></td>
            <td>
                <?php if (!empty($v['avatar'])): ?>
                    <img src="assets/uploads/<?php echo $v['avatar'] ?>" width="100"/>
                <?php endif; ?>
            </td>
            <td></td>
            <td><?php echo date('d-m-Y H:i:s', strtotime($v['created_at'])); ?></td>
            <td>
                <?php
                if (!empty($v['updated_at'])) {
                    echo date('d-m-Y H:i:s', strtotime($v['updated_at']));
                }
                ?>
            </td>
            <th>
                <a href="index.php?controller=user&action=detail&id=<?php echo $v['id'] ?>"
                   title="Chi tiết">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="index.php?controller=user&action=profile&id=<?php echo $v['id'] ?>" title="Sửa">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <a href="index.php?controller=user&action=delete&id=<?php echo $v['id'] ?>" title="Xóa"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">
                    <i class="fa fa-trash"></i>
                </a>
            </th>
        </tr>
        <?php endforeach;?>
        <?php endif; ?>
    </table>
</div>