<?php

// 文字列
// "" 特殊文字(\n, \t) 変数
// ''

// $name = "taguchi";

// 改行される
// $s1 = "hello $name!\nhello again!";


// {}で閉じることによって明示的に変数を表す
// $s1 = "hello {$name}!\nhello again!";
// $s1 = "hello ${name}!\nhello again!";
// $s2 = 'hello $name!\nhello again!';
// var_dump($s1);
// var_dump($s2);

// 連結 .
$s = "hello " . "world";　//文字が連結される
var_dump($s);　//変数の内容を出す
