<?php declare(strict_types=1);

class Dog 
{
	protected string $dog;
	protected string $dog_weight;
	protected string $dog_breed;
	protected string $dog_color;

	function __constructor(
		string $dog, 
		string $dog_weight, 
		string $dog_breed, 
		string $dog_color
	) : string {
		$this->dog = $dog;
		$this->dog_weight = $dog_weight; 
		$this->dog_breed = $dog_breed;
		$this->dog_color = $dog_color;
	}

	function returnDog(string $dog) : string
	{
		return $this->dog;		
	}

	function returnDogWeight(string $dog_weight) : string 
	{
		return $this->dog_weight;	
	}

	function returnDogBreed(string $dog_breed) : string
	{
		return $this->dog_breed;
	}

	function returnDogColor(string $dog_color) : string
	{
		return $this->dog_color;	
	}
}

$new_dog_pack = array(
	new Dog("Otis", "35", "Pitbull", "Brown"),
	new Dog("Oje", "25", "St.Bernard", "Rusty White"),
	new Dog("Yardie", "10", "Yorkie", "Yellow"),
);

var_dump($new_dog_pack);

echo $new_dog_pack[0]->returnDogColor([3]);

