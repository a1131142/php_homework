<?php
session_start();

if(isset($_POST["Item"])){
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];
    $_SESSION["ID"] = $id;

    switch(strtoupper($id)){
        case "P001":
            $_SESSION["Name"] = "塗鴉";
            $_SESSION["Price"] = 500;
            break;

        case "P002":
            $_SESSION["Name"] = "頭貼";
            $_SESSION["Price"] = 800;
            break;

        case "P003":
            $_SESSION["Name"] = "全身";
            $_SESSION["Price"] = 1800;
            break;
    }

    header("Location: savecart.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品目錄</title>
</head>
<body>
    <h2>開放委託項目</h2>

    <form method="post" action="">
        選擇商品：
        <select name="Item">
            <option value="P001">塗鴉$500</option>
            <option value="P002">頭貼$800</option>
            <option value="P003">全身$1800</option>
        </select>

        數量：
        <input type="text" name="Quantity" value="1" size="3">

        <input type="submit" value="加入購物車">
    </form>

    <br>
    <a href="shoppingcart.php">查看購物車</a>
</body>
</html>