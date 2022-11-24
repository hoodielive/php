<?php

$color = "blue";

echo gettype($color) . "<br>";
echo GETTYPE($color) . "<br>";

define("SITE_URL", "theikuorganization.org");

echo "Thank you" . SITE_URL;

// integers
$a = 123;
var_dump($a);
echo "<br>";

$b = -123;
var_dump($b);
echo "<br>";

$c = 0x1A;
var_dump($c);
echo "<br>";

$d = 0123;
var_dump($d);

// Booleans
$show_error = true;
var_dump($show_error);
echo "<br>";

// Arrays
$colors = array("red", "green", "blue");
var_dump($colors);
echo "<br>";

$color_codes = array(
  "Red" => "#ff0000",
  "Green" => "#00ff00",
  "Blue"  => "#0000ff"
);

var_dump($color_codes);
