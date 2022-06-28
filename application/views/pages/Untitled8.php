
	
	<style type="text/css" media="screen">

	html{
			min-width: 1234px;
			text-rendering: optimizeLegibility; 
		
	}
	

	html, body, div, p, a, h1, h2, h3, ul, ol, li, label, ul, ol, li{
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

		
	body{
		margin: 0;
		width: 100%;
		height: calc(100% - 55px); /* IE */
		height: -o-calc(100% - 55px); /* opera */
		height: -webkit-calc(100% - 55px); /* google, safari */
		height: -moz-calc(100% - 55px); /* firefox */
		font-family: sans-serif;
		background-color:#f5f5f5;
	}	

	.header{
		width: 100%;
		height: 55px;
		position: fixed;
		background-color: #ffffff;
		z-index: 1000;
		box-shadow: 0px 0px 2px black;
		opacity: 0.95;
		
	}
	
	.header .logo{
	position: relative;
	top: 10px;
	margin: 0 0 0 140px;
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 58px;
	width: 53px;
	height: 43px;
	padding: 0;
	border-radius: 12px;
	line-height: 42px;
	background-color: #fff;
	color: rgba(0,0,0,0.7);
	text-align: right;
	text-rendering: optimizeLegibility; 
	text-shadow:  0px 0px 1px #fff;
	
	background-image: url(./images/content/logo.tiff);
	width: 50px;
	height: 38px;
}


	.main{
		padding-top: 55px;  /* header space */
		width: 100%;
	
/*		background-image: url(./images/content/bg10.png); */
/*		background-image: url(./images/content/bg20.gif);
		background-size: 100% 100%;
*/
	}



	.main .top{
		width: 100%;
		height: 55px;
		background-color: rgba(0,0,0,0.6);
		text-align: center;
		color: #fff;
		
		text-rendering: optimizeLegibility; 
		
	}
	
	.main .top h1{
		
		font-size: 30px;
		font-weight: 100;
		line-height: 52px;
		display: inline;
		line-height: 1.8em;
		
	}

	.main .top h1 span{	
		font-size: 25px;
	}
	
	.main .container{
		padding: 0;
		width: 1234px;
		margin: 0 auto;
	}


	.main .container .nav{
		width: 1134px;
		height: 30px;
		margin: 15px auto 15px auto;
		border-bottom: 1px solid rgba(0,0,0,0.15);
		line-height: 17.5px;
	}
	
	.nav ol{
		text-align: center;
	}


	.nav ol li{
		display: inline-block;
		border-right: 1px solid rgba(0,0,0,0.28);
		height: 15px;
	}
	
	.nav ol li:last-child{
		border-right: 0;
	}
	
	.nav ol li a{
		font-size: 17px;
		padding: 0 20px 0 20px;
		color: rgba(0,0,0,0.6);
	}
	
	
	.container .content{
		width: 1180px;
		margin: 20px auto 0 auto;
		height: auto;
	}
	
	.content .left{
		width: 290px;
		height: 500px;

		float: left;
	}
	
	.left .img{
		width: 280px;
		height: 427px;
		background-image: url(./images/content/person/yj3.jpg);
		background-position: right top;
		background-size: 280px 427px;
		background-repeat: no-repeat;
		border-radius: 5px;
		margin-bottom: 12px;
	}
	
	.left .img .registry{
		width: 280px;
		height: 60px;
	}	
	
	.registry li{
		width: 140px;
		height: 60px;	
		margin-top: 366px;
		
		float: left;
		text-align: center;
		background-color: rgba(0, 0, 0, 0.45);
		border-top: 1px solid rgba(0,0,0,0.5);
	
	}
	.registry li:first-child{
	border-radius: 0px 0px 0px 5px;

	}
		
	.registry li:last-child{
	border-radius: 0px 0px 5px 0px;

	}
	
	
	.registry li h3{
		color: #e5e5e5;
		margin-top: 23px;
		font-size: 16px;
		font-family: sans-serif;
		font-weight: 400;
		display: inline-block;	
		cursor: pointer;
	}
	
	
	
	.left .count{
		margin-top: 14px;
		height: 65px;
	}
	
	.left .count li{
		min-width: 96px;
		width: auto;
		margin: 0;
		float: left;
		display: inline-block;
	}
	
	.count li h3{
		font-size: 41px;
		display: inline-block;
		color: rgba(0,0,0,0.75);
		font-family: 'trebuchet ms',arial,sans-serif;

	}
	.count li p{
		font-size: 14.5px;
		text-indent: 1px;
	}
	
	
	.content .center{
		width: 590px;
/*		height: 500px;        수정 auto  */ 
		height: auto;

		float: left;
		margin-left: 10px;
	}
	
	.center ul, .center ol{
		margin-bottom: 20px;
		width: 588px;
	}

	
	.center .category{
		font-size: 20px;
		text-indent: 20px;
		font-weight: 400;
		color: rgba(0,0,0,0.6);
		margin-bottom: 10px;
		width: 588px;

		
	}
	
	.center .map{
		border-radius: 5px;
		width: 588px;
		height: 426px; /* +1 border at between add-1 & add-2 */
		border: 1px solid rgba(0,0,0,0.15);
	}
	
	.center .map li{
	width: 588px;	
	background-color: #fff;
	
	}
	
	
	.center .map li h3,h4{
		position: relative;
		top:22px;
		left:44px;
		font-family: sans-serif;
	
	}
	.center .map li h3{
		color: #4CAF50;
		font-weight: 400;
		font-size: 15px;
	}
	
	.center .map li h4{
		color: #777;
		font-weight: 100;
		font-size: 13.5px;
	}
	
	
	.center .map .view{
	
		height: 270px;
		border-radius: 5px 5px 0px 0px;
	}
	
	.center .map .address-1{
	height: 95px;		
	}
	
	.center .map .address-2{
		height: 60px;
		border-top:  1px solid rgba(0,0,0,0.15);

		border-radius: 0px 0px 5px 5px;

	}
	
	
	.center .center-floral{
		width: 588px;
		
		height: 230px;
		margin-bottom: 10px;	
	
	}
	
	
	.center .floral-tribute{
		width: 588px;
		height: 156px;
		
	}
	
	
	.floral-tribute li{
		width: 189px;     /* (189 * 3 + 20) - 2(border-left , border-right)  */
		display: inline-block;
	
		height: 156px;
		
		float: left;
		margin-left: 10.5px;
		
	}
	
	.floral-tribute .more{
		width: 588px;
		text-align: center;
		font-size: 15px;
		height: 40px;
		line-height: 40px;
	}
	.floral-tribute .more a{
			color: rgba(0,0,0,0.33);
			font-weight: 600;
	}
	
	.floral-tribute li:nth-child(3n+1){	margin-left: 0;}
	
	.floral-tribute .laid{
		width: 189px;
		height: 150px;
		
	}
	
	.floral-tribute .laid li{
		display: block;
		width: 189px;
		border: 1px solid rgba(0,0,0,0.15);
	}
	
	.floral-tribute .laid li:first-child{

		height: 99px;
		border-bottom: 0;
		background-image: url(./images/content/chrysanth3.jpg);
		background-repeat: no-repeat;
/*		background-size: 189px 99px; */
		background-size: 139.6px 72.1px;
		background-position: center center;
		background-color: #FBFBFB;
		border-radius: 5px 5px 0 0;
	}

	.floral-tribute .laid li:last-child{
		height: 55px;
		border-top: 0;
		border-radius: 0 0 5px 5px;
		background-color: #FBFBFB;
		margin: 0;
	}
	
	.floral-tribute .laid .info p{
		text-align: center;
		margin-top: 7px;
		font-size: 14px;
		color: rgba(0,0,0,0.6);
	}
	
	
	
	.center .center-comment{
		width: 588px;
		height: auto;

		
	}
	
	
	.center-comment ul li{
		width: 588px;
		margin-left: -0.5px;

		border-left: 1px solid rgba(0,0,0,0.15);
		border-right: 1px solid rgba(0,0,0,0.15);
		border-bottom: 1px solid rgba(0,0,0,0.15);
		background-color: #fff;
	}
	
	.center-comment ul li:hover{
		background-color: #f5f5f5;
	}
	
	.center-comment ul li:first-child{
		border-top: 1px solid rgba(0,0,0,0.15);
		border-radius: 5px 5px 0 0;
		height: 55px;
		line-height: 55px;
	}
	
	.center-comment ul li:last-child{
		
		border-radius: 0 0 5px 5px;
	}
	
	
	.center-comment ul li .comment-logo{
/*
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 40px;
*/
	padding: 0;
	background-color: #fff;
	border-radius: 5px 5px 0 0;
/* 	color: rgba(0,0,0,0.5); */
/* 	text-align: center; */
/* 	text-rendering: optimizeLegibility;  */
	background-image: url(./images/content/logo.tiff);
	background-size: 40px; 29.4px;
	background-repeat: no-repeat;
	background-position: center center;

	
	
	width: 100%;
	height: 100%;
	}
	
	.center-comment ul li h2{
		padding: 20px;
		padding-bottom: 15px;
		font-size: 14.5px;
		font-weight: 400;
		color: rgba(0,0,0,0.85);
		
	}
	
	.center-comment ul li p{
		font-size: 13px;
		padding-bottom: 10px;
		padding-right: 25px;
		text-align: right;
		font-weight: 500;
	
	}
	
	.center-comment ul li p span{
		font-size: 13px;
		color: rgba(0,0,0,0.45);
		font-weight: 500;
	}
	
	
	.center-comment .more{
		width: 588px;
		text-align: center;
		font-size: 15px;
		height: 45px;
		line-height: 45px;

	}
	.center-comment .more a{
			color: rgba(0,0,0,0.39);
			font-weight: 600;
	}
	
	
	#map-canvas { width: 587.5px; height: 269px; margin: 0; padding: 0; border: 0; 
		border-radius: 4px 4px 0 0; 
		position: relative; left: 1px;
		}


	
	/* IE8 , IE9, IE10 browser css hack */	
	
	@media screen\0 {
	
	.main .top h1{
		font-weight: 400;
		line-height: 1.6em;
		
	}
	
	.nav ol li{
		
		border-right: 1.5px solid rgba(0,0,0,0.28);
		
	}
	
	.nav ol li a{
		line-height: 12px;
		font-size: 16.5px;
		font-weight: 600;
		opacity: 0.95;
	}
	
	.left .img{
		margin-bottom: 15.5px;
	}
	
	.img .registry li h3{
	font-size: 14.45px;
	font-weight: 600;
	opacity: 0.95;	
	}
	
	
	.count li p{
		font-size: 14.5px;
		font-weight: 600;
	}
	
	
	.center .map .view{
		margin-left: 0px;
	}
	

	.center .map li h3{

		font-weight: 600;
		font-size: 14.45px;
		opacity: 0.95;
	}
	
	.center .map li h4{

		font-weight: 600;
		font-size: 12.75px;
		opacity: 0.95;
	}
	
	
	

	.center .category{
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 15px;
		
	}
		
		
	.floral-tribute .laid .info p{
		text-align: center;
		margin-top: 7px;
		font-size: 12.5px;
		color: rgba(0,0,0,0.65);
		font-weight: 600;
	}	
	
	
		
	.center-comment ul li h2{
		padding-left: 25px;
		font-size: 13px;
		font-weight: 600;
		color: rgba(0,0,0,0.9);
		line-height: 140%;
		font-family: 'Nanum Gothic',sans-serif;
		opacity: 0.8;
		word-spacing: 2px;

	}


	.center-comment ul li p{
		font-size: 12.5px;
		padding-bottom: 20px;
		padding-right: 25px;
		text-align: right;
		font-weight: 600;
		font-family: 'Nanum Gothic',sans-serif;
		opacity: 0.7;

	}
	.center-comment ul li p span{
		font-weight: 600;
	
	}	
	
	
	.floral-tribute .more{
		font-size: 27px;
	}
	.floral-tribute .more a{
			font-weight: 800;
	}	
	
	
	
	.center-comment .more{
		width: 588px;
		text-align: center;
		font-size: 27px;
		height: 45px;
		line-height: 45px;

	}
	.center-comment .more a{
			color: rgba(0,0,0,0.39);
			font-weight: 800;
			
	}
	
	
	
	#map-canvas{left: 0px;}
	
	}





	/* only chrome browser css hack */
	
	@media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) {
	
	.header .logo{	background-image: url(./images/content/logo.png);}

	
	.nav ol li{	border-right: 0.13em solid rgba(0,0,0,0.20);}
	
	
	.nav ol li a{
		font-weight: 600;
	}
	
	.count li h3{
		font-size: 40px;
		font-weight: 800;
	}
	
	.count li p{
		font-weight: 500;
		font-size: 14.8px;
	}
	
	.center .map li h4{
		font-weight: 400;
	}

	
	.floral-tribute .laid .info p{
		font-weight: 600;
	}
	
	
	#map-canvas{left: 0;}
	
			
	.center-comment ul li .comment-logo{ background-image: url(./images/content/logo.png);}
	
	.center-comment ul li h2{
		line-height: 130%;
		font-weight: 500;
		word-spacing: 1.3px;
		font-size: 14.6px;
	}
    
	}



	</style>
	

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA8afbNC_FXTedSUJC9a24HKMy439HBRTc&sensor=false">
      
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: 37.4519988, lng: 126.7097573},
          zoom: 14,
          disableDefaultUI: true,
          zoomControl: true
          
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
		var marker = new google.maps.Marker({
	    	position: map.getCenter(),
			map: map,
			title: 'Click to zoom',
			});	
			marker.setAnimation(google.maps.Animation.BOUNCE);
			window.setTimeout(function(){ marker.setAnimation(null);}, 2222);
			
		
		
		    
		google.maps.event.addListener(map, 'center_changed', function() {
	    // 3 seconds after the center of the map has changed, pan back to the marker.
	    window.setTimeout(function() {
	    	map.panTo(marker.getPosition());
	    	}, 5000);
	  	});
	
	  	google.maps.event.addListener(marker, 'click', function() {
	    	map.setZoom(16);
			map.setCenter(marker.getPosition());
	  	}); 
	  	
	  	
	  	google.maps.event.addEventListener(marker, 'null' , function(){
		  
	
			  	
	  	});
	  	
      }
      
      
      
      
      google.maps.event.addDomListener(window, 'load', initialize);
      
      
    </script>
	
