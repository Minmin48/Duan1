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
                        <h2 class="title">Đăng Ký Tài Khoản</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng Ký</li>
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
                            <h2 class="title">Đăng Ký</h2>
                        </div>
                        <div class="login-register-form">
                            <form action="index.php?act=dangkytk" method="POST">
                                <span class="text-danger"><?php echo (isset($error_dky_khoa_hoc)) ? $error_dky_khoa_hoc : '' ?></span>
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Username" name="user">
                                </div>
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Password " name="pass">
                                </div>
                                <div class="form-btn">
                                    <input type="submit" name="submit" value="Đăng Ký" class="btn btn-success">
                                </div>
                                <div class="form-btn">
                                    <a href="index.php?act=dangnhaptk">Bạn đã có tài khoản!</a>
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