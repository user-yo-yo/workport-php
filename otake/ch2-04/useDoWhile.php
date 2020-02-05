<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
			$i=1;
			do{
				echo $i."回目のdo-whileループです。<br>\n";
				$i++;
			}while($i<=3);
			echo "--------------------<br>\n";
			echo '$iは最終的に「' .$i. '」になって、ループ処理から抜けました。';
		?>
    </body>
</html>