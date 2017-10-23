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

}
