<?php

require_once ("CLASE_JUGADOR.PHP");
require_once ("CLASE_FUTBOL.PHP");
require_once ("CLASE_VOLEYBOL.PHP");


$objjugador=new jugador("rodrigo", 32011155, "rodrigo@gmail.com");
$objjugador->getdatospersona();

print_r('<pre>');
print_r($objjugador);
print_r('</pre>');

echo "<h2> Datos Futbol </h2>";


echo "El Celular del jugador es: " . $objjugador->celular . "<br>";
echo "Celular 2: " . $objjugador->setcelular(3207769460);
echo $objjugador->getcelular() . "<br>";

$objfutbol= new futbol ("rodrigo", 32011155, "rodrigo@gmail.com", 1.68, 20);

print_r('<pre>');
print_r($objfutbol);
print_r('</pre>');

echo "Estatura: " . $objfutbol->estatura . "<br>";
echo "Edad: " . $objfutbol->edad . "<br>";

echo "<h2> Datos voleybol </h2>";


$objvoleybol= new voleybol ("rodrigo", 32011155, "rodrigo@gmail.com", 1.68, 20, "DEFENSA");
print_r('<pre>');
print_r($objvoleybol);
print_r('</pre>');










?>