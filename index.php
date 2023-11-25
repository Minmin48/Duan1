<?php
session_start();
ob_start();

include_once 'model/pdo_danhmuc.php';
include_once 'model/pdo_lop.php';
include_once 'model/pdo_khoahoc.php';
include_once 'model/pdo_dangky.php';
include_once 'model/pdo_taikhoan.php';

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
            if (isset($_SESSION['login'])) {
                if (isset($_POST['dangKy'])) {
                    update_soluong_hs($_POST['id_lop']);
                    $tenlop = $_POST['tenlop'];
                    $tengv = $_POST['tengv'];
                    $thoigian = $_POST['thoigian'];
                    $cahoc = $_POST['cahoc'];
                    $soluong = $_POST['soluong'];
                    $hocphi = $_POST['hocphi'];
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $khoahoc = $_POST['khoahoc'];
                    oder_dkkhoahoc($tenlop, $tengv, $thoigian, $cahoc, $soluong, $hocphi, $user, $email, $phone, $khoahoc,1);
                    header('location:vnpay_php/vnpay_create_payment.php');
                } else include_once 'view/dangky.php';
            } else {
                $error_dky_khoa_hoc = 'Bạn phải đăng nhập mới có thể đăng ký được khoá học';
                include_once 'view/taikhoan/dangky.php';
            }
            break;
        case 'dangkytk':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                insert_taikhoan($email, $user, $pass, $phone);
                include_once 'view/taikhoan/dangnhap.php';
            } else
                include_once 'view/taikhoan/dangky.php';
            break;
        case 'dangnhaptk':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $kq = getuserinfo($email, $pass);
                if ($kq) {
                    $_SESSION['login'] = $kq;
                    header('location: index.php');
                } else {
                    $error_login = 'Sai tài khoản mật khẩu';
                }
            }
            include_once 'view/taikhoan/dangnhap.php';
            break;
        case 'dangxuat':
            unset($_SESSION['login']);
            header('location: index.php');
            break;
        case 'thanhtoan':
            include_once 'vnpay_php/vnpay_php/index.php';
            break;
        case 'giangvien':
            include_once 'view/giangvien.php';
            break;
        case 'ct_giangvien':
            include_once 'view/ct_giangvien.php';
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
