<?php

class School
{
	public $highschool;
	public $middleschool;
	public $elementry;
	public $kindergarden;

	function __construct($highschool, $middleschool, $elementry, $kindergarden)
    {
		$this->highschool = $highschool;
		$this->middleschool = $middleschool;
		$this->elementry = $elementry;
		$this->kindergarden = $kindergarden;
	}

	function learning()
	{
		return " hight school "     . $this->highschool . "<br />" . 
				"middle school "    . $this->middleschool . "<br />" . 
				 "elmentary school" . $this->elementry . "<br />" . 
				 "kindergarden "    . $this->kindergarden;
	}


}

class Highschool extends School 
{
	function __construct($highschool, $middleschool, $elementry, $kindergarden)
	{
		parent::__construct($highschool, $middleschool, $elementry, $kindergarden);
	}
	function lazy()
	{
		return "mother yar";
	}
}

$carla = new Highschool("pasadena highschool", "sierra madre", "washington", "kindergarden");
print $carla->learning() . "<br />";
print $carla->lazy();


class Cookie {
	public $chicken;
	public $chocolatechip;
	public $sugar;
	public $blueberry;

	function __construct($chicken, $chocolatechip, $sugar, $blueberry) {
		$this->chicken = $chicken;
		$this->chocolatechip = $chocolatechip;
		$this->sugar = $sugar;
		$this->blueberry = $blueberry;
	}

	function getName() {
		return " chicken cookie "   . $this->chicken . "<br />" . 
				"chocolatechip "    . $this->chocolatechip . "<br />" . 
				 "sugar"            . $this->sugar . "<br />" . 
				 " blueberry "    . $this->blueberry;
	}
}
class Chocolatechip extends Cookie {
	function __construct($chicken, $chocolatechip, $sugar, $blueberry)
	{
		parent::__construct($chicken, $chocolatechip, $sugar, $blueberry);
	}
	function chocolate() {
		return " hi ";
	}
}

$raisen = new Chocolatechip("chiken", "chocolatechip", "sugar", "blueberry");

print $raisen->getName() . "<br />";
print $raisen->chocolate();

class Mother
{
	public $cook;
	public $work;
	public $nag;
	public $love;

	function __construct($cook, $work, $nag, $love)
	{
		$this->cook = $cook;
		$this->work = $work;
		$this->nag = $nag;
		$this->love = $love;
	}

	function yells()
	{
		return  "cook "  . $this->cook . "<br />" . 
			    "work "  . $this->work . "<br />" . 
				"nag "    . $this->nag . "<br />" . 
				"love " . $this->love;
	}


}
class Love extends Mother {
	function __construct($cook, $work, $nag, $love)
	{
		parent::__construct($cook, $work, $nag, $love);
	}
	function teach() {
		return $this->nag;
	}
}

$teaches = new Love("cook", "work", "nag", "love");
print $teaches->yells() . "<br />";
print $teaches->teach();
?>

