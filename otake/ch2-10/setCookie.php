<?php
//	クッキーにフォームからの入力情報を設定(有効期限3分)
	setcookie("id",$_POST["id"],time()+180);
	setcookie("pass",$_POST["pass"],time()+180);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		ログインしました。
    </body>
</html>