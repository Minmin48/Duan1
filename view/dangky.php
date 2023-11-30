 <!-- <?php
        include_once '../model/pdo.php';
        include_once '../model/pdo_lop.php';

        ?> -->
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
                         <h2 class="title">Đăng Ký</h2>
                         <ul class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                         </ul>
                     </div>
                     <!-- Page Banner Content End -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Banner End -->
 <?php $hihi = getid_lop_gv_kh($_GET['id']);

    ?>
 <!-- Contact Start -->
 <div class="section contact-section section-padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-8">
                 <div class="contact-info-wrap">
                     <form action="vnpay_php/vnpay_create_payment.php" method="post">
                         <div class="row">
                             <h2 style="color: #1CB098">Chi Tiết Lớp Học</h2>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Tên Lớp:</h5>
                                     <input class="form-control" type="disabled" value="<?php echo $hihi['ten_lop'] ?>" style="font-size : 14px;" name="tenlop"readonly>
                                 </div>
                                 <br>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Tên Giảng Viên:</h5>
                                     <input class="form-control" type="disabled" value="<?php echo $hihi['ten_gv'] ?>" style="font-size : 14px" name="tengv"readonly>
                                 </div>
                                 <br>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Thời Gian Học:</h5>
                                     <input class="form-control" type="disabled" value="<?php echo $hihi['thoi_gian_hoc'] ?>" style="font-size : 14px" name="thoigian"readonly>
                                 </div>
                                 <br>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Ca học:</h5>
                                     <input class="form-control" type="disabled" value="<?php echo $hihi['ca_hoc'] ?>" style="font-size : 14px" name="cahoc"readonly>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Số lượng:</h5>
                                     <input class="form-control" type="disabled" value="<?php echo $hihi['soluong_hs'] ?>" style="font-size : 14px" name="soluong"readonly>
                                 </div>
                                 <br>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Học phí: </h5>
                                     <input type="disabled" style="color: red; font-size : 15px" value="<?php echo number_format($hihi['hoc_phi']) ?> VND" name="hocphi" readonly>
                                 </div>
                             </div>

                             <h2 style=" color: #1CB098">Thông Tin Đăng Ký</h2>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Họ & Tên</h5>
                                     <input class class="form-control" name="user" type="text" value="<?php echo $_SESSION['login']['user'] ?>">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Email: </h5>
                                     <input type="text" name="email" value="<?php echo $_SESSION['login']['email'] ?>">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>SĐT: </h5>
                                     <input type="text" name="phone" value="<?php echo $_SESSION['login']['phone'] ?>">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="single-form">
                                     <h5>Khóa Học:</h5>
                                     <select class="form-select" name="khoahoc">
                                         <option value="<?php echo $hihi['id_kh'] ?>"><?php echo $hihi['ten_kh'] ?></option>
                                     </select>
                                 </div>
                                 <br><br>
                             </div>
                             
                             <div class="col-md-12">
                                 <div class="form-btn">
                                     <input type="text" value="<?= $_GET['id_kh'] ?>" hidden name="id_kh">
                                     <input type="text" value="<?= $_GET['id'] ?>" hidden name="id_lop">
                                     <br>
                                     <button class="btn" type="submit" value="Đăng ký" name="dangKy">Thanh Toán</button>
                                     <a href="index.php?act=order_khoahoc"class="btn" type="submit">Thanh Toán Sau</a>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <div class="col-lg-4">
                 <!-- Contact Form Wrap Start -->
                 <div class="contact-form-wrap">
                     <img src="assets/images/hero-img.png" alt="">
                 </div>

             </div>
             <!-- Contact Form Wrap End -->
         </div>
     </div>
 </div>
 </div>
 <!-- Contact End -->

 <!-- Contact Map Start -->
 <div class="section contact-map-section">
     <div class="contact-map-wrap">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4428.419261333094!2d105.74124562021554!3d21.039011783670997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1700230525211!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
 </div>
 <!-- Contact Map End -->