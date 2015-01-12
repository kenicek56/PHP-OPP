<?php
class Chicken
{

	public $flavor;
	public $noise;
	public $color;

	function __construct($flavor, $noise, $color)
	{

		$this->flavor = $flavor;
		$this->noise = $noise;
		$this->color = $color;
	}

	function fly()
	{
		return "my chicken loves to fly and it makes a loud " . $this->noise;
	}

	function cluck()
	{
		return " my chicken has a lot of different " . $this->color;
	}
}

$frychicken = new Chicken("chocolate", "cluck", "white");
echo $frychicken->fly();
