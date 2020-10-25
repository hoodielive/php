<?php

try {
	include "_strictFunctions.php";
	print divideTwo(12, 14);
}

catch(zeroException $e)
{
	print "\n" ."Don't try to divide by Zero!" ."\n";
}

catch(Throwable $t)
{
	Print $t->getMessage();
}

finally {
	print "This message is over.";
}
