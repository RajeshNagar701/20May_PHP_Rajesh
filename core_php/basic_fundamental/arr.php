<?php
echo $name="Rajesh";
echo $name1="Mahesh";
echo $name2="Akash<br>";

//arr array is collections of values 
// arr print by print_r($arr)

$names=array("Rajesh","Mahesh","Akash","Nirav","Prem");

echo "<hr>";
print_r($names);  // only for $arr

echo "<hr>";
echo $names[0];
echo $names[1];
echo $names[2];
echo $names[3];

echo "<hr>";

?>