<?php 

function display_hello()
{
	print "Hello" . "\n";
}

function display_hello_2($value)
{
	print "This is the second one Mr. " . $value;
}

display_hello();
display_hello_2("Larry");
