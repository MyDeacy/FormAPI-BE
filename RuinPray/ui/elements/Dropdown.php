<?php

namespace RuinPray\ui\elements;

class Dropdown extends BaseElement {

	const TYPE = "dropdown";

	public $options; /** @var array */
	public $defaultOptionIndex = 0;

	public function steps(array $options) : Dropdown {
		$this->steps = $steps;
		return $this;
	}

	public function defaultOptionIndex($default) : Dropdown {
		$this->defaultOptionIndex = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"options" => $this->steps,
			"defaultOptionIndex" => $this->defaultOptionIndex
		];
	}
}
