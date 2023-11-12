<?php
include_once "pdo.php";
include_once "pdo_giangvien.php";
include_once "pdo_khoahoc.php";

function add_lop($tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong)
{
    $conn = connection();
    $sql = "INSERT INTO lop(ten_lop,thoi_gian_hoc,ca_hoc,id_kh,id_gv,soluong_hs) VALUES ('$tenlop','$thoigian','$cahoc','$khoahoc','$giangvien',$soluong)";
    $stm = $conn->prepare($sql);
    $stm->execute();
}
function join_khoahoc()
{
    $con = connection();
    $sql = "select * from lop join khoa_hoc on lop.id_kh = khoa_hoc.id_kh";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function join_giangvien()
{
    $con = connection();
    $sql = "select * from lop join giang_vien on lop.id_gv = giang_vien.id_gv";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_lop($id){
    $con = connection();
    $sql = "DELETE FROM lop WHERE id_lop='$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
