<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>趣味アンケート</title>
	</head>
    <body>
		<form action="receiveArrayFormData.php" method="post">
			名前：<input type="text" name="personal[name]" value=""><br>
			年齢：<input type="text" name="personal[age]" value=""><br>
			好きな趣味を選択してください(複数選択可能)。<br>
			読書：<input type="checkbox" name="hobby[]" value="読書"><br>
			料理：<input type="checkbox" name="hobby[]" value="料理"><br>
			映画鑑賞：<input type="checkbox" name="hobby[]" value="映画鑑賞"><br>
			楽器演奏：<input type="checkbox" name="hobby[]" value="楽器演奏"><br>
			プログラム：<input type="checkbox" name="hobby[]" value="プログラム"><br>
			その他：<input type="checkbox" name="hobby[]" value="その他"><br>
			<input type="submit" value="送信">
		</form>
    </body>
</html>