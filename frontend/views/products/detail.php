


<?php
require_once 'helpers/Helper.php';
 echo "<pre>";
// print_r($size);
// print_r($product);
echo "</pre>";

?>
<style>
    .choosesize {
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
        border-bottom-color: #f0f0f0;
        z-index: 100;
    }
    .blocksize{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding:7px 0 10px 0;
        border-bottom: 1px solid #eee;
    }
    .show{
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0.8;
        z-index: 50;
        background-color: #555;
    }
    .popup-alert{
        margin: 0;
        padding: 30px;
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 250px;
        transform: translate(-50%, -50%);
        background-color: #fff;
        color: #555;
        display: block;
        box-shadow: 10px 10px 60px #555;
        border-radius: 8px;
    }
    .popUp {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        display: none;
        position: fixed;
        top: 40%;
        left: 50%;
        padding: 30px;
        font-size: 14px;
        font-family: 'PT Sans', sans-serif;
        color: #fff;
        border-style: none;
        z-index: 999;
        overflow: hidden;
    }
    .popUp>h1 {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        margin: 0;
        padding: 5px;
        min-height: 40px;
        font-size: 1.9em;
        font-weight: bold;
        text-align: center;
        color: #ff523b;
        background-color: transparent;
        border-style: none;
        border-width: 5px;
        border-color: black;
    }
    .popup-alert>div{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        height: calc(100% -108px);
        margin: 0;
        padding: 0;
        border-style: none;
    }
    .popUp>div{
        display: block;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        padding: 10%;
        text-align: center;
        vertical-align: middle;
        border-width: 1px;
        border-color: #ccc;
        border-style: none none solid none;
        overflow: auto;
    }
    .popUpp>div>span{
        display: table-cell;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        margin: 0;
        padding: 0;
        vertical-align: middle
    }
    .popup-alert span{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 300px;
        height: 108px;
        margin: 0;
        padding: 0;
        border-style: none;
        color: #f00;
        font-size: 1.5em;

    }
    .popUp>button {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        margin: 0;
        padding: 10px;
        width: 100% !important;
        border: 1px none #ccc;
        color: #fff;
        font-family: inherit;
        cursor: pointer;
        height: 44px;
        background-color: #ff523b;
        transition: 0.3s esae-in-out;
        font-size: 1.2em;
    }
    .popUp>button:hover{
         background-color: #563434;

    }
    .col-2-header{display: none}
    .header {
        background-image: none;
        background-color: #fff!important;

    }
    .single-product{
        margin-bottom: 70px;
        margin-top: 65px;
    }
</style>
<div class="popup"></div>
<div class="popUp popup-alert ">
    <h1>BigFamily Thông Báo</h1>
    <div>
        <span id="text-show"></span>
    </div>
    <button onclick="removeClass()"> OK</button>
</div>
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="../backend/assets/uploads/<?php echo $product['avatar']?>" width="100%" id="product-img">
        </div>
        <div class="col-2">
            <p>Home / <?php echo $product['name'] ?> /</p>
            <h1><?php echo $product['title'] ?></h1>
            <h4><?php echo number_format($product['price'],0,"","."); ?> ₫</h4>
            <div class="choosesize"  id="sizevalue">
                <div class="pseudosize"></div>
                <span class="size" id="select-size" value="0" >Lựa chọn Size</span>
                <div class="listsize">
                    <?php foreach ($size as $row ):?>
                        <?php foreach ($row as $innerArray ):?>
                            <div class="blocksize"  data-size="<?php echo $innerArray['size_text']?>"  data-id="<?php echo $product['id'] ; ?>">
                                <span>
                                    <?php echo " ".$innerArray['size_text'] ?>
                                </span>
                            </div>
                        <?php endforeach;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="error nullsize"></div>
            <span id="get-id" style="border-radius: 8px" class="btn" data-id="<?php  echo $product['id']?>" onclick="return checkInforUser()">Add To Cart</span>
            <h3>Chi Tiết Sản Phẩm</h3>
            <br>
            <p class="product__Details"><?php echo $product['content'] ?></p>
        </div>
    </div>
