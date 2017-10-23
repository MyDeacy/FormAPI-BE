<?php

namespace RuinPray\ui\forms;

class Window {

	protected $id;
	protected $data;

	public function __construct(Int $id){
		$this->id = $id;
	}

	public function encode(){
		$this->data = json_encode($this->data);
	}

	public function getId(){
		return $this->id;
	}
	
	public function getData(){
		return $this->data;
	}
}