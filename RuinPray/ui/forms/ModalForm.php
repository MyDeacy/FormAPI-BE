<?php

namespace RuinPray\ui\forms;

class ModalForm extends Window {

	public function __construct(Int $id){
		parent::__construct($id);

		$this->data = [
			"type" => "modal",
			"title" => "",
			"content" => "",
			"button1" => "",
			"button2" => ""
		];
	}

	public function setTitle(String $title){
		$this->data["title"] = $title;
	}

	public function setContent(String $text){
		$this->data["content"] = $text;
	}

	public function setButton1(String $text){
		$this->data["button1"] = $text;
	}
	public function setButton2(String $text){
		$this->data["button2"] = $text;
	}
}