<?php

//  関数

//  関数名　関数名に初期値を設定することで
//  引数がなくても初期値がはいる（通常入ってない）
function sayHi($name = "taguchi") {
  // echo "hi! " . $name;
  return "hi! " . $name;
}

// sayHi();

// 関数の呼び出し、引数を入れる
// sayHi("Tom");
// sayHi("Bob");
// sayHi();

// 初期値の引数が処理されそれが返ってくる
$s = sayHi();
var_dump($s);
