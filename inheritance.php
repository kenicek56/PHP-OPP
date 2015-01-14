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
		return "i hate " . $this->highschool;
	}


}
class Highschool extends School {
	function grade() {
		return $this->highschool;
	}
}

$grades = new School("pasadena highschool", "sierra madre", "washington", "kindergarden");
print"i love " . $highschool->learning();

?>
