<style>
    body{
        background-color:#f0f0f0;
    }
    section{
        margin-top:55px;
    }
    a.buymore{
        color: #ff523b;
    }
    .bar-top{
        display: block;
        overflow: hidden;
        width: 100%;
        max-width: 600px;
        margin: auto;
    }
    .bar-top .buymore{
        position: relative;
        padding-left: 15px;
        padding-top: 15px;
        line-height: 40px;
        font-size: 14px;
        float: left;
    }
    .buymore::before,.buymore::after{
        content: '';
        position: absolute;
        left: 0;
        top: 28px;
        top: 28px;
        top: 28px;
        width: 0;
        height: 0;
        border-right: 7px solid #ff523b;
        border-top: 7px solid transparent;
        border-bottom: 7px solid transparent;
    }
    .buymore::after {
        margin-left: 2px;
        border-width: 9px;
        border-right-color: #f0f0f0;
        top: 26px;
    }
    .yourcart {
        display: block;
        overflow: hidden;
        background: #f0f0f0;
        text-align: right;
        color: #333;
        line-height: 40px;
        padding-top: 15px;
    }
    .wrap_cart{
        max-width: 600px;
        width: 100%;
        display: block;
        margin: auto;
        background: #fff;
        border:1px solid #d8d8d8;
        box-shadow: 0 0 20px rgba(0,0,0,.15);
        position: relative;
    }
    .overlay {
        display: none;
        width: 100%;
        height: 100%;
        max-height: 200vh;
        background: rgba(255,255,255,0.5);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100000;
        clear: both;
        text-align: center;
        overflow: hidden;
    }
    .overlay .cswrap{
        position: absolute;
        top: 50%;
    }
    .overlay .cswrap span.dot.active{
        width: 8px;
        height: 8px;
        border: 1px solid #ff523b;
        background: #ff523b;
        border-radius: 50%;
        float: left;
        margin: 0 2px;
        transform: scale(0);
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.1);
        animation: overlay 1s ease infinite;
    }
    @keyframes overlay{
        0%{
            opacity: 0;
            transform: scale(0);
        }
        50%{
            opacity: 1;
            transform: scale(1);
        }
        100%{
            opacity: 0;
            transform: scale(0);
        }
    }
    .list_order {
        display: block;
        overflow: visible;
        background: #fff;
        clear: both;
        padding-top: 10px;
        list-style: none;
    }
    .list_order li {
        display: block;
        overflow: visible;
        border-bottom: 1px solid #f5f5f5;
        margin: 10px 30px;
        padding-bottom: 10px;
        min-height: 110px;
    }
    .list_order li .colimg {
        float: left;
        overflow: hidden;
        width: 85px;
        text-align: center;
    }
    .list_order li img {
        display: inline-block;
        width: 75px;
        margin: 5px 0 10px;
    }
    .list_order li .colimg .delete {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #999;
        width: 40px;
        border: 0;
        background: #fff;
        margin: auto;
        cursor: pointer;
    }
    .list_order li .colimg .delete span {
        float: left;
        top: -3px;
        width: 12px;
        height: 12px;
        background: #ccc;
        border-radius: 10px;
        position: relative;
        margin-top: 3px;
    }
    .list_order li .colimg .delete span:before {
        content: '';
        width: 2px;
        height: 8px;
        background: #fff;
        position: absolute;
        top: 2px;
        left: 5px;
        transform: rotate(45deg);
    }
    .list_order li .colimg .delete span:after {
        content: '';
        width: 2px;
        height: 8px;
        background: #fff;
        position: absolute;
        top: 2px;
        right: 5px;
        transform: rotate(-45deg);
    }
    .list_order li .colinfo {
        display: inline-block;
        overflow: visible;
        width: 450px;
        padding-left: 5px;
    }
    .list_order li .colinfo strong {
        font-weight: normal;
        font-size: 14px;
        color: #c10017;
        float: right;
    }
    .list_order li .colinfo>a {
        font-weight: bold;
    }
    .list_order li .colinfo>a:hover {
        color: #ff523b;
    }
    .list_order li .colinfo a {
        display: inline-block;
        font-size: 14px;
        color: #333;
        text-overflow: ellipsis;
        width: 62%;
    }
    .list_order li .promotion {
        background: #fff;
        padding: 5px 0;
        width: 345px;
        height: auto;
        margin: 0 10px 0 0;
        display: block;
        overflow: hidden;
    }
    .list_order li .promotion span {
        display: block;
        overflow: hidden;
        padding-left: 10px;
        color: #333;
        margin-bottom: 5px;
        font-size: 12px;
    }
    .list_order li .promotion span.notnull:before {
        content: '•';
        display: inline-block;
        vertical-align: middle;
        margin-right: 5px;
        font-size: 20px;
        color: #999;
        margin: 0 3px 0 -10px;
    }
    .list_order li .promotion span a {
        display: inline;
        font-size: 12px;
        color: #288ad6;
    }
    .choosesize {
        float: left;
        cursor: pointer;
        position: relative;
        width: 140px;
        border: 1px solid #dfdfdf;
        background: #fff;
        border-radius: 3px;
        line-height: 32px;
        font-size: 14px;
        color: #ff523b;
        padding: 0 5px;
        margin: 5px 10px 0 0;
    }
    .choosesize span {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 91%;
        cursor: pointer;
    }
    .choosesize:after {
        content: '';
        width: 0;
        right: 0;
        border-top: 6px solid #ff523b;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        display: inline-block;
        vertical-align: middle;
        margin: 13px 5px 0 0;
        float: right;
        position: absolute;
        top: 0;
    }
    .choosesize .listsize{
        display: none;
        padding: 0 10px;
        position: absolute;
        top: 36px;
        left: 0;
        z-index: 99;
        border-radius: 4px;
        background: #fff;
        border: 1px solid #d9d9d9;
        box-shadow: 0 10px 10px 0 rgba(0,0,0,.1);
        width: 100%;
        overflow:visible;
        height: 143px;
        overflow-y: scroll;
    }
    .listsize::-webkit-scrollbar{width: 4px;}
    .listsize::-webkit-scrollbar-track{
            background: #f0f0f0;
            border: 2px;
    }
    .listsize::-webkit-scrollbar-thumb{
            background: #ff523b;
    }
    .choosesize .pseudsize.act:before, .choosesize .pseudosize.act:after{
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50px;
        width: 0;
        height: 0;
        border-bottom: 10px solid #ccc;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    .choosesize .pseudosize.act:after{
        border-width: 9px;
        margin-left: 1px;
        border-bottom-color: #fff;
        z-index: 100;
    }
    .blocksize{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding:7px 0 10px 0;
        border-bottom: 1px solid #eee;
    }
    .choosesize .listsize img{
        width: 30px;
        height: 30px;
        margin: 0;
    }
    .choosenumber {
        float: right;
        overflow: hidden;
        position: relative;
        width: 25%;
        border: 1px solid #dfdfdf;
        background: #fff;
        border-radius: 3px;
        line-height: 32px;
        font-size: 14px;
        color: #333;
        margin: 5px 0 5px 0;
    }
    .abate {
        float: left;
        border-right: 1px solid #dfdfdf;
        background: #fff;
        width: 32%;
        height: 32px;
        position: relative;
        pointer-events: none;
    }
    .abate:before {
        content: '';
        width: 12px;
        height: 2px;
        background: #ccc;
        display: block;
        margin: 15px auto;
    }
    .abate.active{
        cursor: pointer;
    }
    .abate.active:before {
        background:#ff523b;
    }
    .number {
        font-size: 14px;
        color: #333;
        float: left;
        width: 33%;
        height: 32px;
        text-align: center;
    }
    .augment {
        float: right;
        border-left: 1px solid #dfdfdf;
        background: #fff;
        width: 32%;
        height: 32px;
        position: relative;
        cursor: pointer;
        pointer-events: auto;
    }
    .augment:before {
        content: '';
        width: 12px;
        height: 2px;
        background: #ff523b;
        display: block;
        margin: 15px auto;
    }
    .augment:after {
        content: '';
        width: 2px;
        height: 12px;
        background: #ff523b;
        display: block;
        margin: 0 auto;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
    }
    .area_total {
        padding: 10px 30px 10px;
        border-bottom: 1px solid #d8d8d8;
    }
    .area_total div {
        font-size: 14px;
        color: #333;
        line-height: 22px;
    }
    .area_total div span:nth-child(2) {
        float: right;
    }
    .area_total div.pay strong {
        float: right;
        font-size: 16px;
        color: #c10017;
    }
    .textcode {
        color: #288ad6 !important;
        cursor: pointer;
        text-align: right;
    }
    .inputcode{
        margin:10px 0;
    }
    .inputcode input#CouponCode {
        display: block;
        width: 40%;
        border: 1px solid #d9d9d9;
        border-radius: 4px;
        padding: 9px;
        height: 40px;
        float: right;
        margin-right: 10px;
    }
    .inputcode button {
        float: right;
        background: #288ad6;
        border-radius: 4px;
        border: 0;
        height: 40px;
        font-size: 14px;
        color: #fff;
        width: 90px;
        text-align: center;
        cursor: pointer;
    }
    .infouser {
        display: block;
        overflow: hidden;
        background: #fff;
        padding: 0 30px;
        width: 100%;
    }
    .malefemale {
        display: block;
        overflow: hidden;
        padding: 20px 0 0;
        background: #fff;
    }
    .areainfo input{
        display: block;
        padding: 19px 0;
        height: 20px;
        border: 1px solid #d9d9d9;
        border-radius: 4px;
        margin: 10px 0 5px;
        text-indent: 10px;
        width: 99.6%;
    }
    input.saveinfo.error{
        border: 1px solid #dd4b39;
    }
    .malefemale{
        position: relative;
        display: flex;
    }
    .malefemale label {
        float: left;
        margin-right: 30px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    .malefemale label span{
        padding: 5px;
    }
    .areainfo input:focus{
        outline: none;
    }
    span.error, div.error{
        font-size: 12px;
        color: #dd4b39;
        line-height: 20px;
    }
    .areainfo .error{
        margin-bottom: 5px;
    }
    .areainfo .left {
        float: left;
        width: 49%;
        margin-bottom: 5px;
    }
    .areainfo .right {
        float: right;
        width: 49%;
        margin-bottom: 5px;
    }
    .area_other {
        display: block;
        overflow: visible;
        padding: 5px 30px 0;
        background: #fff;
        margin-bottom: 5px;
    }
    .area_other .textnote{
        margin-bottom: 10px;
    }

    .ship_address label{
        display: inline-flex;
        align-items: center;
        margin-right: 15px;
    }
    .ship_address label input{
        margin-right: 5px;
    }
    .area_address{
        display: block;
        overflow: visible;
        margin-top: 15px;
        padding: 20px ;
        background: #f0f0f0;
        position: relative;
    }
    .area_address:before{
        content: '';
        width: 0;
        height: 0;
        background: #fff;
        position: absolute;
        top: -10px;
        left: 65px;
        border-bottom: 10px solid #f0f0f0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    .area_address.supermarket:before{
        left:210px;
    }
    .area_address input{
        text-indent: 10px;
        cursor: text;
    }
    .grid4{
        display: grid;
        grid-template-columns: 1.7fr 2fr;
        grid-row-gap: 1em;
        grid-column-gap: 1em;
    }
    .dropdown{
        border: 1px solid #d9d9d9;
        color: #ff523b;
        background: #fff;
        border-radius: 3px;
        font-size: 14px;
        padding: 10px 7.5px;
        position: relative;
    }
    .dropdown{
        height: 40px;
        cursor: pointer;
    }
    .dropdown.show:before,.dropdown.show:after{
        content: '';
        position: absolute;
        z-index: 15;
        bottom: -6px;
        left: 50px;
        width: 0;
        height: 0;
        border-bottom: 10px solid #ccc;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    .dropdown.show:after {
        border-width: 9px;
        margin-left: 1px;
        border-bottom-color: #fff;
    }
    .pseudo:after {
        content: '';
        width: 0;
        right: 0;
        border-top: 6px solid #ff523b;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        display: inline-block;
        vertical-align: middle;
        margin: 7px 5px 0 0;
        float: right;
        position: absolute;
    }
    .layer,.district,.ward{
        position: absolute;
        top: 43px;
        z-index: 15;
        left: 0;
        width: 300px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding-bottom: 10px;
        max-height: 170px;
        overflow: hidden;
    }
    .layer.grid2.ward {
        top: 35px;
    }
    div#ward:before,div#ward:after{
        bottom: 0px;
    }
    .grid2{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 1em;
    }
    .list{
        padding: 10px 10px 0;
    }
    .district{
        left: -38px;
    }
    .layer.grid2 {
        grid-column-gap: unset;
    }
    input#BillingAddress_Address {
        width: 100%;
        color: #333
    }
    .timeblock{
        padding: 10px;
        margin-top: 10px;
        background: #fff;
        border-radius: 2px;
        border-left: 3px solid #4A90E2;
    }
    .timeblock .tit {
        margin-bottom: 5px;
        font-weight: bold;
        color: #4a90e2;
    }
    .ol label{
        display: flex;
        align-items: center;
        cursor: pointer;
        line-height: 19px;
        margin-bottom: 10px;
    }
    .ol input{
        margin-right: 5px;
        cursor: pointer;
    }
    .infocontact{
        margin: 10px 0;
        padding: 0 20px;
        background: #fff;
        width: 100%;
        display: none
    }
    .infocontact .malefemale{
        padding-top: 10px;
    }
    .infocontact .areainfo{
        background: #fff;
        display : block;
    }
    .deviceother{
        display: none
    }
    .deviceother input{
        display: block;
        padding: 19px 0;
        height: 20px;
        border: 1px solid #d9d9d9;
        border-radius: 4px;
        margin: 10px 0 5px;
        text-indent: 10px;
        width: 99.6%;
    }
    .new-follow .choosepayment a {
        margin-bottom: 10px;
    }
    .new-follow .choosepayment {
        overflow: hidden;
    }
    .payoffline {
        float: left;
        overflow: hidden;
        width: 260px;
        padding: 9px 0;
        margin: 10px 0 20px 30px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        line-height: normal;
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        background: #ff523b;
    }
    button.payoffline {
        border: none;
        cursor: pointer;
    }
    .new-follow .payoffline.full {
        width: 66%;
        margin-left: 18%;
        padding: 15px 0px;
    }
    .new-follow p {
        margin-bottom: 15px;
    }
    .provision {
        display: block;
        overflow: hidden;
        font-size: 11px;
        color: #999;
        text-align: center;
        line-height: 50px;
    }
    .provision a {
        color: #999;
        display: inline;
    }
    .null_cart {
        overflow: hidden;
        width: 490px;
        margin: auto;
        text-align: center;
        font-size: 16px;
        color: #666;
        transform: translate(0,50%);
        -webkit-transform: translate(0,50%);
        height: 240px;
    }
    .iconnoti {
        background: url(assets/images/iconcartmobile@2x.png) no-repeat;
        background-size: 80px 85px;
        width: 20px;
        height: 20px;
        vertical-align: middle;
        display: inline-block;
    }
    .iconnull {
        background-position: 0 -25px;
        width: 70px;
        height: 54px;
        display: block;
        margin: 10px auto;
    }
    .buyother {
        display: block;
        overflow: hidden;
        background: #fff;
        line-height: 40px;
        text-align: center;
        margin: 15px auto;
        width: 300px;
        font-size: 14px;
        color: #ff523b;
        font-weight: 600;
        text-transform: uppercase;
        border: 1px solid #ff523b;
        border-radius: 4px;
    }
    .null_cart .callship {
        display: block;
        overflow: hidden;
        padding: 10px;
        font-size: 14px;
        color: #333;
        line-height: 22px;
        margin: auto;
        text-align: center;
        width: 100%;
        background: none;
    }
    .null_cart .callship a{
        display: inline;
        color: #ff523b;
        font-weight: 600;
    }
    .grid2::-webkit-scrollbar{width: 4px;}
    .grid2::-webkit-scrollbar-track{
        background: #f0f0f0;
        border: 2px;
    }
    .grid2::-webkit-scrollbar-thumb{
        background: #ff523b;
    }
