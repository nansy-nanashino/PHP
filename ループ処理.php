<?php

// ループ処理
// while
// do ... while

$i = 100;
// 10までループされる
// while ($i < 10) {
//   echo $i;
//   $i++;
// }

// 最低でも一回は処理される
do {
  echo $i;
  $i++;
} while ($i < 10);
