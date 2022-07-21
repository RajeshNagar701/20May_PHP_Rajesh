<?php

class control
{
	function __construct()
	{
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			case '/cars':
			include_once('cars.php');
			break;
			case '/find':
			include_once('find.php');
			break;
			case '/view_car':
			include_once('view_car.php');
			break;
			
			
		}
		
	}
}
$obj=new control;


?>