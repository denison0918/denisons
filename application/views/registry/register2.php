    <html ng-app="admin">

	<style type="text/css" media="screen">

	html{
		
	}
	
	html, body, div, p, h1, h2, h3, ul, ol, li, label{
		margin: 0;
		padding: 0;
		border: 0;

	} 
		
	ul li, ol li{
		list-style: none;
	}
	
	a{
		text-decoration: none;
	}
	
	input[type="text"]{
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		padding: 0;
		box-shadow: 0px;
		text-decoration: none;
		text-indent: 10px;
		border: 1px solid rgba(0,0,0,0.15);
		color: gray;
	}
	

			
	body{
		margin: 0;
		width: 100%;
		height: 100%;
		
	}	
	
	.header{
		width: 100%;
		height: 75px;
		background-color: #fff;
		z-index: 1000;
/* 		box-shadow: 0px 0px 8px black; */
		border-bottom-color: #000000;
		border-bottom: 1px solid rgba(0,0,0,0.25);
		
	}
	
	.header .logo{
	position: relative;
	top: 5px;
	margin: 0 0 0 165px;
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 62px;
/*	width: 53px; */
	width: 7%;
	height: 23px;
	padding: 0;
	border-radius: 12px;
	line-height: 62px;
	background-color: #fff;
	color: rgba(0,0,0,0.65);
	text-align: right;
	text-shadow:  0px 0px 1px white;
	}

	.main{
	width: 480px;
/* 	height: 515px; */
	height: 560px;
	position: relative;
	top:100px;	
	margin: 0 auto;
	display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    border-radius: 5px;
	background-color: white;
    border: 1px solid rgba(0,0,0,0.15);

	}
	


	 .content{
		
		width: 480px;
/* 		height: 515px; */
		height: 560px;

	}
	
/*
	.content h1{
		text-align: center;
		font-family: sans-serif;
		width: 100%;


	}
*/




	.content .top{
		width: 480px;
		height: 90px;	
		


	}
	
	.content .top h1{
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		position: relative;
		top:35px;
	}
	
	.content .middle{
		width: 480px;
	/* 		height: 350px;	 */
		height: 382px;

	}
	
	.content .middle .img{
		width: 307px;
		height: 172px;
		margin: 0 auto;
		text-align: center;
		border-radius: 5px;

	}

	
	
	.img .picture{				
		margin-top: 12px;
		width: 116px;
		height: 143px;
		margin-left: -57px;
		position: absolute;

		z-index: 2;	
		filter: alpha(opacity=0);
		opacity: 0;

	}
	

	
.picture + .v-picture {					/*  INPUT + DIV -> 앨범사진 영역 */
  border: 1px solid #CCC;
  border-radius: 3px;
  text-align: left;
  margin: 0;
  top: 101px;
  left: 182px;
  position: absolute;
  width: 116px;
  height: 143px;
  background-position: left top;
  background-repeat: no-repeat;
  background-size: 116px 143px;

}
	
.picture + .v-picture:hover {
	background-color: rgba(0,0,0,0.15);
	}

	
	.img .picture:hover{
		z-index: 4;
	}
	
	.img .picture-bg{
		position: absolute;
		background-image: url(/Images/Content/template.png);
		  background-position: left top;
		  background-repeat: no-repeat;
		  background-size: 307px 172px;
		width: 307px;
		height: 172px;
		z-index: 3;
		border-radius: 5px;
	}
	
	
	
	
	
	
	.img .picture-bg:hover{
		z-index: 1;
	}
	
	.content .middle .info {
		width: 480px;
 		height: 350px; 
		margin-top: 15px;

	}
	
	.info ul li{
		margin-bottom: 10px;
		text-align: center;

	}
	.info ul li:last-child{
		margin-bottom: 10px;
	}
	
	.info ul li input{
		margin-left: 5px;
		margin-right: 5px;
		width: 204px;
		height: 40px;
		border-radius: 5px;
	
	}
	
	
	.middle .info ol{

		height: 95px;
	}

	.middle ol li{

		height: 40px;
		text-align: center;
	}
	
	.middle ol li:last-child{
		padding-top: 10px;
		height: 55px;

/* 		border:1px solid rgba(0,0,0,0.15); */
	}
	
	
	.middle ol li select{
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		border: 1px solid rgba(0,0,0,0.15);
		text-indent: 10px;
		color: gray;
		background-color: #fff;
		border-radius: 5px;
	}
	

  

	
	.middle ol li .cities{
		width: 130px;
		height: 40px;
	}
	.middle ol li .funerals{
		width: 280px;
		height: 40px;
		margin-left: 5px;
	}	
	
	.middle ol li input{
		width: 420px;
		height: 40px;
		
	}
	
	.middle ol li input::-webkit-text-decoration, input::-webkit-text-cancel-button {
		display: none;
	}

	
	
	.content .bottom{
		width: 480px;
		height: 95px;
		text-align: center;
	}
	
	.content .bottom input[type="submit"]{
		margin-top: 20px;
		width: 250px;
		height: 35px;
		line-height: 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #ffffff;
	padding: 8px 20px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 5px;
	border: 0px solid #003366;
	outline: none;
	background: #615d65;
	}
	
	

	


	
	
	
	
	/* To target IE 8, 9 and 10 Hacks */

	@media screen\0 {
	
	}
	/* only chrome browser css hack */
	
	@media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) {
	
	}


	</style>
	
			<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

	
		<script>
  
  var loadFile = function(event) {
	 
    var output = document.getElementById('v-picture');
     
    output.style.backgroundImage = "url('"+ URL.createObjectURL(event.target.files[0])+"')";
    
    
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
		광주광역시: 5,
		울산광역시: 6,
		세종특별자치시: 7,
		경기도: 8,
		강원도: 9,
		충청북도: 10,
		충청남도: 11,
		경상북도: 12,
		경상남도: 13,
		제주특별자치도: 14,
		전라북도: 15,
		전라남도: 16
	};

	$scope.fList = [];
	$scope.fListToCode = {};
