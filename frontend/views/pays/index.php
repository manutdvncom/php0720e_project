 <style>
    .header,.footer{
        display: none;
    }
    section{
        margin-top: 55px;
    }
    a{
        color: #ff523b;
    }
    .container-pay {
        width: 600px;
        background: #fff;
        margin: 90px auto 0 auto;
        padding-bottom: 5px;
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,.15);
    }
    .picsuccess {
        overflow: hidden;
        padding-top: 20px;
        width: 600px;
    }
    .picsuccess .notistatus {
        left: 0;
        right: 0;
        line-height: 36px;
        font-size: 16px;
        color: #00af1d;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
    }
    .iconnoti {
        background: url(assets/images/iconcartmobile@2x.png) no-repeat;
        background-size: 80px 85px;
        width: 20px;
        height: 20px;
        vertical-align: middle;
        display: inline-block;
    }
    .iconsuccess {
        background-position: -25px 0;
        width: 19px;
        height: 15px;
        margin-right: 3px;
    }
    .thank {
        display: block;
        overflow: hidden;
        margin: auto;
        color: #333;
        line-height: 22px;
        padding: 20px;
        background: #fff;
    }
    .titlebill {
        display: block;
        margin: 0 20px;
        line-height: 30px;
        font-size: 14px;
        color: #333;
        background: #f3f3f3;
        text-transform: uppercase;
        padding: 0 10px;
    }
    .infoorder, .callship, .cty {
        display: block;
        overflow: hidden;
        font-size: 14px;
        color: #333;
        padding: 10px 20px 0 20px;
        margin: auto;
        background: #fff;
    }
    .infoorder div {
        display: block;
        overflow: hidden;
        margin-bottom: 5px;
        padding-left: 10px;
    }
    .infoorder div::before {
        content: '•';
        display: inline-block;
        vertical-align: middle;
        margin-right: 5px;
        font-size: 20px;
        color: #999;
        margin: 0 3px 0 -10px;
    }
    .infoorder div strong {
        color: #c10017;
    }
    .mess-payment {
        display: none;
        overflow: hidden;
        font-size: 14px;
        color: #333;
        padding: 10px 10px;
        background-color: #e3f6de;
        margin: 10px 20px;
        border-radius: 3px;
    }
    .choosepayment div h3 {
        text-transform: uppercase;
        font-weight: 600;
        padding: 10px 20px 10px;
    }
    .grid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: auto;
        row-gap: 10px;
    }
    .choosepayment div a {
        justify-self: center;
        overflow: hidden;
        width: 275px;
        border-radius: 4px;
        font-size: 16px;
        color: #fff;
        text-align: center;
        background: #ff523b;
        height: 45px;
    }.choosepayment>div>a:hover{background: #563434;}
     .payoffline span{
        line-height: 45px;
    }
    .atm div{
        margin-top: 4px;
    }
    .atm p{
        margin-bottom: 5px;
        line-height: 12px;
        color: white;
    }
    .visa div{
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 45px;
    }
    .visa div img{
        margin-left: 8px;
        height: 17px;
    }
    .qr-code div{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 4px;
    }
    .deleteOrder {
        text-align: center;
        margin-top: 10px;
    }
    .callship {
        line-height: 22px;
        padding-bottom: 10px;
    }
    .callship a{
        display: inline
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
        padding: 10px 0;
        margin: 0 20px;
        min-height: 110px;
        border-bottom: 1px solid #eee;
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
    .list_order li .colinfo a {
        display:block;
        font-size: 14px;
        color: #333;
        text-overflow: ellipsis;
        width: 62%;
    }
    .onecolor {
        float: left;
        position: relative;
        background: #fff;
        font-size: 14px;
        color: #333;
        margin-top: 10px;
    }
    .onecolor span {
        color: #999;
    }
    .quan {
        float: right;
        margin-top: 10px;
    }
    .quan span {
        color: #999;
    }
    .list_order li .promotion {
        background: #fff;
        padding: 5px ;
        width: 70%;
        height: auto;
        margin: 5px 10px 0 0;
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
    .list_order li .promotion span.notnull::before {
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
    .buyother {
        display: none;
        overflow: hidden;
        background: #fff;
        line-height: 40px;
        text-align: center;
        margin: 15px auto;
        width: 300px;
        font-size: 14px;
        color: #288ad6;
        font-weight: 600;
        text-transform: uppercase;
        border: 1px solid #288ad6;
        border-radius: 4px;
    }
    .active{display: block}
    .popup {
        background: rgba(0,0,0,.4);
        cursor: pointer;
        height: 100%;
        position: fixed;
        text-align: center;
        top: 0;
        width: 100%;
        z-index: 10000;
        display: none;
        justify-content: center;
        align-items: center;
    }
    .popup>div {
        background-color: #fff;
        box-shadow: 10px 10px 60px #555;
        display: inline-block;
        height: auto;
        max-width: 450px;
        min-height: 100px;
        width: 60%;
        position: relative;
        border-radius: 8px;
        padding: 30px;
    }
    .popup h1 {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 16px;
    }
    .popup p{
        font-size: 13px;
        line-height: 20px;
        margin: 10px 0 5px;
        text-align: left;
        font-size: 14px;
    }
    .popup .p1{
        color: #999;
        margin: 5px 0 15px;
    }
    .popup a{
        display: inline-block;
        text-transform: uppercase;
        border: 1px solid #ff523b;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        width: 130px;
        font-size: 14px;
    }
    .popup a.close{
        background: #fff;
    }
    .popup a.confirm{
        background: #ff523b;
        color:#fff;
    }
    #popup-success p{
        margin:15px 0;
    }
    #popup-success p b{
        font-size: 18px;
        color: #e10c00
    }
     .payoffline>button{
         border: none;
         background-color: #ff523b;
         color: #fff;
         font-size: 16px;
         width: 100%;
     }
    .payoffline:hover{background: #563434;}
    .payoffline:hover button{background: #563434;}
</style>



<?php
//    echo "<pre>";
//    print_r($_SESSION['cart']);
//    echo "</pre>";
?>
<section>
    <form action="index.php?controller=pay&action=insert">
	<div class="container-pay">
		<div class="picsuccess">
            <div class="notistatus">
               	<i class="iconnoti iconsuccess"></i>Kiểm Tra Và Thực Hiện Đặt Hàng
            </div>
        </div>
        <div class="thank">
        Cảm ơn
            <b><?php echo $_POST['gender'] ." ". $_POST['FullName'];  ?></b>
            đã cho BigFamily cơ hội được phục vụ. Nhân viên  BigFamily sẽ
            <b>gửi tin nhắn hoặc gọi điện </b>xác nhận đặt hàng tại siêu thị cho <?php echo $_POST['gender']; ?> sớm nhất có thể.
            <input type="hidden" name="FullName" value="<?php echo $_POST['FullName']; ?>">
            <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
    	</div>
    	<div class="titlebill">Thông tin đặt hàng:</div>
    	<div class="infoorder">
			<div>Người nhận: <b><?php echo $_POST['FullName']; ?>, <?php echo $_POST['PhoneNumber']; ?></b></div>
            <input type="hidden" name="PhoneNumber" value="<?php echo $_POST['PhoneNumber']; ?>">
            <?php
                if ($_POST['ship']==0){
                    $address = "Nhận tại cửa hàng khu vực ".$_POST['district'] .",". $_POST['province'];
                }else{
                    $address = $_POST['BillingAddress'] .",". $_POST['ward'] .",".$_POST['district'] .",". $_POST['province'];
                }

            ?>
            <input type="hidden" name="address" value="<?php echo $address ?>">
            <input type="hidden" name="OrderNote" value="<?php echo $_POST['OrderNote']; ?>">
            <input type="hidden" name="Email" value="<?php echo $_POST['Email']; ?>">
            <input type="hidden" name="TimeDelivery" value="<?php echo $_POST['TimeDelivery']; ?>">

            go

			<div>Địa chỉ nhận hàng: <b><?php echo $address ?></b></div>
			<div>Thời gian nhận hàng dự kiến: 
				<b> Trước <?php $currenttime = date('l, yy-m-d H:i:s');
					$date = new DateTime($currenttime);
					$date->add(new DateInterval('P1D'));
					echo $date->format('H')." giờ 00 phút "." Ngày mai ".$date->format('d/m'); ?>	
				</b>

			</div>
			<div>Tổng tiền: <strong><?php echo number_format($_POST['totalmoney'],0,"","."); ?>₫</strong></div>
            <input type="hidden" name="totalmoney" value="<?php echo $_POST['totalmoney']; ?>">
    	</div>
    	<div class="mess-payment" id="mess-payment">
		    <span>
		        Bạn đã chọn thanh toán : <b>Tiền mặt khi nhận hàng</b>
		    </span>
		</div>
    	<div class="choosepayment" id="choosepayment">
		    <div>
		        <h3>Chọn hình thức thanh toán:</h3>
		    </div>
		    <div class="clr"></div>
		    <div class="grid">
		        <a href="javascript:void(0)" class="payoffline" onclick="choosePayOffline()">
		            <button type="submit" name="submit" >
		                <span>Tiền mặt khi nhận hàng</span>
                        <input type="hidden" name="submit" value="submit">

                    </button>
		        </a>
		        <a href="javascript:void(0)" class="atm">
		            <div>
		                <span>
		                    Thanh toán thẻ
		                </span>
		                <img src="assets/images/ATM2020.png" alt="Thanh toán qua thẻ ATM" width="30">
		            </div>
		            <p>(Có Internet Banking)</p>
		        </a>
		        <a href="javascript:void(0)" class="visa">
		            <div>
		                <span>Thanh toán thẻ </span>
		                <img src="assets/images//Visa2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		                <img src="assets/images/Master2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		                <img src="assets/images/JCB2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		            </div>
		        </a>
		        <a href="javascript:void(0)" class="qr-code" >
		            <div>
		                <span>Thanh toán qua QR Code</span>
		                <img src="assets/images/logo-vnp@2x.png" alt="Thanh toán qua Qr-Code Vnpay" height="36">
		            </div>
		        </a>
		    </div>
		</div>
		<div class="deleteOrder" >
            <a style="color:#2889d6; " href="javascript:cancel()">Hủy đơn hàng</a>
        </div>
        <div class="callship">Khi cần hỗ trợ vui lòng gọi
        	<a href="tel:18001060">1800.1060</a> (7h30 - 22h)
            <div class="link-csht">
                <a href="javascript:void(0)">Tham khảo chính sách hoàn tiền khi thanh toán online</a>
            </div>
    	</div>
    	<div class="titlebill">Sản phẩm đã mua:</div>
    	<ul class="list_order">
    		<?php $i=0; foreach($_SESSION['cart'] as $cart) { ?>
			<li>
				<div class="colimg">
					<a href="<?php echo $cart['category'].'/detail/'.$cart['id'] ?>">
						<img src="../backend/assets/uploads/<?php echo $cart['avatar']?>">
					</a>
				</div>
				<div class="colinfo">
    				<strong><?php echo number_format($cart['price'],0,"","."); ?>₫</strong>
    				<a href="<?php echo $cart['category'].'/detail/'.$cart['id'] ?>"><?php echo $cart['name']; ?></a>
    				<div class="onecolor">
                        <span>size:</span> <?php echo $cart['select_size'] ; ?>
                    </div>
                    <div class="quan">
                        <span>Số lượng:</span><?php echo $cart['quantity'] ; ?>
                    </div>
                    <div class="clr"></div>
<!--    				<div class="promotion  webnote ">-->
<!--						<span class="notnull">--><?php //echo $cart['promo1']; ?><!--</span>-->
<!--					    <span class="notnull">--><?php //echo $cart['promo2']; ?><!--</span>-->
<!--					    <span class="notnull">--><?php //echo $cart['promo3']; ?><!--</span>-->
<!--					    <span class="notnull">--><?php //echo $cart['promo4']; ?><!--</span>-->
<!--					</div>-->
				</div>
			</li>
			<?php } ?>
		</ul>
    	<a href="index.php?controller=pay&action=des_session" class="buyother">Về trang chủ</a>
	</div>
    </form>
</section>
<div class="popup" id="popup">
	<div>
		<h1>Hủy đơn hàng</h1>
		<p>Bạn có muốn hủy đơn hàng này ?</p>
		<p class="p1">Lưu ý: quà khuyến mãi có thể thay đổi theo thời điểm đặt hàng.</p>
		<a class="close" href="javascript:close()">Đóng</a>
		<a class="confirm" href="javascript:Confirm()">xác nhận hủy</a>
	</div>
</div>
<div class="popup" id="popup-success">
	<div>
		<h1>Hủy đơn hàng</h1>
		<p>Đơn hàng đã được hủy thành công!</p>
		<p>Sẽ tự động đóng trong : <b id="time">6</b> s</p>
		<a class="close" href="javascript:Redirect()">Đóng</a>
	</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	var notnull = document.querySelectorAll('.promotion span')
	for (var i = 0; i < notnull.length; i++) {
		if(notnull[i].innerHTML.trim()==='') notnull[i].classList.remove('notnull')
	}
	function choosePayOffline(){
		document.getElementById('choosepayment').style.display = "none"
		document.getElementById('mess-payment').style.display = "block"
		document.querySelector('.deleteOrder').style.display = "none"
        document.getElementById('popup').style.display = 'flex';
        $("#popup>div").removeClass("popUpSaida").addClass("popUpEntrada");
        $(".popUpEntrada>h1").html("Cảm Ơn Quý Khách")
        $(".popUpEntrada>p").html("Chúng tôi sẽ gửi Email đến mong quý khách xem và hãy chú ý đến điện thoại để nhân viên của chúng tôi gọi đến.")
        $(".popUpEntrada>p.p1").html("")
        $(".popUpEntrada>.confirm").css("display","none")
        $(".buyother").addClass('active')
        setTimeout(function() {
            window.location = "index.php?controller=pay&action=des_session";
        }, 5000);

	}

	$('form').on("submit",function (event) {
        event.preventDefault();
        $.ajax({
            method:'post',
            url:'index.php?controller=pay&action=insert',
            data:$('form').serialize(),
        });
    })
	function cancel(){
		document.getElementById('popup').style.display = 'flex';
        $("#popup>div").removeClass("popUpSaida").addClass("popUpEntrada");
	}
	function close(){
		// document.getElementById('popup').style.display = 'none'
        $("#popup>div").removeClass("popUpEntrada").addClass("popUpSaida");

        setTimeout(function() {
            $("#popup").css("display", "none");
        }, 900);
	}
	function Confirm(){
        $("#popup>div").removeClass("popUpEntrada").addClass("popUpSaida");
		document.getElementById('popup-success').style.display = 'flex';
        $("#popup-success>div").removeClass("popUpSaida").addClass("popUpEntrada");
		var realtime = document.getElementById('time').innerHTML;
		parseInt(realtime);
		var pause = setInterval(runtime,1000)
        // setTimeout(function() {
        // }, 5000);
		function runtime(){
            realtime-=1;
            document.getElementById('time').innerHTML = realtime;
            if (realtime==0) { window.location = "index.php?controller=pay&action=des_session"; clearInterval(pause) }
        }
        window.location = "index.php?controller=pay&action=des_session";

    }
	function Redirect(){
		window.location="index.php";
	}
</script>