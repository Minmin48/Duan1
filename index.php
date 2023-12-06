<?php
session_start();
ob_start();

include_once 'model/pdo_danhmuc.php';
include_once 'model/pdo_lop.php';
include_once 'model/pdo_khoahoc.php';
include_once 'model/pdo_dangky.php';
include_once 'model/pdo_taikhoan.php';
$listgv = getall_giangvien();
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
                    oder_dkkhoahoc($tenlop, $tengv, $thoigian, $cahoc, $soluong, $hocphi, $user, $email, $phone, $khoahoc);
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
                if (empty($user)) {
                    $err['user'] = "Không được để trống";
                }
                if (empty($email)) {
                    $err['email'] = "Không được để trống";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = "Sai định dạng email";
                }
                if (empty($pass)) {
                    $err['pass'] = "Không được để trống";
                }
                $number = '/^0\d{9}$/';
                if (empty($phone)) {
                    $err['phone'] = "Không được để trống";
                } else if (!preg_match($number, $phone)) {
                    $err['phone'] = "Sai định dạng số điện thoại";
                }
                if (!$err) {
                    insert_taikhoan($email, $user, $pass, $phone);
                    $thongbao = "Đăng ký thành công";
                }
            }
            include_once 'view/taikhoan/dangky.php';
            break;
        case 'dangnhaptk':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                if (empty($email)) {
                    $err['email'] = "Không được để trống";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = "Sai định dạng email";
                }
                if (empty($pass)) {
                    $err['pass'] = "Không được để trống";
                }
                $kq = getuserinfo($email, $pass);
                if ($kq) {
                    $_SESSION['login'] = $kq;
                    header('location: index.php');
                } else {
                    $error_login = 'Sai tài khoản hoặc mật khẩu';
                }
            }
            include_once 'view/taikhoan/dangnhap.php';
            break;
        case 'dangxuat':
            unset($_SESSION['login']);
            header('location: index.php');
            break;
        case 'quenmatkhau':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else if (empty($email)) {
                    $err['email'] = "Không được để trống";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = "Sai định dạng email";
                }
            }
            include_once 'view/taikhoan/quenmatkhau.php';
            break;
        case 'giangvien':
            include_once 'view/giangvien.php';
            break;
        case 'ct_giangvien':
            include_once 'view/ct_giangvien.php';
            break;
        case 'lienhe':
            include_once 'view/lienhe.php';
            break;
        case 'vechungtoi':
            include_once 'view/vechungtoi.php';
            break;
        case 'order_khoahoc':
            include_once 'view/thanks.php';
            break;

        case 'lopcuatoi':
            if (!isset($_SESSION['login'])) {
                $error_login = 'Bạn cần login để xem được những khoá học đã đăng ký';
                include_once 'view/taikhoan/dangnhap.php';
            } else
                include_once 'view/lopcuatoi.php';
            break;
        default:
            break;
    }
} else {
    include_once 'view/home.php';
}
include_once 'view/footer.php';
ob_end_flush();
