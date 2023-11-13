<?php
include_once "pdo.php";

function getall_danhmuc()
{
    $conn = connection();
    $sql = "SELECT * FROM danh_muc_khoa_hoc";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
function gettAll_khahoc($tenkh, $tendm, $thoigian, $text, $hinh, $hocphi, $trangthai)
{
    $conn = connection();
    $sql = "INSERT INTO khoa_hoc(ten_kh, id_dm, thoi_gian, thongtin_kh, hinh, hoc_phi, trang_thai) VALUES ('$tenkh','$tendm','$thoigian','$text','$hinh','$hocphi','$trangthai')";
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
function update_khoahoc($id, $tenkh, $tendm, $thoigian, $text, $hinh, $hocphi, $trangthai)
{
    $con = connection();
    $sql = "update khoa_hoc set ten_kh = '$tenkh', id_dm = '$tendm', thoi_gian = '$thoigian', thongtin_kh = '$text', hinh = '$hinh', hoc_phi = '$hocphi', trang_thai = $trangthai where id_kh = '$id'";
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
