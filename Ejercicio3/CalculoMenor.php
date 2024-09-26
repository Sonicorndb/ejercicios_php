<?php
    $num1 = $_POST['Numero1'];
    $num2 = $_POST['Numero2'];
    $num3 = $_POST['Numero3'];

    $min = 0;

    $num1 < $num2? $min = $num1: $min = $num2;
    $num3 < $min? $min = $num3: $min=$min;
    echo "El menor es $res";
?>