<?php
function eurDol(float $cantidad): float
{
    return $cantidad * 1.06;
}
?>
<?php
function eurYen(float $cantidad): float
{
    return $cantidad * 158;
}
?>
<?php
function dolEur(float $cantidad): float
{
    return $cantidad * 0.94;
}
?>
<?php
function dolYen(float $cantidad): float
{
    return $cantidad * 148.90;
}
?>
<?php
function yenEur(float $cantidad): float
{
    return $cantidad * 0.0063;
}
?>
<?php
function yenDol(float $cantidad): float
{
    return $cantidad * 0.0067;
}
?>

<?php

function cambiarDivisa(int|float $cantidad, $u1, $u2)
{
    $x = match (true) {
        $u1 == "EUROS" && $u2 == "DOLARES" => eurDol($cantidad),
        $u1 == "EUROS" && $u2 == "YENES" => eurYen($cantidad),
        $u1 == "DOLARES" && $u2 == "EUROS" => dolEur($cantidad),
        $u1 == "DOLARES" && $u2 == "YENES" => dolYen($cantidad),
        $u1 == "YENES" && $u2 == "EUROS" => yenEur($cantidad),
        $u1 == "YENES" && $u2 == "DOLARES" => yenDol($cantidad),
        $u1 == $u2 => $cantidad,
        default => "Unidad erronea"
    };
    return $x;
}
?>


<?php
function sumatorio(int $num){
    $suma = 0;
    for ($i = 0; $i <= $num; $i++) {
        $suma += $i;
    }
    return $suma;
}
?>
<?php
function factorial(int $numfact){
    $suma = 1;
    for ($i = 1; $i <= $numfact; $i++) {
            $suma *= $i;
    }
    return $suma;
}
?>

