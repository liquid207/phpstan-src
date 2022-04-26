<?php

namespace DynamicProperties;

class Bar {}

class Foo {
	public function doBar() {
		isset($this->dynamicProperty);
		empty($this->dynamicProperty);
		$this->dynamicProperty ?? 'test';

		$bar = new Bar();
		isset($bar->dynamicProperty);
		empty($bar->dynamicProperty);
		$bar->dynamicProperty ?? 'test';
	}
}
