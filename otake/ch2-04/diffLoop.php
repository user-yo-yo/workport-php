<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
			$i=4;

			echo "■初めから条件に合わないwhileループ<br>\n";
			while($i<=3){
				echo $i."回目のwhileループです<br>/n";
				$i++;
			}

			echo "<br>\n";

			echo "●初めから条件に合わないdo-whileループ<br>\n";
			do{
			echo $i."回目のdo whileループです。<br>\n";
			$i++;
			}while($i<=3);
		?>
    </body>
</html>