// 	$scope.fTemplate = {};


	this.select = function select(outCurr){
		
		$scope.fList.splice(0,$scope.fList.length);
		var url = 'http://www.gieok.xyz/index.php/json/getfunerallist/' + this.cityToCode[outCurr];
//		alert(url);
		var request = $http({
			    method: "get",
				url: url
			});
			
			request.success(function (response) {
				
					$scope.fName = response.funerals[0].name;      // 첫번째 값 셋팅
					
			
					angular.forEach(response.funerals, function(element) {
			//				alert(response);
			//			var fname = element.name;
			//			newflist[fname] = element.id;
			//			alert(element.name);
						$scope.fList.push(element.name);	
						$scope.fListToCode[element.name] = element.id;
// 						$scope.fTemplate[element.name] = element.template;		
//						alert(funerals);					
		 });
		 	
		 	

		 
		
//			 $http.get(url).success(function (response) {
//			 var newflist = {};
//			angular.forEach(response.funerals, function(element) {
//				alert(response);
//			var fname = element.name;
//			newflist[fname] = element.id;
//			alert(element.name);
//			funerals.push(element.name);			
//	  });
	  
//	  alert(aaa);      // 내부 배열
//		alert(funerals);	  
	  //dump(this.newflist);
//	  	return newflist;

//			alert();	

		

		});
//	  alert(this.funerals);  // 외부 funerals  출력 test!
		
		

	};



	




	}]);
	

	angular.module('list', [])
	.factory('funeralList', function($http) {
		
	var funerals = ['test'];
				
		var abc = function(){
			var url = 'http://www.gieok.xyz/index.php/json/getfunerallist/1';
			 $http.get(url).success(function (response) {
				angular.forEach(response.funerals, function(element) {
				funerals.push(element.name);
				});

			});
		};
		
		abc();
		


		return{
			fuenrals:funerals
		}
	});
	

		
		</script>
	
	
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
	
	</head>
	<body>
		<div class="header">
			
			<div>
				<h1 class="logo">ㄱ</h1>
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
					</div>
					<div class="info">
						<ul>
							<?php
		
	
	$name = array('name' => 'name','id' => 'name','placeholder' => '고인명','value' => '','required' => '' );
	$birthday = array('name' => 'birthday','id' => 'birthday','placeholder' => '생(生)년월일 19700101','value' => '','required' => '' );
	$deathday = array('name' => 'deathday','id' => 'deathday','placeholder' => '사(死)년월일 20160101','value' => '','required' => '' );
	$coffin = array('name' => 'coffin','id' => 'coffin','placeholder' => '발인 2015-01-01 01:10:00','value' => '','required' => '');
		
		
		
		echo '<li>'.form_input($name);
		echo form_input($coffin).'</li>';
		echo '<li>'.form_input($birthday);
		echo form_input($deathday).'</li>';
		
		?>
		
<!--
							<li><input type="text" placeholder="고인명"></li>
							<li><input type="text" placeholder="생년월일 ex) 19700101"></li>
							<li><input type="text" placeholder="사망월일 ex) 20160101"></li>
							<li><input type="date" placeholder="발인일시 ex)2015-01-01 01:10:00"></li>
-->


											
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
							<li><input type="text" placeholder="장례식장 실내위치 A층 B01호실" name="funeral_indoor"></li>
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
					</div>
		</div>
			</form>	
		</div>

			
	</body>
</html>