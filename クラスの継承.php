<?php

// 継承

class User {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  // finalをつけることで継承できなくすることもできる
  final public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

// extendsクラス名にすることでクラスの継承ができる
// （親クラスのメソッドと子クラスのメソッド両方使える）
class AdminUser extends User {
  public function sayHello() {
    echo "hello from Admin!";
  }
  // 親クラスのメソッドを上書きすることもできる
  // override
  public function sayHi() {
    echo "[admin] hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name;
$tom->sayHi();
$steve->sayHi();
// $steve->sayHello();
