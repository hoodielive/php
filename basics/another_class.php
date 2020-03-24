<?php

class greeting {
  // properties
  public $str = "Hello";

  // methods
  function show_greeting() {
    return $this->str;
  }
}

$message = new greeting;
var_dump($message);