</style>
<?php
//    echo "<pre>";
//        foreach ($_SESSION['cart'] as $product_id => $cart):
//            echo $cart['quantity'];
//        endforeach;
//    echo "</pre>";



//echo "</pre>";

?>


<section id="cart">
    <div class="bar-top">
        <a href="index.php" class="buymore">Mua thêm sản phẩm khác</a>
        <div class="yourcart"><h4>Giỏ Hàng Của Bạn</h4></div>
    </div>
    <div class="wrap_cart">
        <div class="overlay">
			<span class="cswrap">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</span>
        </div>
        <form action="index.php?controller=pay&action=index" method="post" accept-charset="utf-8">
            <div class="detail_cart">
                <ul class="list_order">
                    <?php
                        $totalmoney = 0;
                        foreach ($_SESSION['cart'] as $product_id => $cart): $totalmoney += $cart['price']; ?>
                    <li>
                            <div class="colimg">
                                <a href="">
                                    <img data-value="<?php echo $product_id ?>" src="../backend/assets/uploads/<?php echo $cart['avatar']?>" >
                                </a>
                                <a class="delete" href="index.php?controller=cart&action=delete&id=<?php echo $product_id; ?>">
                                    <span></span>
                                    Xóa
                                </a>
                            </div>
                            <div class="colinfo">
                                <strong>
                                    <?php
                                    // Format lại dạng tiền, ngăn cách hàng nghìn bằng ,
                                    $price_format = number_format($cart['price']);
                                    echo $price_format;
                                    ?>₫
