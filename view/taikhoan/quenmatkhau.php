<!-- Login & Register Start -->
<div class="section login-register-section section-padding"><br><br>
    <div class="container">
        <!-- Login & Register Wrapper Start -->
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title">Quên Mật Khẩu</h2>
                        </div>
                        <!-- Section Title End -->
                        <div class="login-register-form">
                            <form action="index.php?act=quenmatkhau" method="POST">

                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-btn">
                                    <input type="submit" name="guiemail" value="Gửi" class="btn btn-success">
                                </div>
                            </form>
                            <div style="color: red"><br>
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) {
                                    echo $thongbao;
                                } ?>
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