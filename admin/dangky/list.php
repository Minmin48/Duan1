<div class="main-content">
    <h3 class="title-page">Danh Sách Người Dùng</h3>
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
                    <td><?php echo $value['user'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td> <?php echo $value['pass'] ?></td>
                    <td> <?php echo $value['phone'] ?></td>
                    <td> <?php echo $value['chuc_vu'] ?></td>
                    <td>
                        <a href="index.php?act=update_user&id=<?php echo $value['id_nguoidung'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                        <a href="index.php?act=delete_user&id=<?php echo $value['id_nguoidung'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>