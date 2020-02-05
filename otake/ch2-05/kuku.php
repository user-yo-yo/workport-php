<?php
for($i=1; $i<=9; $i++){
	for($j=1; $j<=9; $j++){
		$kuku[$i][$j] = $i*$j;
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<pre>
<?php
for($i=1; $i<=9; $i++){
	echo $i."の段:\t";
	for($j=1; $j<=9; $j++){
		echo $kuku[$i][$j]."\t\t";
	}
	echo "<br>";
}
?>
		</pre>
</body>
</html>
