<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Người Dùng
    </h3>
    <form class="addPro" action="index.php?act=update_user" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label" for="name">User</label>
            <input type="text" class="form-control" name="user" value="<?php echo $sua['user'] ?>" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input class="form-control" type="text" value="<?php echo $sua['email'] ?>" name="email" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Password</label>
            <input class="form-control" type="text" value="<?php echo $sua['pass'] ?>" name="pass" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Phone</label>
            <input class="form-control" type="text" value="<?php echo $sua['phone'] ?>" name="phone" require>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Chức vụ</label>
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
    </form>
</div>