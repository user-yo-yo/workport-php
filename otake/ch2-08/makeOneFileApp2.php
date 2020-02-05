<?php
//	POSTデータが存在するか確認
if(isset($_POST["num"])){
	$msg=$_POST["num"]."の数字が好きなんですね！<br>\n";
}else{
	$msg="【はじめての入力ですね。】<br>\n";
}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<form action="makeOneFileApp2.php" method="post">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="num" value="">
			<input type="submit" value="入力">
		</form>
		<?=$msg ?>
		<br>
    </body>
</html>