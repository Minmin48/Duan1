<?php
if (isset($_GET['idkh']) && $_GET['idkh']) {
    $iddm = $_GET['idkh'];
    $dssp = show_khoahoc($iddm);
} else {
    $dssp = get_khoahoc();
}
?>
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
                        <h2 class="title">KHÓA HỌC TOEIC</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Khóa Học</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Toeic</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Course List Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Course List Wrapper Start -->
        <div class="course-list-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-wrap-02">

                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-widget-02">
                            <h3 class="widget-title">Type of Courses</h3>

                            <div class="widget-checkbox">
                                <ul class="checkbox-list">
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">Free (11)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">Paid (11)</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Wrapper End -->

                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-widget-02">
                            <h3 class="widget-title">Categories</h3>

                            <div class="widget-checkbox">
                                <ul class="checkbox-list">
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">Technology (11)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                        <label class="form-check-label" for="checkbox4">Business (07)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                                        <label class="form-check-label" for="checkbox5">Development (11)</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Wrapper End -->

                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-widget-02">
                            <h3 class="widget-title">Instructor</h3>

                            <div class="widget-checkbox">
                                <ul class="checkbox-list">
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                        <label class="form-check-label" for="checkbox6">Jimmy Jason (11)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox7">
                                        <label class="form-check-label" for="checkbox7">Harnold (07)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox8">
                                        <label class="form-check-label" for="checkbox8">Eric Madny (11)</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
                <div class="col-lg-9">
                    <!-- Course Collapse End -->
                    <div class="tab-content">
                        <div id="grid">
                            <div class="">
                                <div class="row">
                                    <?php
                                    // $list_kh = get_khoahoc();
                                    foreach ($dssp as $value) : ?>
                                        <div class="col-3">
                                            <div class="courses-image">
                                                <a href="index.php?act=ct_khoahoc&id=<?php echo $value['id_kh'] ?>"><img style="border-radius:8px" width="1000px" height="170px" src="img/<?php echo $value['hinh'] ?>" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <span class="price">
                                                        <span style="color: red; font-size:18px; font-weight: bold;" class="sale-price"><?php echo number_format($value['hoc_phi'])  ?> VNĐ</span>
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
            </div>
        </div>
    </div>
</div>

