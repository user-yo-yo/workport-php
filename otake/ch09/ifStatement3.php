<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
    <body>
		<?php
			$num1=9;
			$num2=3;

			$operator="*";
//			$operator="/";
//			$operator="%";

			if($operator=="*"){
				echo $num1,$operator,$num2,'=',$num1*$num2;
			}else if($operator=="/"){
				echo $num1,$operator,$num2,'=',$num1/$num2;
			}else{
				echo "掛け算と割り算以外の計算は行えません。";
			}
		?>
    </body>
</html>