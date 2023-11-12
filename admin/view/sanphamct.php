<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <?php extract($onesp); ?>
            <div class="box_title"><?php echo $name ?></div>
            <div class="box_content">
                <?php
                $img = $img_path . $img;
                echo '<div class = "row mb"><img width="400px" src="' . $img . '"></div>';
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });

            });
        </script>
        <div class="mb" id="binhluan">
            <div class="box_title">BÌNH LUẬN</div>


        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach ($spcungloai as $sp) : ?>
                    <?php $linksp = "index.php?act=sanphamct&idsp=" . $sp['id']; ?>
                    <li><a href="<?php echo $linksp; ?>"><?php echo $sp['name'] ?></a></li>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php include "boxright.php" ?>
    </div>

</main>