<!--                                    <input type="hidden" name="price[]" value="">-->
                                </strong>
                                <a href="index.php?controller=product&action=detail&id=<?php echo $product_id ; ?>"><?php echo $cart['name']; ?></a>
                                <div class="choosesize"  id="get-id-choosize">
                                    <div class="pseudosize"></div>
                                    <span class="size">Size: </span>
                                    <div class="listsize">
                                            <?php foreach ($cart['size'] as $row ):?>
                                                <?php foreach ($row as $innerArray ):?>
                                                <div class="blocksize" data-size="<?php echo $innerArray['size_text']?>">
                                                    <span>
                                                        <?php echo " ".$innerArray['size_text'];?>
                                                    </span>
                                                </div>
                                                <?php endforeach;?>
                                            <?php endforeach;?>

                                    </div>
                                    <input type="hidden" name="size[]" value="">
                                </div>

                                <div class="choosenumber">
                                    <div class="abate active" style="pointer-events: auto;" data-id="<?php echo $product_id ; ?>"></div>
                                    <div class="number"><?php echo $cart['quantity']; ?></div>
                                    <div class="augment" data-id="<?php echo $product_id ; ?>"></div>
                                    <input type="hidden" name="quantity[]" value="<?php echo $cart['quantity']; ?>" class="amount">
                                    <input type="hidden" name="price[]" value="<?php echo $cart['price']; ?>">
                                </div>
                                <div class="clr"></div>
                            </div>

                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="area_total">
                    <div class="pay">
                        <b>Cần thanh toán:</b>
                        <strong id="totalmoney"><?php echo number_format($totalmoney);?>₫</strong>
                        <input type="hidden" name="totalmoney" value="">
                    </div>
                    <div class="boxCouponCode" onclick="myFunction()">
                        <div class="textcode">Sử dụng mã giảm giá</div>
