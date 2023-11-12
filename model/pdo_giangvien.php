<?php
include_once "pdo.php";

function add_giangvien($tengv, $anh, $text)
{
    $con = connection();
    $sql = "insert into giang_vien(ten_gv,hinh_gv,thongtin_gv) values ('$tengv','$anh','$text')";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getall_giangvien()
{
    $con = connection();
    $sql = "select * from giang_vien";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_giangvien($id)
{
    $con = connection();
    $sql = "delete from giang_vien where id_gv = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getid_giangvien($id)
{
    $con = connection();
    $sql = "select * from giang_vien where id_gv = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function update_giangvien($id, $tengv, $text, $hinh)
{
    $con = connection();
    $sql = "update giang_vien set ten_gv = '$tengv', hinh_gv = '$hinh', thongtin_gv = '$text' where id_gv = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
