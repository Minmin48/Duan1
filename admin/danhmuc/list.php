<div class="main-content"><br>
    <h3>Danh Sách Danh Mục</h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=adddm" class="btn btn-primary mb-2">Thêm Danh Mục</a>
    </div>
    <table border="1px" class="table table-hover">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Tên Danh Mục</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            $list = list_danhmuc();
            foreach ($list as $value) : $index++
            ?>
                <tr class="table-primary">
                    <td><?php echo $index ?></td>
                    <td><?php echo $value['ten_dm'] ?></td>
                    <td>
                        <a href="index.php?act=updatedm&id=<?php echo $value['id_dm'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                        <a href="index.php?act=deletedm&id=<?php echo $value['id_dm'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>