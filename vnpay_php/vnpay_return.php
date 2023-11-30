<?php
include_once '../model/pdo_danhmuc.php';
include_once '../model/pdo_lop.php';
include_once '../model/pdo_khoahoc.php';
include_once '../model/pdo_dangky.php';
include_once '../model/pdo_taikhoan.php';
if (!isset($_SESSION)) {
    session_start();
}
update_soluong_hs($_SESSION['order']['id_lop']);
oder_dkkhoahoc($_SESSION['order']['tenlop'], $_SESSION['order']['tengv'], $_SESSION['order']['thoigian'], $_SESSION['order']['cahoc'], $_SESSION['order']['soluong'], $_SESSION['order']['hocphi'], $_SESSION['order']['user'], $_SESSION['order']['email'], $_SESSION['order']['phone'], $_SESSION['order']['khoahoc']);
header('location: http://localhost/Minhinh/index.php?act=order_khoahoc');
