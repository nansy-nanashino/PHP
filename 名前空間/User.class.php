<?php

// 名前被りを防ぐ
// 先頭に書くようにする
namespace Dotinstall\Lib;

class User {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}
