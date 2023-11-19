<?php
    include_once "pdo.php";
    function insert_taikhoan($email, $user, $pass, $phone)
    {
        $conn = connection();
        $sql = "INSERT INTO nguoi_dung(email, ho_ten, pass, phone) VALUES ('$email','$user','$pass','$phone')";
        $stm = $conn->prepare($sql);
        $stm->execute();    
    }
    function check_user($user, $pass){
        $conn = connection();
        $stm =$conn->prepare("SELECT * FROM nguoi_dung WHERE ho_ten='".$user."' AND  pass='".$pass."'");
        $stm->execute();
        $resu=$stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stm->fetchAll();
        if(count($kq)>0) return $kq[0]['id_cv'];
        else return 0;
    }   
    function getuserinfo($user, $pass){
        $conn = connection();
        $stm =$conn->prepare("SELECT * FROM nguoi_dung WHERE ho_ten='$user' AND pass='$pass'");
        $stm->execute();
        $kq= $stm->fetch();
        return $kq;
    }
?>