<?php

$username = '';
// 既に定義されているメソッド（post）
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $err = false;
  // usermaneが８文字以上だとエラーが出る
  if (strlen($username) > 8) {
    $err = true;
  }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Check username</title>
</head>
<body>
  <form action="" method="POST">
    <!-- ユーザの入力をそのまま使うわけにいかないためその為の処理（エスケープ処理） -->
    <input type="text" name="username" placeholder="user name" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="submit" value="Check!">
    <!-- エラーがtrueだった場合の処理 -->
    <?php if ($err) { echo "Too long!"; } ?>
  </form>
</body>
</html>
