<?php
//	引数に2つの数値と計算式を受け取り、計算式に応じた
//	計算結果を戻り値として返します。
	function calc($num1,$num2,$operator){
		if($operator=="+"){
			return $num1+$num2;
		}else if($operator=="-"){
			return $num1-$num2;
		}else if($operator=="*"){
			return $num1*$num2;
		}else if($operator=="/"){
			return $num1/$num2;
		}else if($operator=="%"){
			return $num1%$num2;
		}
	}
?>