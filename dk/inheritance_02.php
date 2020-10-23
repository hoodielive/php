<?php

class Collection
{
	protected array $items;

	public function __construct(array $items)
	{
		$this->items = $items;
	}

	public function sum($key)
	{
		array_map(function($item) use ($key) {
			return $item->$key;
		}, $this->items);
	}
}

class Video
{
	public $title; 
	public $length;

	public function __construct($title, $length)
	{
		$this->title = $title;
		$this->length = $length;
	}
}

$collection = new Collection([
	new Video('Some Video', 100),
	new Video('Some Video', 200),
	new Video('Some Video', 300),
]);
