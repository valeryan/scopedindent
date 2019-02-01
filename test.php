<?php

/**
 * Created by .
 *
 * Copyright (C) 2018 .
 */
class TestClass
{
	public function functionName()
	{
		define('NS_MAIN', 'main');
		$pos = 0;
		$tag = 0;
		// Array indent detected incorrectly
		if (true) {
			$test = [
				'name' => 'aa',
				'icon' => 'fa-wrench',
				'stuff' => ['internal', 'array'],
				'array',
				($pos + 1),
				$tag,
				1,
				true,
				NS_MAIN
			];
		}
		// Chained indent detected incorrectly
		$this->bar()
			->baz();

		return $test;
	}

	private function bar()
	{
		return $this;
	}

	private function baz()
	{
		return $this;
	}
}
