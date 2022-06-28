
	<style type="text/css" media="screen">


	
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
	


	.center-inc{
	width: 480px;
/* 	height: 515px; */
	height: 560px;
	position: relative;
	top: 30px;
	margin: 0 auto;
	display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    border-radius: 5px;
	background-color: white;
/*     border: 1px solid rgba(0,0,0,0.15); */

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
	
	.info ul .address{
		width: 420px;
		margin-top: 10px;
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
	
	
	.content .bottom .update{
	margin-top: 150px;
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
	
	

	
	#map-canvas { width: 420px; height: 269px; margin: 0 auto; padding: 0; border: 0; 
		border-radius: 4px 4px 0 0; 
		position: relative; left: 1px;
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
	$scope.fAddress = {};
	$scope.fPhone = {};
	$scope.fPost = {};
	$scope.fLat = {};
	$scope.fLng = {};
	$scope.fAddressToCode = {};
	this.update = function upadate(){
		
	}

	this.select = function select(outCurr){
		
		$scope.fList.splice(0,$scope.fList.length);
		var url = 'http://www.gieok.xyz/index.php/json/listFunerals/' + this.cityToCode[outCurr];
		var request = $http({
			    method: "get",
				url: url
			});
			
			request.success(function (response) {
			
			$scope.fName = response.funerals[0].name;      // 첫번째 값 셋팅
					
					angular.forEach(response.funerals, function(element) {
						$scope.fList.push(element.name);	
						$scope.fListToCode[element.name] = element.id;
						$scope.fAddress[element.name] = element.address;
						$scope.fPhone[element.name] = element.phone;
						$scope.fLat[element.name] = element.lat;
						$scope.fLng[element.name] = element.lng;
						$scope.fPost[element.name] = element.post;
						$scope.fAddressToCode[element.name] = element.address_id;
						
		 });
		
		
		


		});
		
	};

	
	
		this.update = function update(){
	
		var box = new Object();	
		var funeral = new Object();
		var address = new Object();
	
		var identifier = $scope.fName
		
		box.funeral_id = $scope.fListToCode[identifier];
		
		funeral.name = identifier;
		funeral.lat = $scope.fLat[identifier];
		funeral.lng = $scope.fLng[identifier];
		box.funeral = JSON.stringify(funeral);


		box.address_id = $scope.fAddressToCode[identifier];
		
		var adrArray = ($scope.fAddress[identifier]).split('(');

		address.address1 = adrArray[0];
		address.address2 = '(' + adrArray[1];		
		
		address.postal_code = $scope.fPost[identifier];
		address.phone = $scope.fPhone[identifier];
		box.address = JSON.stringify(address);
		
		var update = JSON.stringify(box);
	
		var url = 'http://www.gieok.xyz/index.php/json/updatefuneral';
		var request = $http({
			    header : {'Content-Type' : 'application/json; charset=UTF-8'},
			    method: 'post',
				url: url,
				data : update
			});

		request.success(function (){
			alert('수정되었습니다.');
		}).error(function (){
			alert('알수없는 에러, 다시 시도해보세요!');
		});	
	};


	



	}]);
	

	angular.module('list', [])
	.factory('funeralList', function($http) {
		
	var funerals = ['test'];
				

		


		return{

		}
	});
	

		
		</script>
	
	
	<div class="center" ng-app="admin">
		
		<div class="center-inc" >
			<div class="content" ng-controller="registerCtrl as register" ng-init="register.select(register.inCurr)">
			
				
				<div class="middle">	

					<div class="info">
						
						<ol>
							<li>
								<select class="cities" ng-model="register.inCurr" ng-change="register.select(register.inCurr)" >
									<option ng-repeat="c in register.cities" >{{c}}</option>
								</select>
								<select class="funerals" ng-model="fName" >
									<option class="opt" ng-repeat="f in fList" ng-value="f">{{f}}</option>
								</select>
							</li>
												
						</ol>
					
							<div id="map-canvas">
									<img  src="https://maps.googleapis.com/maps/api/staticmap?
									markers=size:mid|color:red|Label:S|{{fLat[fName]}},{{fLng[fName]}}&		
									center={{fLat[fName]}},{{fLng[fName]}}&
									zoom=18&
									size=420x269&
									key=AIzaSyA6VN1C3d7PAN7iaMmx5yvzMrsTCXkzPb8"
									width="420px" height="269px" style="border-radius: 4px 4px 0 0">
							</div>
					
							
						<ul>
							
							<li><input class="address" name="fullAddress" type="text" ng-value="fAddress[fName]" ng-model="fAddress[fName]"></li>

							<li>
								<input type="text" placeholder="LATITUDE" ng-value="fLat[fName]" name="lat" ng-model="fLat[fName]">
								<input type="text" placeholder="LONGITUDE" ng-value="fLng[fName]" name="lng" ng-model="fLng[fName]">
							</li>
							<li>
								<input type="text" placeholder="POST" ng-value="fPost[fName]" ng-model="fPost[fName]">
								<input type="text" placeholder="PHONE" ng-value="fPhone[fName]" ng-model="fPhone[fName]">

							</li>
						
						</ul>
						</div>
					
					</div>
					<div class="bottom">
					<input type="button" class="update" ng-click="register.update()" value="수정하기">
					</div>
		</div>
			</form>	
			
		</div>
	</div>



