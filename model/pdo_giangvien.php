<?php
include_once "pdo.php";

function add_giangvien($tengv,$anh,$text,$malop)
{
    $con = connection();
    $sql = "insert into giang_vien(ten_gv,hinh_gv,thongtin_gv,trangthai_gv) values ('$tengv','$anh','$text','$malop')";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}
