<!doctype html>
<html class="no-js" lang="en">

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
                            <p>Nâng cao Tiếng Anh của Bạn là con đường đến sự giao tiếp tự tin -<span> Tự Tin với nỗ lực sẽ đánh bại sự lười nhát trong cuộc đua thành công !</span></p>
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
                                <li><a href="index.php?act=lopcuatoi">Lớp Của Tôi</a>
                                <li><a href="index.php?act=giangvien">Giảng Viên</a>
                                </li>
                                <li><a href="index.php?act=lienhe">Liên Hệ</a>
                                </li>
                                <li><a href="index.php?act=vechungtoi">Thông Tin</a></li>

                                </li>
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
                                if (isset($_SESSION['login'])) : ?>
                                    <?php if ($_SESSION['login']['id_cv']) : ?>
                                        <a class="link" href="admin/index.php"><i class="far fa-user"></i> Vào trang quản trị</a>
                                    <?php endif ?>
                                    <!-- <label for="">Xin chào Trần Đình Minh</label> -->
                                    <!-- <a style="background-color: #1CB098; color: black; margin-left: 100px;  width:70px ;height:30px ;" href="index.php?act=dangxuat"> Đăng xuất</a> -->
                                    <a style="margin-left: 90px;" href="index.php?act=dangxuat">Đăng Xuất</a>

                                <?php else : ?>
                                    <a class="link" href="index.php?act=dangnhaptk"><i class="far fa-user"></i> Đăng nhập</a>
                                    <a class="link" href="index.php?act=dangkytk"> Đăng ký</a>
                                <?php endif ?>
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
           
        </div>
        <!-- Offcanvas End -->