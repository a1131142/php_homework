<?php
header("Content-Type: text/html; charset=UTF-8");


$nName     = $_POST["nName"] ?? "";
$nPassword = $_POST["nPassword"] ?? "";
$mGender   = $_POST["mGender"] ?? "";
$mInterest = $_POST["mInterest"] ?? [];
$nCity     = $_POST["nCity"] ?? "";
$mDate     = $_POST["mDate"] ?? "";
$mTime     = $_POST["mTime"] ?? "";
$mColor    = $_POST["mColor"] ?? "";
$mRange    = $_POST["mRange"] ?? "";
$mNumber   = $_POST["mNumber"] ?? "";
$mEmail    = $_POST["mEmail"] ?? "";
$mCode     = $_POST["mCode"] ?? "";
$comment   = $_POST["comment"] ?? "";
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>報名結果</title>
</head>
<body>

    <h2>入獄申請結果</h2>
    <hr>

    <?php
    echo "姓名：" . htmlspecialchars($nName) . "<br>";
    echo "身分證號：" . htmlspecialchars($nPassword) . "<br>";

    // 性別
    if ($mGender == "男") {
        echo "性別：男<br>";
    } elseif ($mGender == "女") {
        echo "性別：女<br>";
    } else {
        echo "性別：未填寫<br>";
    }

    // 易拖延類型
    echo "易拖延類型：";
    if (!empty($mInterest)) {
        foreach ($mInterest as $item) {
            echo htmlspecialchars($item) . " ";
        }
        echo "<br>";
    } else {
        echo "未選擇<br>";
    }

    echo "抓捕地點：" . htmlspecialchars($nCity) . "<br>";
    echo "預計入獄日期：" . htmlspecialchars($mDate) . "<br>";
    echo "預計入獄時間：" . htmlspecialchars($mTime) . "<br>";

    // 顏色顯示
    echo '您的代表色：<span style="color:' . htmlspecialchars($mColor) . ';">這個顏色</span> ';
    echo htmlspecialchars($mColor) . "<br>";

    echo "作品完成度：" . htmlspecialchars($mRange) . "%<br>";
    echo "目前未完成作品數：" . htmlspecialchars($mNumber) . "<br>";
    echo "Email：" . htmlspecialchars($mEmail) . "<br>";
    echo "隱藏代碼：" . htmlspecialchars($mCode) . "<br>";

    echo "自白書：<br>";
    echo nl2br(htmlspecialchars($comment));
    ?>

    <hr>
    <a href="camp.php">回首頁</a>

</body>
</html>
