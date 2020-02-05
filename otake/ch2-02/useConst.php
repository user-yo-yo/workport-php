<?php
	define('PI',3.14);
	$radius=$_POST['radius'];
	$area=$radius*$radius*PI;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		半径「<?=$radius?>」の円の面積は「<?=$area?>」です。
    </body>
</html>