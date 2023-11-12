<div class="main-content">
    <h3 class="title-page">
        Thêm Danh Mục
    </h3>
    <form class="addPro" action="index.php?act=adddm" method="POST">
        <div class="form-group">
            <label class="form-label" for="name">Mã Danh Mục</label>
            <input type="text" class="form-control" name="" id="name" disabled>
        </div>
        <div class="form-group">
            <label class="form-label" for="name">Tên Danh Mục</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="THÊM MỚI">
            <a class="btn btn-success" href="index.php?act=listdm">DANH SÁCH</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>