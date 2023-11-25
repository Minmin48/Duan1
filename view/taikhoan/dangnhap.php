
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->

                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li>
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Main Demo</a></li>
                                <li><a href="index-2.html">Course Hub</a></li>
                                <li><a href="index-3.html">Distant Learning</a></li>
                                <li><a href="index-4.html">Kindergarten</a></li>
                                <li><a href="index-5.html">Language</a></li>
                                <li><a href="index-6.html">University</a></li>
                            </ul>
                        </li>
                        <li class="active-menu"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Single</a></li>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="faq.html">Faq's</a></li>
                                <li><a href="error.html">404 Page</a></li>
                                <li class="active"><a href="login-register.html">Login Register</a></li>
                            </ul>
                        </li>
                        <li><a href="course-grid.html">Courses</a>
                            <ul class="sub-menu">
                                <li><a href="course-grid.html">Course Grid</a></li>
                                <li><a href="course-list.html">Course List</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->


        <!-- Page Banner Start -->
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
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Đăng Nhập</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Đăng Nhập</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Login & Register Start -->
        <div class="section login-register-section section-padding">
            <div class="container">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrap">
                    <div class="row gx-5">
                        <div class="col-lg-6">

                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Đăng Nhập</h2>
                                </div>
                                <!-- Section Title End -->

                                <div class="login-register-form">
                                    <form action="index.php?act=dangnhaptk" method="post">
                                        <span class="text-danger"><?php echo (isset($error_login))?$error_login :''?></span>
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Username or email" name="email">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Password" name="pass">
                                        </div>
                                        <div class="form-btn">
                                            <input type="submit" name="dangnhap" value="Đăng Nhập Ngay" class="btn btn-success">
                                        </div>
                                        <div class="single-form">
                                            <p><a href="#">Bạn quên mật khẩu?</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                            <img src="assets/images/hero-img.png" alt="" width="70%">
                            </div>
                            <!-- Login & Register Box End -->

                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->

            </div>
        </div>
        <!-- Login & Register End -->