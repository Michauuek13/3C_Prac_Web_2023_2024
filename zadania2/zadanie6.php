<?php
$rok = 2006;
    if(($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 ==0))
    {
        echo "Rok przestepny";
    }
    else{
        echo "Rok nieprzestepny";
    }
?>