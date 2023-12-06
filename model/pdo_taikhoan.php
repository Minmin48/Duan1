<?php
include_once "pdo.php";
function insert_taikhoan($email, $user, $pass, $phone)
{
    $con = connection();
    $sql = "INSERT INTO nguoi_dung(email, user, pass, phone) VALUES ('$email','$user','$pass','$phone')";
    $stm = $con->prepare($sql);
    $stm->execute();
}
function getuserinfo($email, $pass)
{
    $con = connection();
    $stm = $con->prepare("SELECT * FROM nguoi_dung WHERE email='$email' AND pass='$pass'");
    $stm->execute();
    $kq = $stm->fetch();
    return $kq;
}
function list_tk()
{
    $con = connection();
    $sql = "SELECT * FROM nguoi_dung join chuc_vu on nguoi_dung.id_cv = chuc_vu.id_cv";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_tk($id)
{
    $con = connection();
    $sql = "delete from nguoi_dung where id_nguoidung = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function getid_tk($id)
{
    $con = connection();
    $sql = "select * from nguoi_dung where id_nguoidung = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function update_tk($id, $user, $email, $pass, $phone, $chucvu)
{
    $con = connection();
    $sql = "update nguoi_dung set user = '$user', email = '$email', pass = '$pass', phone = '$phone', id_cv = '$chucvu' where id_nguoidung = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
function get_all_chucvu()
{
    $con = connection();
    $sql = "select * from chuc_vu";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function checkemail($email)
{
    $con = connection();
    $stm = $con->prepare("SELECT * FROM nguoi_dung WHERE email='$email'");
    $stm->execute();
    $kq = $stm->fetch();
    return $kq;
}
function sum_user()
{
    $con = connection();
    $sql = "SELECT COUNT(*) FROM nguoi_dung";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}
function user_new()
{
    $con = connection();
    $sql = "SELECT * FROM nguoi_dung ORDER BY id_nguoidung DESC";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
