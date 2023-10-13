<?php
    $nDato1c=$_GET["caNum1"];
        if ($nDato1c==0 || $nDato1c==1||$nDato1c==2 || $nDato1c==3 ){
            echo "Tiene que repetir la Clase";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==4 || $nDato1c==5 ){
            echo "Echale mas ganas";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==5 || $nDato1c==6){
            echo "Apenas y pasaste";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==7 || $nDato1c ==8){
            echo "Very Good";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==9 || $nDato1c==10){
            echo "Eres de los mejor";
            echo"<a href='index.php'>Inicio</a>";
            
        }else {
            echo "Invalido";
            echo"<a href='index.php'>Inicio</a>";
            
        }
?>