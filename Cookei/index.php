<?php

// Cookie

// phpで既に定義されている
// setcookie("username", "taguchi");
// setcookie("username", "taguchi", time()+60*60);

// Cookieを持たせる（他にアクセスしてもcookieは残る）
setcookie("username", "taguchi", time()-60*60);

// phpで既に定義されている
echo $_COOKIE['username'];
