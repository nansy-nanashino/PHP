<?php

// 配列
// key value
//キーと値で取り出せる
// $sales = array(
//   "taguchi" => 200,
//   "fkoji" => 800,
//   "dotinstall" => 600,
// );

// PHP5.4

$sales = [
  "taguchi" => 200,
  "fkoji" => 800,
  "dotinstall" => 600,
];

var_dump($sales["fkoji"]); // 800
$sales["fkoji"] = 900;
var_dump($sales["fkoji"]); // 900
// キーを設定しない場合０から始まる番号で割り当てられる
$colors = ["red", "blue", "pink"];
var_dump($colors[1]); // blue
