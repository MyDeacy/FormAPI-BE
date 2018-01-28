<?php

namespace RuinPray\ui\elements;

class Toggle extends BaseElement {

	const TYPE = "toggle";
	public $default = false;


	public function default(bool $default) : Toggle {
		$this->default = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"default" => $this->default
		];
	}
}
