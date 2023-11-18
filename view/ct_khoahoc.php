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
        <!-- Course Details Banner Content Start -->
        <div class="course-details-banner-content">

            <h2 class="title"><?php echo $listKhoaHoc['ten_kh'] ?></h2>

            <p class="text"><?php echo $listKhoaHoc['thongtin_kh'] ?></p>

            <div class="course-details-meta">
                <div class="meta-action">
                    <div class="meta-author">
                        <img src="img/<?php echo $listKhoaHoc['hinh'] ?>" alt="Author">
                    </div>
                    <div class="meta-name">
                        <p class="name">Adam Helen</p>
                    </div>
                </div>

                <div class="meta-action">
                    <h5 class="date">Last Update: <span><?php echo $listKhoaHoc['thoi_gian'] ?></span></h5>
                </div>
                <div class="meta-action">
                    <div class="rating">
                        <div class="rating-star">
                            <div class="rating-active" style="width: 100%;"></div>
                        </div>
                        <span>(4.5)</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Details Banner Content End -->
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
                <!-- Course Details Wrapper Start -->
                <div class="course-details-wrapper">
                    <!-- Course Learn List Start -->
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
                    </div>
                    <!-- Course Learn List End -->

                    <!-- Course Lessons Start -->
                    <div class="course-lessons">

                        <main class="table">
                            <section class="table__header">
                                <h1>Lịch học các lớp</h1>

                                <div class="export__file">
                                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                                    <input type="checkbox" id="export-file">
                                    <div class="export__file-options">
                                        <label>Export As &nbsp; &#10140;</label>
                                        <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                                        <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                                        <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                                        <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                                    </div>
                                </div>
                            </section>
                            <section class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th> Tên Lớp </th>
                                            <th> Thời Gian Học </th>
                                            <th> Ca Học </th>
                                            <th> Khóa Học</th>
                                            <th> Tên Giảng Viên</th>
                                            <th> Số Lượng </th>
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

                                                    <a href="index.php?act=dangky&id=<?php echo $value['id_lop'] ?>&id_kh=<?= $value['id_kh'] ?>" class="btn btn-danger"><i></i> Đăng Kí</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </section>
                        </main>
                    </div>

                    <!-- Course Review Start -->
                    <div class="course-review">
                        <h3 class="title">Review</h3>

                        <!-- Review Rating Start -->
                        <div class="review-rating">

                            <div class="rating-box">
                                <span class="count">5.0</span>
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 100%;"></div>
                                </div>
                                <p>Total 2 Ratings</p>
                            </div>
                            <div class="rating-percentage">

                                <!-- Course Review Start -->
                                <div class="single-rating-percentage">
                                    <span class="label">5 Stars</span>
                                    <div class="rating-line">
                                        <div class="line-bar" style="width: 90%;"></div>
                                    </div>
                                    <span class="label">90%</span>
                                </div>
                                <!-- Course Review End -->

                                <!-- Course Review Start -->
                                <div class="single-rating-percentage">
                                    <span class="label">4 Stars</span>
                                    <div class="rating-line">
                                        <div class="line-bar" style="width: 40%;"></div>
                                    </div>
                                    <span class="label">40%</span>
                                </div>
                                <!-- Course Review End -->

                                <!-- Course Review Start -->
                                <div class="single-rating-percentage">
                                    <span class="label">3 Stars</span>
                                    <div class="rating-line">
                                        <div class="line-bar" style="width: 20%;"></div>
                                    </div>
                                    <span class="label">20%</span>
                                </div>
                                <!-- Course Review End -->

                                <!-- Course Review Start -->
                                <div class="single-rating-percentage">
                                    <span class="label">2 Stars</span>
                                    <div class="rating-line">
                                        <div class="line-bar" style="width: 0%;"></div>
                                    </div>
                                    <span class="label">15%</span>
                                </div>
                                <!-- Course Review End -->

                                <!-- Course Review Start -->
                                <div class="single-rating-percentage">
                                    <span class="label">1 Stars</span>
                                    <div class="rating-line">
                                        <div class="line-bar" style="width: 0%;"></div>
                                    </div>
                                    <span class="label">10%</span>
                                </div>
                                <!-- Course Review End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <!-- Sidebar Details Video Description Start -->
                <div class="sidebar-details-video-description">
                    <div class="sidebar-image">
                        <img src="img/<?php echo $listKhoaHoc['hinh'] ?>" alt="video">
                    </div>

                    <!-- Sidebar Details Video Description End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Course Details End -->