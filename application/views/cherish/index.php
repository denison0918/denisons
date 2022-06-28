
<style>
	.header {
		opacity: 1;
	}
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80452104-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http){
	$scope.search = function(){
		if($scope.year == null) $scope.year = "";
		if($scope.name == null) $scope.name = "";
		url = window.location.href + "/json/getdead/" + $scope.year + "n" + $scope.name;
		$http.get(url).success(function (response) {$scope.deads = response.deads;});
	};
});	
</script>
		<div class="top-padding"></div>			
		<div class="main-compose">
			<div class="main-bg">
				<div class="compose-bg">
					<div class="compose-cell" ng-app="myApp" ng-controller="myCtrl" ng-init="search()">
						<h1>고인의 명복을 함께 빌겠습니다.</h1>
						<h2>우리는 다양한 직업을 가졌고, 알수없는 장소에 머무르며, 바쁜 일상을 보냅니다.<br>이곳이라면, 언제 어디서든 누구나 손쉽게 다가갈 수 있습니다.</h2>
						<div class="cell-bg">
	<!--						<label>이곳이라면, 언제 어디서든 손쉽게 다가갈 수 있습니다.</label>  -->
							<ul class="content-search">
					<!--			<li><input type="text" class="sinceyear" name="sinceyear" placeholder="출생년도" maxlength="4"></li>  -->
								<li><input type="text" class="agoyear" name="agoyear" placeholder="사망년도" maxlength="4" ng-model="year" ng-keydown="($event.which === 13 || $event.which === 32) && search()"></li>
								<li><input type="text" class="agoname" name="name-search" placeholder="단체추모 또는 이름" ng-model="name" ng-keydown="($event.which === 13 || $event.which === 32) && search()"></li>
								<li><input type="button" class="submit" name="submit" value="검색" ng-click="search()"></li>
							</ul>
						</div>
						<div class="society">
							<ul>									<!--    CSS 버그로 인해 float 사용시 a 태그 사용안됨, AngularJS+HTML과 일반 HTML이 다르게 표시됨   -->
								<li class="commemorate1"><a href="">세월호 참사</a><span>&nbsp;&nbsp;('15.04.16)</span></li>  <!-- float : left; width : 167px; -->
								<li class="commemorate1"><a href="">천안함 사건</a><span>&nbsp;&nbsp;('10.03.26)</span></li>
								<li class="commemorate1"><a href="">연평도 피격</a><span>&nbsp;&nbsp;('10.11.23)</span></li>
									
								<li class="commemorate2" ng-repeat="deads_item in deads">							<!--  width : 167px; -->															<a ng-href="./cherish/{{deads_item.id}}" >故 {{ deads_item.name }}님</a>
								<span>&nbsp;&nbsp;{{ deads_item.deathday }}</span>
								</li>
							</ul>
							<p><a ng-href="">단체추모신청</a></p>
						</div>
						
				<!--			<input class="compose-btn"  type="button" value="텍스트 작성하기">		-->
					</div>
				</div>
				<div class="section">
					<div class="login">
						<ul>
							<li><input type="text" placeholder=" 이메일 또는 아이디"></li>
							<li><input type="password" placeholder=" 비밀번호"><input type="button" value="로그인"></li>
							<li><input type="checkbox" value="store"><span>ID기억 ∙ </span><a href="">비밀번호 찾기</a></li>
						</ul>
						
					</div>
					<div class="join"><h1>기억이 필요하신가요?</h1>&nbsp;&nbsp;<span><a href="">가입하기</a></span></div>
				</div>
				<div class="footer">© 2015 GIEOK &nbsp;&nbsp; 회사소개 &nbsp;&nbsp; 브랜드 &nbsp;&nbsp; 개발자 &nbsp;&nbsp; 광고 정보 &nbsp;&nbsp; 비즈니스 &nbsp;&nbsp; 인재채용  &nbsp;&nbsp; 이용약관 &nbsp;&nbsp; 고객지원 </div>

			</div>


		</div>
		

	
	</body>
</html>