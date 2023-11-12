<?php
include_once "pdo.php";

function add_danhmuc($name)
{
    $con = connection();
    $sql = "insert into danh_muc_khoa_hoc(ten_dm) values ('$name')";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function list_danhmuc()
{
    $con = connection();
    $sql = "select * from danh_muc_khoa_hoc";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_danhmuc($id)
{
    $con = connection();
    $sql = "delete from danh_muc_khoa_hoc where id_dm = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getid_danhmuc($id)
{
    $con = connection();
    $sql = "select * from danh_muc_khoa_hoc where id_dm = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function update_danhmuc($id, $name)
{
    $con = connection();
    $sql = "update danh_muc_khoa_hoc set ten_dm = '$name' where id_dm = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
