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
                        <h2 class="title">Then Tón</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Khóa Học</li>
                            <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home -->
<?php
$listKhoaHoc =  get_khoahoc_by_id($_GET['id']);
?>
<div class="section contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-info-wrap">
                    <form action="" method="POST">
                        <div class="row">
                            <h2 style="color: #1CB098; text-align: center;">Thanh Toán</h2>
                            <p style="text-align: center;">Vui lòng kiểm tra thông tin Khách Hàng, Thông tin Khóa Học trước khi đăng ký</p>
                            <h3 style="color: #0E2A47;"><br>Thông tin hóa đơn điện tử</h3>
                            <div class="col-md-6">
                                <br>
                                <div class="single-form">
                                    <p><i>Tên khách hàng:</i></p>
                                    <input type="text" value="<?php echo $_SESSION['login']['ho_ten'] ?>">
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <br>
                                <div class="single-form">
                                    <p><i>Địa chỉ:</i></p>
                                    <input type="text" placeholder="Nhập địa chỉ vào mẹ mày...">
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <div class="single-form">
                                    <p><i>Mã số thuế:</i></p>
                                    <input type="text" placeholder="123456" disabled>
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <div class="single-form">
                                    <p><i>Email:</i></p>
                                    <input type="text" value="<?php echo $_SESSION['login']['email'] ?>">
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <div class="single-form">
                                    <p><i>SĐT:</i></p>
                                    <input type="text" value="<?php echo $_SESSION['login']['phone'] ?>">
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <div class="single-form">
                                    <p><i>Số tiền:</i></p>
                                    <input style="color: red; font-size:15px" type="text" value="<?php echo number_format($listKhoaHoc['hoc_phi'])?> đ">
                                </div>
                            </div>
                            <!-- hi -->
                            <div class="col-md-6">
                                <div class="single-form">
                                    <p><i>Thời hạn:</i></p>
                                    <input type="text" placeholder="hihi">
                                </div>
                            </div>
                            <!-- hi -->
                            
                            <div class="col-md-6">
                                <div class="single-form">
                                    <label for="bank_code">Ngân hàng</label >
                                    <select name="bank_code" id="bank_code" class="form-control">
                                        <option value="">Không chọn</option>
                                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                        <option value="TPBANK"> Ngân hàng TPBank</option>
                                        <option value="BIDV"> Ngân hàng BIDV</option>
                                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                        <option value="VPBANK"> Ngan hang VPBank</option>
                                        <option value="MBBANK"> Ngan hang MBBank</option>
                                    </select>
                                </div>
                            </div>
                            <!-- hi -->
                            
                            <div class="">
                                <div class="">
                                    <p><i>Nội dung hóa đơn:</i></p>
                                    <input type="text" height="50px" value="Thanh toán <?php echo $listKhoaHoc['ten_kh'] ?>: <?php echo $_SESSION['login']['ho_ten'] ?> chuyển khoản">
                                </div>
                            </div>
                            <!-- hi -->
                        </div><br>
                        <button class="btn" type="submit" value="" name="thanhtoan">Thanh Toán Nè</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <h3>&nbsp;&nbsp;Sale:<samp style="color: red;"> 8%</samp></h3>
                    <div class="sidebar-image">
                        <div>
                            <strong style="color: red; font-size: 26px;">&nbsp;&nbsp;<?php echo number_format($listKhoaHoc['hoc_phi']) ?>đ &nbsp;</strong>
                            <samp>Giá gốc</samp>
                            <samp><strike>1,200.000 đ</strike></samp>
                        </div>
                        <b class="fa fa-tachometer" style="color: #1CB098;">&nbsp;&nbsp;&nbsp;Thời gian ưu đãi còn 1 ngày</b>
                        <img src="img/<?php echo $listKhoaHoc['hinh'] ?>" alt="Chưa có ảnh" height="350px">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Contact End -->