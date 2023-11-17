<?php
if (isset($_GET['idkh']) && $_GET['idkh']) {
    $iddm = $_GET['idkh'];
    $dssp = show_khoahoc($iddm);
} else {
    $dssp = get_khoahoc();
}
?>

<!-- Hero Start -->
        <div class="upstudy-hero-section section" style="background-image: url(assets/images/bg/hero-bg.jpg);">
            <div class="shape-3">
                <img src="assets/images/shape/shape-1.png" alt="">
            </div>
            <div class="shape-4"></div>
            <div class="shape-5">
                <img src="assets/images/shape/hero-shape2.png" alt="">
            </div>
            <div class="svg-shape">
                <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390">
                    <path d="M 0,400 C 0,400 0,200 0,200 C 247.5,166.5 495,133 735,133 C 975,133 1207.5,166.5 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill-opacity="1"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <p class="text" data-aos="fade-up" data-aos-delay="800"><img src="assets/images/energy.png" alt=""> Học từ hơn 20,000+ khóa học mạnh mẽ</p>
                            <h2 class="title" data-aos="fade-up" data-aos-delay="700">Tự Tin <span>giao tiếp</span> Tiếng Anh</h2>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="900">
                                <a class="btn" href="login-register.html">Đăng Ký Ngay</a>
                            </div>
                            <p class="link-text" data-aos="fade-up" data-aos-delay="1000"><span>Được giảm 8%</span>  Khi đăng ký qua Website</p>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Hero Images Start -->
                        <div class="hero-images">
                            <img class="shape-1" src="assets/images/shape/hero-shape1.png" alt="">
                            <div class="shape-2"></div>
                            <div class="shape-6">
                                <img src="assets/images/shape/shape-7.png" alt="">
                            </div>
                            <div class="image">
                                <img src="assets/images/hero-img.png" alt="">
                                <div class="image-content text-center">
                                    <img src="assets/images/student-img.png" alt="">
                                    <div class="image-text">
                                        <h3 class="number">100k+</h3>
                                        <p>Tổng số người theo học</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Images End -->
                    </div>
                </div>
            </div>

        </div>
        <!-- Hero End -->

        <!-- Category Start -->
        <div class="section upstudy-category-section">
            <div class="container">
                <div class="category-wrap">
                    <div class="row">
                        <div class="section-title text-center">
                            <h2 class="title">Danh Mục<span> Hàng Đầu</span></h2>
                        </div>
                    </div>
                    <div class="category-content-wrap">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.html" class="category-item">
                                    <div class="category-icon">
                                        <img src="assets/images/cat-icon1.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">TOEIC</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.html" class="category-item color-2">
                                    <div class="category-icon">
                                        <img src="assets/images/cat-icon2.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">IELTS</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.html" class="category-item color-3">
                                    <div class="category-icon">
                                        <img src="assets/images/cat-icon3.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">LẤY GỐC</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.html" class="category-item color-4">
                                    <div class="category-icon">
                                        <img src="assets/images/cat-icon4.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">CẤP 3</h3>
                                    </div>
                                </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Offer Start -->
        <div class="section upstudy-offer-section section-padding-03">
            <div class="container">
                <!-- Offer Wrap Start -->
                <div class="offer-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Single offer Start -->
                            <div class="single-offer">
                                <div class="offer-images">
                                    <img src="assets/images/offer-1.jpg" alt="offer">
                                </div>
                                <div class="offer-content">
                                    <h4 class="sub-title">Cùng học với</h4>
                                    <h3 class="title">TOEIC</h3>
                                    <p>Khóa học được nhiều bạn trẻ chọn đến nhất</p>
                                    <a href="login-register.html" class="btn">Đăng Ký Ngay</a>
                                </div>
                            </div>
                            <!-- Single Offer End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single offer Start -->
                            <div class="single-offer">
                                <div class="offer-images">
                                    <img src="assets/images/offer-2.jpg" alt="offer">
                                </div>
                                <div class="offer-content">
                                    <h4 class="sub-title">Cùng học với</h4>
                                    <h3 class="title">IELTS</h3>
                                    <p>Khóa học có nhiều thầy cô tâm huyết.</p>
                                    <a href="login-register.html" class="btn">Đăng Ký Ngay</a>
                                </div>
                            </div>
                            <!-- Single Offer End -->
                        </div>
                    </div>
                </div>
                <!-- Offer Wrap End -->
            </div>
        </div>
        <!-- Offer End -->

        <!-- Courses Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Course Header Start -->
                <div class="course-header">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"><span>Khóa Học</span> Phổ Biến</h2>
                    </div>
                </div>
                <!-- Course Header End -->

                <!-- Courses Wrapper Start -->
                <div class="courses-wrapper">

                    <!-- Courses Tab Start -->
                    <div class="courses-tab">

                        <!-- Courses Tab Content Start -->
                        <div>
                            <div class="tab-pane fade show active" id="tab1">

                            <div class="row">
                                    <?php
                                    // $list_kh = get_khoahoc();
                                    foreach ($dssp as $value) : ?>
                                        <div class="col-3">
                                            <div class="courses-image">
                                                <a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_kh'] ?>"><img width="300px" src="img/<?php echo $value['hinh'] ?>" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">

                                                    <span class="price">
                                                        <span style="color: red;" class="sale-price"><?php echo number_format($value['hoc_phi'])  ?> VNĐ</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_kh'] ?>"><?php echo $value['ten_kh'] ?></a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span><?php echo $value['thoi_gian'] ?></span> Hà Nội</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>      
                            </div>
                                </div>

                            </div>
                        </div>
                        <!-- Courses Tab Content End -->

                    </div>
                    <!-- Courses Tab End -->

                </div>
                <!-- Courses Wrapper End -->
            </div>
        </div>
        <!-- Courses End -->

        <!-- Counter Start -->
        <div class="section upstudy-counter-section section-padding-02" style="background-image: url(assets/images/bg/counter-bg.png);">
            <div class="shape-1">
                <img src="assets/images/shape/counter-shape1.png" alt="">
            </div>
            <div class="shape-2">
                <img src="assets/images/shape/counter-shape2.png" alt="">
            </div>
            <div class="shape-3">
                <img src="assets/images/shape/counter-shape3.png" alt="">
            </div>
            <div class="container">
                <div class="counter-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-1.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">100</sapn>k+
                                    </h3>
                                    <p>Tổng số học sinh theo học</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-2.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">3</sapn>M+
                                    </h3>
                                    <p>Tổng số bài học video</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-1.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">2.5</sapn>k+
                                    </h3>
                                    <p>Lớp học trực tiếp hàng ngày</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter-4.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title">
                                        <sapn class="counter">75</sapn>+
                                    </h3>
                                    <p>Tổng số hạng mục thi</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!-- Brand Start -->
        <div class="section upstudy-brand-section section-padding">
            <div class="container">
                <div class="brand-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="brand-title-wrap">
                                <h2 class="title">Người dẫn đầu thị trường đáng tin cậy trong việc chuyển đổi nhân tài thông qua giáo dục</h2>
                                <a href="login-register.html" class="btn">Bắt đầu học ngay</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="brand-content-wrap">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <div class="upstudy-brand-box">
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-1.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-4.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="upstudy-brand-box">
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-2.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-5.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="upstudy-brand-box brand-box-03">
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-3.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                            <!-- Single Brand Start -->
                                            <div class="single-brand">
                                                <img src="assets/images/brand/brand-6.png" alt="">
                                            </div>
                                            <!-- Single Brand End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Testimonial Start -->
        <div class="section upstudy-testimonial-section">
            <div class="container">
                <!-- Testimonial Wrap Start -->
                <div class="testimonial-wrap" style="background-image: url(assets/images/bg/testi-bg.jpg);">
                    <div class="shape-1">
                        <img src="assets/images/shape/testi-shape1.png" alt="">
                    </div>

                    <!-- Testimonial Content Start -->
                    <div class="testimonial-content testimonial-content-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-testimonial-content">

                                    <h3 class="title">Câu chuyện thành công</h3>
                                    <p>Hóa ra phương pháp để đạt mục đích trong cuộc sống thật đơn giản, cứ tuần tự, từng bước, đừng nhảy vọt từ số 1 đến số 10.</p>
                                    <h5 class="name">Trần Đình Minh</h5>
                                </div>
                                <div class="swiper-slide single-testimonial-content">
                                    <h3 class="title">Câu chuyện thành công</h3>
                                    <p>Hãy thực hiện theo những lời góp ý chân thành, đừng để tính lười biếng của bạn làm hại bản thân mình.</p>
                                    <h5 class="name">Nguyễn Văn Đạt</h5>
                                </div>
                                <div class="swiper-slide single-testimonial-content">
                                    <h3 class="title">Câu chuyện thành công</h3>
                                    <p>Hãy thực hiện theo những lời góp ý chân thành, đừng để tính lười biếng của bạn làm hại bản thân mình.</p>
                                    <h5 class="name">Nguyễn Tuấn Anh</h5>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Content End -->

                    <!-- Testimonial Author Start -->
                    <div class="testimonial-author">
                        <div class="testimonial-author-wrap">
                            <div class="author-images-wrap author-images-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide author-image">
                                            <img src="assets/images/testi-1.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide author-image">
                                            <img src="assets/images/testi-3.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide author-image">
                                            <img src="assets/images/testi-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Author End -->

                </div>
                <!-- Testimonial Wrap End -->
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Blog Start -->
        <div class="section upstudy-blog-section section-padding">
            <div class="container">
                <!-- Latest Blog Wrap Start -->
                <div class="blog-wrap">
                    <div class="section-title text-center">
                        <h2 class="title">Giảng<span> Viên</span></h2>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <!-- Latest Blog Item Start -->
                                <div class="single-blog text-center">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> <a href="#">Mr. Minh</a></span>
                                            <span><i class="far fa-calendar-alt"></i> 08 năm 2012</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Giảng viên dậy Toeic người mới, Lấy gốc người mới</a></h3>
                                        <a class="blog-btn" href="blog-details.html">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Latest Blog Item End -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Latest Blog Item Start -->
                                <div class="single-blog text-center">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> <a href="#">Mr. Tuấn Anh</a></span>
                                            <span><i class="far fa-calendar-alt"></i> 11 năm 2015</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Giảng viên dậy Toeic Nâng Cao, Ielts người mới</a></h3>
                                        <a class="blog-btn" href="blog-details.html"> Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Latest Blog Item End -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Latest Blog Item Start -->
                                <div class="single-blog text-center">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> <a href="#">Mr.Đạt</a></span>
                                            <span><i class="far fa-calendar-alt"></i> 04 năm 2016</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Giảng viên dậy Telts Nâng Cao, Lấy gốc người mới</a></h3>
                                        <a class="blog-btn" href="blog-details.html"> Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Latest Blog Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Wrap End -->
            </div>
        </div>
        <!-- Blog End -->

        <!-- Call To Action Start -->
        <div class="section upstudy-cta-section section-padding-03" style="background-image: url(assets/images/bg/cta-bg.jpg);">
            <div class="container">

                <!-- Call To Action Wrapper Start -->
                <div class="cta-wrap">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <!-- Call To Action Image Start -->
                            <div class="cta-image">
                                <div class="shape-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42px" height="62px">
                                        <image x="0px" y="0px" width="42px" height="62px" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                </div>
                                <div class="image">
                                    <img src="assets/images/cta-1.png" alt="Call To Action">
                                </div>
                            </div>
                            <!-- Call To Action Image End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Call To Action Content Start -->
                            <div class="cta-content text-center">

                                <div class="section-title">
                                    <h2 class="title">Chất lượng đào tạo tốt, giảng viên giảng dậy rễ hiểu. Cơ sở vật chất hiện đại. Ngại gì mà không thử</h2>
                                </div>
                                <a class="btn" href="#">Đăng Ký Ngay</a>

                            </div>
                            <!-- Call To Action Content End -->
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <!-- Call To Action Image Start -->
                            <div class="cta-image">
                                <div class="shape-2 parallaxed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="329.5px" height="187.5px">
                                        <path fill-rule="evenodd" stroke="rgb(246, 177, 61)" stroke-width="3px" stroke-dasharray="12, 6" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M1.499,19.499 C31.499,4.573 135.999,-24.65 201.499,58.499 C266.999,141.64 250.499,193.435 331.500,178.499 " />
                                    </svg>
                                </div>
                                <div class="image">
                                    <img src="assets/images/cta-2.png" alt="Call To Action">
                                </div>
                            </div>
                            <!-- Call To Action Image End -->
                        </div>
                    </div>
                </div>
                <!-- Call To Action Wrapper End -->

            </div>
        </div>
        <!-- Call To Action End -->