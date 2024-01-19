<?php
echo "Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Imie:" .trim($_POST['imie']). "<br>";
echo "Nazwisko:" .trim($_POST['nazw']). "<br>";
echo "E-mail:" .trim($_POST['mail']). "<br>";
echo "Adres:" .trim($_POST['zamieszkanie']). "<br>";
echo "Poprzednia szkoła:" .trim($_POST['szkola']). "<br>";

if(!isset($_POST['wyborSzkoly']))
{
    echo "Wybierz szkołe";
}
else
{
    echo "Wybrana szkoła: " .trim($_POST['wyborSzkoly']). "<br>";
}

if(!empty($_POST['jezyki']))
{
    echo "<ul>";
    foreach ($_POST['jezyki'] as $wartosc)
    {
        echo "<li>$wartosc</li>";
    }
}
else
{
    echo "<p>" .$_POST['nazw']. "nie zna żadnego języka</p>";
}

?>