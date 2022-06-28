<?php
	
	function removeAllValuesMatching($arr, $arg){
    foreach ($arr as $key => $value){
        if ($arr[$key] == $arg){
            unset($arr[$key]);
        }
    }
    return $arr = array_values($arr);
	}


	//	print_r($weightedNumbers);




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
	
	
			$lotto1 = [12,14,24,26,34,45];
			$lotto2 = [12,14,24,26,34,41];
			$lotto3 = [12,14,24,26,41,45];
			$lotto4 = [12,14,24,34,41,45];
			$lotto5 = [12,14,26,34,41,45];
			$lotto6 = [12,24,26,34,41,45];
			$lotto7 = [14,24,26,34,41,45];
			
			$i = 0;
			
			
//			print_r(lottoNumberOutput($weightedNumbers, 6));
//			print_r($lotto1);

			$m = lottoNumberOutput($weightedNumbers, 6);


			
/*
			while ( !($lotto1 == $m) && !($lotto2 == $m) && !($lotto3 == $m) && !($lotto4 == $m) && !($lotto5 == $m) && !($lotto6 == $m) && !($lotto7 == $m) ) {
			    $i++; 
			    $m = lottoNumberOutput($weightedNumbers, 6);
			}
*/

			echo $i;


		
	//	echo implode(",", lottoNumberOutput($weightedNumbers, 6))."<br>";
	
		
	?>
	
	<script>
		var lotto1 = [12,14,24,26,34,45];
		
		var	lotto2 = [12,14,24,26,34,41];
		var	lotto3 = [12,14,24,26,41,45];
		var	lotto4 = [12,14,24,34,41,45];
		var	lotto5 = [12,14,26,34,41,45];
		var	lotto6 = [12,24,26,34,41,45];
		var	lotto7 = [14,24,26,34,41,45];
		
//		var array2 = [<?php echo implode(",", lottoNumberOutput($weightedNumbers, 6)) ?>];
		var array2 = [<?php echo implode(",", $weightedNumbers) ?>];
//		var array2 = [12,14,24,26,36,34,43,21,44,45];
		
		
		
		

	//	array2 = lottoNumberOutput(array2,6);
/*
		var i = 1;
		while(i < 5){
		var temp = array2.slice(0);  // clone array;
		shuffle(array2);
		console.log(lottoNumberOutput(array2,6));
		array2 = temp;
		i++;
		}
*/
		//console.log(array2);
		
		
		
	//	console.log(array_rand(array2,1));
	//	console.log(array2[array_rand(array2,1)]);

		


		var is_same = (lotto1.length == array2.length) && lotto1.every(function(element, index) {
		    return element === array2[index]; 
		});

		shuffle(array2);
		
		

		var cnt = 1;
		while(cnt <= 1500000){
			
			var temp = array2.slice(0);  // clone array;		
			//shuffle(array2);
			array2 = lottoNumberOutput(array2,6);
		
			
			is_same = (lotto1.length == array2.length) && lotto1.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 1 : " + cnt + ", " + array2); };
			is_same = (lotto2.length == array2.length) && lotto2.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
			is_same = (lotto3.length == array2.length) && lotto3.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
			is_same = (lotto4.length == array2.length) && lotto4.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
			is_same = (lotto5.length == array2.length) && lotto5.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
			is_same = (lotto6.length == array2.length) && lotto6.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
			is_same = (lotto7.length == array2.length) && lotto7.every(function(element, index) {
		    return element === array2[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + array2); };
				
			array2 = temp;
			cnt++;
			
		}
		console.log(cnt - 1);
	
	
	
//	var test = [];
//	test.push("Kiwi");
	
//	console.log(test[0]);
	
//	array2.forEach(removeAllValuesMatching(1));
	
//	console.log(array2);
	
	
		

	
	function lottoNumberOutput(arr, times){
		var weightedNumbers = arr;
		var weightedNumbers2 = arr;
		var lottoNumbers = [];
		var x = 1; 
		
		while(x <= times) {
		//	console.log(weightedNumbers.length);

		shuffle(weightedNumbers);		
		var rand_keys = array_rand(weightedNumbers,1);
		var rand_value = weightedNumbers[rand_keys];
		lottoNumbers.push(weightedNumbers[rand_keys]);
	//	console.log(weightedNumbers[rand_keys]);
	//	console.log("weightedNumbers[" + rand_keys + "] = " + weightedNumbers[rand_keys]);
	//	weightedNumbers = removeAllValuesMatching(weightedNumbers, weightedNumbers[rand_keys]);
/*
		weightedNumbers.forEach(function(arg,index,arr){
				if (arr[index] == weightedNumbers[rand_keys]){
	            arr.slice(index,1);	
        	}   	
		});
*/
	//	console.log(weightedNumbers);
		weightedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
	//		  console.log("item : " + item + ", weightedNumbers[" + rand_keys + "] :"+ weightedNumbers[rand_keys] + ", index : " + index + ", arr["+index+"] : " + arr[index] + ", rand_value : " + rand_value);
		    arr.splice(index, 1);
		   
		  }
		}, []);
		

		 x++;
		 
		}
		 
	//	console.log(weightedNumbers);
		
		lottoNumbers.sort(function(a, b){return a-b});
	
		return lottoNumbers;
		
	}
	
	function array_rand (array, num) { // eslint-disable-line camelcase
	  //       discuss at: http://locutus.io/php/array_rand/
	  //      original by: Waldo Malqui Silva (http://waldo.malqui.info)
	  // reimplemented by: Rafał Kukawski
	  //        example 1: array_rand( ['Kevin'], 1 )
	  //        returns 1: '0'
	  // By using Object.keys we support both, arrays and objects
	  // which phpjs wants to support
	  var keys = Object.keys(array)
	  if (typeof num === 'undefined' || num === null) {
	    num = 1
	  } else {
	    num = +num
	  }
	  if (isNaN(num) || num < 1 || num > keys.length) {
	    return null
	  }
	  // shuffle the array of keys
	  for (var i = keys.length - 1; i > 0; i--) {
	    var j = Math.floor(Math.random() * (i + 1)) // 0 ≤ j ≤ i
	    var tmp = keys[j]
	    keys[j] = keys[i]
	    keys[i] = tmp
	  }
	  return num === 1 ? keys[0] : keys.slice(0, num)
	}
	
	
	function shuffle(a) {
	    var j, x, i;
	    for (i = a.length; i; i--) {
	        j = Math.floor(Math.random() * i);
	        x = a[i - 1];
	        a[i - 1] = a[j];
	        a[j] = x;
	    }
	}
		
	</script>