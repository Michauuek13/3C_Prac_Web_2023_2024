<?php
    $liczba = 101;

    if ($liczba >= 100 && $liczba < 150)
    {
        echo "Miesci sie w przedziale";
    } 
    else
    {
        echo "Nie miesci sie";
    }
?>

<?php
$liczba = 101;

    switch($liczba >= 100 && $liczba < 150)
    {
        case(true):
            echo "Miesci sie w przedziale";
        break;
        default:
            echo "Nie miesci sie";
        break;
    }
?>