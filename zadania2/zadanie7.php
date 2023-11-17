<?php
$liczba = [3,2,1];

if($liczba[0] < $liczba[1] && $liczba[0] < $liczba[2])
{
    echo "Liczba1 jest najmniejsza";
}
else if($liczba[1] < $liczba[0] && $liczba[1] < $liczba[1])
{
    echo "Liczba2 jest najmniejsza";
}
else{
    echo "Liczba3 jest najmniejsza";
}
?>