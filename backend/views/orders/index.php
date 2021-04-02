
<style>
    th{
        background-color:#dee2e6 ;
    }
    th,td{
        font-size: 16px;
        padding: 10px;
    }
</style>
<div>
    <form action="" method="get">
        <input type="hidden" name="controller" value="category"/>
        <input type="hidden" name="action" value="index"/>
<!--        <div class="form-group">-->
<!--            <label>Nhập tên danh mục</label>-->
<!--            <input type="text" name="name" value="--><?php //echo isset($_GET['name']) ? $_GET['name'] : '' ?><!--"-->
<!--                   class="form-control"/>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="submit" value="Tìm kiếm" name="search" class="btn btn-primary"/>-->
<!--            <a href="index.php?controller=category" class="btn btn-secondary">Xóa filter</a>-->
<!--        </div>-->
<!--    </form>-->
    <h1>Danh sách đơn hàng</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="8" cellspacing="0" width="100%">
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Giới Tính</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Địa Chỉ Nhận Hàng</th>
                <th>Thời Gian Đặt Hàng</th>
                <th>Thời Gian Cần Giao Cho Khách</th>
                <th>Thanh Toán</th>
                <th>Chi tiết đơn hàng</th>
            </tr>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $v): ?>
                    <tr>
                        <td><?php echo $v['id']?></td>
                        <td><?php echo $v['fullname']; ?></td>
                        <td><?php echo ucwords($v['gender']); ?></td>
                        <td><a href="tel:+84<?php echo $v['mobile'];?>">+84<?php echo $v['mobile']; ?></a></td>
                        <td><?php echo $v['email']; ?></td>
                        <td><?php echo $v['address']; ?></td>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($v['created_at'])); ?></td>
                        <td><?php echo date('d-m-Y ', strtotime($v['TimeDelivery'])); ?></td>
                        <td class="payment-status">
                            <?php
                            $status_text = 'Đã thanh toán';
                            $color_css = 'style="color: #3baf56;"';
                            if ($v['payment_status'] == 0) {
                                $status_text = 'Chưa thanh toán';
                                $color_css = 'style="color: #ffc107;"';
                            }elseif ($v['payment_status'] == 3){
                                $status_text = 'Đơn hàng đã được hủy ';
                                $color_css = 'style="color: #e1525f;"';
                            }
                            ?>
                            <i <?php echo $color_css;?>><?php echo $status_text?></i>
                        </td>
                        <td>
                            <a href="index.php?controller=order&action=orderdetail&id=<?php echo $v['id']?>">Xem đơn hàng</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Không có bản ghi nào</td>
                </tr>
            <?php endif;?>
        </table>
        <?php echo $pages; ?>
    </form>
</div>
<script type="javascript">

</script>
