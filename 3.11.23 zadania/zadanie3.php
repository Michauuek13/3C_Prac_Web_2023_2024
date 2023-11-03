<?php
$kategoria = "elektronika";

$podatek_elektronika = 0.23;
$podatek_pieczywo = 0.05;
$podatek_odziez = 0.05;

$cena_produktu_elektronika = 1000;
$cena_produktu_pieczywo = 5;
$cena_produktu_odziez = 130;

$cena_z_podatkiem;

switch ($kategoria) {
    case "elektronika":
    $cena_z_podatkiem = $cena_produktu_elektronika +$cena_produktu_elektronika * $podatek_elektronika;
    echo $cena_z_podatkiem;
        break;

    case "odziez":
    $cena_z_podatkiem = $cena_produktu_odziez +$cena_produktu_odziez * $podatek_odziez;
    echo $cena_z_podatkiem;
    break;

    case "pieczywo":
    $cena_z_podatkiem = $cena_produktu_pieczywo + $cena_produktu_pieczywo * $podatek_pieczywo;
    echo $cena_z_podatkiem;
}
?>