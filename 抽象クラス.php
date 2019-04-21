<?php

// 抽象クラス
// 継承させる前提のクラス

abstract class BaseUser {
  public $name;
  // 継承したクラスに絶対に入れなければならない関数（関数入力漏れ防止）
  abstract public function sayHi();
}
// プロパティやメソッドの数や種類は同じにしなければならない
class User extends BaseUser {
  public function sayHi() {
    echo "hello from User";
  }
}
