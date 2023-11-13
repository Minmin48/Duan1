<?php
include_once 'model/pdo_danhmuc.php';
include_once 'model/pdo_lop.php';

$listDanhMuc = list_danhmuc();
include_once 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'page':

            break;
        case 'khoahoc':
            include_once 'view/khoahoc.php';
            break;

        default:
            # code...
            break;
    }
} else {
    include_once 'view/home.php';
}
include_once 'view/footer.php';
