<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Người Dùng
    </h3>
    <form class="addPro" action="index.php?act=update_user" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label">User</label>
            <input type="text" class="form-control" name="user" value="<?php echo $sua['user'] ?>">
            <span style="color: red;"><?php echo isset($err['user']) ? $err['user'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" value="<?php echo $sua['email'] ?>" name="email">
            <span style="color: red;"><?php echo isset($err['email']) ? $err['email'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input class="form-control" type="text" value="<?php echo $sua['pass'] ?>" name="pass">
            <span style="color: red;"><?php echo isset($err['pass']) ? $err['pass'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" value="<?php echo $sua['phone'] ?>" name="phone">
            <span style="color: red;"><?php echo isset($err['phone']) ? $err['phone'] : '' ?></span>
        </div>
        <div class="form-group">
            <label class="form-label">Chức vụ</label>
            <select class="form-select" name="chucvu">
                <?php
                $list = get_all_chucvu();
                foreach ($list as $value) :
                ?>
                    <option value="<?php echo $value['id_cv'] ?>" <?php echo ($sua['id_cv'] == $value['id_cv']) ? 'selected' : '' ?>><?php echo $value['chuc_vu'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" hidden name="id" value="<?php echo $sua['id_nguoidung'] ?>">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <a class="btn btn-success" href="index.php?act=list_user">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>