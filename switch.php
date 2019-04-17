<?php

// switch 条件分岐

$signal = "green";

//比較分岐させるための変数を入れる
switch ($signal) {
  case "red":
    echo "stop!";
    break;
// 並べることで青または緑となる
  case "blue":
  case "green":
    echo "go!";
    break;
  case "yellow":
    echo "caution!";
    break;
  default:
    echo "wrong signal";
    break;
}