<html>    
	<head>
			<meta charset="UTF-8">
	</head>
	<body>
		<div class="header">
			
			<div><h1 class="logo"></h1></div>
			<div</div>
		</div>
	
		<div class="main">
			
			<div class="top"><h1><span class="ago">故 </span>홍길동</h1></div>
			<div class="container">
				<div class="nav">
					<ol>
						<li><a href="untitled8.html">분향소</a></li>
						<li><a href="./untitled9.html">헌화</a></li>
						<li><a href="#comment-move">추모글</a></li>
						<li><a href="#">사진</a></li>
					<!--<li><a href="./untitled10.html">연혁</a></li>-->
						<li><a href="#">도움말</a></li>	
					</ol>
				</div>
			
			<div class="content">
				<div class="left">
					<div class="img">
						<ul class="registry">
							<li><h3>헌화하기</h3></li>
							<li><h3>추모글적기</h3></li>
						</ul>
						
					</div>
					<ul class="count">
						<li>
							<h3>328</h3>
							<p>방문자</p>
						</li>
						<li>
							<h3>182</h3>
							<p>추모글</p>
						</li>
						<li>
							<h3>159</h3>
							<p>헌화수</p>

						</li>						
					</ul>

				</div>
				<div class="center">
					<ul class="map">
						<li class="view"><div id="map-canvas"></div></li>	
						<li class="address-1"><h3>장례식장: 길병원</h3><h4>1층 105분향실</h4></li>	
						<li class="address-2"><h3>인천광역시 남동구 구월1동 1198</h3></li>	
					</ul>
							
					<div class="center-floral" >
						<h1 class="category">헌화</h1>
						<ol class="floral-tribute">	
							<li>
								<ul class="laid">
									<li class="chrysanth"></li>
									<li class="info"><p>삼가 고인의 명복을 빕니다.</p><p>진달래 드림</p></li>
								</ul>
							</li>
							<li>
								<ul class="laid">
									<li class="chrysanth"></li>
									<li class="info"><p>삼가 고인의 명복을 빕니다.</p><p>개나리 드림</p></li>
								</ul>
							</li>
							<li>
								<ul class="laid">
									<li class="chrysanth"></li>
									<li class="info"><p>삼가 고인의 명복을 빕니다.</p><p>봉숭아 드림</p></li>
								</ul>
							</li>						
							<li class="more">													<a name="comment-move"> <!-- 추모글 이동 -->
								<a href="./untitled9.html">◦ ◦ ◦</a>
							</li>			
						</ol>																	
					</div>
					
					<div class="center-comment">
						<ul>
							<li><h1 class="comment-logo"></h1></li>
							<li><h2>테스트입니다. 세월호 희생자 추모글은 테스트로 첨부... </h2><p>— 채성아 <span>2시간전</span></p></li>
							<li><h2>아이들아 하늘의 별이되었지?</h2><p>— 신형만 <span>1달전</span></p></li>
							<li><h2>돈이없고능력이없어 미안합니다 돈이있고 능력이 있음 조금이나마 도울수있는데 ..... 편히 눈 감으세요~ 그리고 다시태어나면 안전한 세상에서 꿈 이루며 행복한 삶으로 태어날거예요 고인의 명복을 빕니다.</h2><p>— 신짱아 <span>2달전</span></p></li>
							<li><h2>갑자기 생각나서 들립니다. 벌써 1년이 넘는 시간이 지났네요. 안산 단원고 학생들과 모든 탑승자분들.. 모두들 그 곳에서 그 모습 그대로, 행복하게 잘 지내고 있으시죠? 잊지 않았고 앞으로도 잊지 않겠습니다.</h2><p>— 신짱구 <span>4달전</span></p></li>
							<li><h2>같은 또래의 자식을 둔 부모로서, 바라보는 눈과 마음이 그저 한 없이 슬프기만 합니다. 예쁘디 예쁘고, 저렇게 잘 생긴 아이들이 . . , 사랑하는 부모보다 먼저 세상과 이별 해야 했다는 생각이 정말 가슴속 깊이 슬픔이 밀려 옵니다. 영정사진속에 저 많은 사랑스런 아이들의 모습을 바라보며, 또한 그 뒤편에 큰 슬픔에 잠겨 있을 수많은 가족과 지인들이 있겠죠? 대한민국 사회의 힘없는 약자와 도움이 필요한 이들에게, 내가 죽기전에 반드시 무엇이 됐든. . . ? 목표를 정하여 꼭 해봐야 겠다는 각오와 아주 강한 의지가 생깁니다. 1년전 세월호에 탑승하여 불행하게도 영면하신 "일부 탑승자와 안산 단원고 학생들의" 명복을 진심으로 빕니다. ㅠㅠ</h2><p>— 부리부리대마왕 <span>4달전</span></p></li>
							<li><h2>빠른 대처만 존재했다면 님들 모두 살았다는 데에는 의심의 여지가 없습니다. 소잃고 외양간 어찌고치겠습니까.언제나 변함없이 극도로 미안합니다. 잊지 않겠습니다.</h2><p>— 훈이 <span>5달전</span></p></li>
							<li><h2>요즘 길거리를 거닐다보면 많은 사람들이 다들 아무일 없다는듯 일상을 살아가는 느낌이라 그걸 보며, 저는 또 속으로 세월호 참사와 희생된 사람들이 이젠 세상에서 조금씩 잊혀져가는구나 사람들이 잊고사는구나라는 생각이 드네요. 누구나 다 내 마음같지는않겠지만, 그냥 저 한사람이라도 기억해드리고, 잊지않아야 한다는걸 요즘 많이 느낍니다. 인재로 인한 참사였기에 구해주지못해 너무 죄스럽네요. ㅠㅠ 그냥 시민의 한사람인 저도 마음이 이렇게 아프고, 상처가 큰데, 참사로 사랑하는 이들을 안타깝게 잃은 유가족분들 심정은 어떨까싶어 요즘 저는 눈물만 납니다. 우린 세월호 참사와 그 사건으로 떠나간 소중한 생명들을 결코 잊지말아야해요. 그저 남의일이라고 여겨서도 안될 그 일을 우린 언제나 잊지말아야 합니다. 어서 남아있는 9명의 실종자분들이 돌아오길 기도합니다. 이젠 하늘의 별이 된 단원고 아이들과 일반인 희생자분들의 극랑왕생을 기원합니다. 고통없는곳에서 편히 쉬세요. 모두 그립습니다. ㅠ</h2><p>— 맹구 <span>1년전</span></p></li>
							<li><h2>이미 1주년도 훌쩍 지난 지금이지만... 사고로 세상을 떠난희생들은 잊지않을려고 노력 또노력하는 중입니다. 그리고 꼭 기억하겠습니다. 미안합니다. 2주년 3주년이될때마다 꼭 기억하겠습니다. 그렇게보내게해서 미안하고 죄송하겠습니다. 그곳에서는 편한하게 쉬세요. 정말로미안합니다.</h2><p>— 신짱구 <span>1년전</span></p></li>
							<li><h2>잊지않겠습니다.. 부디 천국에서 잘계시길 ..</h2><p>— 철수 <span>2년전</span></p></li>
							<li class="more"><a href="#">◦ ◦ ◦</a></li>	
						</ul>
						<br>
					</div>
		
				</div>
				
				
				
			</div>
			
				
			</div>
	
	
		</div>
		

	
	</body>
</html>