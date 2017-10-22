<?php

namespace RuinPray\ui\elements;

class Input extends BaseElement {

  const TYPE = "input"
  public $placeholder = null;
  public $default = null;

  public function placeholder(string $placeholder) {
    $this->placeholder = $placeholder;
    return $this;
  }

  public function default(string $default) {
    $this->default = $default;
    return $this;
  }

  public function content() {
    return [
      "type" => self::TYPE,
      "text" => $this->text,
      "placeholder" => $this->placeholder,
      "default" => $this->default ?? ""
    ];
  }
}
