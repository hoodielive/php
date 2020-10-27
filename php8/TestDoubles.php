<?php 

class Baz
{
	public $foo;
	public $bar;

	public function __construct(Foo $foo, Bar $bar)
	{
		$this->foo = $foo;
		$this->bar = $bar;

		public function processFoo()
		{
			return $this->foo->process();
		}

		public function mergeBar()
		{
			if ($this->bar->getStatus() == 'merge-ready')
			{
				$this->bar->merge();
				return true;
			}
			return false;
		}
	}
}
