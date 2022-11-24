<?php

class CoffeeMaker
{
	public function brew()
	{
		var_dump('Brewing Coffee');
	}
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
	public function brewLatte()
	{
		var_dump('Brewing a latte.');
	}
}

(new CoffeeMaker())->brew();
(new CoffeeMaker())->brewLatte();
