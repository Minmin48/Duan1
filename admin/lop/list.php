<div class="main-content">
    <h3 class="title-page">Danh Sách Lớp Học</h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=addlop" class="btn btn-primary mb-2">Thêm Lớp</a>
    </div>
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên Lớp</th>
                <th>Thời Gian Học</th>
                <th>Ca Học</th>
                <th>Khóa Học</th>
                <th>Tên Giảng Viên</th>
                <th>Số Lượng</th>
                <th>Chức Năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $index = 0;
            $khoc = join_giangvien();
            $hihi = join_khoahoc();
            foreach ($khoc as $value) : $index++ ?>
                <?php

                foreach ($hihi as $kkk) : ?>

                    <tr class="table-primary">
                        <td><?php echo $index; ?></td>
                        <td><?php echo $value['ten_lop']; ?></td>
                        <td><?php echo $value['thoi_gian_hoc'] ?></td>
                        <td> <?php echo $value['ca_hoc'] ?></td>
                        <td><?php echo $kkk['ten_kh'] ?></td>
                        <td><?php echo $value['ten_gv'] ?></td>
                        <td><?php echo $value['soluong_hs'] ?></td>
                        <td>
                            <a href="index.php?act=updatelop&id=<?php echo $value['id_lop'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                            <a href="index.php?act=deletelop&id=<?php echo $value['id_lop'] ?>" onclick="return confirm('Bạn muốn xóa không')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            <?php  endforeach; ?>
        </tbody>
    </table>
</div>