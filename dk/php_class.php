<?php

class ASampleClass
{
	public function __construct(
		@@CustomAttribute
		public int $anInt = 0, 
		/** @var float */
		public float $aFloat,
		float $anotherFloat, // NOT promoted, tricky.
		public MyClass $objectOfMyClass,
	) {
		// $anInt = $anInt < 0 ? 0 : $anInt;
	}
}
