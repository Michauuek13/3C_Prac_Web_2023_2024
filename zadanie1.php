<?php
    $liczba = 10;

    if ($liczba % 2 == 0)
    {
    echo "Liczba jest parzysta";
    } else
    {
        echo "Liczba jest nieparzysta";
    }
    echo "\n";
?>

<?php
$liczba = 5;
    switch($liczba % 2)
    {
        case(0):
            echo "Liczba jest parzysta";
        break;
        default:
            echo "Liczba jest nieparzysta";
        break;
    }

?>