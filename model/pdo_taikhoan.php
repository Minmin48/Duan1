<?php
include_once "pdo.php";
function insert_taikhoan($email, $user, $pass, $phone)
{
    $conn = connection();
    $sql = "INSERT INTO nguoi_dung(email, ho_ten, pass, phone) VALUES ('$email','$user','$pass','$phone')";
    $stm = $conn->prepare($sql);
    $stm->execute();
}
function getuserinfo($email, $pass)
{
    $conn = connection();
    $stm = $conn->prepare("SELECT * FROM nguoi_dung WHERE email='$email' AND pass='$pass'");
    $stm->execute();
    $kq = $stm->fetch();
    return $kq;
}
function list_tk()
{
    $conn = connection();
    $sql = "SELECT * FROM nguoi_dung";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
function delete_tk($id)
{
    $con = connection();
    $sql = "delete from nguoi_dung where id_nguoidung = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
