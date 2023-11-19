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
    
                    $tendk=$_POST['ten'];
                    $emaildk=$_POST['email'];
                    $sdtdk=$_POST['sdt'];
                    $chonkhoahoc=$_POST['chonkhoahoc'];
                    $cauhoi =$_POST['cauhoi'];
                    gettAll_dangky($tendk, $emaildk, $sdtdk, $chonkhoahoc, $cauhoi);
    
                    header('location:index.php?act=ct_khoahoc&id=' . $_POST['id_kh']);
                }else include_once 'view/dangky.php';
               
            }else{
                $error_dky_khoa_hoc = 'Bạn phải đăng nhập mới có thể đăng ký được khoá học';
                include_once 'view/taikhoan/dangky.php';
            }
             
            break;

         case 'dangkytk':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $phone=$_POST['phone'];
                insert_taikhoan($email, $user, $pass, $phone);
                include_once 'view/taikhoan/dangnhap.php';
            }else
            include_once 'view/taikhoan/dangky.php';
            break;
        case 'dangnhaptk':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                   $user =$_POST['name'];
                   $pass=$_POST['pass'];
                  $kq = getuserinfo($user, $pass);
                  if ($kq) {
                    $_SESSION['login'] = $kq;
                    header('location: index.php');
                }else {
                  $error_login = 'Sai tài khoản mật khẩu';
                }
                }
                include_once 'view/taikhoan/dangnhap.php';
                break;
        case 'dangxuat':
            unset($_SESSION['login']);
            header('location: index.php');
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
