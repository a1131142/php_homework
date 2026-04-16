<?php
session_start();

$student_id = "student";
$student_pwd = "1234";

$teacher_id = "teacher";
$teacher_pwd = "5678";

$admin_id = "admin";
$admin_pwd = "9101";

$uId = $_POST["uId"];
$uPWD = $_POST["uPWD"];

if($uId == $student_id && $uPWD == $student_pwd){
    $_SESSION["login"] = "Yes";
    $_SESSION["role"] = "student";
    $_SESSION["uId"] = $uId;

    setcookie("userID",$uId,time()+3000,"/");
    header("Refresh:3;url=student.php");
    exit;
}
else if ($uId == $teacher_id && $uPWD == $teacher_pwd){
    $_SESSION["login"] = "Yes";
    $_SESSION["role"] = "teacher";
    $_SESSION["uId"] = $uId;

    setcookie("userID",$uId,time()+3000,"/");
    header("Refresh:3;url=teacher.php");
    exit;
}
else if ($uId == $admin_id && $uPWD == $admin_pwd) {
    $_SESSION["login"] = "Yes";
    $_SESSION["role"] = "admin";
    $_SESSION["uId"] = $uId;

    setcookie("userID", $uId, time()+3000, "/");
    header("Refresh:3;url=admin.php");
    exit;
}
else {
    echo "登入失敗3秒後回登入頁面";
    header("Refresh:3;url=login.php");
}
?>
