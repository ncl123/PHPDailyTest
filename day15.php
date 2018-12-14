<?php 
header("content-type:text/html;charset=utf-8");
$str = "qqwwkksjdkgjsda";
$res = FirstNotRepeatingChar($str);

echo "第一个只出现一次的字符是 ： ".$res;
function FirstNotRepeatingChar($str) {
	// $arr[]="";
	for($i=0,$len=strlen($str); $i<$len; $i++){
		// print_r($str[$i]);exit;
		$num=substr_count($str,$str[$i]);
		if($num == 1){
			return $str[$i];
		}
	}
}