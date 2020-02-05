<?php
	$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png",
	"06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
	$high=$_POST['high'];
	$low=$_POST['low'];
	$iStack=$_POST['stack'];
	$hand=mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>ゲーム結果</title>
	</head>
    <body>
    	<?php

    		echo "場のカード「",$iStack,"」";
    		echo '<img src="../cards/',$cards[$iStack],'">';
    		echo "あなたのカード「",$hand,"」";
    		echo '<img src="../cards/',$cards[$hand],'">,<br><br><br>';

//「High」を選択
    		if($high != null && $hand>$iStack){
    			echo 'You Win!';
    		}else if($high != null && $hand==$iStack){
    			echo 'Draw';
    		}else if($high != null && $hand<$iStack){
    			echo 'You Lose…';
    		}
//「Low」を選択
    		if($low != null && $hand>$iStack){
    			echo 'You Win!';
    		}else if($low != null && $hand==$iStack){
    			echo 'Draw';
    		}else if($low != null && $hand<$iStack){
    			echo 'You Lose…';
    		}
    	?>
    </body>
</html>