<!--                        <div class="inputcode " style="display:none;">-->
<!--                            <button type="button">Áp dụng</button>-->
<!--                            <input name="CouponCode" id="CouponCode" placeholder="Nhập mã giảm giá" maxlength="20">-->
<!--                            <label id="CouponCode-error" class="error" for="CouponCode" style="display: none;"></label>-->
<!--                        </div>-->
                    </div>
                    <div class="clr"></div>
                    <script>
                        function myFunction() {
                            alert("Chức năng hiện chưa thể dùng chúng tôi sẽ sớm cập nhật!");
                        }
                    </script>
                </div>
            </div>
            <div class="infouser ">
                <div class="malefemale">
                    <label><input type="radio" name="gender" value="anh" id="male" <?php if(isset($_SESSION['gender'])){ if($_SESSION['gender']=='anh')echo "checked"; } ?> ><span>Anh</span></label>
                    <label><input type="radio" name="gender" value="chị" id="female" <?php if(isset($_SESSION['gender'])){ if($_SESSION['gender']=='chị')echo "checked"; } ?>><span>Chị</span></label>
                    <span id="errorgender" class="error"></span>
                </div>
                <div class="areainfo">
                    <div class="left">
                        <input type="text" class="saveinfo" name="FullName" placeholder="Họ và tên" maxlength="50" value="<?php  !empty($_SESSION['fullname'])? $_SESSION['fullname']: '' ?>">
                        <div class="error" id="errorFullName"></div>
                    </div>
                    <div class="right">
                        <input type="tel" class="saveinfo" name="PhoneNumber" placeholder="Số điện thoại" maxlength="10" value="<?php echo !empty($_SESSION['phonenumber'])? $_SESSION['phonenumber']: '' ?>">
                        <div class="error" id="errorPhoneNumber"></div>
                    </div>
                    <div class="">
                        <input type="email" class="saveinfo" name="Email" placeholder="Địa chỉ email" value="">
                        <div class="error" id="errorEmail"></div>
                    </div>
                    <input type="text" class="note" id="OrderNote" name="OrderNote" placeholder="Yêu cầu khác (không bắt buộc)" maxlength="300">
                </div>
            </div>
            <div class="area_other">
                <div class="textnote">
                    <b>Để được phục vụ nhanh hơn,</b> hãy chọn thêm:
                </div>
                <div class="ship_address show">
                    <label><input type="radio" name="ship" value="1" checked="checked"><span>Địa chỉ giao hàng</span></label>
                    <label><input type="radio" name="ship" value="0"><span>Nhận tại siêu thị</span></label>
                </div>
                <div class="area_address">
                    <div class="grid4">
                        <div id="citys" class="dropdown">
                            <div class="pseudo" id="default" value="1">Hồ Chí Minh</div>
                            <div class="layer grid2 city">
                                <div class="list province" value="" ></div>
                            </div>
                        </div>
                        <div id="district" class="dropdown">
                            <div class="pseudo" id="districtvalue" value="0">Chọn quận, huyện</div>
                            <div class="layer grid2 district">
                                <div class="list listdist" value="0"></div>
                            </div>
                            <div class="error" id="nulldistrict" style="line-height: 30px;margin-top:10px"></div>
                        </div>
                        <div id="ward" class="dropdown">
                            <div class="pseudo" id="wardvalue" value="0">Chọn phường, xã</div>
                            <div class="layer grid2 ward">
                                <div class="list listward" value=""></div>
                            </div>
                            <div class="error" id="nullward" style="line-height: 30px;margin-top:11px"></div>
                        </div>
                        <div class="billaddress">
                            <input type="text" placeholder="Số nhà, tên đường" id="BillingAddress_Address" name="BillingAddress" maxlength="200" class="ShipAtHome homenumber saveinfo dropdown" value="" width="100%">
                            <div class="error" id="address" style="line-height: 30px;"></div>
                        </div>
                    </div>
                    <input type="hidden" name="province" value="Hồ Chí Minh">
                    <input type="hidden" name="district" value="">
                    <input type="hidden" name="ward" value="">
                    <p class="introduction" style="margin-top:20px;color: #4b4b4b;display: block"><b>Hướng dẫn: </b>Chọn địa chỉ để biết chính xác thời gian giao hàng</p>
                    <div class="timeblock" style="display: none">
                        <div class="tit">Miễn phí giao hàng</div>
                        <div class="time">Thời gian nhận hàng dự kiến giao hàng đến :
                            <b> Trước <?php $currenttime = date('l, yy-m-d H:i:s');
                                $date = new DateTime($currenttime);
                                $date->add(new DateInterval('P2D'));
                                $TimeDelivery = $date->format('H:i, d-m-yy');
                                echo $date->format('H')."h "." Ngày ".$date->format('d/m');
                                $time = strtotime(date('Y-m-d H:i:s'));
                                $time += 3600*24*2;
                                $TimeDelivery = date('Y-m-d H:i:s',$time);
                                ?>
                            </b>
                            <input type="hidden" name="TimeDelivery" value="<?php  echo $TimeDelivery ?>">
                        </div>
                    </div>

