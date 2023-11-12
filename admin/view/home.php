<main class="catalog  mb ">

    <div class="boxleft">
        <div class="banner">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="view/img/1.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="view/img/2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="view/img/3.png" style="width:100%">
                </div>
            </div>
            <br>
        </div>

        <h1 style="color:deeppink">SẢN PHẨM NỔI BẬT</h1> <br>
        <div class="items">
            <?php foreach ($spn as $sp) : ?>
                <?php $anh = $img_path . $sp['img']; ?>
                <?php $linksp = "index.php?act=sanphamct&idsp=" . $sp['id']; ?>
                <div class="box_items">
                    <div class="thumb">
                        <div class="box_items_img">
                            <a href="<?php echo $linksp; ?>"><img src="<?php echo $anh; ?>" alt=""></a>
                        </div>
                    </div>
                    <a class="item_name" href="<?php echo $linksp ?>"><?php echo $sp['name'] ?></a>
                    <p class="price"><?php echo $sp['price'] ?> vnđ</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="boxright">
        <?php include "view/boxright.php" ?>
    </div>

</main>