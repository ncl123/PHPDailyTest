<?php 
header("content-type:text/html;charset=utf-8");

$res=dyOne("Have you ever gone shopping and");

echo "第一次出现三位的是"."$res";
function dyOne($str){
	$res='';
	$arr=array();

	for($i=0,$len=strlen($str);$i<$len;$i++){
		if(isset($arr[$str[$i]])){
			$arr[$str[$i]]++;
		}else{
			$arr[$str[$i]]=1;
		}
		if($arr[$str[$i]]==3){
			return $str[$i];
			break;
		}
	}

}