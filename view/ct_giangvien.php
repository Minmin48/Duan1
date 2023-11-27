<!-- Page Banner Start -->
<?php
$listgv =   getid_giangvien($_GET['id']);
?>
?>
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
                        <h2 class="title">Giảng Viên</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giảng Viên</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Blog Details Start -->
<div class="section blog-details-section section-padding">
    <div class="container">
        <!-- Blog Details Wrap Start -->
        <div class="blog-details-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Details Post Start -->
                    <div class="blog-details-post">
                        <!-- Single Blog Start -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 30px;" class="single-blog-post single-blog">

                            <div class="blog-image">
                                <img src="img/<?php echo $listgv['hinh_gv'] ?>" alt="Author" width="420px" height="400px">
                            </div>
                            <div class="blog-content">
                                <h3 class="title" style=" color:#1CB098">Thông Tin Giảng Viên</h3><br>
                                <div class="blog-meta">
                                    <span style="font-size:20px; font-weight: bold; color: black"><i class="far fa-user"></i> <a href=""><?php echo $listgv['ten_gv'] ?></a></span>
                                </div>

                                <p class="text"><?php echo $listgv['thongtin_gv'] ?></p>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        <div class="blog-details-content">
                            <!-- Blog Blockquote Start -->
                            <div class="blog-quote">
                                <blockquote class="blockquote">
                                    <div class="blockquote-icon">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                            <g>
                                                <polygon points="0,4 0,28 12,16 12,4" />
                                                <polygon points="20,4 20,28 32,16 32,4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <p>Không phải cứ học với giáo viên nước ngoài là sẽ đạt hiệu quả như người học mong muốn. Chỉ có những giáo viên kinh nghiệm, có bằng cấp và được đào tạo bài bản mới có thể giúp bạn học tốt và khoa học.</p>
                                    <h3 class="name"><?php echo $listgv['ten_gv'] ?></h3>
                                </blockquote>
                            </div>
                            <!-- Blog Blockquote End -->
                            <!-- Blog Details Text Start -->
                            <div class="blog-details-text">
                                <h4 class="title">Tuyển Dụng</h4>
                                <p>Quy trình tuyển giáo viên của chúng tôi rất kỹ lưỡng, giáo viên sẽ phải qua 4 vòng loại khắt khe trước khi chính thức trở thành giáo viên dạy tại ADM. Nhằm đảm bảo chất lượng cao nhất cho mỗi buổi học và đem lại lợi ích lớn nhất cho học viên, chúng tôi chỉ tuyển chọn những giáo viên có kinh nghiệm ít nhất 3 năm trong việc giảng dạy tiếng anh. ADM là nơi bạn có thể gửi gắm niềm tin học tập Tiếng Anh nhanh chóng, hiệu quả, lý thú và kinh tế! </p>
                            </div>
                            <div class="blog-details-tag-share">
                                <div class="d-flex justify-content-end">
                                    <a href="index.php?act=giangvien" class="btn btn-primary mb-2">Xem thêm</a>
                                </div>
                                <div class="blog-details-share">
                                    <ul class="social-share">
                                        <li><a class="share-facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="share-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="share-pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Blog Sidebar Start -->
                    <div class="blog-sidebar">
                        <div class="">
                            <img src="assets/images/anh7.png" alt="" width="50%">
                        </div>
                        <h3>Đạt chuẩn</h3>
                        <p>Giáo viên kinh nghiệm từ 3-15 năm, đạt chuẩn bằng cấp quốc tế về giảng dạy Anh Văn (CELTA, TESOL). Nói không với tây ba-lô!</p>
                        <div>
                            <h3>Nhiệt Tình</h3>
                            <p>Để có được sự hứng thú trong buổi học, sự nhiệt tình giáo viên phải được đặt lên hàng đầu, và chúng tôi thấu hiểu điều đó.</p><br>
                        </div>
                        <h3>Hỗ trợ sau giờ học</h3>
                        <p>Dù cho bạn chỉ trả phí cho buổi học, nhưng giáo viên vẫn giải đáp các thắc mắc ngay cả ngoài giờ học qua Skype message hoặc email.</p><br>
                    </div>
                    <!-- Blog Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Blog Details Wrap End -->
    </div>
</div>
<!-- Blog Details End -->