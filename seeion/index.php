<?php

// session
// サーバー側
// 大きなデータ
// 改ざんされない
// 中身が見られない

session_start();

// sessionをセットできる
// php内で既に定義されている
// $_SESSION['username'] = "taguchi";

// echo $_SESSION['username'];

// sessionを削除できる
// unset($_SESSION['username']);

echo $_SESSION['username'];
