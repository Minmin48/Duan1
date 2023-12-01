<?php

include_once 'pdo.php';

function oder_dkkhoahoc($tenlop, $tengv, $thoigian, $cahoc, $soluong, $hocphi, $user, $email, $phone, $khoahoc)
{
    $conn = connection();
    $sql = "INSERT INTO dangky(ten_lop, ten_gv,thoi_gian_hoc, ca_hoc,so_luong, hoc_phi, ten_nguoi_dung,email,id_kh,phone) VALUES ('$tenlop',' $tengv','$thoigian',' $cahoc','$soluong','$hocphi','$user','$email','$khoahoc','$phone')";
    $stm = $conn->prepare($sql);
    $stm->execute();
}
function list_dkkhoahoc()
{
    $conn = connection();
    $sql = "select * from dangky join khoa_hoc on dangky.id_kh = khoa_hoc.id_kh join trang_thai_thanh_toan on dangky.id_trangthai = trang_thai_thanh_toan.id_trangthai";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
function getid_dk($id)
{
    $con = connection();
    $sql = "select * from dangky where id_dk = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function joindk_khoahoc()
{
    $con = connection();
    $sql = "select * from dangky join khoa_hoc on dangky.id_kh = khoa_hoc.id_kh";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_dk($id)
{
    $con = connection();
    $sql = "delete from dangky where id_dk = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getall_trangthai()
{
    $con = connection();
    $sql = "select * from trang_thai_thanh_toan";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function update_dk($id,$trangthai)
{
    $con = connection();
    $sql = "UPDATE dangky SET id_trangthai='$trangthai' WHERE id_dk = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function search_dang_ky($keywork){
    
    $con = connection();
    $sql ="select * from dangky join khoa_hoc on dangky.id_kh = khoa_hoc.id_kh join trang_thai_thanh_toan on dangky.id_trangthai = trang_thai_thanh_toan.id_trangthai WHERE khoa_hoc.ten_kh LIKE '%$keywork%' OR ten_gv LIKE '%$keywork%' OR dangky.ten_nguoi_dung LIKE '%$keywork%' OR dangky.email LIKE '%$keywork%' OR dangky.phone LIKE '%$keywork%' OR trang_thai_thanh_toan.name_trang_thai LIKE '%$keywork%'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