<!--                    <div class="ol ol1" style="margin-top: 10px;">-->
<!--                        <label>-->
<!--<!--                            <input type="checkbox" name="serviceother[]" value="Gọi người khác nhận hàng (Nếu có)">-->
<!--<!--                            <span> Gọi người khác nhận hàng (Nếu có)</span>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="infocontact">-->
<!--                        <div class="malefemale">-->
<!--                            <label><input type="radio" name="serviceother[]" value="anh" id="male"><span>Anh</span></label>-->
<!--                            <label><input type="radio" name="serviceother[]" value="chị" id="female"><span>Chị</span></label>-->
<!--                        </div>-->
<!--                        <div class="clr"></div>-->
<!--                        <div class="areainfo">-->
<!--                            <div class="left">-->
<!--                                <input type="text" class="saveinfo" name="serviceother[]" placeholder="Họ và tên" maxlength="50" value="">-->
<!--                            </div>-->
<!--                            <div class="right">-->
<!--                                <input type="tel" class="saveinfo" name="serviceother[]" placeholder="Số điện thoại" maxlength="10" value="">-->
<!--                            </div>-->
<!--                            <div class="clr"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clr"></div>-->
<!---->
<!--                    <div class="ol ol3">-->
<!---->
<!--                    </div>-->

                </div>
            </div>
            <div class="new-follow">
                <div class="choosepayment">
                    <input type="hidden" name="TimeOrder" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <button name="submit" type="submit" onclick="return checkInforUser()" class="payoffline full">Xác nhận lại đơn hàng</button>
                </div>
                <p style="text-align:center">Bạn có thể chọn hình thức thanh toán sau khi đặt hàng</p>
            </div>
        </form>
    </div>
    <strong class="provision">Bằng cách đặt hàng, bạn đồng ý với <a href="" target="_blank" style="text-decoration: underline;">Điều khoản sử dụng</a> của BigFamily</strong>
