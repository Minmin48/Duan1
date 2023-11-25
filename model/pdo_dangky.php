<?php

include_once 'pdo.php';

function oder_dkkhoahoc($tenlop, $tengv, $thoigian, $cahoc, $soluong, $hocphi, $user, $email, $phone, $khoahoc,$id_trangthai)
{
    $conn = connection();
    $sql = "INSERT INTO dangky(ten_lop, ten_gv,thoi_gian_hoc, ca_hoc,so_luong, hoc_phi, ten_nguoi_dung,email,id_kh,phone,id_trangthai) VALUES ('$tenlop',' $tengv','$thoigian',' $cahoc','$soluong','$hocphi','$user','$email','$khoahoc','$phone','$id_trangthai')";
    $stm = $conn->prepare($sql);
    $stm->execute();
}
function list_dkkhoahoc()
{
    $conn = connection();
    $sql = "select * from dangky join khoa_hoc on dangky.id_kh = khoa_hoc.id_kh";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
}
