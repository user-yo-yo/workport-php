<?php
//関数定義ファイルの取り込み
require_once 'function.php';

//入力データの取得
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operator=$_POST['operator'];

//calc関数を呼び出し結果を受け取る
$result=calc($num1,$num2,$operator);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
■計算結果
<br>
<?=$num1.$operator.$num2."=".$result ?>
</body>
</html>
