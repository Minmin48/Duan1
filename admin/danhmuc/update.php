<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Danh Mục
    </h3>
    <form class="addPro" action="index.php?act=updatedm" method="POST">

        <div class="form-group">
            <label class="form-label" for="name">Tên danh mục</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $sua['ten_dm'] ?>" required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update" value="CẬP NHẬT">
            <input type="text" hidden name="id" value="<?php echo $sua['id_dm'] ?>">
            <a class="btn btn-success" href="index.php?act=listdm">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>

<script>
    new DataTable('#example');
</script>