<?php
include "../dao/pdo.php";
include "../dao/sanpham.php";


include "view/header.php";
if(isset($_GET['pg'])){
    $pg = $_GET['pg'];
    switch ($pg) {
        case 'danhmuclist':
            include "view/danhmuclist.php";
            break;
        case 'danhmucadd':
            include "view/danhmucadd.php";
            break;
        
        default:
            include "view/home.php";
            break;
    }

}else{
    include "view/footer.php";


}


include "view/footer.php";


    
    
   
?>
