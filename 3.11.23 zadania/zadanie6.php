<?php
$side_A = 5;
$side_B = 6;
$side_C = 7;
    if($side_A * $side_A + $side_B * $side_B > $side_C * $side_C)
    {
        echo "Trojkat ostrokatny";
    }
    if ($side_A * $side_A + $side_B * $side_B = $side_C * $side_C)
    {
        echo "Trojkat prostokatny";
    }
    if ($side_A * $side_A + $side_B * $side_B < $side_C * $side_C)
    {
        echo "Trojkat rozwartokatny";
    }
?>