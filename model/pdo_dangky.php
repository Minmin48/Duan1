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
function update_dk($id, $ten_lop, $ten_gv, $thoi_gian_hoc, $ca_hoc, $so_luong, $hoc_phi, $ten_nguoi_dung, $email, $khoahoc, $phone, $trangthai)
{
    $con = connection();
    $sql = "update dangky set ten_lop = '$ten_lop', ten_gv = '$ten_gv', thoi_gian_hoc = '$thoi_gian_hoc', ca_hoc = '$ca_hoc', so_luong = '$so_luong', hoc_phi = '$hoc_phi',ten_nguoi_dung = '$ten_nguoi_dung',email = '$email',id_kh = '$khoahoc',phone = '$phone',id_trangthai = '$trangthai' where id_dk = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
