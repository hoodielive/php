<?php

include 'Movie.php';

$mov1 = new Movie('N0001', 'Lusso', 4.99);

print_r($mov1);

echo $mov1->title.'<BR>';
echo $mov1->conversion('Japan').'<BR>';

echo Movie::DISCOUNT.'<BR>';
echo $mov1::DISCOUNT.'<BR>';

function displayHeading($tag)
{
	if (substr($this->id, 0, 1) == 'N')
		return "<$tag>Movies</$tag>";
	else
		return "<$tag>Award Winning Movies</$tag>";
}

echo $mov1->id.'<BR>';

displayHeading();
