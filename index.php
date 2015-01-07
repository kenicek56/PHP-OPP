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

class person {
	public $name= "Kenice";
	public $gender="female";
	public $age="15";
	public $species="human";

	function code() {
     return "{$this->name}" .
	"{$this->age}";

	}

	
} 

$kenice1 = new code();
$kenice1­>name = "kenice";
$kenice1­>species = "human";
$kenice1­>age = "15";
print "my name is"  {$kenice1­>name()}. {$kenice1­>age} "is my age."


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

class pimp {
	public $name= "kenice";
	public $cane="canes";
	public $hat="pimp hat";

	function pimping() {
     return "{$this->name}" .
	"{$this->cane}";

	}

	
} 

$pimp1 = new pimping();
$pimp1­>name = "kenice";
$pimp1­>hat = "pimp hat";
print "im a pimp named"  {$cat1­>name()}.
?>