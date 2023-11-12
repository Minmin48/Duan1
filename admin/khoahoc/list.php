<div class="main-content">
    <h3 class="title-page">Danh Sách Khóa Học</h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=addkhoahoc" class="btn btn-primary mb-2">Thêm Khóa Học</a>
    </div>
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên Khóa Học</th>
                <th>Thời Gian Học</th>
                <th>Thông Tin</th>
                <th>Hình Ảnh</th>
                <th>Học Phí</th>
                <th>Danh Mục</th>
                <th>Chức Năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $index = 0;
            $khoa_hoc_all = getall_khoahoc();
            foreach ($khoa_hoc_all as $value) : $index++ ?>
                <tr class="table-primary">
                    <td><?php echo $index; ?></td>
                    <td><?php echo $value['ten_kh'] ?></td>
                    <td><?php echo $value['thoi_gian'] ?></td>
                    <td> <?php echo $value['thongtin_kh'] ?></td>
                    <td><img src="../img/<?php echo $value['hinh'] ?>" width="75px" height="60px" alt=""> </td>
                    <td><?php echo $value['hoc_phi'] ?> VNĐ</td>
                    <td>
                        <?php
                        echo $value['ten_dm'];
                        ?>
                    </td>
                    <td>
                        <a href="index.php?act=updatekhoahoc&id=<?php echo $value['id_kh'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="index.php?act=deletekhoahoc&id=<?php echo $value['id_kh'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        a
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>