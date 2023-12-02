<!-- Page Banner Start -->
<?php
$listKhoaHoc =  get_khoahoc_by_id($_GET['id']);
?>
<link rel="stylesheet" href="view/css/css.css">
<div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
    <div class="shape-1">
        <img src="assets/images/shape/shape-7.png" alt="">
    </div>
    <div class="shape-2">
        <img src="assets/images/shape/shape-1.png" alt="">
    </div>
    <div class="shape-3"></div>
    <div class="container">
        <div class="course-details-banner-content">
            <h2 class="title"><?php echo $listKhoaHoc['ten_kh'] ?></h2>
            <p class="text"><?php echo $listKhoaHoc['thongtin_kh'] ?></p>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Course Details Start -->
<div class="section section-padding">

    <div class="container">
        <h3 style="color:mediumblue">Ai nên tham gia khóa học này:</h3>
        <H5>Khóa học tiếng Anh HR được thiết kế phù hợp cho:</H5>
        <ul>
            <li>● Những người đang muốn nâng cao vốn từ vựng và văn phong ngành nhân sự.</li>
            <li>● Củng cố ngữ pháp, bổ sung vốn vựng cần thiết.</li>
            <li>● Quỹ thời gian ít, công việc bận rộn cả ngày. Nhưng đang muốn nâng cao khả năng giao tiếp tiếng Anh và <br> có thể dành 40 phút để học mỗi ngày.
                Rèn luyện cả 4 kỹ năng: Nghe-Nói-Đọc-Viết.</li>
            <li>● Đã từng tham gia các khóa học tiếng Anh ADM nhưng không hiệu quả do lớp học quá đông <br> và nội dung bài học hoàn toàn lệch với thực tế công việc cần.</li>
            <li>● Làm việc bằng tiếng Anh có khả năng đọc-viết và ngữ pháp khá nhưng không sử dụng kỹ năng nghe-nói <br> nên gần như không thể giao tiếp được. Nói khó nghe, nghe không hiểu.</li>
        </ul>
        <div class="row justify-content-between">
            <div class="col-xl-7 col-lg-8">
                <div class="course-details-wrapper">
                    <div class="course-learn-list">
                        <h3 class="title">Khóa học tiếng Anh ADM sẽ giúp người học:</h3>
                        <ul>
                            <li>Có thể thuyết trình, trình bày và giao tiếp bằng tiếng Anh</li>
                            <li>Sử dụng tiếng Anh tự tin hơn trong môi trường làm việc.</li>
                            <li>Nâng cao cả 4 kỹ năng phục vụ cho công việc</li>
                            <li>Cải thiện phản xạ nghe nói một cách nhanh nhất.</li>
                            <li>Mở rộng cơ hội nghề nghiệp.</li>
                            <li>Làm giàu kiến thức.</li>
                        </ul>
                    </div> <br><br><br>
                    <div class="course-lessons">
                        <main class="table">
                            <section class="table__header">
                                <h1>Lịch học các lớp</h1>
                            </section>
                            <section class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Lớp </th>
                                            <th>Thời Gian Khai Giảng </th>
                                            <th>Ca Học </th>
                                            <th>Khóa Học</th>
                                            <th>Tên Giảng Viên</th>
                                            <th>Slot</th>
                                            <th> </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $index = 0;
                                        $listkh = join_giangvien($_GET['id']);

                                        foreach ($listkh as $value) : $index++ ?>
                                            <tr class="table-primary">
                                                <td><?php echo $index; ?></td>
                                                <td><?php echo $value['ten_lop'] ?></td>
                                                <td><?php echo $value['thoi_gian_hoc'] ?></td>
                                                <td> <?php echo $value['ca_hoc'] ?></td>
                                                <td><?php echo $value['ten_kh'] ?></td>
                                                <td><?php echo $value['ten_gv'] ?></td>
                                                <td><?php echo $value['soluong_hs'] ?></td>
                                                <td>
                                                    <a href="index.php?act=dangky&id=<?php echo $value['id_lop'] ?>&id_kh=<?= $value['id_kh'] ?>" class="btn btn-danger" <?php echo ($value['soluong_hs'] == 0) ? 'onclick="return checkSLHS()"' : '' ?>><i></i> Đăng Ký</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </section>
                        </main>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-details-video-description">
                    <div class="price-wrap">
                        <h3>&nbsp;&nbsp;Sale:<samp style="color: red;"> 8%</samp></h3>
                        <div>
                            <strong style="color: red; font-size: 26px;">&nbsp;&nbsp;<?php echo number_format($listKhoaHoc['hoc_phi']) ?>đ &nbsp;</strong>
                            <samp>Giá gốc</samp>
                            <samp><strike>1,200.000 đ</strike></samp>
                        </div>
                        <b class="fa fa-tachometer" style="color: #1CB098;">&nbsp;&nbsp;&nbsp;Thời gian ưu đãi còn 1 ngày</b>
                        <!--  &nbsp; c - lệch khoảng cách-->
                    </div>
                    <div class="sidebar-image">
                        <img src="img/<?php echo $listKhoaHoc['hinh'] ?>" alt="video" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Details End -->