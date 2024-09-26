<?php
    $num = $_POST['NumeroDia'];

    if($num == 1){echo "Lunes"}
    if($num == 2){echo "Martes"}
    if($num == 3){echo "Miércoles"}
    if($num == 4){echo "Jueves"}
    if($num == 5){echo "Viernes"}
    if($num == 6){echo "Sábado"}
    if($num == 7){echo "Domingo"}
    
    else{
        echo "Ese numero no corresponde a ningún día; escribe un número entre 1 y 7";
    }
?>