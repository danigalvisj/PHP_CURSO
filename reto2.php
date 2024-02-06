<?php
$edad=16;

$esMayorEdad= false;
if($edad>=18) {
    $esMayorEdad=true;
}

echo"Es mayor de edad:".($esMayorEdad ? "SI" : "NO");


$altura=1.50;

$esAlto= false;
if($altura>=1.70) {
    $esAlto=true;
}

echo "<br>";
echo"Es alto:".($esAlto ? "SI" : "NO");
echo "<br>";
