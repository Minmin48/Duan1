<main class="catalog mb ">
    <div class="boxleft">
        <div class="box_title">QUÊN MẬT KHẨU</div>
        <div class="box_content form_account">
            <form action="index.php?act=quen_mk" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Nhập email" required>
                </div>
                <input type="submit" value="Gửi" name="guiemail">
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