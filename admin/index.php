<?php
include_once "../model/pdo.php";
include_once "../model/pdo_danhmuc.php";
include_once "../model/pdo_khoahoc.php";
include_once "../model/pdo_giangvien.php";
include_once "../model/pdo_lop.php";
include_once "../model/pdo_taikhoan.php";
include_once "../model/pdo_dangky.php";
include_once "header.php";
if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
            //Danh mục khóa học
        case 'adddm':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $name = $_POST['name'];
                add_danhmuc($name);
                $thongbao = "Thêm thành công";
            }
            include_once "danhmuc/add.php";
            break;
        case 'listdm':
            include_once "danhmuc/list.php";
            break;
        case 'deletedm':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                delete_danhmuc($id);
                include_once "danhmuc/list.php";
                $thongbao = "Xóa thành công";
            }
            break;
        case 'updatedm':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_danhmuc($id);
                include_once "danhmuc/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                update_danhmuc($id, $name);
                include_once "danhmuc/list.php";
            }
            break;

            // Khóa học

        case 'addkhoahoc':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenkh = $_POST['name'];
                $tendm = $_POST['chondanhmuc'];
                $thoigian = $_POST['thoigian'];
                $text = $_POST['text'];
                $hocphi = $_POST['hocphi'];
                $hinh = $_FILES['hinh']['name'];
                $luu_anh = "../img/";
                $tai_file = $luu_anh . basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $tai_file);
                add_khoahoc($tenkh, $tendm, $thoigian, $text, $hinh, $hocphi);
                $thongbao = "Thêm thành công";
            }
            include_once "khoahoc/add.php";
            break;
        case 'listkhoahoc':
            include "khoahoc/list.php";
            break;
        case 'deletekhoahoc':
            $id = $_GET['id'];
            delete_khoahoc($id);
            include_once "khoahoc/list.php";
            break;
        case 'updatekhoahoc':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_khoahoc($id);
                include_once "khoahoc/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $tenkh = $_POST['name'];
                $tendm = $_POST['chondanhmuc'];
                $thoigian = $_POST['thoigian'];
                $text = $_POST['text'];
                $hocphi = $_POST['hocphi'];
                $hinh = $_FILES['hinh']['name'];
                $id = $_POST['id'];
                $sua = getid_khoahoc($id);
                if (!empty($hinh)) {
                    $dir = "../img/";
                    $file = $dir . $hinh;
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $file);
                } else {
                    $hinh = $sua['hinh'];
                }
                update_khoahoc($id, $tenkh, $tendm, $thoigian, $text, $hinh, $hocphi);
                include_once "khoahoc/list.php";
                echo '<span>Cập nhật thành công</span>';
            }
            break;
            // Giảng viên
        case 'addgv':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tengv = $_POST['name'];
                $hinh = $_FILES['hinh'];
                $text = $_POST['text'];
                if (isset($hinh)) {
                    $dir = "../img/";
                    $anh = $hinh['name'];
                    $file = $dir . $anh;
                    move_uploaded_file($hinh['tmp_name'], $file);
                    add_giangvien($tengv, $anh, $text);
                    $thongbao = "Thêm thành công";
                }
            }
            include_once "giangvien/add.php";
            break;
        case 'listgv':
            include_once "giangvien/list.php";
            break;
        case 'deletegv':
            $id = $_GET['id'];
            delete_giangvien($id);
            include_once "giangvien/list.php";
            break;
        case 'updategv':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_giangvien($id);
                include_once "giangvien/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $tengv = $_POST['name'];
                $text = $_POST['text'];
                $hinh = $_FILES['hinh']['name'];
                $id = $_POST['id'];
                $sua = getid_giangvien($id);
                if (!empty($hinh)) {
                    $dir = "../img/";
                    $file = $dir . $hinh;
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $file);
                } else {
                    $hinh = $sua['hinh_gv'];
                }
                update_giangvien($id, $tengv, $text, $hinh);
                include_once "giangvien/list.php";
            }
            break;
            //Lớp
        case 'addlop':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenlop = $_POST['lop'];
                $thoigian = $_POST['thoigian'];
                $cahoc = $_POST['cahoc'];
                $khoahoc = $_POST['dmkhoahoc'];
                $giangvien = $_POST['dmgiangvien'];
                $soluong = $_POST['soluong'];
                add_lop($tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong);
                $thongbao = "Thêm thành công";
            }
            include_once "lop/add.php";
            break;
        case 'listlop':
            include_once "lop/list.php";
            break;
        case 'deletelop':
            $id = $_GET['id'];
            delete_lop($id);
            include_once 'lop/list.php';
            break;
        case 'updatelop':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_lop($id);
                include_once "lop/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $tenlop = $_POST['lop'];
                $thoigian = $_POST['thoigian'];
                $cahoc = $_POST['cahoc'];
                $khoahoc = $_POST['dmkhoahoc'];
                $giangvien = $_POST['dmgiangvien'];
                $soluong = $_POST['soluong'];
                $id = $_POST['id'];
                $sua = getid_lop($id);
                update_lop($id, $tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong);
                include_once "lop/list.php";
            }
            break;
            // Đăng ký tài khoản
        case 'list_user':
            include_once 'dangky/list.php';
            break;
        case 'update_user':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_tk($id);
                include_once "dangky/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $chucvu = $_POST['chucvu'];
                $id = $_POST['id'];
                $sua = getid_lop($id);
                update_tk($id, $user, $email, $pass, $phone, $chucvu);
                include_once "dangky/list.php";
            }
            break;
        case 'delete_user':
            $id = $_GET['id'];
            delete_tk($id);
            include_once 'dangky/list.php';
            break;
            // trạng thái đkkh
        case 'listdkkhoahoc':
            include_once 'oder_khoahoc/list.php';
            break;
        default:
            include_once "home.php";
            break;
    }
} else {
    include_once "home.php";
}
include_once "footer.php";
