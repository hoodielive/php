<?php

public function testThatBarMergesCorrectly()
{
	$foo = $this->getMockBuilder('Foo')->getMock();

	$bar = $this->getMockBuilder('Bar')
		->setMethods(array('getStatus', 'merge'))
		->getMock();
	$bar->expects($this->once())
		->method('getStatus')
		->will($this->returnValue('merge-ready'));

	// Create our Baz object and then test our functionality
	$baz = new Baz($foo, $bar);
	$expectedResult = true;
	$testResult = $baz->mergeBar();

	$this->assertEquals(
		$expectedResult,
		$testResult,
		'Baz::mergeBar did not correctly merge our Bar Object.'
	);
}
