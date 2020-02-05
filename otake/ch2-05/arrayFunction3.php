<?php
//食べ物データ
	$foods=array("カレーライス","ラーメン","焼肉","寿司","ハンバーグ");

	if(in_array($_POST['food'],$foods)){
		$msg="あなたの好きな「".$_POST['food']."」は、人気料理のTOP5にはいっています。";
	}else{
		$msg="あなたの好きな「".$_POST['food']."」は、人気料理のTOP5にはいっていません。";
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?=$msg ?>
    </body>
</html>