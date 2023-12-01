<?php
include_once "pdo.php";

function add_khoahoc($tenkh, $tendm, $thoigian, $text, $hinh, $hocphi)
{
    $conn = connection();
    $sql = "INSERT INTO khoa_hoc(ten_kh, id_dm, thoi_gian, thongtin_kh, hinh, hoc_phi) VALUES ('$tenkh','$tendm','$thoigian','$text','$hinh','$hocphi')";
    $stm = $conn->prepare($sql);
    $stm->execute();
}
function getall_khoahoc()
{
    $con = connection();
    $sql = "select * from khoa_hoc join danh_muc_khoa_hoc on khoa_hoc.id_dm = danh_muc_khoa_hoc.id_dm";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_khoahoc($id)
{
    $con = connection();
    $sql = "delete from khoa_hoc where id_kh = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getid_khoahoc($id)
{
    $con = connection();
    $sql = "select * from khoa_hoc where id_kh = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function update_khoahoc($id, $tenkh, $tendm, $thoigian, $text, $hinh, $hocphi)
{
    $con = connection();
    $sql = "update khoa_hoc set ten_kh = '$tenkh', id_dm = '$tendm', thoi_gian = '$thoigian', thongtin_kh = '$text', hinh = '$hinh', hoc_phi = '$hocphi' where id_kh = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function get_khoahoc()
{
    $conn = connection();
    $sql = "SELECT * FROM khoa_hoc";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
function get_khoahoc_by_id($id_kh)
{
    $conn = connection();
    $sql = "SELECT * FROM khoa_hoc WHERE id_kh='$id_kh'";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetch();
}
function show_khoahoc($idkh)
{
    $sql = "SELECT * FROM khoa_hoc where id_dm = '$idkh' ORDER BY id_kh DESC ";
    $conn = connection();
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
// thống kê khoá học theo số lượng đăng ký
function thong_ke_khoahoc(){
    $sql = "SELECT * FROM khoa_hoc JOIN dangky ON khoa_hoc.id_kh = dangky.id_kh ORDER BY dangky.so_luong DESC";
    $conn = connection();
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
function thong_ke_sum_doanh_thu(){
    $sql = "SELECT SUM(hoc_phi) FROM dangky WHERE id_trangthai = 1";
    $conn = connection();
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetch();
}
function sum_khoa_hoc(){
    $sql = "SELECT COUNT(*) FROM khoa_hoc";
    $conn = connection();
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetch();
}
function thong_ke_khoahoc_doanh_thu(){
    $sql = "SELECT khoa_hoc.*, SUM(khoa_hoc.hoc_phi) as sum_hoc_phi FROM `khoa_hoc` JOIN dangky ON khoa_hoc.id_kh = dangky.id_kh WHERE dangky.id_trangthai = 1 GROUP BY khoa_hoc.id_kh ORDER BY sum_hoc_phi DESC";
    $conn = connection();
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}