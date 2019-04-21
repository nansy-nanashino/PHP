<?php

// 例外処理

// function div($a, $b) {
//   echo $a / $b;
// }

function div($a, $b) {
  try {
    if ($b === 0) {
      // Exceptionというクラスがphpないで既に定義されている
      throw new Exception("cannot divide by 0!");
    }
    echo $a / $b;
  }
  Exception引数を入れる変数を設定
  // throwの処理を$eへ代入する
  catch (Exception $e) {
    // phpないで既に定義されているgetMeseageを使う
    echo $e->getMessage();
  }
}

div(7, 2);
// ０で割れないというエラーが出る
div(5, 0);
