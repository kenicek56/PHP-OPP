<?php 
class Animals
 {
	public $name;
	public $gender;
	public $age;
	public $species;

	function __construct($name, $gender, $age, $species)
	{

		$this->name = $name;
		$this->gender = $gender;
		$this->age = $age;
		$this->species = $species;
	}

	function meow()
	 {
     return "my favorite cat is the " . $this->name;

	}
	
} 

$cat = new Animals("linx", "female", "seven", "cat");
echo $cat->meow();


class Person {
	public $name;
	public $gender;
	public $age;
	public $species;

	function code() {
     return "hi my name is " . $this->name;

	}
function __construct($name, $gender, $age, $species)
	{

		$this->name = $name;
		$this->gender = $gender;
		$this->age = $age;
		$this->species = $species;
	}
	
} 

$kenice = new Person("kenice", "female", "15", "human");
print $kenice->code();


class Animalsp
{
	public $name;
	public $gender;
	public $age;
	public $species;

	function meow() {
     return "hi" . $this->age;
	}

	function __construct($name, $gender, $noise, $species)
	{

		$this->name = $name;
		$this->gender = $gender;
		$this->noise = $noise;
		$this->species = $species;
	}
} 

$cat1 = new Animalsp("cat", "male", "meow", "cat!");

print $cat1->meow();

class Pimp {
	public $name;
	public $cane;
	public $hat;

	function pimping() {
     return "yesssssss" . $this->cane;

	}

	function __construct($name, $cane, $hat)
	{

		$this->name = $name;
		$this->cane = $cane;
		$this->hat = $hat;
	}
} 

$pimp1 = new Pimp("Kenice", "cane", "hat");
print $pimp1->pimping();

// EXAMPLE 1
class Cookies {
public $title;	
public $brand;
public $kind;
public $amount;

function __construct($title, $brand, $kind, $amount) {
$this->title = $title;
$this->brand = $brand;
$this->kind = $kind;
$this->amount = $amount;
}
	function getName() {
	return "{$this->band}" .
	"{$this->kind}";
	}

}

$yes = new Cookies("sugar", "sugar", "cookie", "six");
print $yes->getName();
 
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