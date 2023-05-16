<?php
/**
* Esto es un ejemplo de documentacion de PHP.
* En este script se van a realizar tres operaciones
* la primera es sumar dos numeros enteros
* la segunda restar dos numeros enteros
* y la tercera enviar un saludo con el nombre que introduzcamos por llamada
* @author Andres Rodriguez Morales
* @version 1.0.1
*
*/

/**
* Esta funcion devuelve la suma de los argumentos
* enviados en la llamada
* @param integer $num1 primer numero a sumar
* @param integer $num2 sgundo numero a sumar
* @return integer resultado de la suma de dos numeros enteros
*
*/
function suma ($num1, $num2)
{
	return $num1 + $num2;
}

/**
* Esta funcion devuelve la resta de los argumentos
* enviados en la llamada
* @param integer $num1 primer numero a restar (minuendo)
* @param integer $num2 segundo numero a restar (sustraendo)
* @return integer resultado de la resta de dos numeros enteros
*
*/
function resta ($num1, $num2)
{
	return $num1 - $num2;
}

/**
* Esta funcion devuelve un saludo con el nombre que le
* enviamos en la llamada
* @param string $nombre Es el nombre de la persona a la que saludamos
* @return string Saludo a la persona solicitada
*
*/

function saluda ($nombre)
{
	echo "Hola ".$nombre;
}

/**
* @example La diferencia entre 25 y 20 es : 5
* @example La suma de 25 y 20 es : 45
* @example Hola Andres
*
*/
echo "Ejempl de funciones en PHP</br>";
saluda ("Andres");
echo "<br/> La diferencia entre 25 y 20 es : ".resta(25,20);
echo "<br/> La suma de 25 y 20 es : ".suma(25,20);
echo "<br/> Hasta pronto!!<br/>";

?>
