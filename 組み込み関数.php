<?php

// 関数

$x = 5.6;
// echo ceil($x); // 6 切り上げ
// echo floor($x); // 5　切り捨て
// echo round($x); // 6　四捨五入
// echo rand(1, 10);　乱数生成（この場所１から１０）

$s1 = "hello";
$s2 = "ねこ";
// echo strlen($s1); // 5　文字数を変える
// echo mb_strlen($s2); // 2　文字数を数える（マルチバイト）

// 文字（string）文字（string）小数点（frot）
// printf("%s - %s - %.3f", $s1, $s2, $x);


$colors = ["red", "blue", "pink"];
echo count($colors);
echo implode("@", $colors);
