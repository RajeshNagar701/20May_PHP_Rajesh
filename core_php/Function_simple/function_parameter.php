<?php

// function with argument / parameter
/*
function sum($a,$b)
{
	echo $sum=$a+$b."<br>";
}
sum(5,7);
sum(50,7);
sum(5,70);
*/

// Default argument


function default_func($name,$country="India")
{
	echo "My Name is :  ".$name. " and my country is " . $country ."<br>";
}
//default_func("Rajesh");
//default_func("Rajesh","China");
default_func("Rajesh",null);

?>