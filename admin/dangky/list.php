<div class="main-content">
    <h3 class="title-page">Danh Sách Đăng Ký</h3>
    <!-- <div class="d-flex justify-content-end">
        <a href="index.php?act=addgv" class="btn btn-primary mb-2">Thêm Giảng Viên</a>
    </div> -->
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Chức vụ</th>
                <th>Chức năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $index = 0;
            $dangky_all = list_tk();
            foreach ($dangky_all as $value) : $index++ ?>

                <tr class="table-primary">
                    <td><?php echo $index; ?></td>
                    <td><?php echo $value['ho_ten'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td> <?php echo $value['pass'] ?></td>
                    <td> <?php echo $value['phone'] ?></td>
                    <td> <?php echo $value['id_cv'] ?></td>
                    <td>
                        <a href="index.php?act=deletedk&id=<?php echo $value['id_nguoidung'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>