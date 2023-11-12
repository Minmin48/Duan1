<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title" style="color:red">SẢN PHẨM <?php echo $tendm ?>
            </div>
            <div class="box_content">
                <?php foreach ($dssp as $sp) : ?>
                    <?php extract($sp) ?>
                    <?php $anh = $img_path . $sp['img']; ?>
                    <?php $linksp = "index.php?act=sanphamct&idsp=" . $sp['id']; ?>
                    <div class="danhmucsp">
                        <div class="">
                            <a href="<?php echo $linksp; ?>"><img width="310px" src="<?php echo $anh; ?>" alt=""></a>
                        </div>
                        <div class="">
                            <a class="item_name" href="<?php echo $linksp ?>"><?php echo $sp['name'] ?></a>
                        </div>
                        <div class="">
                            <p class="price"><?php echo $sp['price'] ?> vnđ</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php include "boxright.php" ?>
    </div>

</main>