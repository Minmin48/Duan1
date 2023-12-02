<?php 
$sum_doanh_thu=thong_ke_sum_doanh_thu();
$sum_user = sum_user();
$sum_khoa_hoc =  sum_khoa_hoc();
$list_doanh_thu_kh =  thong_ke_khoahoc_doanh_thu();
$list_user_new =  user_new();
?>
<div class="main-content">
    <h3 class="title-page">
        ADMIN
    </h3>
    <section class="statistics row">
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="products.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng khoá học
                        </h5>
                    </div>
                    <span class="widget-numbers"><?php echo $sum_khoa_hoc[0] ?> </span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="user.html">
                <div class="card mb-3 widget-chart">

                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng thành viên
                        </h5>
                    </div>
                    <span class="widget-numbers"><?php echo $sum_user[0] ?> </span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="caterogies.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng doanh thu
                        </h5>
                    </div>
                    <span class="widget-numbers"><?php echo number_format($sum_doanh_thu[0]) ?>VNĐ</span>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <div class="col-sm-12 col-md-6 col xl-6">
            <div class="card chart">
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">Đến ngày</span>
                        <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                        <button type="button" class="btn btn-primary">Xem</button>
                    </div>
                </form>
                <p>Tổng doanh thu: <span><?php echo number_format($sum_doanh_thu[0]) ?>VNĐ</span></p>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Tên khoá học</th>
                        <th>Học phí</th>
                        <!-- <th>Số lưọng</th> -->
                        <th>Doanh thu</th>
                    </thead>
                    <tbody>
                        <?php foreach($list_doanh_thu_kh as $value): ?>
                        <tr>
                            <td><?php echo $value['id_kh'] ?></td>
                            <td><?php echo $value['ten_kh'] ?></td>
                            <td><?php echo number_format($value['hoc_phi']) ?> VND</td>
                            <!-- <td><?php echo $value['so_luong'] ?></td> -->
                            <td><?php echo number_format($value['sum_hoc_phi']) ?>VND</td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Đơn hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Trạng thái</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GIA001</td>
                            <td>Chờ duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA002</td>
                            <td>Đã duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA003</td>
                            <td>Chờ TT</td>
                        </tr>
                        <tr>
                            <td>GIA004</td>
                            <td>Đã duyệt</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Khách hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Username</th>
                    </thead>
                    <tbody>
                        <?php foreach($list_user_new as $value):?>
                        <tr>
                            <td><?php echo $value['id_nguoidung'] ?></td>
                            <td><?php echo $value['user'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable('#example');
</script>