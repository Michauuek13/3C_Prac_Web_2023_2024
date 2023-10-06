<?php
$liczba1 = 4;
$liczba2 = 2;
if($liczba1 % $liczba2 == 0)
{
    echo "Jest podzielna";
}
else{
    echo "Nie jest podzielna";
}
?>

<?php
$liczba1 = 4;
$liczba2 = 2;

    switch($liczba1 % $liczba2 == 0)
    {
        case(0):
            echo "Jest podzielna";
        break;
        default:
            echo "Jest niepodziena";
    }
?>