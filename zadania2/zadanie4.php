<?php
$liczba = 2;

if($liczba < 0)
{
    echo " Liczba jest mniejsza niz 0";
}
else if ($liczba == 0)
{
    echo "Liczba jest rowna 0";
}
else
{
    echo "Liczba jest wiesza niz 1";
}
?>

<?php
$liczba = 0;

switch(true)
{
    case($liczba < 0):
        echo "Liczba jest mniejsza od 0";
    break;
    case($liczba == 0):
        echo "Liczba rowna 0";
    break;
    default:
        echo "LIczba wieksza od 0";
    break;
}
?>