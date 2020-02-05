<?php
$score=$_POST['score'];

//	入力点数をチェックします
if($score<0 || $score>100){
	$msg="0~100の間で点数を入力してください。";
}else{
	if($score >= 80){
		if($score == 100){
			$msg="あなたは、満点で合格しました。<br>\n";
		}else{
			$msg="あなたは、合格しました。<br>\n";
		}

//		↓「.」を付けないと、「おめでとうございます！」だけ出力される。
		$msg.="おめでとうございます！";

	}else{
		$msg="80点未満は不合格です…<br> \n 次の機会に向けて頑張りましょう";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?=$msg?>
</body>
</html>
