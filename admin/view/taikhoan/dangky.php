<main class="catalog mb ">
    <div class="boxleft">
        <div class="box_title">ĐĂNG KÝ TÀI KHOẢN</div>
        <div class="box_content form_account">
            <form action="index.php?act=dangky" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Nhập email" required>
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="Nhập tên người dùng" required>
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" placeholder="Nhập mật khẩu" required>
                </div>
                <input type="submit" value="Đăng ký" name="dangky">
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