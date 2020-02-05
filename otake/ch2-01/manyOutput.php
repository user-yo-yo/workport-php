<?php
	$name="神田ハナコ";
	$height=154.6;
	$age=26;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
			echo "■PHPモードで出力<br> \n";
			echo $name,'さんの身長は',$height,"cmです。<br>";
			echo $name,'さんの年齢は',$age,"歳です。<br><br>";
		?>

		◆HTMLモードで出力1<br>
		<?php echo $name;?>さんの身長は<?php echo $height?>cmです。<br>
		年齢は<?php echo $age?>歳です。<br><br>

		◆HTMLモードで出力2(ショートタグ使用)<br>
		<?=$name ?>さんの身長は<?=$height ?>cmです。<br>
		年齢は<?=$age?>歳です。<br>
    </body>
</html>