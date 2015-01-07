<?php 
class Animals {
	public $name= "linx";
	public $gender="female";
	public $age="7";
	public $species="cat";

	function meow() {
     return "{$this->name}" .
	"{$this->species}";

	}

	
} 

$cat1 = new meow();
$cat1­>name = “linx”;
$cat1­>species = “cat”;
print “my favorite cat is  {$cat1­>name()}.”




?>