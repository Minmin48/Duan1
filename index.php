<?php
ob_start();
include_once 'model/pdo_danhmuc.php';
include_once 'model/pdo_lop.php';
include_once 'model/pdo_khoahoc.php';
$listDanhMuc = list_danhmuc();
include_once 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'khoahoc':
            include_once 'view/khoahoc.php';
            break;
        case 'ct_khoahoc':
            include_once 'view/ct_khoahoc.php';
            break;
        case 'dangky':
            if (isset($_POST['dangKy'])) {
                update_soluong_hs($_POST['id_lop']);
                header('location:index.php?act=ct_khoahoc&id=' . $_POST['id_kh']);
            } else include_once 'view/dangky.php';
            break;
        default:
            # code...
            break;
    }
} else {
    include_once 'view/home.php';
}
include_once 'view/footer.php';
ob_end_flush();
