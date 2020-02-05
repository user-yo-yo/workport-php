<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<form action="makeOneFileApp1.php" method="post">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="num" value="">
			<input type="submit" value="入力">
		</form>
		<?php echo $_POST["num"]."の数字が好きなんですねwww <br>\n";?>
		<br>
    </body>
</html>