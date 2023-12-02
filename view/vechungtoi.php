<?php
if (isset($_GET['id_gv']) && $_GET['id_gv']) {
    $id = $_GET['id_gv'];
    $dssp = getid_giangvien($id);
} else {
    $dssp = getall_giangvien();
}
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
                    <div class="page-banner text-center">
                        <h2 class="title">Về Chúng Tôi</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php?act=khoahoc">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Về Chúng Tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-padding" style="margin-top: -100px;">
    <div class="container">
        <div style="text-align: center; font-size: 25px">
            <b>ADM English tự hào là một trong những đơn vị tiên phong tại Việt Nam cung cấp các lớp học tiếng Anh trực tuyến 1 THẦY - 1 TRÒ với giáo viên chuyên.</b>
        </div>
        <div style="text-align: center;">
            <img src="assets/images/anh7.png" alt="" width="20%">
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="text">
                    <a href="index.php" style="font-weight: bold;">ADM English</a><span> là một nhóm những giáo viên trẻ tuổi có niềm đam mê với tiếng Anh, mong muốn mang lại những lớp học tiếng Anh hiệu quả nhất tới cho người Việt Nam. Nhằm giúp đem lại sự tự tin khi giao tiếng Anh với người nước ngoài trong thời gian ngắn nhất với mức học phí thấp nhất cho học viên.</span>
                    <p>● Các buổi học được Speaking Easily thiết kế để học viên có thể nói và sử dụng tiếng Anh trong toàn bộ thời gian học. Không gì hiệu quả bằng việc được học và giao tiếp với giáo viên nước ngoài nói tiếng Anh chuẩn.</p>
                    <p>● Lớp học là của riêng bạn. Chỉ trong lớp học 1-1, giáo viên mới có thể tập trung 100% sự chú ý vào bạn. Mọi lỗi sai dù nhỏ nhất của bạn về phát âm hay ngữ pháp đều được giáo viên của Speaking Easily tận tình chỉnh sửa giúp bạn.</p>
                    <p>● Bài học sẽ được điều chỉnh độ phức tạp theo trình độ của học viên. Bạn có thể yêu cầu giáo viên giảng kỹ hoặc đi sâu vào một vấn đề trong bài học mà bạn thích một cách dễ dàng. Điều khó có thể thực hiện trong lớp học truyền thống có trên 2 học viên.</p>
                    <p>● Vì vậy để đảm bảo quyền lợi và chất lượng học tập tốt nhất cũng như cam kết đầu ra, các bạn hãy sáng suốt khi lựa chọn trung tâm có kinh nghiệm và uy tín lâu năm như Speaking Easily, với kinh nghiệm và uy tín 10 năm (từ tháng 10-2013), chúng tôi tự hào là những người tiên phong mang mô hình tiếng Anh online về Việt Nam.</p>
                </div>
            </div>
            <div class="col-lg-4" style="margin-right: 110px;">
                <h3>Anh Trần Đình Minh- Phụ huynh em Tuấn Em chia sẻ.</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gvxoggRzrvw?si=TUp-KiCSgvrB49LF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <br><br>
        <div style="text-align: center;">
            <h2 style="color:#1CB098;">Báo Chí Nói về Chúng Tôi</h2>
            <img src="assets/images/baochi1.png" alt="">
            <img src="assets/images/baochi2.png" alt="">
            <img src="assets/images/baochi3.png" alt="">
        </div>
        <br><br>
        <h2 style="color:#1CB098">Đội Ngũ Giáo Viên</h2>
        <div class="blog-wrap">
            <div class="row">
                <?php foreach ($dssp as $value) : ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"><img style="border-radius:8px" width="280px" height="380px" src="img/<?php echo $value['hinh_gv'] ?>" alt="Courses"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i><a href="index.php?act=giangvien&id=<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></a></span>
                                </div>
                                <h3 class="title"><a href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></a></h3>
                                <a class="blog-btn" href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"> Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>