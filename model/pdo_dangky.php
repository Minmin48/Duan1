<?php

include_once 'pdo.php';

function gettAll_dangky($tendk, $emaildk, $sdtdk, $chonkhoahoc, $cauhoi)
{
    $conn = connection();
    $sql = "INSERT INTO dangky(ten_dk, email_dk, sdt_dk, id_kh, cauhoi_dk) VALUES ('$tendk','$emaildk','$sdtdk','$chonkhoahoc','$cauhoi')";
    $stm = $conn->prepare($sql);
    $stm->execute();
}

function list_dangky()
{
    $con = connection();
    $sql = "select * from dangky join khoa_hoc on dangky.id_kh = khoa_hoc.id_kh";
    // $sql = "select * from dangky";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function delete_dangky($id){
    $con = connection();
    $sql = "DELETE FROM dangky WHERE id_dk='$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
}