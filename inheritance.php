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
		return " hate " . $this->highschool;
	}


}
class Highschool extends School {
	function grade() {
		return $this->highschool;
	}
}

$grades = new School("pasadena highschool", "sierra madre", "washington", "kindergarden");
print" i attend, but " .$grades->learning();

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
		return " and always will be " . $this->chocolatechip;
	}
}
class Chocolatechip extends Cookie {
	function chocolate() {
		return $this->raisen;
	}
}

$raisen = new Cookie("chiken", "chocolatechip", "sugar", "blueberry");
print " my favorite cookie is ".$raisen->getName();

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
		return " my mom loves to " . $this->nag;
	}


}
class Love extends Mother {
	function teach() {
		return $this->nag;
	}
}

$teaches = new Mother("cook", "work", "nag", "love");
print" i love my her but " .$teaches->yells();

?>

