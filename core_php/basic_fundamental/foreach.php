<html>
<head>
</head>
<body>
<?php

$colors=array("red","yellow","green","blue");

echo $colors[1];
echo "<hr>";

foreach($colors as $c)
{
	echo $c ."<br>";
}
foreach($colors as $c)
{
	if($c=="green")
	{
		break;
	}
	echo $c ."<br>";
}

?>
</body>
</html>