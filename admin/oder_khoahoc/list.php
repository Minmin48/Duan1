<div class="main-content">
    <h3 class="title-page">Danh Sách Đăng Ký Khóa Học</h3>
    <form action="?act=listdkkhoahoc" method="post">
        <div class="d-flex justify-content-end">
            <input type="text" placeholder="Tìm kiếm..." name="timkiem">
            <button class="btn btn-primary" value="Search" name="search">Tìm Kiếm</button>
        </div> <br>
    </form>
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên lớp</th>
                <th>Giảng viên</th>
                <th>Thời gian học</th>
                <th>Ca học</th>
                <th>Số lượng</th>
                <th>Học phí</th>
                <th>User</th>
                <th>Email</th>
                <th>Khóa học</th>
                <th>Phone</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $index = 0;
            foreach ($dangky_all as $value) : $index++ ?>

                <tr class="table-primary">
                    <td><?php echo $index; ?></td>
                    <td><?php echo $value['ten_lop'] ?></td>
                    <td><?php echo $value['ten_gv'] ?></td>
                    <td> <?php echo $value['thoi_gian_hoc'] ?></td>
                    <td> <?php echo $value['ca_hoc'] ?></td>
                    <td> <?php echo $value['so_luong'] ?></td>
                    <td> <?php echo number_format($value['hoc_phi']) ?> VNĐ</td>
                    <td> <?php echo $value['ten_nguoi_dung'] ?></td>
                    <td> <?php echo $value['email'] ?></td>
                    <td> <?php echo $value['ten_kh'] ?></td>
                    <td> <?php echo $value['phone'] ?></td>
                    <td ><?php echo $value['name_trang_thai']  ?></td>
                    <td>
                        <a href="index.php?act=update_status&id=<?php echo $value['id_dk'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Cập Nhật</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>