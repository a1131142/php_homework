<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <title>登入頁面</title>
</head>
<body>

<h2>登入系統</h2>

<form action ="logincheck.php"method="post">
    帳號:<input type="text" name="uId"><br><br>
    密碼:<input type="password" name="uPWD"><br><br>
    <input type="submit" value="登入">

</form>

<p>角色的測試帳號：</p>
    <p>學生:student / 1234</p>
    <p>教師:teacher / 5678</p>
    <p>管理者:admin / 9101</p>
</body>
</html>