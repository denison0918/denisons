    <html ng-app="admin">
	<head>
	<meta charset="utf-8">
			<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
		<link rel="stylesheet" media="only screen and (min-width:480px)" href="../../../css/registry/registry_d.css"  type="text/css" charset="utf-8"/>
<!-- 		<link rel="stylesheet" media="only screen and (-webkit-device-pixel-ratio: 1.5)" href="../../../css/registry/registry_m2.css" /> -->
		<link rel="stylesheet" media="only screen and (max-width:479px)" href="../../../css/registry/registry_m2.css" />	
	
	
			<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

	
		<script>
  
  var loadFile = function(event) {
	 
	var myURL = window.URL || window.webkitURL;
	 
    var output = document.getElementById('v-picture');
     
    var uptext = document.getElementById('uptext');
    
    uptext.style.zIndex = '-1';
    
    output.style.backgroundImage = "url('"+ myURL.createObjectURL(event.target.files[0])+"')";
    
    
  };

		
	angular.module('admin', ['list'])
	.controller('registerCtrl',['funeralList', '$http', '$scope', function(funeralList, $http, $scope){

	this.inCurr = '서울특별시';
	$scope.fName = '';

	this.cities = ['서울특별시','부산광역시','인천광역시','대구광역시','광주광역시','울산광역시','경기도','강원도','충청북도','충청남도','경상북도','경상남도','전라북도','전라남도','세종특별자치시','제주특별자치도'];

	this.cityToCode = {
		서울특별시: 1,
		부산광역시: 2,
		인천광역시: 3,
		대구광역시: 4,
		대전광역시: 5,
		광주광역시: 6,
		울산광역시: 7,
		세종특별자치시: 8,
		경기도: 9,
		강원도: 10,
		충청북도: 11,
		충청남도: 12,
		경상북도: 13,
		경상남도: 14,
		제주특별자치도: 15,
		전라북도: 16,
		전라남도: 17
	};

	$scope.fList = [];
	$scope.fListToCode = {};



	this.select = function select(outCurr){
		
		
		$scope.fList.splice(0,$scope.fList.length);
		var url = 'http://www.gieok.xyz/index.php/json/getfunerallistBiz/' + this.cityToCode[outCurr];

		var request = $http({
			    header : {'Content-Type' : 'charset=utf-8'},
			    method: "get",
				url: url
			});
			
			request.success(function (response) {
				
					$scope.fName = response.funerals[0].name;      // 첫번째 값 셋팅
					
			
					angular.forEach(response.funerals, function(element) {
										
						$scope.fList.push(element.name);	
						$scope.fListToCode[element.name] = element.id;

		 });
		 	
	

		});
	
		

	};
	
/*
	
	this.select = function select(outCurr){
		
		$scope.fList.splice(0,$scope.fList.length);
		var url = 'http://www.gieok.xyz/index.php/json/getfunerallist/' + this.cityToCode[outCurr];

		var request = $http({
			    header : {'Content-Type' : 'application/json; charset=UTF-8'},
			    method: "post",
				url: url,
				data : { 'funeral' : message }
			});
			
			request.success();
		 	
	

		});
	
		
		
	};
*/



	




	}]);
	

	angular.module('list', [])
	.factory('funeralList', function($http) {
		
	
		


		return{
			
		}
	});
	

		
		</script>
	
	
	
	
		
	
		
	
	</head>
	<body>
		<div class="header">
			
			<div>
				<h1 class="logo"></h1><span>품격있는 부고장</span>
			</div>
			
		</div>
		
		<div class="main" >
			<div class="content" ng-controller="registerCtrl as register" ng-init="register.select(register.inCurr)">
			
	
				<div class="top">
					<h1>GIEOK</h1>
					
				</div>
				
				<div class="middle">	
					
					
	<?php 	$attributes = array( 'id' => 'myform' ,'name'=> 'myform' , 'accept-charset'=>'utf-8');
		echo form_open_multipart('http://www.gieok.xyz/registry/complete',$attributes);
	?>
					<div class="img">
						<input type="file" class="picture" accept="image/*" onchange='loadFile(event)' name="userfile"><div class="v-picture" id="v-picture" ></div>
						<div class="picture-bg"></div>
						<p id="uptext">이미지업로드</p>
					</div>
					<div class="info">
						<ul>

							<li><input class="name" name="name" type="text" placeholder="고인명" required="required">
							<span>발인</span><input class="coffin" name="coffin" type="date" placeholder="2015-01-01" required="required"></li>
							<li><input class="birthday" name="birthday" type="date" value="1955-01-01" placeholder="生년월일 ex) 19700101" required="required"> ~ 
							<input class="deathday" name="deathday" type="date" value="2016-01-01" placeholder="死년월일 ex) 20160101" required="required"></li>
							



											
						</ul>
					

						<ol>
							<li>
								<select class="cities" ng-model="register.inCurr" ng-change="register.select(register.inCurr)" >
									<option ng-repeat="c in register.cities" >{{c}}</option>
								</select>
								<select class="funerals" ng-model="fName" >
									<option class="opt" ng-repeat="f in fList" ng-value="f" >{{f}}</option>
								</select>
							</li>
							<li><input type="text" placeholder="장례식장 실내위치 A층 B01호실" name="funeral_indoor" required="required"></li>
						</ol>
						</div>
					
					</div>
					
					<div class="bottom">
						
<!-- 							<input type="hidden" name="template" ng-value="fTemplate[fName]"> -->
						
							<input type="hidden" name="mourner" value="<?php echo $mourner ?>">
							<input type="hidden" name="phone" value="<?php echo $phone ?>">
							
							<input type="hidden" name="funeral" ng-value="fListToCode[fName]">
					
			<?php
	
			echo form_submit('mysubmit', '등록하기');
		?>	
			<p><font color="red">*모두 필수 입력해야 등록됩니다.</font></p>
					</div>
					
		</div>
			</form>	
		</div>

			
	</body>
</html>