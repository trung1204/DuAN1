<?php 

    include "dao/pdo.php"; 
    include "dao/sanpham.php"; 
    include "view/header.php";

    $dssp_new=get_dssp_new(4);
    $dssp_best=get_dssp_best(2);
    $dssp_view=get_dssp_view(4);

    if(!isset($_GET['pg'])){

        include "view/home.php";
    }else{
        switch ($_GET['pg']){
            case 'sanpham':
                include "view/sanpham.php";
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            default:

            include "view/home.php";
            break;
        }
    }
    include "view/footer.php";
?>