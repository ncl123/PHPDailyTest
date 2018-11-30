<?php 


// 递归
function drFn($n){
	if($n==1 || $n==2){
		return 1;
	}

	return drFn($n-1)+drFn($n-2);
}

echo drFn(12);


// 非递归
function defr($n){
	$array[2]=$array[1]=1;

	for($i=3;$i<$n+1;$i++){
		$array[$i]=$array[$i-1]+$array[$i-2];
	}

	return $array;
}

var_dump(defr(12));


