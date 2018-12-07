<?php 
header("content-type:text/html;charset=utf-8");

$array=array(3,32,321,2);

$res=PrintMinNumber($array);

echo "此数组中最小的数是 ： ".$res;

function PrintMinNumber($arr)
{
	for ($i=0; $i<count($arr); $i++) 
	{ 
		for($j=$i+1;$j<count($arr);$j++)
		{
			if(intval($arr[$i].''.$arr[$j])>intval($arr[$j].''.$arr[$i]))
			{	
				$tem=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$tem;
			}
		}
	}

	$num=implode($arr);

	return $num;
}