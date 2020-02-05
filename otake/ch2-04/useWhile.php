<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
			$i=1;
			while($i<=3){
				echo $i."回目のwhileループです。<br>\n";
				$i++;
			}
			echo '$iは最終的に「'.$i."」になって、ループ処理から抜けました。";
		?>
    </body>
</html>