<?php
//引数に2つの数値を受け取り、その数値の足し算結果を戻り値として返します。
function calc($num1,$num2){
	return $num1+$num2;
}

//画面からの入力データを取得する。
$num1=$_POST['num1'];
$num2=$_POST['num2'];

//clac関数を呼び出し結果を受け取る
$result=calc($num1,$num2);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	■計算結果<br>
	<?=$num1."+".$num2."=".$result ?>
</body>
</html>
