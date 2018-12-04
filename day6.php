<?php 

$res=calFn(13001,13012);
echo $res;

function calFn($n,$m)
{
	$sum=0;// 1出现的次数，默认值为0
	for($i=$n;$i<=$m;$i++)
	{
		$sum+=substr_count($i,1);
	}

	return $sum;
}