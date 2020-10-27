<?php

public function testMergeIfBarDidNotHappen()
{
	$foo = $this->getMockBuilder('Foo')->getMock();
	$bar = $this->getMockBuilder('Bar')->getMock();
	$bar->expects($this->any())
		->method('getStatus')
		->will($this->returnValue('pending'));

	$baz = new Baz($foo, $bar);
	$testResult = $baz->mergeBar();

	$this->assertFalse(
		$testResult,
		'Bar with pending status should not be merged.'
	);
}
