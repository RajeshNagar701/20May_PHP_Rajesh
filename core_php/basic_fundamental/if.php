<html>
<head>
</head>
<body>
<?php
/*
condi statement 5 types 

if()
if else
if elseif else
nested if
switch	

*/


/*
$a=50;
$b=50;
if($a==$b)
{
	echo "a is equal  to b";
}
*/


/*
$a=50;
$b=40;
if($a<$b)
{
	echo "a is greater than b";
}
else
{
	echo "a is less than b";
}
*/


/*
$a=45;
$b=50;
$c=40;

if($a>$b)
{
	echo "a is greater than b";
}
elseif($a>$c)
{
	echo "a is greater than c";
}
elseif($b>$c)
{
	echo "b is greater than c";
}
else
{
	echo "all cond false";
}
*/

/*

$a=21;
$b=20;

if($a>$b)
{
	if($a==$b)
	{
		echo "a equal to b";
	}
	else
	{
		echo "a not equal to b";
	}
}
else
{
	echo "all cond false";
}
*/



switch(20)
{
	case "10":
	echo "ans is 10";
	break;
	
	case "20":
	echo "ans is 20";
	break;
	
	case "30":
	echo "ans is 30";
	break;
	
	default:
	echo "All cond false";
	break;
}



/*
Difference between if elseif else  vs Switch

=>if cond true then witch break flow : means not check all case & if elseif check all cond 
=>as per speed switch fast 
=> switch use most of all 
*/ 


?>


</body>
</html>