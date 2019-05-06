<?php

// static

class User {
  public $name;
  public static $count = 0;
  public function __construct($name) {
    $this->name = $name;
    //クラス内からそのクラス（今いるクラス）を指定する
    self::$count++;
  }
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
  public static function getMessage() {
    echo "hello from User class!";
  }
}
// インスタンス化せずにメソッドを直接呼び出す
// User::getMessage();

$tom = new User("Tom");
$bob = new User("Bob");

// インスタンス化せずに直接プロパティ呼び出す
echo User::$count; // 2
