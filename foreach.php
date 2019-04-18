<?php

// 配列
// foreach
// 配列をループして取り出す
// $sales = [
//   "taguchi" => 200,
//   "fkoji" => 800,
//   "dotinstall" => 600,
// ];
//キーと値を順番にとりだす
// foreach ($sales as $key => $value) {
//   echo "($key) $value ";
// }

$colors = ["red", "blue", "pink"];
// キーがない場合
// foreach ($colors as $value) {
//   echo "$value ";
// }

// foreach if while for コロン構文

foreach ($colors as $value) :
  echo "$value ";
endforeach;

?>
<ul>
  <?php foreach ($colors as $value) : ?>
  <!-- liで囲みつつループで取り出せる -->
  <li><?php echo "$value "; ?></li>
  <?php endforeach; ?>
</ul>
