<?php
if (!isset($_POST)) {
    session_start();
    
}
var_dump($_SESSION);
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
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Lớp Của Tôi</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lớp Của Tôi</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-padding">
    <div class="container">
        <div class="course-lessons">
            <main class="table">
                <section class="table__header">
                    <h1>Lớp Học Đã Đăng Ký</h1>
                </section>
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Lớp</th>
                                <th>Tên Giảng Viên</th>
                                <th>Thời Gian Học</th>
                                <th>Ca Học</th>
                                <th>Số Lượng</th>
                                <th>Học Phí</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Khóa Học</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php if (isset($_SESSION['order'])): ?>
                        <tbody>
                            <?php
                            $index = 0;
                            $index++ ?>
                                <tr class="table-primary">
                                    <td><?php echo $index; ?></td>
                                    <td><?php echo $_SESSION['order']['tenlop']?></td>
                                    <td><?php echo $_SESSION['order']['tengv']?></td>
                                    <td><?php echo $_SESSION['order']['thoigian']?></td>
                                    <td><?php echo $_SESSION['order']['cahoc']?></td>
                                    <td><?php echo $_SESSION['order']['soluong']?></td>
                                    <td><?php echo $_SESSION['order']['hocphi']?></td>
                                    <td><?php echo $_SESSION['order']['user']?></td>
                                    <td><?php echo $_SESSION['order']['email']?></td>
                                    <td><?php echo $_SESSION['order']['phone']?></td>
                                    <td><?php echo $_SESSION['order']['khoahoc']?></td>
                                    <td>
                                    </td>
                                </tr>
                        </tbody>
                        <?php endif?>
                    </table>
                </section>
            </main>
        </div>
    </div>
</div>
<?php echo $_SESSION['order']['id_lop']?>