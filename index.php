<?php
include_once 'model/pdo_danhmuc.php';
include_once 'model/pdo_lop.php';
$listDanhMuc = list_danhmuc();
include_once 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'page':
            break;
        case 'toeic':
            include_once 'view/kh_toeic.php';
            break;
        case 'ct_khoahoc':
            include_once 'view/chitiet_khoahoc.php';
            break;
        case 'video':
            include_once 'view/video.php';
            break;
        case 'video1':
            include_once 'view/video1.php';
            break;
        default:
            # code...
            break;
    }
} else {
    include_once 'view/home.php';
}
include_once 'view/footer.php';
