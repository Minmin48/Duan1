<?php
// include_once '../../model/pdo.php';
// include_once '../../model/pdo_dangky.php';
?>
<div class="main-content">
    <h3 class="title-page">Danh Sách Đăng Ký</h3>
    <!-- <div class="d-flex justify-content-end">
        <a href="index.php?act=addgv" class="btn btn-primary mb-2">Thêm Giảng Viên</a>
    </div> -->
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên Người Dùng</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Khóa Học</th>
                <th>Câu Hỏi</th>
                <th>Thao Tác</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $index = 0;
                $dangky_all = list_dangky();
                foreach ($dangky_all as $value) : $index++ ?>

                    <tr class="table-primary">
                        <td><?php echo $index; ?></td>
                        <td><?php echo $value['ten_dk'] ?></td>
                        <td><?php echo $value['email_dk'] ?></td>
                        <td> <?php echo $value['sdt_dk'] ?></td>
                        <td> <?php echo $value['ten_kh'] ?></td>
                        <td> <?php echo $value['cauhoi_dk'] ?></td>
                        <td>
                            <a href="index.php?act=deletedk&id=<?php echo $value['id_dk'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>