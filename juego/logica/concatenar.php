<?php
    $dato1= $_POST["txtnombre"]; 
    if ($dato1=="monseuwu"){
        header('Location:  ../menu.php');
    }else {
        header('Location: ../ayuda.php');
    }

        