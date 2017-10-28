<?php

namespace RuinPray\ui\elements;

class Dropdown extends BaseElement {

	const TYPE = "dropdown";

	public $options; /** @var array */
	public $defaultOptionIndex = 0;

<<<<<<< HEAD
	public function options(array $options) : Dropdown {
=======
	public function steps(array $options) : Dropdown {
>>>>>>> origin/master
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
<<<<<<< HEAD
			"text" => $this->text,
=======
>>>>>>> origin/master
			"options" => $this->options,
			"defaultOptionIndex" => $this->defaultOptionIndex
		];
	}
}