</section>
<section id="nullcart" style="height: 400px;margin-top: 0;">
    <div class="null_cart">
        <i class="iconnoti iconnull"></i>
        Không có sản phẩm nào  trong giỏ hàng
        <a href="index.php" class="buyother">Về trang chủ</a>
        <div class="callship">Khi cần trợ giúp vui lòng gọi
            <a href="tel:18001060">1900.2803</a> hoặc <a href="tel:02836221060">024.2001.2803</a> (7h30 - 22h)
        </div>
    </div>
</section>
<script type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function($) {
        $('.choosesize').each(function() {
        	$('.size',this).append($('.blocksize',this).attr('data-size'))
        	$('input[name="size[]"]',this).val($('.blocksize',this).attr('data-size'))
        });
        $('.choosesize').click(function() {
        	$('.listsize', this).slideToggle(200)
        	$('.pseudosize', this).toggleClass('act');
        });
        $('.blocksize').click(function(event) {
        	size = $(this).attr('data-size');
        	$(this).closest('.choosesize').find('span.size').text("size: "+size);
        	inputsize = $(this).closest('.choosesize').find('input')
        	inputsize.val(size)
        	src = $(this).find('img').attr('src')
        	$(this).closest('.list_order li').find('.colimg a img').attr('src',src)
        });

        $('.textcode').click( function(event) {
            $('.inputcode').css('display','block')
        });
        $('.city,.district,.ward').hide();
        $('#citys').click(function(event) {
            $('.city').css('overflow-y','scroll');
            $('.city').slideToggle(300);
            $('#citys').toggleClass('show');
            if($('.district').css('display')=='grid'){
                $('.district').slideToggle(100)
                $('#district').toggleClass('show');
            }
            if($('.ward').css('display')=='grid'){
                $('.ward').slideToggle(100)
                $('#ward').toggleClass('show');
            }

        });
        $('.city').on('click','.province',function(event) {
            timing();
            $('.dot').addClass('active')
            city = $(this).html();
            index = $(this).attr('value');
            $('#default').html(city);
            $('#default').attr('value',index);
        });
        $('#district').click(function(event) {
            $('.district').css('overflow-y','scroll');
            $('.district').slideToggle(300);
            $('#district').toggleClass('show');
            $('.ward').css('overflow','hidden');
            if($('.city').css('display')=='grid'){
                $('.city').slideToggle(100)
                $('#citys').toggleClass('show');
            }
            if($('.ward').css('display')=='grid'){
                $('.ward').slideToggle(100)
                $('#ward').toggleClass('show');
            }
        });

        $('.district').on('click','.listdist',function(event) {
            timing();
            $('.dot').addClass('active')
            listdist = $(this).html();
            index = $(this).attr('value');
            $('#districtvalue').html(listdist);
            $('#districtvalue').attr('value',index);
        });
        $('#ward').on('click',function(event) {
            $('.ward').css('overflow-y','scroll');
            $('.ward').slideToggle(300);
            $('#ward').toggleClass('show');
            if($('.city').css('display')=='grid'){
                $('.city').slideToggle(100)
                $('#citys').toggleClass('show');
            }
            if($('.district').css('display')=='grid'){
                $('.district').slideToggle(100)
                $('#district').toggleClass('show');
            }
        })
        $('.ward').on('click','.listward',function(event) {
            timing();
            $('.dot').addClass('active')
            listward = $(this).html();
            index = $(this).attr('value');
            $('#wardvalue').html(listward);
            $('#wardvalue').attr('value',index);
        });

        $.post('index.php?controller=getaddress&action=get_province', {}, function(data) {
            $('.city').html(data);
        });
        ProvinceID = $('#default').attr('value');
        $.post('index.php?controller=getaddress&action=get_district', {'id': ProvinceID}, function(data) {
            $('.district').html(data);
        });

        $('.city').on('click','.province',function(event) {
            ProvinceID = $('#default').attr('value');
            $.post('index.php?controller=getaddress&action=get_district', {'id': ProvinceID}, function(data) {
                $('.district').html(data);
            });
        });
        $('.district').on('click','.listdist',function(event) {
            DistrictID = $('#districtvalue').attr('value');
            $.post('index.php?controller=getaddress&action=get_ward', {'id': DistrictID}, function(data) {
                $('.ward').html(data);
            });
            listprovince = $('#default').html()
            $('input[name="province"]').val(listprovince)
            listdist = $('#districtvalue').html();
            $('input[name="district"]').val(listdist)
            $('#nulldistrict').css('display', 'none');
        });
        $('.ward').on('click','.listward', function(event) {
            listward = $('#wardvalue').html();
            $('input[name="ward"]').val(listward)
            $('#nullward').css('display', 'none');
        });
        $('input[type="radio"]').change(function(event) {
            $('#errorgender').html('')
        });
        $('input.saveinfo').change(function(event) {
            $(this).removeClass('error')
            $('#errorFullName').html('')
        });
        $('input[name="PhoneNumber"]').change(function(event) {
            $('#errorPhoneNumber').html('')
        });
        $('input[name="Email"]').change(function(event) {
            $('#errorEmail').html('')
        });
        $('input[name="BillingAddress"]').change(function(event) {
            $('#address').html('')
        });
        $('input[value="0"]').click(function(event) {
            $('.area_address').addClass('supermarket');
            $('#ward, #BillingAddress_Address,#address,.ol1,.ol3,.infocontact,.deviceother').css('display','none')
            $('.introduction').html("Chúng tôi sẽ sớm cập nhật các siêu thị gần nhất đến quý khách.<br>Quý khách vui lòng đến các siêu thị thuộc hệ thống <b style='color: #ff523b';>BIG</b><b>FAMILY</b> để nhận sản phẩm trong 24h, hết 24h đơn hàng sẽ tự động hủy!")
            $('.introduction').css('margin','10px 0 20px ')
            $('.introduction').css('line-height','22px')
        });
        $('input[value="1"]').click(function(event) {
            $('.area_address').removeClass('supermarket');
            $('#ward, #BillingAddress_Address,.ol1,.ol3').css('display','block')
            $('.introduction').html("<b>Hướng dẫn: </b>Chọn địa chỉ để biết chính xác thời gian giao hàng")

        });
        function delay(){
            $('.overlay').css('display','none')
        }
        function timing(){
            $('.overlay').css('display','block')
            setTimeout(delay,300)
        }
        $('.blocksize,.augment,.abate,.province,.listdist,.listward,.delete').on('click', function(event) {
            timing();
            $('.dot').addClass('active')
        });
        $('.ward').on('click','.listward', function(event) {
            $('.introduction').css('display','none')
            $('.timeblock').css('display','block')
        });
        $('.ol1 label input').change(function(event) {
            $('.infocontact').slideToggle(400)
            $('.infocontact').css('overflow','hidden')
        });
        $('.ol3 label input').change(function(event) {
            $('.deviceother').slideToggle(400)
        });
    });