</div>
<script>
    function checkInforUser() {
        var size = $('.size').html();
        if (size == 'Lựa chọn Size') {
            // $('.nullsize').html("Quý khách vui lòng chọn Size")
            // $('.nullsize').css({"line-height": "30px", "margin-top": "7px", "float": "left"})
            // document.getElementsByClassName('nullsize').style.cssText = 'line-height:30px;margin-top:7px;float:left;'
            $(".popup").addClass("show");
            $(".popup-alert").removeClass("popUpSaida").addClass("popUpEntrada");
            $("#text-show").html("Quý khách vui lòng chọn Size")
        }else{
            $(".popup").addClass("show");
            $(".popup-alert").removeClass("popUpSaida").addClass("popUpEntrada");
            $(document).ready(function(){
                var id = $("#get-id").attr('data-id');
                var size = $("#select-size").attr('value');
                $.ajax({
                    url : 'index.php?controller=cart&action=add',
                    method : 'GET',
                    data:{
                        id: id,
                        size: size
                    },
                    success: function (data) {
                        // console.log(data);
                        // Hiển thị thông báo Thêm vào giỏ hàng
                        //thành công
                        $('#text-show').html('Thêm sản phẩm vào giỏ thành công');

                        // Tăng số lượng sản phẩm trong giỏ lên 1
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
        }
    }
    function removeClass(){
        $(".popup-alert").removeClass("popUpEntrada").addClass("popUpSaida");

        setTimeout(function() {
            $(".popup").removeClass("show");
        }, 900);
    }

    $(document).ready(function () {
        $('.choosesize').click(function() {
            $('.listsize', this).slideToggle(200)
            $('.pseudosize', this).toggleClass('act');
        });
        $('.blocksize').click(function(event) {
            size = $(this).attr('data-size');
            $(this).closest('.choosesize').find('span.size').text("Size: " +size);
            inputsize = $(this).closest('.choosesize').find('input')
            inputsize.val(size)
            $('.nullsize').css('display', 'none');
            $('#select-size').attr('value',size);

        });
    });
</script>
<!--<div class="small-container">-->
<!--    <div class="row row-2">-->
<!--        <h2>Sản Phẩm Liên Quan</h2>-->
<!--        <p>Xem Thêm</p>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="small-container">-->
<!--    <div class="row">-->
<!--        <div class="col-4">-->
<!--            <img src="../assets/images/product-1.jpg">-->
<!--            <h4>Red Printed T-Shirt</h4>-->
<!--            <div class="rating">-->
<!--                <i class="fa fa-star"></i>-->
<!--            </div>-->
<!--            <p>$50.00</p>-->
<!--        </div>-->
<!--        <div class="col-4">-->
<!--            <img src="../assets/images/product-2.jpg">-->
<!--            <h4>Red Printed T-Shirt</h4>-->
<!--            <div class="rating">-->
<!--                <i class="fa fa-star"></i>-->
<!--            </div>-->
<!--            <p>$50.00</p>-->
<!--        </div>-->
<!--        <div class="col-4">-->
<!--            <img src="../assets/images/product-3.jpg">-->
<!--            <h4>Red Printed T-Shirt</h4>-->
<!--            <div class="rating">-->
<!--                <i class="fa fa-star"></i>-->
<!--            </div>-->
<!--            <p>$50.00</p>-->
<!--        </div>-->
<!--        <div class="col-4">-->
<!--            <img src="../assets/images/product-4.jpg">-->
<!--            <h4>Red Printed T-Shirt</h4>-->
<!--            <div class="rating">-->
<!--                <i class="fa fa-star"></i>-->
<!--            </div>-->
<!--            <p>$50.00</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->