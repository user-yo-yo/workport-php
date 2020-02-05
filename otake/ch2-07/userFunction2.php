<?php
//clac関数を呼び出し結果を受け取る
$result=calc($_POST["num1"],$_POST["num2"],$_POST["operator"]);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		■計算結果<br>
		<?=$_POST['num1'].$_POST['operator'].$_POST['num2']."=".$result ?>
    </body>
</html>

<?php
//引数に2つの数値と計算式を受け取り、計算式に応じた
//計算結果を戻り値として返します。
function calc($num1,$num2,$operator){
	if($operator=="+"){
		return $num1 + $num2;
	}else{
		return  $num1 - $num2;
	}
}
?>