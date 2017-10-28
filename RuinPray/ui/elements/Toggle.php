<?php

namespace RuinPray\ui\elements;

class Toggle extends BaseElement {

	const TYPE = "toggle";
	public $defaultValue = false;


	public function defaultValue(string $default) : Toggle {
		$this->defaultValue = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"defaultValue" => $this->defaultValue
		];
	}
}
