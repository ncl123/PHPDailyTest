<?php 

$res=dyTwo("123");
if($res == 1){
 	var_dump(true);
}else{
	var_dump(false);
}
function dyTwo($str){
	$arr=array();
	$sum=0;
	for($i=0;$i<3;$i++){
		$arr[$i]=$str[$i];
		$data[$i]=$arr[$i]*$arr[$i]*$arr[$i];
	}
	// var_dump($data);
	for ($j=0; $j <count($data) ; $j++) { 
		$sum=$data[$j]+$sum;
	}
	if($sum==$str){
		return 1;
	}else{
		return 0;
	}
}