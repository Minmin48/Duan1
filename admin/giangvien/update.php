<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Giảng Viên
    </h3>
    <form class="addPro" action="index.php?act=updategv" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label">Tên Giảng Viên</label>
            <input type="text" class="form-control" name="name" value="<?php echo $sua['ten_gv'] ?>">
            <span style="color: red;"><?php echo isset($err['name']) ? $err['name'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label">Hình Ảnh</label>
            <input class="form-control" type="file" accept="img/" name="hinh"> <br>
            <img width="75px" height="60px" src="../img/<?php echo $sua['hinh_gv'] ?>" alt="">
        </div>
        <div class="form-group">
            <label class="form-label">Thông Tin Giảng Viên</label>
            <textarea class="form-control" name="text" cols="20" rows="6"> <?php echo $sua['thongtin_gv'] ?></textarea>
        </div>

        <div class="form-group">
            <input type="text" hidden name="id" value="<?php echo $sua['id_gv'] ?>">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <a class="btn btn-success" href="index.php?act=listgv">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo '<span style="color: red;">' . $thongbao . '</span>';
        ?>
    </form>
</div>