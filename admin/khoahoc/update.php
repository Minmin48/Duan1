<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Khóa Học
    </h3>
    <form class="addPro" action="index.php?act=updatekhoahoc" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label class="form-label">Tên Khóa Học</label>
            <input type="text" class="form-control" name="name" value="<?php echo $sua['ten_kh'] ?>">
            <span style="color: red;"><?php echo isset($err['name']) ? $err['name'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Chọn Danh Mục</label>
            <select name="chondanhmuc">
                <?php $get_all = getall_danhmuc();
                foreach ($get_all as $value) :
                ?>
                    <option value="<?php echo $value['id_dm'] ?>" <?php echo ($sua['id_dm'] == $value['id_dm']) ? "selected" : '' ?>><?php echo $value['ten_dm'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Thời Gian Học</label>
            <input value="<?php echo $sua['thoi_gian'] ?>" class="form-control" type="datetime-local" name="thoigian">
            <span style="color: red;"><?php echo isset($err['thoigian']) ? $err['thoigian'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thông Tin</label>
            <textarea class="form-control" name="text" cols="20" rows="6"> <?php echo $sua['thongtin_kh'] ?></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Hình Ảnh</label>
            <input class="form-control" type="file" accept="img/" name="hinh"> <br>
            <img width="75px" height="60px" src="../img/<?php echo $sua['hinh'] ?>" alt="">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Học Phí</label>
            <input value="<?php echo $sua['hoc_phi'] ?>" type="text" name="hocphi" class="form-control">
            <span style="color: red;"><?php echo isset($err['hocphi']) ? $err['hocphi'] : '' ?></span>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <input type="text" hidden name="id" value="<?php echo $sua['id_kh'] ?>">
            <a class="btn btn-success" href="index.php?act=listkhoahoc">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo '<span style="color: red;">' . $thongbao . '</span>';
        ?>
    </form>
</div>