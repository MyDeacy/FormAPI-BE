<?php

namespace RuinPray\ui\elements;

class Input extends BaseElement {

	const TYPE = "input";

	public $placeholder = null;
	public $default = null;

	public function placeholder(string $placeholder) : Input {
		$this->placeholder = $placeholder;
		return $this;
	}

	public function default(string $default) : Input {
		$this->default = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"placeholder" => $this->placeholder,
			"default" => $this->default ?? ""
		];
	}
}
