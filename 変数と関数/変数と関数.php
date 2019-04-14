<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
<?php
//関数の作成また引数に変数を入れる
//変数二つをいれをのけっかを元の場所に返す
function check($kamoku, $tensuu){
  print $kamoku.'の結果:';
  if ($tensuu > 75){
    print '合格です';
  }else{
    print '不合格です';
  }
  print '(点数:'.$tensuu.')';
  print '<br />';
}

//変数の作成
$sugaku = 84;
$eigo = 62;
$kokugo = 78;

//作った関数に代入
//変数($kamoku, $tensuu)に代入
check('数学', $sugaku);
check('英語', $eigo);
check('国語', $kokugo);
?>
</p>

</body>
</html>