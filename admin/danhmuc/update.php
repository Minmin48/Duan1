<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Danh Mục
    </h3>
    <form class="addPro" action="index.php?act=updatedm" method="POST">

        <div class="form-group">
            <label class="form-label" for="name">Tên danh mục</label>
            <input type="text" class="form-control" name="name" value="<?php echo $sua['ten_dm'] ?>">
            <span style="color: red;"><?php echo isset($err['name']) ? $err['name'] : '' ?></span>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <input type="text" hidden name="id" value="<?php echo $sua['id_dm'] ?>">
            <a class="btn btn-success" href="index.php?act=listdm">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo '<span style="color: red;">' . $thongbao . '</span>';
        ?>
    </form>
</div>