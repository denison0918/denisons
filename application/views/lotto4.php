
	
	<script>
		
		var lotto1 = [12,14,24,26,34,45];
		
		var	lotto2 = [12,14,24,26,34,41];
		var	lotto3 = [12,14,24,26,41,45];
		var	lotto4 = [12,14,24,34,41,45];
		var	lotto5 = [12,14,26,34,41,45];
		var	lotto6 = [12,24,26,34,41,45];
		var	lotto7 = [14,24,26,34,41,45];
		
		
		var array1 = [<?php echo implode(",", $fisrtTrackedNumbers) ?>];
		var array2 = [<?php echo implode(",", $secondTrackedNumbers) ?>];
		var array3 = [<?php echo implode(",", $thirdTrackedNumbers) ?>];
		var array4 = [<?php echo implode(",", $fourthTrackedNumbers) ?>];
		var array5 = [<?php echo implode(",", $fifthTrackedNumbers) ?>];
		var array6 = [<?php echo implode(",", $lastTrackedNumbers) ?>];
		
		

		console.log(lottoNumberOutput2(array1,array2,array3,array4,array5,array6));

/*		console.log(lottoNumberOutput2(array1,array2,array3));
		console.log(lottoNumberOutput2(array1,array2,array3));
		console.log(lottoNumberOutput2(array1,array2,array3));
		console.log(lottoNumberOutput2(array1,array2,array3));
	
*/	
		
		
		
		
		
		
		
		
		
		
		function lottoNumberOutput2(arr1,arr2,arr3,arr4,arr5,arr6){
		var fisrtTrackedNumbers = arr1;
		var secondTrackedNumbers = arr2;
		var thirdTrackedNumbers = arr3;
		var fourthTrackedNumbers = arr4;
		var fifthTrackedNumbers = arr5;
		var lastTrackedNumbers = arr6;
		var lottoNumbers = [];
		
		
		
		
		
		shuffle(fisrtTrackedNumbers);		
		var rand_keys = array_rand(fisrtTrackedNumbers,1);
		var rand_value = fisrtTrackedNumbers[rand_keys];
		lottoNumbers.push(fisrtTrackedNumbers[rand_keys]);
		
		secondTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		  }
		}, []);
		
		thirdTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		  }
		}, []);
		
		fourthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		  }
		}, []);
		
		fifthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		  }
		}, []);
		
		lastTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		
		shuffle(secondTrackedNumbers);		
		var rand_keys = array_rand(secondTrackedNumbers,1);
		var rand_value = secondTrackedNumbers[rand_keys];
		lottoNumbers.push(secondTrackedNumbers[rand_keys]);
		
		thirdTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		fourthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		fifthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		lastTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		shuffle(thirdTrackedNumbers);		
		var rand_keys = array_rand(thirdTrackedNumbers,1);
		var rand_value = thirdTrackedNumbers[rand_keys];
		lottoNumbers.push(thirdTrackedNumbers[rand_keys]);
		
		
		fourthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		fifthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		lastTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		
		shuffle(fourthTrackedNumbers);		
		var rand_keys = array_rand(fourthTrackedNumbers,1);
		var rand_value = fourthTrackedNumbers[rand_keys];
		lottoNumbers.push(fourthTrackedNumbers[rand_keys]);
		
		
		fifthTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		lastTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		
		shuffle(fifthTrackedNumbers);		
		var rand_keys = array_rand(fifthTrackedNumbers,1);
		var rand_value = fifthTrackedNumbers[rand_keys];
		lottoNumbers.push(fifthTrackedNumbers[rand_keys]);
		
		lastTrackedNumbers.reduceRight(function(acc, item, index, arr) {
		  if (arr[index] == rand_value) {
		    arr.splice(index, 1);
		   
		  }
		}, []);
		
		
		shuffle(lastTrackedNumbers);		
			rand_keys = array_rand(lastTrackedNumbers,1);
			rand_value = lastTrackedNumbers[rand_keys];
		lottoNumbers.push(lastTrackedNumbers[rand_keys]);

	
	//	lottoNumbers.sort(function(a, b){return a-b});
	
		return lottoNumbers;
		
	}
	

		

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

		

	//	var lnumber = lottoNumberOutput2(array1,array2,array3);

/*
		var is_same = (lotto1.length == lnumber.length) && lotto1.every(function(element, index) {
		    return element === lnumber[index]; 
		});
*/

//		shuffle(array2);
		
		

		var cnt = 1;
		while(cnt <= 5){
			
			
			var temp1 = array1.slice(0);
			var temp2 = array2.slice(0);  // array clone
			var temp3 = array3.slice(0);
			var temp4 = array4.slice(0);
			var temp5 = array5.slice(0);
			var temp6 = array6.slice(0);
			
		
			var lnumber = lottoNumberOutput2(array1,array2,array3,array4,array5,array6);
			
			console.log(lnumber);	
			
			is_same = (lotto1.length == lnumber.length) && lotto1.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 1 : " + cnt + ", " + lnumber); };
			is_same = (lotto2.length == lnumber.length) && lotto2.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			is_same = (lotto3.length == lnumber.length) && lotto3.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			is_same = (lotto4.length == lnumber.length) && lotto4.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			is_same = (lotto5.length == lnumber.length) && lotto5.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			is_same = (lotto6.length == lnumber.length) && lotto6.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			is_same = (lotto7.length == lnumber.length) && lotto7.every(function(element, index) {
		    return element === lnumber[index]; 
			});	
			if(is_same){console.log("GOOD 2 : " + cnt + ", " + lnumber); };
			
			
			array1 = temp1;
			array2 = temp2;
			array3 = temp3;
			array4 = temp4;
			array5 = temp5;
			array6 = temp6;
				
			cnt++;
			
		}
		
		console.log(cnt);

	
	
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
	<body>
	<div id="lotto"></div>
	</body>