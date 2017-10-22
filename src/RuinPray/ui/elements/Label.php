<?php

namespace RuinPray\ui\elements;

class Label extends BaseElement {

  const TYPE = "label";

  public function content() {
    return [
      "type" => self::TYPE,
      "text" => $this->text
    ];
  }
}
