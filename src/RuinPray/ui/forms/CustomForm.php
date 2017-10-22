<?php

namespace RuinPray\ui\forms;

use RuinPray\ui\elements\Element;

class CustomForm extends Window {

	public function __construct(Int $id){
		parent::__construct($id);

		$this->data = [
			"type" => "custom_form",
			"title" => "",
			"content" => []
		];
	}

	public function setTitle(String $title){
		$this->data["title"] = $title;
	}

/*----- Elements -----*/

	public function addContent(Element $element) {
		$this->data["content"][] = $element->content();
	}

	/* public function content_Input(String $text, $placeholder = null, $default = ""){
		$this->data["content"][] = [
			"type" => "input",
			"text" => $text,
			"placeholder" => $placeholder,
			"default"   => ""
		];
	}*/

	/* public function content_Label(String $text){
		$this->data["content"][] = [
			"type" => "label",
			"text" => $text
		];
	}*/

	/* public function content_Slider(String $text, Int $min, Int $max, Int $step, $default = 0){
		$this->data["content"][] = [
			"type" => "slider",
			"text" => $text,
			"min"  => $min,
			"max"  => $max,
			"step" => $step,
			"defaultValue" => $default
		];
	}*/

	/*public function content_StepSlider(String $text, Array $steps, $default){
		$this->data["content"][] = [
			"type" => "step_slider",
			"text" => $text,
			"steps" => $steps,
			"defaultIndex" => $default
		];
	}*/
}
