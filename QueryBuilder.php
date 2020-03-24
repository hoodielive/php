<?php 

class Contractor
{
	protected $electrician; 

	public function __construct($electrician, $plumber, $designer) 
	{
		$this->electrician = $electrician;
		$this->plumber = $plumber;
		$this->designer = $designer;
	}

	public function performWork() 
	{
		return $this->electrician . " is " . $this->plumber . " and is moving forth with " . $this->designer;		
	}
}

$contractor = new Contractor(
	'Vincent', 
	'Innovative', 
	'Brandon'
); 

$contractor->performWork(); 

