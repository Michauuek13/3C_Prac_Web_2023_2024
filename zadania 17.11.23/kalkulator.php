<?php
$pl = 50;
$usd = 3.21;
$eur = 4.32;
$fr = 3.98;

$wybranaWaluta = "usd";

switch($wybranaWaluta)
{
    case "usd":
        echo $pl * $usd;
        break;
    case "eur":
        echo $pl * $eur;
    break;
    case "fr":
        echo $pl * $fr;
    break;
}
?>