<?php

namespace RuinPray\ui\elements;

class Dropdown extends BaseElement {

	const TYPE = "dropdown";

	public $options; /** @var array */
	public $defaultOptionIndex = 0;

	public function options(array $options) : Dropdown {
		$this->options = $options;
		return $this;
	}

	public function defaultOptionIndex($default) : Dropdown {
		$this->defaultOptionIndex = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"options" => $this->options,
			"defaultOptionIndex" => $this->defaultOptionIndex
		];
	}
}
