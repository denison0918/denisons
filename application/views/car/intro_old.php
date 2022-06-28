    <html>	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
		
		<link rel="stylesheet" media="only screen and (min-width:480px)" href="../../../css/car/intro_d.css"  type="text/css" charset="utf-8"/>
<!--
		<link rel="stylesheet" media="only screen and (-webkit-device-pixel-ratio: 1.5)" href="../../../css/car/intro_m1.css" />

		<link rel="stylesheet" media="only screen and (max-width:479px)" href="../../../css/car/intro_m2.css" />
-->
  			<meta property="og:type" content="website"> 
			<meta property="og:title" content="기억(GEIOK)">
			<meta property="og:description" content="품격있는 부고장">
 			<meta property="og:image" content="http://www.gieok.xyz/Images/Content/logo_d.png"> 

	
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
   
   $( ".description" ).text( "Sell Your Car" ).fadeIn( 1350 );
   
   
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
    
	 
	 
	 
	 
	 
});






</script> 
	
	
	</head>
	<body>
		<div class="header">
			
			<div>
<!-- 				<h1 class="logo"></h1><span class="description"></span> -->
			</div>
			
		</div>
		
		<div class="main">
			 
			<div class="top">
				
				<div class="subject">
					<h1 class="intro">내차팔때 재값받는 아주 간결한 단계</h1>	
				</div>
				
				<div class="content" id="content">
			
<!--
					<div class="view">
						<div class="top"></div>
						<div class="middle"></div>
						<div class="middle2" id="detail"></div>
						<div class="bottom"></div>	
						<div class="cherish">
							<img src="/Images/Content/Intro/kys.png"></img>
						</div>
					</div>
-->
	
					<div class="stage">
						
						<div class="councel">
							<p>최고가 다이렉트 상담!</p>	
						</div>
						<div class="estimate">
							<p>무료방문견적</p>
						</div>
						<div class="deal">
							<p>인계 및 대금처리</p>	
						</div>
						
					</div>
						
					<div class="explain">
						
						<div>
							
							<h2>내차판매, 하루면 충분합니다.</h2>
							
							
							
							<form action="/registry" accept-charset="utf-8" method="post" id="myform">
								
							<ul>
							
								<li>
									<ul>
										<li></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</li>
								
								<span class="alert" style="color: red"></span>
								
								<li>
								
								<input class="name" type="text" name="mourner" placeholder="차종(K5)" >
								<input class="phone" type="number" name="phone" placeholder="핸드폰번호" >
								</li>
								<li>
									<input type="submit" value="판매상담하기">
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
			<div class="container"></div>
			
		</div>
			
	</body>
</html>