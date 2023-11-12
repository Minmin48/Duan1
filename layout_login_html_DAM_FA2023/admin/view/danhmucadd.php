<div class="main-content">
    <h3 class="title-page">
        Thêm Danh Mục
    </h3>

    <form class="addPro" action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea class="form-control" name="detail" rows="3" placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>