</script>
<script type="text/javascript" charset="utf-8">
    function checkInforUser(){
        male = document.getElementById('male');
        female = document.getElementById('female');
        district = document.getElementById('districtvalue').innerHTML
        ward = document.getElementById('wardvalue').innerHTML
        if(district=='Chọn quận, huyện'){
            document.getElementById('nulldistrict').innerHTML = 'Quý khách vui lòng chọn quận huyện'
            document.getElementById('district').style.marginBottom = '10px'
            document.getElementById("nulldistrict").style.cssText = 'line-height:30px;margin-top:7px;'
        }
        if(ward=='Chọn phường, xã'){
            document.getElementById('nullward').innerHTML = 'Quý khách vui lòng chọn phưỡng xã'
        }
        if (!male.checked&&!female.checked) {
            document.getElementById('errorgender').innerHTML = "Mời quý khách chọn danh xưng";
            document.getElementById('errorgender').style.marginTop = "5px";
        }
        var fullname = document.querySelector('input[name="FullName"]').value;
        var phonenumber = document.querySelector('input[name="PhoneNumber"]').value;
        var email = document.querySelector('input[name="Email"]').value;
        var address = document.querySelector('input[name="BillingAddress"]').value;
        if (fullname=='' && phonenumber=='' && address=='' && email=='') {
            var error = document.querySelectorAll('.saveinfo')
            for (i = 0; i < error.length; i++) {
                error[i].classList.add('error')
            }
            document.getElementById('errorFullName').innerHTML = "Quý khách cần điền tên";
            document.getElementById('errorPhoneNumber').innerHTML = "Quý khách cần điền số điện thoại";
            document.getElementById('errorEmail').innerHTML = "Quý khách cần điền địa chỉ email";
            if(document.getElementById('BillingAddress_Address').style.display=='')
                document.getElementById('address').innerHTML = "Quý khách vui lòng điền số nhà, tên đường";
            return false;
        }else if(fullname==''){
            document.querySelector('input[name="FullName"]').classList.add('error')
            document.getElementById('errorFullName').innerHTML = "Quý khách cần điền tên";
            return false;
        }else if(phonenumber==''){
            document.querySelector('input[name="PhoneNumber"]').classList.add('error')
            document.getElementById('errorPhoneNumber').innerHTML = "Quý khách cần điền số điện thoại";
            return false;
        }else if(email==''){
            document.querySelector('input[name="Email"]').classList.add('error')
            document.getElementById('errorEmail').innerHTML = "Quý khách cần điền địa chỉ email";
            return false;
        }else if(isNaN(phonenumber)||phonenumber.length<10){
            document.querySelector('input[name="PhoneNumber"]').classList.add('error')
            document.getElementById('errorPhoneNumber').innerHTML = "Số điện thoại không hợp lệ";
            return false;
        }else if (address==''&&(document.getElementById('BillingAddress_Address').style.display=='')) {
            document.querySelector('input[name="BillingAddress"]').classList.add('error')
            document.getElementById('address').innerHTML = "Quý khách vui lòng điền số nhà, tên đường";
            return false;
        }
        else return true;

    }
    var totalmoney = document.getElementById("totalmoney").innerHTML;
    // var cart_hidden = $('#cart');
    // console.log(totalmoney);
    if (totalmoney == "0₫") {
        document.getElementById('nullcart').style.display = 'block';
        document.getElementById('cart').style.display = 'none';
        document.querySelector('body').style.background = '#fff'
        // comment = document.createComment(cart_hidden.get(0).outerHTML);
        // cart_hidden.replaceWith(comment);
    } else {
        document.getElementById('nullcart').style.display = 'none';
        document.getElementById('cart').style.display = 'block'
    }

    var notnull = document.querySelectorAll('.promotion span');
    for (var i = 0; i < notnull.length; i++) {
        if(notnull[i].innerHTML.trim()==='') notnull[i].classList.remove('notnull')
    }

    if (totalmoney != "0₫"){
        // var pay = 0;
        var totalmoney = 0;
        // var moneyoffs = 0
        var priceunit = document.querySelectorAll('input[name="price[]"]');
        // console.log(priceunit);
        var augment = document.querySelectorAll('.augment');
        var number = document.querySelectorAll('.number');
        var quantity = document.querySelectorAll('input[name="quantity[]"]');
        // console.log(amount);

        for ( i = 0; i < quantity.length; i++) {
            a = parseInt(quantity[i].value);
            price = parseInt(priceunit[i].value);
            _price = price*a;
            // console.log(_price);
            totalmoney+=_price;

        }

        document.querySelector('input[name="totalmoney"]').value = totalmoney;

        document.getElementById('totalmoney').innerHTML = formatNumber(totalmoney) + '₫';
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
        }
        // document.querySelector('input[name="pay"]').value = pay;

        document.querySelectorAll('.augment').forEach( item => {
            item.addEventListener('click',function() {
                var indexNumber = Array.from(augment).indexOf(event.target);
                var valueNumber = number[indexNumber].innerHTML;
                valueNumber = parseInt(valueNumber);
                valueNumber+=1;
                number[indexNumber].innerHTML = valueNumber;
                if(valueNumber>=2){
                    var active = document.querySelectorAll('.abate');
                    active[indexNumber].classList.add('active');
                    active[indexNumber].style.pointerEvents = "auto";
                }
                quantity[indexNumber].value = valueNumber;
                if (valueNumber>=50) {
                    augment[indexNumber].style.pointerEvents = 'none'
                }
                var sum = priceunit[indexNumber].value;
                sum = parseInt(sum);
                totalmoney+=sum;
                document.getElementById('totalmoney').innerHTML = formatNumber(totalmoney) + '₫';
                document.querySelector('input[name=totalmoney]').value = totalmoney;

            })
        });
                var abate = document.querySelectorAll('.abate');
                document.querySelectorAll('.abate').forEach( item => {
                item.addEventListener('click',function() {
                var indexNumber = Array.from(abate).indexOf(event.target);
                var valueNumber = number[indexNumber].innerHTML;
                valueNumber = parseInt(valueNumber);
                valueNumber-=1;
                number[indexNumber].innerHTML = valueNumber;
                if (valueNumber<=1) {
                    var active = document.querySelectorAll('.abate');
                    active[indexNumber].classList.remove('active');
                    active[indexNumber].style.pointerEvents = "none";
                }
                quantity[indexNumber].value = valueNumber;
                var price = priceunit[indexNumber].value;
                price = parseInt(price);
                augment[indexNumber].style.pointerEvents = 'auto';
                var sum = priceunit[indexNumber].value;
                sum = parseInt(sum);
                totalmoney-=sum;
                document.getElementById('totalmoney').innerHTML = formatNumber(totalmoney) + '₫';
                document.querySelector('input[name=totalmoney]').value = totalmoney;
            })
        });
    };
    var time = 360000;
    var run = setInterval(runtimeDestroySession,1000);
    function runtimeDestroySession(){
        time -= 1000;
        if (time==0) {clearInterval(run);window.location = "index.php?controller=cart&action=des_session"}
    }
