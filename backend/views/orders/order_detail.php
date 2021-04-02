<?php
//echo "<pre>";
////print_r($orders);
////print_r($product);
//echo "</pre>";

?>
<style>
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
        margin-bottom: 1.5rem;
        font-size: 16px;
    }
    .card__Header{
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }
    .card__Body{
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }
    .card__Body table{
        margin: auto;
        margin-top: 6px !important;
        margin-bottom: 6px !important;
        max-width: none !important;
        border-collapse: separate !important;
        border-spacing: 0;
        border-radius: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;

    }
    table>tr:hover{background-color: #ebedef;}
    table,th,td{
        border: 1px solid #dee2e6;
        text-align: center;
        padding: 0.75em;
    }
    .headerTable{
        background-color: #dee2e6;
    }
    .headerTable th{
        /*border-right: #fff 1px solid;*/
        background: #dee2e6;
        color: #212529
    }
    /*.headerTable:hover{background-color:#f5f5f5;}*/
    .card__Body>.info{
        line-height: 1.3;
        margin: 1rem 0;
        padding: 1rem;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        background-color: #fff;
    }
    .info>ul>li{
        padding: 5px;
    }
    .info__Action{
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 2rem 0;
    }
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 16px;
        line-height: 1.5;
        border-radius: 0.25rem;
        color: #fff;
        text-decoration: none;
    }
    .btn-success {
        background-color: #00a65a;
        border-color: #008d4c;
    }
    .btn-cancel{
        background-color: #e1525f;
        border-color: #e1525f;
        color: #fff;
    }
    .btn-go-back{
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    .admin__Note{
        width: 80%;
        padding: 9px;
        margin: 13px;
    }
    .Note{
        display: none;
        align-items: center;
    }
    .Note>button{
        height: 4rem;
        color: #000;
        background-color: #f1e01685;
        border: 1px #f1e01685 solid;
    }
    .Note>button:hover{
        background-color: #00a65a;
        color: #fff;
    }
    .active{
        display: flex;
    }


</style>
<div class="card">
    <div class="card__Header">
        <i class="fas fa-table"></i>
        <?php if (!empty($orders)): ?>
            <?php foreach ($orders as $v){
                $sum_price=number_format($v['price_total'],0,"",".");
                $id = $v['id'];
            } ?>
        <?php endif; ?>
        <span>Chi Tiết Đơn Hàng ID: <?php echo $id?></span>
    </div>
    <div class="card__Body">
        <table border="1" cellpadding="8" cellspacing="0" width="100%">
            <tr class="headerTable">
                <th>Tên Sản Phẩm</th>
                <th>Ảnh Sản Phẩm</th>
                <th>Size Khách Lựa Chọn</th>
                <th>Số Lượng</th>
                <th>Giá Sản Phẩm</th>
            </tr>
            <?php if (!empty($product)): ?>
                <?php foreach ($product as $v): ?>
            <tr>
                <td><?php echo $v['title']?></td>
                <td><img src="assets/uploads/<?php echo $v['avatar']?>" alt="<?php echo $v['title']?>" height="100" "> </td>
                <td><?php echo $v['sizeSelect']?></td>
                <td><?php echo $v['quantity']?></td>
                <td><?php echo number_format($v['price'],0,"","."); ?>₫</td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <tr>
                <td colspan="4"style="text-align: right">Số Tiền Cần Thanh Toán :</td>
                <td><?php echo $sum_price ?>₫</td>
            </tr>
        </table>
        <div class="info">
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $v): ?>
                    <span>Trạng thái đơn hàng: <?php
                        $status_text = 'Đã thanh toán và đã giao hàng';
                        $color_css = 'style="color: #3baf56;"';
                        if ($v['payment_status'] == 0) {
                            $status_text = 'Chưa thanh toán và Chờ giao hàng';
                            $color_css = 'style="color: #ffc107;"';
                        }elseif ($v['payment_status'] == 3){
                            $status_text = 'Đơn hàng đã được hủy ';
                            $color_css = 'style="color: #e1525f;"';
                        }
                        $payment_status = $v['payment_status'];
                        ?>
                        <i <?php echo $color_css?>><?php echo $status_text?></i></span>
                    <h2>Thông tin khách hàng:</h2>
                    <ul>
                        <li><?php echo ucwords($v['gender'])." ".$v['fullname']?></li>
                        <li>Email,SĐT: <?php echo $v['email']?>,<a href="tel:<?php echo "+84".$v['mobile'] ?>"><?php echo "+84".$v['mobile'] ?></a></li>
                        <li>Địa Chỉ Nhận Hàng:<?php echo $v['address'] ?></li>
                        <li>Thời Gian Đặt Hàng Trên Hệ Thống: <?php echo date('d-m-Y H:i:s', strtotime($v['created_at'])); ?></li>
                        <li>Thời Gian Cần Giao Cho Khách: <?php echo date('d-m-Y ', strtotime($v['TimeDelivery']));?></li>
                        <li>Ghi Chú Của Khách Hàng: <?php echo $v['note'] ?></li>
                        <?php if ($v['payment_status'] == 3):?>
                            <li>Lý Do Hủy Của Khách Hàng: <b><?php echo $v['admin_note']?></b></li>
                            <li>Ngày Cập Nhật Lại: <?php echo date('d-m-Y H:i:s', strtotime($v['updated_at']));?></li>
                        <?php elseif ($v['payment_status'] == 1):?>
                            <li>Ngày Cập Nhật Lại: <?php echo date('d-m-Y H:i:s', strtotime($v['updated_at']));?></li>
                        <?php endif;?>


                    </ul>
                    <?php if ($v['payment_status'] == 0):?>
                        <div class="info__Action">
                            <div><a href="javascript:void(0)" class="btn btn-cancel">Hủy đơn hàng</a></div>
                            <div>
<!--                                <a href="javascript:void(0)" class="btn btn-success">Giao hàng Thành Công</a>-->
                                <form action="index.php?controller=order&action=updatesuccess" method="post">
                                    <input type="hidden" name="admin__Note" value="đã giao hàng thành công">
                                    <input type="hidden" name="id" value="<?php echo $id?>">
                                    <input type="hidden" name="payment_status" value="1">
                                    <button type="submit" name="submit" class="btn btn-success">Giao hàng Thành Công</button>
                                </form>
                            </div>
                            <div><a href="index.php?controller=order&action=index" class="btn btn-go-back">Trở lại đơn hàng</a></div>
                        </div>
                        <?php else:?>
                        <div class="info__Action">
                            <div><a href="index.php?controller=order&action=index" class="btn btn-go-back">Trở lại đơn hàng</a></div>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
            <?php endif; ?>
            <form method="post" action="index.php?controller=order&action=updatecancel">
                <div class="Note">
                    <input type="text" class="admin__Note" name="admin__Note" placeholder="Lý do hủy đơn hàng(Bắt buộc)" maxlength="300">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="payment_status" value="3">
                    <button type="submit" name="submit">Xác Nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-cancel').click(function(){
            $('.Note').addClass('active')
        });
    });
</script>
