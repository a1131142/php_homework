<?php
setcookie("userID", "", time()-3000, "/");
echo "Cookie 已刪除,3秒後回登入頁面";
header("Refresh:3;url=login.php");
?>