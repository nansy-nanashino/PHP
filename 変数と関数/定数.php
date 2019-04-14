<?php

// 定数: 変更されない値につけるラベル

define("MY_EMAIL", "taguchi@dotinstall.com");

echo MY_EMAIL;
//定数のため書き換えようとするとエラーが出る
// MY_EMAIL = "hogehoge";

var_dump(__LINE__); // 10
var_dump(__FILE__);
var_dump(__DIR__);
