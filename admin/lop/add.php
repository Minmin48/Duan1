<div class="main-content">
    <h3 class="title-page">
        Thêm Lớp
    </h3>
    <form class="addPro" action="index.php?act=addlop" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label" for="name">Tên Lớp</label>
            <input type="text" class="form-control" name="lop" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thời Gian Học</label>
            <input class="form-control" type="date" name="thoigian" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Ca học</label>
            <input class="form-control" type="text" name="cahoc" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Khóa Học</label>
            <select class="form-select" name="dmkhoahoc">
                <option value="" hidden>Chọn khóa học</option>
                <?php $get_all = getall_khoahoc();
                foreach ($get_all as $value) :
                ?>
                    <option value="<?php echo $value['id_kh'] ?>"><?php echo $value['ten_kh'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Tên Giảng Viên</label>
            <select class="form-select" name="dmgiangvien">
                <option value="" hidden>Chọn giảng viên</option>
                <?php $get_all = getall_giangvien();
                foreach ($get_all as $value) :
                ?>
                    <option value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Số Lượng Học Sinh</label>
            <input class="form-control" type="text" name="soluong" require>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="THÊM MỚI">
            <a class="btn btn-success" href="index.php?act=listlop">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>