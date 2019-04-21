<?php

// require: fatal error
// 読み込んだ時にエラーが出てると止まる

// require_once
// 読み込まれているかチェックし読み込まれていたらスキップする


// require "User.class.php";


// include: warning
// エラーが出るが止まらない

// include_once

// autoload
// クラスが未定義の時それを読み込む

spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();
