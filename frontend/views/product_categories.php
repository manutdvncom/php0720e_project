<?php
//echo "<pre>";
//print_r($products);
//echo "</pre>";
require_once "helpers/Helper.php";
?>
<body>
<div class="small-container">
    <div class="row row-2">
        <h2>All products</h2>
        <select>
            <option>Default Shorting</option>
            <option>Short by price</option>
            <option>Short by popularity</option>
            <option>Short by rating</option>
            <option>Short by sale</option>
        </select>
    </div>
    <div class="row">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="col-4">
                    <?php if (!empty($product['avatar'])): ?>
                        <a href="index.php?controller=product&action=detail&id=<?php echo $product['id']?>">
                            <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"></a>
                    <?php endif; ?>
                    <h4><a href="index.php?controller=product&action=detail&id=<?php echo $product['id']?>">
                            <?php echo $product['title']?></a></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$<?php echo $product['price']?></p>
                </div>
            <?php endforeach; ?>
        <?php elseif (empty($products)):?>
            <div>
                <p>Không tìm thấy dữ liệu</p>
            </div>
        <?php endif;?>
    </div>
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594</span>
    </div>
</div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
