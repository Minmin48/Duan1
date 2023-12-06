<?php
if (!isset($_POST)) {
    session_start();
}
var_dump($_SESSION['login']['user']);
$my_khoa_hoc = my_khoa_hoc($_SESSION['login']['user']);
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
                    <div class="page-banner text-center">
                        <h2 class="title">Lớp Của Tôi</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lớp Của Tôi</li>
                        </ul>
                    </div>
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
                                <th>Trạng Thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                        $index = 0;
                        foreach ($my_khoa_hoc as $value) : $index++ ?>
                            <tbody>
                                <tr class="table-primary">
                                    <td><?php echo $index; ?></td>
                                    <td><?php echo $value['ten_lop'] ?></td>
                                    <td><?php echo $value['ten_gv'] ?></td>
                                    <td><?php echo $value['thoi_gian_hoc'] ?></td>
                                    <td><?php echo $value['ca_hoc'] ?></td>
                                    <td><?php echo $value['so_luong'] ?></td>
                                    <td><?php echo number_format($value['hoc_phi']) ?> VNĐ</td>
                                    <td><?php echo $value['ten_nguoi_dung'] ?></td>
                                    <td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['phone'] ?></td>
                                    <td><?php echo $value['ten_kh'] ?></td>
                                    <td><?php echo $value['name_trang_thai'] ?></td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </section>
            </main>
        </div>
    </div>
</div>