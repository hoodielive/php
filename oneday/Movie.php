<?php 

class Movie
{
	private $id;
	private $title;
	public $rentalPrice;
	const DISCOUNT = 10;

	public function __construct($pId, $pTitle, $pRentalPrice)
	{
		$this->id = $pId;
		$this->title = $pTitle;
		$this->rentapPrice = $pRentalPrice;
	}

	public function conversion($country)
	{
		$rate = 1;
		switch($country)
		{
		case 'UK':
			$rate = 0.76; 
			break;
		case 'Japan':
			$rate = 110;
			break;
		}
		return round($rate * $this->rentalPrice, 2);
	}
}
