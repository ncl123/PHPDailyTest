<?php 

header("content-type:text/html;charset=utf-8");

$res=LastRemaining_Solution(10,4);
echo "编号是  ".$res."  的小朋友会得到这份礼品";

function LastRemaining_Solution($n, $m)
{
	for($i=0;$i<$n;$i++)
	{
		$arr[]=$i;//将小朋友的编号放到数组中
	}

	while(count($arr)>1)// 数组中的个数大于1 就循环，否则退出循环
	{
		for($i=0;$i<$m;$i++)// 循环判断  次数等于要淘汰的数时，将该小朋友拿出
		{
			array_push($arr,array_shift($arr));
		}
		array_pop($arr);
	}

	return $arr[0];
}