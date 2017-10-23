<?php

namespace RuinPray\ui\elements;

abstract class BaseElement implements Element {

	const TYPE = "";
	public $text = "text!"; /** @var string */

	public function text(string $text) : BaseElement {
		$this->text = $text;
		return $this;
	}

	public function content() {
		return [];
	}

}
