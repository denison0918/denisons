<?php
	
	function removeAllValuesMatching($arr, $arg){
    foreach ($arr as $key => $value){
        if ($arr[$key] == $arg){
            unset($arr[$key]);
        }
    }
    return $arr = array_values($arr);
}





	function lottoNumberOutput($weightedNumbers, $times){
		
		$lottoNumbers = array();
		$x = 1; 
		
		while($x <= $times) {
		shuffle($weightedNumbers);		
		$rand_keys = array_rand($weightedNumbers,1);
		array_push($lottoNumbers,$weightedNumbers[$rand_keys]);
		$weightedNumbers = removeAllValuesMatching($weightedNumbers, $weightedNumbers[$rand_keys]);
		 $x++;
		}
		sort($lottoNumbers);
		return $lottoNumbers;
		
	}
	//	print_r(lottoNumberOutput($weightedNumbers, 6));
		
		echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
		echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
		echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
		echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
		echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
	
		
	?>