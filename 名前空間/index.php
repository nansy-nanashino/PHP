<?php

// 名前空間
// 名前の呼び出し

// 名前はこれで管理すると定義
require "User.class.php";


// use Dotinstall\Lib as Lib;
use Dotinstall\Lib;

$bob = new Lib\User("Bob");
$bob->sayHi();
