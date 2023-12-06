<?php
include_once "../model/pdo.php";
include_once "../model/pdo_danhmuc.php";
include_once "../model/pdo_khoahoc.php";
include_once "../model/pdo_giangvien.php";
include_once "../model/pdo_lop.php";
include_once "../model/pdo_taikhoan.php";
include_once "../model/pdo_dangky.php";
include_once "header.php";
$err = [];
if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
            //Danh mục khóa học
        case 'adddm':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $name = $_POST['name'];
                if (empty($name)) {
                    $err['name'] = "Không được để trống";
                } else {
                    add_danhmuc($name);
                    $thongbao = "Thêm thành công";
                }
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
                $sua = getid_danhmuc($id);
                if (empty($name)) {
                    $err['name'] = "Không được để trống";
                } else {
                    update_danhmuc($id, $name);
                    $thongbao = "Cập nhật thành công";
                }
            }
            include_once "danhmuc/update.php";
            break;

            // Quản lý khóa học

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
                if (empty($tenkh)) {
                    $err['name'] = "Không được để trống";
                }
                if (empty($thoigian)) {
                    $err['thoigian'] = "Không được để trống";
                }
                if (empty($hocphi)) {
                    $err['hocphi'] = "Không được để trống";
                } else if ($hocphi < 0) {
                    $err['hocphi'] = "Nhập học phí lớn hơn 0";
                }
                if (!$err) {
                    add_khoahoc($tenkh, $tendm, $thoigian, $text, $hinh, $hocphi);
                    $thongbao = "Thêm thành công";
                }
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
                if (empty($tenkh)) {
                    $err['name'] = "Không được để trống";
                }
                if (empty($thoigian)) {
                    $err['thoigian'] = "Không được để trống";
                }
                if (empty($hocphi)) {
                    $err['hocphi'] = "Không được để trống";
                } else if ($hocphi < 0) {
                    $err['hocphi'] = "Nhập học phí lớn hơn 0";
                }
                if (!$err) {
                    update_khoahoc($id, $tenkh, $tendm, $thoigian, $text, $hinh, $hocphi);
                    $thongbao = "Cập nhật thành công";
                }
            }
            include_once "khoahoc/update.php";
            break;

            //Quản lý giảng viên

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
                }
                if (empty($tengv)) {
                    $err['name'] = "Không được để trống";
                }
                if (!$err) {
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
                if (empty($tengv)) {
                    $err['name'] = "Không được để trống";
                }
                if (!$err) {
                    update_giangvien($id, $tengv, $text, $hinh);
                    $thongbao = "Cập nhật thành công";
                }
            }
            include_once "giangvien/update.php";
            break;
            //Quản lý lớp
        case 'addlop':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenlop = $_POST['tenlop'];
                $thoigian = $_POST['thoigian'];
                $cahoc = $_POST['cahoc'];
                $khoahoc = $_POST['dmkhoahoc'];
                $giangvien = $_POST['dmgiangvien'];
                $soluong = $_POST['soluong'];
                if (empty($tenlop)) {
                    $err['tenlop'] = "Không được để trống";
                }
                if (empty($thoigian)) {
                    $err['thoigian'] = "Không được để trống";
                }
                if (empty($cahoc)) {
                    $err['cahoc'] = "Không được để trống";
                }
                if (empty($soluong)) {
                    $err['soluong'] = "Không được để trống";
                } else if ($soluong < 0) {
                    $err['soluong'] = "Nhập số lượng lớn hơn 0";
                }
                if (!$err) {
                    add_lop($tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong);
                    $thongbao = "Thêm thành công";
                }
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
                $tenlop = $_POST['tenlop'];
                $thoigian = $_POST['thoigian'];
                $cahoc = $_POST['cahoc'];
                $khoahoc = $_POST['dmkhoahoc'];
                $giangvien = $_POST['dmgiangvien'];
                $soluong = $_POST['soluong'];
                $id = $_POST['id'];
                $sua = getid_lop($id);
                if (empty($tenlop)) {
                    $err['tenlop'] = "Không được để trống";
                }
                if (empty($thoigian)) {
                    $err['thoigian'] = "Không được để trống";
                }
                if (empty($cahoc)) {
                    $err['cahoc'] = "Không được để trống";
                }
                if (empty($soluong)) {
                    $err['soluong'] = "Không được để trống";
                } else if ($soluong < 0) {
                    $err['soluong'] = "Nhập số lượng lớn hơn 0";
                }
                if (!$err) {
                    update_lop($id, $tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong);
                    $thongbao = "Cập nhật thành công";
                }
            }
            include_once "lop/update.php";
            break;

            // Quản lý tài khoản người dùng

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
                $sua = getid_tk($id);
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
                    update_tk($id, $user, $email, $pass, $phone, $chucvu);
                    $thongbao = "Cập nhật thành công";
                }
            }
            include_once "dangky/update.php";
            break;
        case 'delete_user':
            $id = $_GET['id'];
            delete_tk($id);
            include_once 'dangky/list.php';
            break;

            // trạng thái đăng ký khóa học của người dùng

        case 'listdkkhoahoc':
            if (isset($_POST['search'])) {
                $dangky_all = search_dang_ky($_POST['timkiem']);
            } else {
                $dangky_all = list_dkkhoahoc();
            }
            include_once 'oder_khoahoc/list.php';
            break;
        case 'delete_status':
            $id = $_GET['id'];
            delete_dk($id);
            include_once 'oder_khoahoc/list.php';
            break;
        case 'update_status':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sua = getid_dk($id);
                include_once "oder_khoahoc/update.php";
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                $sua = getid_dk($id);
                update_dk($id, $trangthai);
                $dangky_all = list_dkkhoahoc();
                include_once "oder_khoahoc/list.php";
            }
            break;
        default:
            include_once "home.php";
            break;
    }
} else {
    include_once "home.php";
}
include_once "footer.php";
