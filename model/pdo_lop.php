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
function join_giangvien($id_kh)
{
    $con = connection();
    $sql = "SELECT * FROM lop JOIN khoa_hoc ON lop.id_kh = khoa_hoc.id_kh JOIN giang_vien ON lop.id_gv = giang_vien.id_gv WHERE lop.id_kh ='$id_kh'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_lop($id)
{
    $con = connection();
    $sql = "DELETE FROM lop WHERE id_lop='$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getid_lop($id)
{
    $con = connection();
    $sql = "select * from lop where id_lop = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function update_lop($id, $tenlop, $thoigian, $cahoc, $khoahoc, $giangvien, $soluong)
{
    $con = connection();
    $sql = "update lop set ten_lop = '$tenlop', thoi_gian_hoc = '$thoigian', ca_hoc = '$cahoc', id_kh = '$khoahoc',id_gv = '$giangvien',soluong_hs = '$soluong' where id_lop = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function list_kh()
{
    $con = connection();
    $sql = "select * from lop join giang_vien on lop.id_gv = giang_vien.id_gv join khoa_hoc on lop.id_kh = khoa_hoc.id_kh";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function update_soluong_hs($id_lop)
{
    $con = connection();
    $tmp = "SELECT soluong_hs FROM lop WHERE id_lop = '$id_lop'";
    $stmt = $con->prepare($tmp);
    $stmt->execute();
    $result =  $stmt->fetch();
    $newSL = $result['soluong_hs'] - 1;
    $sql = "UPDATE lop SET soluong_hs='$newSL' WHERE id_lop='$id_lop'";
    $stm = $con->prepare($sql);
    $stm->execute();
}
