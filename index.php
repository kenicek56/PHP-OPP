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

// EXAMPLE 1
class cookies {
public $brand;
public $kind;
public $amount;

function __construct($title, $brand, $kind, $amount) {
$this­>brand = $brand;
$this­>kind = $kind;
$this­>amount = $amount;
}
	function getName() {
	return “{$this­>brand}” .
	“{$this­>kind}”;
	}
}
 
class textbook {
public $brand;
public $color;
public $type;
function __construct($title, $brand, $color, $type) {
$this­>brand = $brand;
$this­>color = $color;
$this­>type = $type;
}
	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

 
class iphone {
public $brand;
public $color;
public $price;
function __construct($title, $number, $color, $amount) {
$this­>number = $number;
$this­>color = $color;
$this­>price = $price;
}
	function getName() {
	return “{$this­>number}” .
	“{$this­>color}”;
	}
}

// EXAMPLE 2
$cookies1 = new cookies(“chocolate”, “oatmeal”, “peanutbutter”);
print “cookies 1: {$cookies1­>getName()}\n; 

$textbook1 = new textbook(“math”, “history”, “science”);
print “textbool 1: {$textbook1­>getName()}\n; 

$iphone1 = new iphone(“iphone3”, “iphone4”, “iphone5”);
print “ iphone: {$iphone1­>getName()}\n; 
?>