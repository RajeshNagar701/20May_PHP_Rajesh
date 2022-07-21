
<?php
/*
Properties and methods can have access modifiers which control where they can be accessed.


public $a=10; //availabale outside class 
private $b=20;// available only in own class 
protected $c=30; // available only in own class and inherit class

*/
class abc
{
	public $a=10; //availabale outside class 
	private $b=20;// available only in own class 
	protected $c=30; // available only in own class and inherit class
	
	function sum()
	{
		echo $this->a."<br>";
		echo $this->b."<br>";
		echo $this->c."<br>";
	}
}

$obj=new abc;
$obj->sum();
echo $obj->a; // run 
//echo $obj->b;// error
//echo $obj->c;// error

