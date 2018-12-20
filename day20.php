<?php 
$x = 1;
$y = 1;
$res = CountSteps($x,$y);
function CountSteps($x,$y){
	for($i=0;$i<=$x;$i++){
		for($j=0;$j<=$y;$j++){
			$data[$i][$j] = 0;
		}
	}

	for($i=1;$i<=$x;$i++){
		$data[$i][0] = 1;
	}

	for($j=1;$j<=$y;$j++){
		$data[0][$j] = 1;
	}

	for($i=1;$i<=$x;$i++){
		for($j=1;$j<=$y;$j++){
			$data[$i][$j] = $data[$i-1][$j]+$data[$i][$j-1];
		}
	}

	print_r($data[$x][$y]);
}