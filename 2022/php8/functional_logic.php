<?php

function display_names($firstname, $lastname)
{
	print "Your firstname is $firstname." . "\n";
	if ($lastname != "none")
	{
		print "Your lastname is $lastname." . "\n";
	}
}

function addTwo($first_entry, $second_entry)
{
	$result = $first_entry + $second_entry;
	return $result . "\n";
}

print addTwo(12, 14);
display_names("Larry", "CannotBeEmpty");
display_names("Larry", "Osa");
