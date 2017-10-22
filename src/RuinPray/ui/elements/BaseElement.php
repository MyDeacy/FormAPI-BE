<?php

namespace RuinPray\ui\elements;

abstract class BaseElement implements {

  const TYPE = "";
  public $text = "text!"; /** @var string */

  public function text($text) {
    $this->text = $text;
    return $this;
  }

  public function content() {
    return [];
  }

}
