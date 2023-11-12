<div class="main-content">
    <h3 class="title-page">Danh Sách Giảng Viên</h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=addgv" class="btn btn-primary mb-2">Thêm Giảng Viên</a>
    </div>
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên Giảng Viên</th>
                <th>Hình Ảnh</th>
                <th>Thông Tin Giảng Viên</th>
                <th>Chức Năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $index = 0;
            $list = getall_giangvien();
            foreach ($list as $value) : $index++ ?>
                <tr class="table-primary">
                    <td><?php echo $index; ?></td>
                    <td><?php echo $value['ten_gv'] ?></td>
                    <td><img src="../img/<?php echo $value['hinh_gv'] ?>" width="75px" height="60px" alt=""> </td>
                    <td> <?php echo $value['thongtin_gv'] ?></td>
                    <td>
                        <a href="index.php?act=updategv&id=<?php echo $value['id_gv'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="index.php?act=deletegv&id=<?php echo $value['id_gv'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>