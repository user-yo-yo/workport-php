<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<br>
		<?php
//		フォームからの入力データを取得
		$personal=$_POST["personal"];
		$hobby=$_POST["hobby"];

		echo $personal["name"]."(".$personal["age"]."歳)様、アンケートにご協力ありがとうございました。<br>\n";

//		趣味を繰り返し処理で全て表示
		echo "<br>■あなたの選んだ趣味<br>\n";
		foreach ($hobby as $val){
			echo $val."<br>\n";
		}
		?>
    </body>
</html>