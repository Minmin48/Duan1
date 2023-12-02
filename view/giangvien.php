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
                         <h2 class="title">Giảng Viên</h2>
                         <ul class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Giảng Viên</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Banner End -->

 <!-- Blog Start -->
 <div class="section upstudy-blog-section section-padding">
     <div class="container">
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
 <!-- Blog End -->