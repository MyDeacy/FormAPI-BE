<?php

namespace RuinPray\ui\elements;

class Slider extends BaseElement {

	const TYPE = "slider";

	public $min = 0;
	public $max = 10:

	public function min(int $min) : Slider {
		$this->min = $min;
		return $this;
	}

	public function max(int $max) : Slider {
		$this->max = $max;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"min" => $this->min,
			"max" => $this->max
		];
	}
}
