<?php
echo "<pre>";
//print_r($products);
//print_r($num);
echo "</pre>";
require_once "helpers/Helper.php";
?>

<style>
    .row-1{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    .col-2-header{display: none}
    .header {
        background-image: none;
        background-color: #fff!important;

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
        border: 1px solid #288ad6;
        background: #288ad6;
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
    .fr.sort {
        position: relative;
        z-index: 2;
    }
    .fr .criteria, .fr .selected {
        display: inline-block;
        overflow: hidden;
        color: #ff523b;
        cursor: pointer;
        line-height: 50px;
    }
    .fr .criteria::after {
        content: '';
        width: 0;
        height: 0;
        border-top: 6px solid #ff523b;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        display: inline-block;
        vertical-align: middle;
        margin-left: 5px;
    }
    .fr.sort div {
        position: absolute;
        top: 50px;
        right: 0;
        width: 200px;
        padding: 12px 10px 2px 10px;
        background-color: #fff;
        border: 1px solid #eee;
        border-radius: 4px;
        box-shadow: 0 10px 10px 0 rgba(0,0,0,.1);
        display: none;
    }
    .fr.sort div::before, .fr.sort div::after {
        left: 75%;
    }
    .fr.sort div::before, .fr.sort div::after {
        content: '';
        width: 0;
        height: 0;
        position: absolute;
        bottom: 100%;
        left: 70%;
        border-bottom: 10px solid #d9d9d9;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    .fr.sort div::after {
        border-width: 9px;
        border-bottom-color: #fff;
        margin-left: 1px;
    }
    .fr.sort div a {
        display: block;
        padding: 0 0 10px 5px;
        color: #333;
    }
    [class^="icon-"], [class*="icon-"] {
        background-image: url(assets/images/icondesktop2022@1x_edit.png);
        background-repeat: no-repeat;
        display: inline-block;
        height: 30px;
        width: 30px;
        line-height: 30px;
        vertical-align: middle;
    }
    .icon-checklist {
        background-position: -185px -30px;
        width: 16px;
        height: 14px;
    }
    .fr.sort div a.check i {
         margin: -2px 5px 0 0;
         display: inline-block;
    }
    .sort div a i {
        display: none;
    }



</style>
    <div class="overlay">
        <span class="cswrap">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </span>
    </div>
    <div class="small-container">
        <div class="row row-2" style="padding: 0 10px">
            <?php foreach ($categories as $category):
                //giữ trạng thái selected của category sau khi chọn dựa vào
                //                tham số category_id trên trình duyệt
                $selected = '';
                if (isset($_GET['categoryid']) && $category['id'] == $_GET['categoryid']) {
                    $selected = $category['name'];
                }
                ?>
                <h2 style="position: absolute"><?php echo $selected ?></h2>
            <?php endforeach; ?>
            <div style="clear: both"></div>
            <div class="fr sort expand">
                <span class="criteria">Sắp xếp</span>
                <div>
                    <a href="javascript:void(0)" data-id="1" id="price"><i class="icon-checklist"></i>Sản phẩm mới nhất</a>
                    <a href="javascript:void(0)" data-id="3"><i class="icon-checklist" id="max"></i>Giá cao đến thấp</a>
                    <a href="javascript:void(0)" data-id="2"><i class="icon-checklist" id="min"></i>Giá thấp đến cao</a>
                </div>
            </div>
        </div>
        <div class="row-1 row-category">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-4">
                        <?php if (!empty($product['avatar'])): ?>
                            <?php $text_url = "-".str_replace(' ' ,'-', $product['title']); ?>
                            <a href="ChiTietSanPham<?php echo $product['id']?><?php echo $text_url?>.html">
                                <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"></a>
                        <?php endif; ?>
                        <h4><a href="ChiTietSanPham<?php echo $product['id']?><?php echo $text_url?>.html">
                                <?php echo $product['title']?></a></h4>
                        <p><?php
                            // Format lại dạng tiền, ngăn cách hàng nghìn bằng ,
                            $price_format = number_format($product['price']);
                            echo $price_format;
                            ?> ₫</p>
                    </div>
<!--                    ChiTietSanPham5-GIÀY-ULTRA-4D-5.html-->
                <?php endforeach; ?>
            <?php endif;?>
        </div>
        <div class="viewMore" value="<?php echo $_GET['categoryid']?>">
            <span id="viewmore-id">Xem Thêm <?php echo ($num - 8)?></span>
            <span id="viewproduct-id"> Sản Phẩm</span>
        </div>
    <!--    <div class="page-btn">-->
    <!--        <span>1</span>-->
    <!--        <span>2</span>-->
    <!--        <span>3</span>-->
    <!--        <span>4</span>-->
    <!--        <span>&#8594</span>-->
    <!--    </div>-->
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            let i=1
            // total = $('span:first-child','.viewMore').html())
            let total = <?php echo ($num - 8)?>;
            if(total<=0){
                $('.viewMore').unbind("click").css('cursor','none')
                $('#viewmore-id').css('display','none')
                $('#viewproduct-id').html('Oop,hết mất hàng rồi !!!')
            }else{
                $('.viewMore').click(function(event) {
                    i+=1;
                    var id = $(this).attr('value')
                    $.post('index.php?controller=product&action=load_ajax_product',{id:id,i:i},function(data){
                        $('.row-category').append(data)
                    })
                    total-=8
                    $('span:first-child',this).html(total)
                    if(total<=0){
                        $('.viewMore').unbind("click").css('cursor','none')
                        $('#viewmore-id').css('display','none')
                        $('#viewproduct-id').html('Oop,đã hết hàng rồi !!!')
                    }
                });
            }
            $('.criteria').click(function(event) {
                $('.sort').find('div').slideToggle(250)
            });
            // $('#max'),$('#min'),$('#price').click(function () {
            //
            // })
            $('.sort a').click(function(event) {
                $('.filter .brand a').removeClass('check')
                $('.filter-price a').removeClass('active')
                $('div.viewMore').css('display','none')
                let id = <?php echo $_GET['categoryid']?>;
                $('.sort').find('div').slideToggle(250)
                $('.sort').find('div a.check').removeClass('check')
                $(this).addClass('check')
                sort = $(this).attr('data-id')
                $.post('index.php?controller=product&action=sort', {sort: sort, id:id}, function (data) {
                    $('.row-category').html(data)

                });

            });


        });



    </script>

