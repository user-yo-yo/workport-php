<?php
//クッキー情報の存在確認
if(isset($_COOKIE["id"])){
//	あればクッキー情報を取得し変数に代入
	$beforeId=$_COOKIE["id"];
	$beforePass=$_COOKIE["pass"];
}else{
//	ない場合は変数を空文字設定
	$beforeId="";
	$beforePass="";
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<form action="setCookie.php" method="post">
			ID:<input type="text" name="id" value="<?=$beforeId ?>"><br>
			PASS:<input type="text" name="pass" value="<?=$beforePass ?>"><br>
			<input type="submit" value="ログイン">
		</form>
    </body>
</html>