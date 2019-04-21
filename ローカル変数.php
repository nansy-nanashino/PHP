<?php

// 関数

$lang = "ruby";

function sayHi($name) {
// 関数内で設定されている変数のため外から変えることはできない
  $lang = "php";
  echo "hi! $name from $lang";
}

sayHi("Tom");
// function内の変数はその中でしか使えないため外から書き換えやダンプ等できない
var_dump($lang); // ruby
