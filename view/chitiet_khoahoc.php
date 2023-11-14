<!-- Page Banner Start -->
<?php
$listKhoaHoc =  get_khoahoc_by_id($_GET['id']);
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

                        <div class="lessons-top">
                            <h3 class="title">Bài Tập</h3>
                            <div class="lessons-time">
                                <span>1 Ngày</span>
                                <span>6h 40m</span>
                            </div>
                        </div>

                        <!-- Course Accordion Start -->
                        <div class="course-accordion accordion" id="accordionCourse">
                            <div class="accordion-item">
                                <button data-bs-toggle="collapse" data-bs-target="#collapseOne">Dễ </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionCourse">
                                    <div class="accordion-body">
                                        <ul class="lessons-list">
                                            <li><a href="index.php?act=video"><i class="fa fa-play-circle"></i> Video kiến thức<span>5:00</span></a></li>
                                            <li><a href="index.php?act=video1"><i class="fa fa-play-circle"></i> Video phát âm<span>3:17</span></a></li>
                                            <li><a href="https://quizizz.com/join/pre-game/running/U2FsdGVkX187Iv9wxQcUGv%252Bwkls9mMGrufvAXWF65MEM7oGgqWrUVd3bLwoYszplwhZHUU6vn5%252BCsGHcZH3I0n9P2YxjKRwgdzDeyJCjSWg%253D/start"><i class="fa fa-question-circle"></i> Quizz 1 : bài tập</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Trung Bình</button>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                    <div class="accordion-body">
                                        <ul class="lessons-list">
                                            <li><a href="#"><i class="fa fa-play-circle"></i> Video kiến thức <span>5:00</span></a></li>
                                            <li><a href="#"><i class="fa fa-play-circle"></i> Video phát âm <span>3:17</span></a></li>
                                            <li><a href="https://quizizz.com/join/pre-game/running/U2FsdGVkX19Vp3axyn2Nis%252BJvBeBdutgcEiJz4TUYdRlr7wTXKv4CiT6az8%252FSBuUFRyZHO0XqAct8AsIxLyuw59F%252FVvTivKwv0ezQby%252BFHk%253D/start"><i class="fa fa-question-circle"></i> Quizz 1 : bài tập</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Nâng Cao</button>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                    <div class="accordion-body">
                                        <ul class="lessons-list">
                                            <li><a href="#"><i class="fa fa-play-circle"></i> Video kiến thức <span>5:00</span></a></li>
                                            <li><a href="#"><i class="fa fa-play-circle"></i> Video phát âm <span>3:17</span></a></li>
                                            <li><a href="https://quizizz.com/join/pre-game/running/U2FsdGVkX1%252Byl3XZpFk6RRi3hCAVX6tkrnTRJWyig3CNGKK6EB4CXBa8SDwHVojzax4SMUlN8uNW30K6ZFIFHXiJCAcGectGQ6uue%252BwOUzQ%253D/start"><i class="fa fa-question-circle"></i> Quizz 1 :  bài tập</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course Accordion End -->

                    </div>
                    <!-- Course Lessons End -->

                    <!-- Course Instructor Start -->
                    <div class="course-instructor">
                        <h3 class="title">Course Instructor</h3>

                        <div class="instructor-profile">
                            <div class="profile-images">
                                <img src="assets/images/author-5.jpg" alt="author">
                            </div>
                            <div class="profile-content">
                                <h5 class="name">Alena Hedge</h5>

                                <div class="profile-meta">
                                    <div class="rating">
                                        <div class="rating-star">
                                            <div class="rating-active" style="width: 100%;"></div>
                                        </div>
                                        <span>(4.6)</span>
                                    </div>
                                    <span class="meta-action"><i class="fa fa-play-circle"></i> 10 Tutorials</span>
                                    <span class="meta-action"><i class="far fa-user"></i> 134 Students</span>
                                </div>

                                <p>World-class training and development programs developed by top teachers. Build skills with courses, certificates, and degrees online from world-class universities </p>

                            </div>
                        </div>
                    </div>
                    <!-- Course Instructor End -->

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
                        <!-- Review Rating End -->

                        <!-- Review Items Start -->
                        <div class="review-items">
                            <ul>
                                <li>
                                    <!-- Single Review Start -->
                                    <div class="single-review">
                                        <div class="review-author">
                                            <img src="assets/images/author-4.jpg" alt="Author">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top">
                                                <h4 class="name">David Gea</h4>
                                                <div class="rating-star">
                                                    <div class="rating-active" style="width: 100%;"></div>
                                                </div>
                                                <span class="date">5 Months Ago</span>
                                            </div>
                                            <p>World-class training and development programs developed by top teachers. Build skills with courses, certificates, and degrees online from world-class.</p>
                                        </div>
                                    </div>
                                    <!-- Single Review End -->
                                </li>
                                <li>
                                    <!-- Single Review Start -->
                                    <div class="single-review">
                                        <div class="review-author">
                                            <img src="assets/images/author-3.jpg" alt="Author">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top">
                                                <h4 class="name">Andrew paker</h4>
                                                <div class="rating-star">
                                                    <div class="rating-active" style="width: 60%;"></div>
                                                </div>
                                                <span class="date">4 Months Ago</span>
                                            </div>
                                            <p>World-class training and development programs developed by top teachers. Build skills with courses, certificates, and degrees online from world-class.</p>
                                        </div>
                                    </div>
                                    <!-- Single Review End -->
                                </li>
                            </ul>
                        </div>
                        <!-- Review Items End -->

                    </div>
                    <!-- Course Review End -->

                </div>
                <!-- Course Details Wrapper End -->

            </div>

            <div class="col-lg-4">
                <!-- Sidebar Wrapper Start -->
                <div class="sidebar-details-wrap">

                    <!-- Sidebar Details Video Description Start -->
                    <div class="sidebar-details-video-description">
                        <div class="sidebar-image">
                            <img src="img/<?php echo $listKhoaHoc['hinh'] ?>" alt="video">
                        </div>
                        <div class="sidebar-description">
                            <!-- <h3 class="title"><a href="index.php?act=ct_khoahoc&id=<?php echo $listKhoaHoc['id_kh'] ?>"><?php echo $listKhoaHoc['ten_kh'] ?></a></h3> -->
                            <div class="price-wrap">
                                <span class="label">Sale :</span>
                                <div class="price">
                                    <span class="sale-price">567,000 đ</span>
                                    <span class="regular-price">$<?php echo number_format($listKhoaHoc['hoc_phi']) ?>đ</span>
                                </div>
                            </div>
                            <ul class="description-list">
                                <li><i class="flaticon-wall-clock"></i> Khóa Học <span><?php echo $listKhoaHoc['ten_kh'] ?> </span></li>
                                <li><i class="fas fa-sliders-h"></i> Thời Gian <span><?php echo $listKhoaHoc['thoi_gian'] ?></span></li>
                                <li><i class="far fa-file-alt"></i> Lớp <span>4 Lectures</span></li>
                                <li><i class="fas fa-language"></i> Giảng Viên <span><?php echo $listLop['ten_gv'] ?></span></li>
                                <li><i class="far fa-user"></i> Số Lượng Học Sinh <span></span></li>
                            </ul>
                            <a class="btn w-100" href="#">Đăng Ký Ngay</a>
                            <div class="share-link">
                                <div class="link-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <a class="share-btn" href="#"> Chia Sẻ</a>
                                <div class="social-share-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Details Video Description End -->


                </div>
                <!-- Sidebar Wrapper End -->
            </div>
        </div>


    </div>
</div>
<!-- Course Details End -->