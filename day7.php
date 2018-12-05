<?php 

header("content-type:text/html;charset=utf-8");

$n=24;

$num=GetUglyNumber_Solution($n);

if($num===true){
	echo $n."： 丑数";
}else{
	echo $n."： 非丑数";
}

function GetUglyNumber_Solution($index)
{
	while ($index%2==0) {
		$index=$index/2;
	}
	while ($index%3==0) {
		$index=$index/3;
	}
	while ($index%5==0) {
		$index=$index/5;
	}

	if($index==1){
		return true;
	}else{
		return false;
	}
}