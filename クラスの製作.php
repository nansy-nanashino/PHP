<?php

// User

class User {
  // property クラス内の変数
  public $name;

  // constructor　初期化関数　名前を受ける変数を設定
  public function __construct($name) {
    // publicの$nameへ渡ってきた設定された$nameの中身を代入
    $this->name = $name;
  }

  // method　クラス内いの関数
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name; // Tom
$bob->sayHi(); // hi, i am Bob!
