<div class="main-content">
    <h3 class="title-page">
        Thêm Khóa Học
    </h3>
    <form class="addPro" action="index.php?act=addkhoahoc" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label class="form-label">Tên Khóa Học</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên khóa học" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Chọn Danh Mục</label>
            <select name="chondanhmuc">
                <option value="" hidden>Mời chọn khóa học</option>
                <?php $get_all = getall_danhmuc();
                foreach ($get_all as $minh) :
                ?>
                    <option value="<?php echo $minh['id_dm'] ?>"><?php echo $minh['ten_dm'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thời Gian Học</label>
            <input class="form-control" type="datetime-local" name="thoigian" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thông Tin</label>
            <textarea class="form-control" name="text" cols="20" rows="6"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Hình Ảnh</label>
            <input class="form-control" type="file" accept="img/" name="hinh" aria-label="file example" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Học Phí</label>
            <input type="text" name="hocphi" class="form-control" placeholder="Nhập vào học phí" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Trạng Thái</label>
            <input type="text" name="trangthai" class="form-control" required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="THÊM KHÓA HỌC">
            <a class="btn btn-success" href="index.php?act=listkhoahoc">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>