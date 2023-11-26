 <?php
    if (isset($_GET['id_gv']) && $_GET['id_gv']) {
        $id = $_GET['id_gv'];
        $dssp = getid_giangvien($id);
    } else {
        $dssp = getall_giangvien();
    }
    ?>
 <!-- Offcanvas Start -->
 <div class="offcanvas offcanvas-start" id="offcanvasMenu">

     <div class="offcanvas-header">
         <!-- Offcanvas Logo Start -->
         <div class="offcanvas-logo">
             <a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
         </div>
         <!-- Offcanvas Logo End -->

         <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

     </div>
     <div class="offcanvas-body">
         <div class="offcanvas-menu">
             <ul class="main-menu">
                 <li>
                     <a href="index.html">Home</a>
                     <ul class="sub-menu">
                         <li><a href="index.html">Main Demo</a></li>
                         <li><a href="index-2.html">Course Hub</a></li>
                         <li><a href="index-3.html">Distant Learning</a></li>
                         <li><a href="index-4.html">Kindergarten</a></li>
                         <li><a href="index-5.html">Language</a></li>
                         <li><a href="index-6.html">University</a></li>
                     </ul>
                 </li>
                 <li><a href="#">Pages</a>
                     <ul class="sub-menu">
                         <li><a href="about.html">About Us</a></li>
                         <li><a href="team.html">Team</a></li>
                         <li><a href="team-details.html">Team Single</a></li>
                         <li><a href="event.html">Event</a></li>
                         <li><a href="faq.html">Faq's</a></li>
                         <li><a href="error.html">404 Page</a></li>
                         <li><a href="login-register.html">Login Register</a></li>
                     </ul>
                 </li>
                 <li><a href="course-grid.html">Courses</a>
                     <ul class="sub-menu">
                         <li><a href="course-grid.html">Course Grid</a></li>
                         <li><a href="course-list.html">Course List</a></li>
                         <li><a href="course-details.html">Course Details</a></li>
                     </ul>
                 </li>
                 <li class="active-menu"><a href="blog.html">Blog</a>
                     <ul class="sub-menu">
                         <li class="active"><a href="blog.html">Blog</a></li>
                         <li><a href="blog-list.html">Blog List</a></li>
                         <li><a href="blog-details.html">Blog Details</a></li>
                     </ul>
                 </li>
                 <li><a href="contact.html">Contact</a></li>
             </ul>
         </div>
     </div>
 </div>
 <!-- Offcanvas End -->


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
                         <h2 class="title">Giảng Viên</h2>
                         <ul class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Giảng Viên</li>
                         </ul>
                     </div>
                     <!-- Page Banner Content End -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Banner End -->

 <!-- Blog Start -->
 <div class="section upstudy-blog-section section-padding">
     <div class="container">
         <!-- Latest Blog Wrap Start -->
         <div class="blog-wrap">

             <div class="row">
                 <?php foreach ($dssp as $value) : ?>
                     <div class="col-lg-4 col-sm-6">
                         <!-- Latest Blog Item Start -->

                         <div class="single-blog text-center">
                             <div class="blog-img">
                                 <a href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"><img style="border-radius:8px" width="350px" height="350px" src="img/<?php echo $value['hinh_gv'] ?>" alt="Courses"></a>
                             </div>
                             <div class="blog-content">
                                 <div class="blog-meta">
                                     <span><i class="far fa-user"></i><a href="index.php?act=giangvien&id=<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></a></span>

                                 </div>
                                 <h3 class="title"><a href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"><?php echo $value['thongtin_gv'] ?></a></h3>
                                 <a class="blog-btn" href="index.php?act=ct_giangvien&id=<?php echo $value['id_gv'] ?>"> Chi Tiết</a>
                             </div>
                         </div>
                         <!-- Latest Blog Item End -->
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
         <!-- Blog Wrap End -->
     </div>
 </div>
 <!-- Blog End -->