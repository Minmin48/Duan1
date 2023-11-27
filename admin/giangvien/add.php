<div class="main-content">
    <h3 class="title-page">
        Thêm Giảng Viên
    </h3>
    <form class="addPro" action="index.php?act=addgv" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label" for="name">Tên Giảng Viên</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Hình Ảnh</label>
            <input class="form-control" type="file" accept="img/" name="hinh" aria-label="file example" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thông Tin Giảng Viên</label>
            <textarea class="form-control" name="text" cols="20" rows="6"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="THÊM MỚI">
            <a class="btn btn-success" href="index.php?act=listgv">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>