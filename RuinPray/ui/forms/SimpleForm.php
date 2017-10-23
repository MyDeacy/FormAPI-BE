<?php

namespace RuinPray\ui\forms;

class SimpleForm extends Window {

	public function __construct(Int $id){
		parent::__construct($id);
        
		$this->data = [
			"type" => "form",
			"title" => "",
			"content" => "",
			"buttons" => []
		];
	}

	public function setTitle(String $title){
		$this->data["title"] = $title;
	}

	public function setContent(String $text){
		$this->data["content"] = $text;
	}

	public function addButton(String $text, $image = null){
		if($image !== null){
			$this->data["buttons"][] = [
				"text" => $text,
				"image" => [
					"type" => "url",
					"data" => $image
				]
			];
		}else{
			$this->data["buttons"][] = [
				"text" => $text
			];
		}
	}
}