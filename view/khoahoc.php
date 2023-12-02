<?php
if (isset($_GET['idkh']) && $_GET['idkh']) {
    $iddm = $_GET['idkh'];
    $dssp = show_khoahoc($iddm);
} else {
    $dssp = get_khoahoc();
}
?>
<?php
$list = getid_danhmuc($_GET['idkh'])
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
                    <div class="page-banner text-center">
                        <h2 class="title">KHÓA HỌC <?php
                                                    if (isset($_GET['idkh']) && $_GET['idkh']) {
                                                        echo $list['ten_dm'];
                                                    }
                                                    ?></h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php?act=khoahoc">Khóa Học</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php
                                                                                    if (isset($_GET['idkh']) && $_GET['idkh']) {
                                                                                        echo $list['ten_dm'];
                                                                                    } else {
                                                                                        echo 'Nổi bật';
                                                                                    }
                                                                                    ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Course List Start -->
<div class="section section-padding">
    <div class="container">
        <div class="course-list-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-wrap-02">
                        <div class="sidebar-widget-02">
                            <h3 class="widget-title">Top 5 Khóa Học</h3>
                            <br>
                            <div class="image">
                                <a href="index.php?act=ct_khoahoc&id=22"><img src="img/toeic1.jpg" alt="" width="30%">&nbsp;&nbsp;&nbsp;<span>Toeic 400+</span></a>
                            </div><br>
                            <div class="image">
                                <a href="index.php?act=ct_khoahoc&id=21"><img src="img/toeic3.jpg" alt="" width="30%">&nbsp;&nbsp;&nbsp;<span>Toeic mất gốc</span></a>
                            </div><br>
                            <div class="image">
                                <a href="index.php?act=ct_khoahoc&id=24"><img src="img/toeic4.png" alt="" width="30%">&nbsp;&nbsp;&nbsp;<span>Toeic Nâng Cao</span></a>
                            </div><br>
                            <div class="image">
                                <a href="index.php?act=ct_khoahoc&id=36"><img src="assets/images/matgoc.jpg" alt="" width="30%">&nbsp;&nbsp;&nbsp;<span>Mất Gốc</span></a>
                            </div><br>
                            <div class="image">
                                <a href="index.php?act=ct_khoahoc&id=32"><img src="assets/images/ielts.jpg" alt="" width="30%">&nbsp;&nbsp;&nbsp;<span>IELTS Mất Gốc</span></a>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div id="grid">
                            <div class="">
                                <div class="row">
                                    <?php
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