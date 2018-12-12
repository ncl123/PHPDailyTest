<?php 

$res = Add(5,7);
echo $res;

function Add($num1,$num2){
	$arr=array($num1,$num2);
	$res = array_sum($arr);
	return $res;
} 