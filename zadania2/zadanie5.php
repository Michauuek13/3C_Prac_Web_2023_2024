<?php
$wiek = 15;
    if($wiek < 11)
    {
        echo "Dziecko";
    }
    else if($wiek <= 11 && $wiek < 17)
    {
        echo "Nastolatek";
    }
    else
    {
        echo "Dorosły";
    }
?>