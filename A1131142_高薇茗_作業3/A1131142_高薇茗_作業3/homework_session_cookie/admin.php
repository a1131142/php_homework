<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Yes") {
    header("Location: login.php");
    exit;
}

if ($_SESSION["role"] != "admin") {
    echo "沒有權限";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者頁面</title>
</head>
<body>
    
    <p>帳號：<?php echo $_SESSION["uId"]; ?></p>

    <?php
    if (isset($_COOKIE["userID"])) {
        echo "<p>Cookie紀錄的ID:".$_COOKIE["userID"]."</p>";
    }
    ?>

    <a href="logout.php">登出</a><br>
    <a href="delete_cookie.php">刪除 Cookie</a>
</body>
</html>