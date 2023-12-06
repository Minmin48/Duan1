<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Trạng Thái Đăng Ký Khóa Học
    </h3>
    <form class="addPro" action="index.php?act=update_status" method="POST">
        <div class="form-group">
            <label class="form-label">Tên lớp</label>
            <input type="text" class="form-control" name="ten_lop" value="<?php echo $sua['ten_lop'] ?>" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Tên giảng viên</label>
            <input class="form-control" type="text" value="<?php echo $sua['ten_gv'] ?>" name="ten_gv" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Thời gian học</label>
            <input class="form-control" type="text" value="<?php echo $sua['thoi_gian_hoc'] ?>" name="thoi_gian_hoc" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Ca học</label>
            <input class="form-control" type="text" value="<?php echo $sua['phone'] ?>" name="ca_hoc" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Số lượng</label>
            <input class="form-control" type="text" value="<?php echo $sua['so_luong'] ?>" name="so_luong" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Học phí</label>
            <input class="form-control" type="text" value="<?php echo $sua['hoc_phi'] ?>" name="hoc_phi" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Tên người dùng</label>
            <input class="form-control" type="text" value="<?php echo $sua['ten_nguoi_dung'] ?>" name="ten_nguoi_dung" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" value="<?php echo $sua['email'] ?>" name="email" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Tên khóa học</label>
            <select class="form-select" name="khoahoc">
                <?php
                $lits = get_khoahoc();
                foreach ($lits as $value) :
                ?>
                    <option value="<?php echo $value['id_kh'] ?>" <?php echo ($value['id_kh'] == $sua['id_kh']) ? "selected" : '' ?>><?php echo $value['ten_kh'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" value="<?php echo $sua['phone'] ?>" name="phone" readonly>
        </div>
        <div class="form-group">
            <label class="form-label">Trạng thái</label>
            <select class="form-select" name="trangthai">
                <?php
                $lits = getall_trangthai();
                foreach ($lits as $value) :
                ?>
                    <option value="<?php echo $value['id_trangthai'] ?>" <?php echo ($value['id_trangthai'] == $sua['id_trangthai']) ? "selected" : '' ?>><?php echo $value['name_trang_thai'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" hidden name="id" value="<?php echo $_GET['id'] ?>">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <a class="btn btn-success" href="index.php?act=listdkkhoahoc">DANH SÁCH</a>
        </div>
    </form>
</div>