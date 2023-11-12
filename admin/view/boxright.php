<div class="mb">
    <div class="box_title">TÀI KHOẢN</div>
    <div class="box_content form_account">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user'])
        ?>
            <h2 style="color: red;">
                <?php echo $thongbao = "Đăng nhập thành công!"; ?>
            </h2><br>
            <h4>Xin chào <?php echo $user ?></h4><br>
            <div>
                <li class="form_li"><a href="index.php?act=quen_mk">Quên mật khẩu</a></li>
                <li class="form_li"><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
                <?php if ($role == 1) { ?>
                    <li class="form_li"><a href="admin/index.php">Đăng nhập Admin</a></li>
                <?php } ?>
                <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>
            </div>

        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="POST">
                <h4>Tên đăng nhập</h4><br>
                <input type="text" name="user" required>
                <h4>Mật khẩu</h4><br>
                <input type="password" name="pass" required><br>
                <input type="checkbox" name="">Ghi nhớ tài khoản?
                <br><input type="submit" name="dangnhap" value="Đăng nhập">
            </form>
            <li class="form_li"><a href="index.php?act=quen_mk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        <?php } ?>
    </div>
</div>
<div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
        <ul>
            <?php foreach ($dsdm as $dm) : ?>
                <?php $linkdm = "index.php?act=sanpham&iddm=" . $dm['id']; ?>
                <li><a href="<?php echo $linkdm ?>"><?php echo $dm['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="box_search">
        <form action="index.php?act=sanpham" method="POST">
            <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
<div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
        <?php foreach ($top as $t) : ?>
            <?php $anh = $img_path .  $t['img'];
            $linksp = "index.php?act=sanphamct&idsp=" . $t['id'];
            ?>
            <div class="selling_products" style="width:100%;">
                <a href="<?php echo $linksp ?>"><img src="<?php echo $anh; ?>" alt=""> </a>
                <a href="<?php echo $linksp ?>"><?php echo $t['name']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>