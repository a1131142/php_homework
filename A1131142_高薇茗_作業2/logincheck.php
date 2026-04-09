<?php
session_start();
//啟動Session，這樣就可以在不同的頁面之間共享使用者的登入狀態

$fID="weimingkao";
$fPWD="12345678";

if(isset($_POST["uID"])&& isset($_POST["uPWD"])){

    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];

    if($fID==$uID && $fPWD==$uPWD){
        $_SESSION["camp_logged_in"] = true;
        //將使用者的登入狀態存儲在Session中，這樣在其他頁面就可以檢查這個Session變數來確定使用者是否已經登入
        $_SESSION["camp_user"] = $uID;
        
        header("Location: camp_form.php");
        exit;
    }else{
        header("Refresh:3;url=login.php");
        //header:轉址
        echo"登入失敗,正在返回登入頁面...";
        exit;
        }

}
?>
