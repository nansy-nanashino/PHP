<?php

// interface
// 継承するクラスにメソッドを必ず加えさせる
interface sayHi {
  // 関数内容はクラスで定義
  public function sayHi();
}

interface sayHello {
  public function sayHello();
}

// 複数のインターフェースをカンマ区切りで指定できる
class User implements sayHi, sayHello {
  public function sayHi() {
    echo "hi!";
  }
  public function sayHello() {
    echo "hello!";
  }
}
