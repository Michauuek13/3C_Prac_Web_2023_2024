<?php
for ($i = 1; $i <= 10; $i++)
{
    echo($i +"\n");
    echo (sqrt($i)+"\n");
}
?>

<?php
$i = 1;
while($i <= 10)
{
    echo($i + "\n");
    echo(sqrt($i)+ "\n");
}
?>

<?php
$i = 1;
do{
    echo($i + "\n");
    echo(sqrt($i)+ "\n");
    $i++;
} while ($i <= 10);
?>