</script>
<script>
  $(document).ready(function () {
      $('.augment').click(function () {
          event.preventDefault();
          var data = $(this).attr('data-id');
          $.ajax({
              url : 'index.php?controller=cart&action=augment',
              method : 'GET',
              data:{
                  data: data
              },
              success: function (data) {
                  var amount = $('.cart-amount').html();
                  //cắt bỏ khoảng trắng 2 đầu
                  amount = amount.trim();
                  // Tăng lên 1
                  amount++;
                  // Gán lại giá trị đã tăng cho số lượng ban đầu
                  $('.cart-amount').html(amount);
              }

          });
      });
      $('.abate').click(function () {
          event.preventDefault();
          var data = $(this).attr('data-id');
          $.ajax({
              url : 'index.php?controller=cart&action=abate',
              method : 'GET',
              data:{
                  data: data
              },
              success: function (data) {
                  var amount = $('.cart-amount').html();
                  //cắt bỏ khoảng trắng 2 đầu
                  amount = amount.trim();
                  // giảm lên 1
                  amount--;
                  // Gán lại giá trị đã tăng cho số lượng ban đầu
                  $('.cart-amount').html(amount);
              }

          });
      });
      // $(document).ready(function () {
      //      //     $('.blocksize').click(function () {
      //      //         event.preventDefault();
      //      //         var data = $(this).attr('data-size');
      //      //         $.ajax({
      //      //             url: 'index.php?controller=cart&action=augment',
      //      //             method: 'GET',
      //      //             data: {
      //      //                 data: data
      //      //             },
      //      //             success: function (data) {
      //      //                 var amount = $('.cart-amount').html();
      //      //                 //cắt bỏ khoảng trắng 2 đầu
      //      //                 amount = amount.trim();
      //      //                 // Tăng lên 1
      //      //                 amount++;
      //      //                 // Gán lại giá trị đã tăng cho số lượng ban đầu
      //      //                 $('.cart-amount').html(amount);
      //      //             }
      //      //
      //      //         });
      //      //     });
      //      // });




  });
</script>

