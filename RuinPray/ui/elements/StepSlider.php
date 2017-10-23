<?php

namespace RuinPray\ui\elements;

class StepSlider extends BaseElement {

	const TYPE = "step_slider";

	public $steps; /** @var array */
	public $defaultIndex = 0;

	public function steps(array $steps) : StepSlider {
		$this->steps = $steps;
		return $this;
	}

	public function defaultIndex($default) : StepSlider {
		$this->defaultIndex = $default;
		return $this;
	}

	public function content() : array {
		return [
			"type" => self::TYPE,
			"text" => $this->text,
			"steps" => $this->steps,
			"defaultIndex" => $this->defaultIndex
		];
	}
}
