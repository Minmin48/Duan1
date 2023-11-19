<!doctype html>
<html class="no-js" lang="en">

<?php
$list = get_khoahoc()
?>
<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 14:26:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADM English Center</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/anh7.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div class="section header">
            <div class="header-top-section">
                <div class="container">
                    <div class="header-top-wrap">
                        <div class="header-top-content text-center">
                            <p>Nâng cao Tiếng Anh của Bạn là con đường đến sự giao tiếp tự tin <span>- Tự Tin với nỗ lực sẽ đánh bại sự lười nhát trong cuộc đua thành công.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-section">

                <div class="container-fluid custom-container">
                    <div class="header-bottom-wrap">

                        <div class="header-logo-menu">

                            <!--  Header Logo Start  -->
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/images/anh7.png" alt="logo" width="100%" height="80px"></a>
                            </div>
                            <!--  Header Logo End  -->

                            <!--  Header Menu Start  -->
                            <div class="header-menu d-none d-lg-block">
                                <ul class="main-menu">
                                    <li class="active-menu">
                                        <a href="index.php">Trang chủ</a>
                                    </li>
                                    <li><a href="index.php?act=khoahoc">Khóa Học</a>
                                        <ul class="sub-menu">
                                            <li><?php foreach ($listDanhMuc as $value) : ?>
                                            <li><a href="index.php?act=khoahoc&idkh=<?php echo $value['id_dm'] ?>"><?php echo $value['ten_dm'] ?></a></li>
                                        <?php endforeach ?>
                                    </li>

                                </ul>
                                </li>
                                <li><a href="course-grid.html">Giảng Viên</a>
                                    <!-- <ul class="sub-menu">
                                            <li><a href="course-grid.html">Course Grid</a></li>
                                            <li><a href="course-list.html">Course List</a></li>
                                            <li><a href="course-details.html">Course Details</a></li>
                                        </ul> -->
                                </li>
                                <li><a href="blog.html">Liên Hệ</a>
                                </li>
                                <li><a href="contact.html">Về Chúng Tôi</a></li>
                                </ul>
                            </div>
                            <!--  Header Menu End  -->

                        </div>


                        <!-- Header Meta Start -->
                        <div class="header-meta">
                            <div class="header-search d-none d-xl-block">
                                <form action="#">
                                    <input type="text" placeholder="Tìm kiếm...">
                                    <button><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>

                            <div class="header-login d-none d-lg-block">
                                <?php
                                if (isset($_SESSION['login'])):?>
                                    <?php if($_SESSION['login']['id_cv']): ?>
                                    <a class="link" href="admin/index.php"><i class="far fa-user"></i> Vào trang quản trị</a>
                                    <?php endif?>
                                    <a class="link" href="index.php?act=dangxuat"><i class="far"></i> Đăng Xuất</a>

                                <?php else:?>
                                <a class="link" href="index.php?act=dangnhaptk"><i class="far fa-user"></i> Đăng nhập</a>
                                <a class="link" href="index.php?act=dangkytk">Đăng ký</a>
                                <?php endif?>
                            </div>

                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>

                        </div>
                        <!-- Header Meta End -->

                    </div>
                </div>


            </div>
        </div>
        <!-- Header End -->


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
                        <li class="active-menu">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li class="active"><a href="index.html">Main Demo</a></li>
                                <li><a href="index-2.html">Course Hub</a></li>
                                <li><a href="index-3.html">Distant Learning</a></li>
                                <li><a href="index-4.html">Kindergarten</a></li>
                                <li><a href="index-5.html">Language</a></li>
                                <li><a href="index-6.html">University</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Single</a></li>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="faq.html">Faq's</a></li>
                                <li><a href="error.html">404 Page</a></li>
                                <li><a href="login-register.html">Login Register</a></li>
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