<?php 

$res=Sum_Solution(10);

echo $res;

function Sum_Solution($n){

	$s=$n;

	$n !== 1 && $s=$n+Sum_Solution($n-1);

	return $s;
}