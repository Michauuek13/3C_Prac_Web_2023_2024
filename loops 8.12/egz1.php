<?php
$number = 100;
$suma = 0;
for ($i = 1; $i <= 100; $i++)
    {
        echo($number);
        $suma = $suma + $number;
        $number +=2;
    }
    echo($suma);
?>