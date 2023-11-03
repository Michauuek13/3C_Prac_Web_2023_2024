<?php
    $procent = 50;

    switch ($procent)
    {
        case($procent <= 30):
            echo "Niedostateczny";
            break;
        case($procent <= 50 && $procent >30):
            echo "Dopuszczajacy";
            break;
        case($procent <= 65&& $procent > 50):
            echo "Dostateczny";
            break;
        case($procent <= 85 && $procent > 65):
            echo "Dobry";
            break;
        case($procent <= 95 && $procent > 85):
            echo "Bardzo dorby";
            break;
        case($procent > 95):
            echo "Celujacy";
            break;
    }
?>
