<main class="catalog mb ">
    <div class="boxleft">
        <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_tk" method="post">
                <div>
                    Email
                    <input type="email" name="email" placeholder="Nhập email" required value="<?php echo $email ?>">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="Nhập tên người dùng" required value="<?php echo $user ?>">
                </div>
                <div>
                    Mật khẩu
                    <input type="password" name="pass" placeholder="Nhập mật khẩu" required value="<?php echo $pass ?>">
                </div>
                <div>
                    Địa chỉ
                    <input type="text" name="address" placeholder="Nhập địa chỉ" required value="<?php echo $address ?>">
                </div>
                <div>
                    Số điện thoại
                    <input type="text" name="tel" placeholder="Nhập số điện thoại" required value="<?php echo $tel ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
            </form>

            <h3 id="dangky">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h3>
        </div>
    </div>
    <div class="boxright">
        <?php include "view/boxright.php" ?>
    </div>

</main>