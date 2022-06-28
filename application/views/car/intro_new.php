    <html>	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
		
		<link rel="stylesheet" href="../../../css/car/intro_d.css"  type="text/css" charset="utf-8"/>

		<link rel="stylesheet" media="only screen and (min-width:480px)" href="../../../css/car/intro_d.css"  type="text/css" charset="utf-8"/>
<!--
		<link rel="stylesheet" media="only screen and (-webkit-device-pixel-ratio: 1.5)" href="../../../css/car/intro_m1.css" />

		<link rel="stylesheet" media="only screen and (max-width:479px)" href="../../../css/car/intro_m2.css" />
-->

  			<meta property="og:type" content="website"> 
			<meta property="og:title" content="Beatme">
			<meta property="og:description" content="비츠미">
 			<meta property="og:image" content="http://www.gieok.xyz/car"> 

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<script> 
	

		
$(document).ready(function(){
	
	if ($(window).width() < 480 || $(window).height() < 480) {
    //small screen, load other JS files
    $.getScript('../../../script/intro/intro_m.js');
	}
	else{
	$.getScript('../../../script/intro/intro_d.js');
	}	
/*
	
	var contentH = $("#content").height();
	var swith = false;
	$(".cherish").hide();



	$(".detail").click(function(){	
		view(); 
		scrollDwon();
    });
    
    $("#detail").click(function(){	
		view();
		scrollDwon();
    });
    


	function view(){
		if(swith == false && contentH == '740'){
			 $(".cherish").slideUp( 100 ).delay( 300 ).fadeIn( 150 );	    
			 swith = true;
		}
		else if(swith == false && contentH < '740'){
			 $(".cherish").slideUp( 100 ).delay( 300 ).fadeIn( 150 );
			 $(".content").animate({height: '740px'});	    
			 swith = true;
		}
		else if(swith == true && contentH == '740'){
			$(".cherish").hide();
			swith = false;
		}
		else{
			 $(".content").animate({height: contentH},650);   
		     $(".cherish").hide();
		     swith = false;
		}
	}    
    
    
    function scrollDwon(){
	  $("html,body").animate({
        scrollTop: 210}, 800);
		  
    }
   
*/
   
//    $( ".description" ).text( "Carden" ).fadeIn( 1350 );
   
//    $( ".description" ).text( "Carden" ).fadeIn( 1350 );
   
   $("#myform").submit(function() {

    var name = $(this).find('.name');
    var phone = $(this).find('.phone');
	

	
	if (name.val().length < 1){
		  $( ".alert" ).text( "차종을 입력해주세요!" ).show().fadeOut( 1100 );
		  return false;
	}
	
	if (phone.val().length < 10){

		  $( ".alert" ).text( "핸드폰 번호를 정확히 입력해주세요!" ).show().fadeOut( 1100 );
		  return false;
	}
	
	$(this).submit();
	
	});






	

	

	
/*
	$(".car").css("background-image", "url(/Images/Content/ray.png)");
	$(".price1").text("790만원");	$(".price2").text("770만원");
	$(".satifaction1").text("✭✭☆☆☆");	$(".satifaction2").text("✭✭✭✭☆");
	
*/
/*
	$(".car").css("background-image", "url(/Images/Content/sm5.png)");
	$(".price1").text("1,930만원");	$(".price2").text("1,890만원");
	$(".satifaction1").text("✭✭✭☆☆");	$(".satifaction2").text("✭✭✭✭✭");
	
    
	 
	 
	 
	 
*/
	var cnt = Math.floor(Math.random() * 4);
	change(cnt);
	setInterval(function(){ 
		change(cnt++);
		if(cnt == 4) cnt = 0;
		}, 9500);


	function change(cnt){
		if(cnt == 1){
			$(".car").css("background-image", "url(/Images/Content/k7.png)");
			$(".price1").text("1,910만원");	$(".price2").text("1,860만원");
			$(".satisfaction1").text("✭✭✭✩✩");	$(".satisfaction2").text("✭✭✭✭✭");
		}else if(cnt == 2){
			$(".car").css("background-image", "url(/Images/Content/avante.png)");
			$(".price1").text("1,870만원");	$(".price2").text("1,830만원");
			$(".satisfaction1").text("✭✭✩✩✩");	$(".satisfaction2").text("✭✭✭✭✭");
		}else if(cnt == 3){
			$(".car").css("background-image", "url(/Images/Content/ray.png)");
			$(".price1").text("790만원");	$(".price2").text("770만원");
			$(".satisfaction1").text("✭✭✩✩✩");	$(".satisfaction2").text("✭✭✭✭✩");
		}else{
			$(".car").css("background-image", "url(/Images/Content/sm5.png)");
			$(".price1").text("1,930만원");	$(".price2").text("1,890만원");
			$(".satisfaction1").text("✭✭✭✩✩");	$(".satisfaction2").text("✭✭✭✭✭");	
		}
	}

	 
});




</script> 
	
	
	</head>
	<body>
		<div class="header">
			
			<div class="header-container">
<!-- 				<h1 class="logo"></h1> --><!-- <span class="description"></span> -->

				<div class="deal">
					<a href="#">거래조회</a>
				</div>
			
			</div>
			
		</div>
		
		<div class="main">
			 
			<div class="top">
				
				<div class="subject">
					<h1 class="intro">&nbsp;&nbsp;"중고차, 시세모르고 잘 사려면?"
						
					</h1>
 					<p>번호판까지 같은차량 최저가구매<br>✓</p>	 
				</div>
				
				<div class="content" id="content">

						
					<div class="explain" >
						

							<div class="top">								
								<div class="car">
								</div>

								<div class="compare">
									<div class="normalPrice">
										<ul class="outReport">
											<li>일반거래</li>
											<li class="price1"><!-- 1,910만원 --></li>
											<li class="false1">힘듦</li>
											<li class="satisfaction1"><!-- ✭✭✭☆☆ --></li>
										</ul>
									</div>
									<div class="vs">
										<ul class="target">
											<li>VS</li>
											<li>가격</li>
											<li>허위판별</li>
											<li>만족도</li>
										</ul>
									</div>
									<div class="downAuction">
										<ul class="inReport">
											<li>다운옥션</li>
											<li class="price2"><!-- 1,860만원 --></li>
											<li class="false2">손쉬움</li>
											<li class="satisfaction2"><!-- ✭✭✭✭✭ --></li>
										</ul>
									</div>
								</div>
							</div>
						
						<div class="enter">
							
<!-- 							<h2>내차판매, 하루면 충분합니다.</h2> -->
							
							
							
							<form action="/car" accept-charset="utf-8" method="post" id="myform">
								
							<ul class="send">
							

								
								<span class="alert" style="color: red"></span>
								
								<li>
								
<!--
								<input class="name" type="text" name="mourner" placeholder="차종(K5)" >
								<input class="phone" type="number" name="phone" placeholder="핸드폰번호" >
-->
								</li>
								<li>
									<input type="submit" value="최저가 확인하기">
								</li>
								<li><a class="detail"><!-- 부고장 샘플 보기 --></a></li>
							</ul>
							</form>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
		
		
		<div class="footer">
			<div class="container">
				
				
			</div>
			
		</div>
		
		
		
	
	</body>
	
	
</html>
