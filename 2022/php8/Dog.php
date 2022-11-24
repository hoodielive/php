<?php declare(strict_types=1);

class Dog 
{
	protected string $dog;
	protected string $dog_weight;
	protected string $dog_breed;
	protected string $dog_color;

	function __constructor( array $items
	) : string {
		$this->items = $items;
	}

	public function sum($key)
	{
		array_map(function($item) use ($key) {
			return $item->$key;
		}, $this->items);
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

$new_dog_pack = new Dog([
	new Dog("Otis", "35", "Pitbull", "Brown"),
	new Dog("Oje", "25", "St.Bernard", "Rusty White"),
	new Dog("Yardie", "10", "Yorkie", "Yellow"),
]);

var_dump($new_dog_pack);
print_r(get_object_vars($new_dog_pack));
