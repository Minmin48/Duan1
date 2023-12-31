<div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
    <div class="shape-1">
        <img src="assets/images/shape/shape-7.png" alt="">
    </div>
    <div class="shape-2">
        <img src="assets/images/shape/shape-1.png" alt="">
    </div>
    <div class="shape-3"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner text-center">
                        <h2 class="title">Đăng Nhập</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php  ">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Đăng Nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Login & Register Start -->
<div class="section login-register-section section-padding">
    <div class="container">
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="login-register-box">
                        <div class="section-title">
                            <h2 class="title">Đăng Nhập</h2>
                        </div>
                        <div class="login-register-form">
                            <form action="index.php?act=dangnhaptk" method="post">
                                <span class="text-danger"><?php echo (isset($error_login)) ? $error_login : '' ?></span>
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                    <span style="color: red;"><?php echo isset($err['email']) ? $err['email'] : '' ?></span>
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Password" name="pass">
                                    <span style="color: red;"><?php echo isset($err['pass']) ? $err['pass'] : '' ?></span>
                                </div>
                                <div class="form-btn">
                                    <input type="submit" name="dangnhap" value="Đăng Nhập Ngay" class="btn btn-success">
                                </div>
                                <div class="single-form">
                                    <p><a href="index.php?act=quenmatkhau">Bạn quên mật khẩu?</a></p>
                                </div>
                            </form>
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
<!-- Login & Register End -->