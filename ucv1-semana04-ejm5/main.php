<?php
require_once("Cuadrado.php");
require_once("Triangulo.php");

$cuadrado = new Cuadrado();
$cuadrado->setMedidaLado(8);

echo "\n-------CUADRADO----------------\n";
echo "El area es: ".$cuadrado->calcularArea() . "\n";
echo "El perimetro  es: ".$cuadrado->calcularPerimetro()."\n";
echo "-------------------------\n";


$triangulo = new Triangulo();
$triangulo->setMedidaLado(5);

echo "\n-------TRIANGULO----------------\n";
echo "El area es: ".$triangulo->calcularArea() . "\n";
echo "El perimetro  es: ".$triangulo->calcularPerimetro();


