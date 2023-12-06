<div class="section login-register-section section-padding"><br><br>
    <div class="container">
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="login-register-box">
                        <div class="section-title">
                            <h2 class="title">Quên Mật Khẩu</h2>
                        </div>
                        <div class="login-register-form">
                            <form action="index.php?act=quenmatkhau" method="POST">

                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                    <span style="color: red;"><?php echo isset($err['email']) ? $err['email'] : '' ?></span>
                                </div>
                                <div class="form-btn">
                                    <input type="submit" name="submit" value="Gửi" class="btn btn-success">
                                </div>
                            </form>
                            <div><br>
                                <?php
                                if (isset($thongbao) && ($thongbao != ""))
                                    echo '<span style="color: red;">' . $thongbao . '</span>';
                                ?>
                            </div>
                            <div class="form-btn">
                                <a href="index.php?act=dangnhaptk">Đăng Nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-register-box">
                        <img src="assets/images/hero-img.png" alt="" width="70%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>