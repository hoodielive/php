<?php 

$a = 36; $b = 36;
$result = $a <=> $b; 
echo ($result . "\n");

if ($result === 0)
{
	print "Both are equal.";
}
else if ($result === 1)
{
	print "$a is greater than $b.";
}
else
{
	print "$b is greater than $a.";
}
