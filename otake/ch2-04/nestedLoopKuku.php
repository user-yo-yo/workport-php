<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
$num = mt_rand(1,10);

//			ランダム数値が10か判断
if($num==10){
	echo "■九九表<br>\n";
}else{
	echo "■九九表(".$num.")の段の1つ前まで表示します。<br>\n";
}

//			二重ループで九九表を表示する
for($i=1; $i<=9; $i++){
	echo $i."の段：";
	for($j=1; $j<=9; $j++){
		//					ランダム数値と外側のループ回数が同じかチェック
		if($i==$num){
			echo "この段を表示せず、外側のループを抜けました。";
			break 2;
		}
		echo $i*$j." ";
	}
	echo"<br>\n";
}
?>
</body>
</html>
