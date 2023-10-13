<?php
    $dato1= $_POST["txtnombre"]; 
    if ($dato1=="monse"){
        header('Location:  ../menu.php');
    }else {
        header('Location: ../error.php');
    }    
?>