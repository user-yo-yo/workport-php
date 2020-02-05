<?php
//	POSTデータが存在するか確認
if(isset($_POST["number"])){
	$num=$_POST["number"];
	$msg=$num."の数字が好きなんですね！<br>\n";
	$count=$_POST["count"]+1;
}else{
	$num="";
	$msg="【はじめての入力ですね。】<br>\n";
	$count=1;
}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
    	■<?=$count ?>回目の入力<br>
		<form action="makeOneFileApp3.php" method="post">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="number" value="">
			<input type="hidden" name="count" value="<?=$count ?>">
			<input type="submit" value="入力">
		</form>
		<?=$msg ?>
		<br>
    </body>
</html>