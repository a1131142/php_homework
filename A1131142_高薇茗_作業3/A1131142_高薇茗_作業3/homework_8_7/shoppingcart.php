<?php
function each_array(&$array){
    $res = array();
    $key = key($array);

    if($key !== null){
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    }else{
        $res = false;
    }

    return $res;
}

$total = 0;
$flag = true;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>購物車</title>
</head>
<body>

<h2>購物車內容</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr bgcolor="#cccccc">
        <th>功能</th>
        <th>商品代號</th>
        <th>商品名稱</th>
        <th>價格</th>
        <th>數量</th>
    </tr>

<?php
while(list($arr, $value) = each_array($_COOKIE)){
    if(isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])){

        if($flag){
            $flag = false;
            $color = "#FF99CC";
        }else{
            $flag = true;
            $color = "#99FFCC";
        }

        echo "<tr bgcolor='".$color."'>";
        echo "<td><a href='delete.php?id=".$arr."'>刪除</a></td>";

        $price = 0;
        $quantity = 0;

        while(list($name, $value) = each_array($_COOKIE[$arr])){
            echo "<td>".$value."</td>";

            if($name == "Price"){
                $price = $value;
            }

            if($name == "Quantity"){
                $quantity = $value;
            }
        }

        $total += $price * $quantity;
        echo "</tr>";
    }
}
?>

    <tr>
        <td colspan="5" align="right">總金額 = NT$<?php echo $total; ?>元</td>
    </tr>
</table>

<br>
<a href="catalog.php">商品目錄</a>

</body>
</html>