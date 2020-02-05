<?php
	$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png",
	"06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png","bg.png");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>カード遊び</title>
	</head>
    <body>
		<p>High&amp;Lowゲーム</p>
		<hr>

	<form action="gameResult.php" method="post">
		<?php
			$stack=mt_rand(0,13);
			echo '<img src="../cards/',$cards[$stack],'">';
			echo '<img src="../cards/bg.png">,<br><br>';

			echo '<input type="hidden" name="stack" value="',$stack,'">';
			echo '<input type="radio" name="high" value="High?">','High';
			echo '<input type="radio" name="low" value="Low?">','Low<br>';
			echo '<input type="submit" value="決定">';
		?>
	</form>

    </body>
</html>