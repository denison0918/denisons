<html>
	
	<head>
		<meta charset="utf-8">
		
		<style>
			html{
				min-width: 320px;
				min-height: 468px;

			}
			
			li{
/* 				text-decoration: none !important; */
				list-style: none;
			}
html, body, div, p, h1, h2, h3, ul, ol, li, label,input,span, footer,pre, a{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		text-decoration: none;
	} 
	
	
	
	body{
/*
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/admin-login2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
*/
	}
	
	.main{
		width: 100%;
		height: 100%;
			   	display: -ms-flexbox;
   	-ms-flex-align: center;
   	 
   	display: -webkit-flex;
   	-webkit-flex-align: center;
   	-webkit-align-items: center;
   	 
   	display: flex;
   	align-items: center;
   	display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-pack: center;
  -webkit-box-align: center;

   display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-pack: center;
  -moz-box-align: center;

   display: box;
  box-orient: vertical;
  box-pack: center;
  box-align: center;
  
  
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;
	   
	   
	}
	
	.container{
		width:100%;
		height: 100%;
		box-shadow: 1px 1px 20px rgba(255,255,255,0.8); 
		background-color: rgba(255,255,255,1);
		margin: 0 auto;
	
					   	display: -ms-flexbox;
   	-ms-flex-align: center;
   	 
   	display: -webkit-flex;
   	-webkit-flex-align: center;
   	-webkit-align-items: center;
   	 
   	display: flex;
   	align-items: center;
   	display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-pack: center;
  -webkit-box-align: center;

   display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-pack: center;
  -moz-box-align: center;

   display: box;
  box-orient: vertical;
  box-pack: center;
  box-align: center;
  
  
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;
	
	}
	
	.container-left{
		width: 70px;
		height: 100%;
		background-color: rgba(219, 220, 230, 0.2);
		background-color: rgba(237, 238, 241, 1);
		
		border-right: 1px solid rgb(219, 220, 230);
		box-shadow: 0px 0px 3px black;
		z-index: 1000;
		position: fixed;
		top: 0px;
	}
	
	.container-left .top-logo{
		width: 70px;
		height: 90px;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/cardam8_2.png);
	background-size: 65px 36px;
	background-repeat: no-repeat;
	background-position: center center;
	margin-bottom: 20px;
	cursor: pointer;
	}
	
	.container-left .nav, .container-left .nav ul{
		width: 70px;
		height: auto;
	}
	
	.container-left .nav ul li {
		width: 70px;
		height: 70px;

		margin-bottom: 12px;
		display: block;
	}

	.container-left .nav ul li a{
		width: 70px;
		height: 70px;
		text-align: center;
		display: inherit;
		font-size: 9pt;
		line-height: 2;
		color: #35388c;
		font-weight: bold;
		cursor: pointer;
	}
	

	.container-left .nav ul li a i{
		background-repeat: no-repeat;
		background-position: center center;
		display: inherit;
		width: 70px;
		height: 45px;
		background-size: 37px 37px;
	}
	
	
	.container-left .nav ul .eredaer a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/ereader.png);}
	.container-left .nav ul .id-card a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/id-card.png);}
	.container-left .nav ul .car a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/car.png);}
	.container-left .nav ul .car-key a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/car-key.png);}
	.container-left .nav ul .video-chat a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/video-chat.png);}
	.container-left .nav ul .credit-card a i{background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/credit-card.png);}

	.container .left-padding{
		width: 70px;
		height: 100%;
	}

	.container-right{
		width: 100%;
		height: 100%;
		background-color: rgba(255,255, 255, 0.3);
		z-index: 40;
		
			
	}	
	
	.container-right .header{
		width: 100%;
		height: 60px;
		border-bottom: 1px solid #c3c3c3;
		z-index: 50;
	}	

		</style>
		
	</head>
	<body>
		<header>
			
		<header>
		<div class="main">
			
		<div class="container">
			
		
		<div class="container-left">
			<div class="top-logo" onclick=location.href="/car_admin"></div>
			<div class="nav">
				<ul>
					<li class="eredaer"><a href="/car_admin"><i></i>대시보드</a></li>
					<li class="id-card"><a href="/car_myadmin"><i></i>내정보</a></li>
					<li class="car"><a><i></i>매물현황</a></li>
					<li class="car-key"><a href="/car_puradmin"><i></i>차량매입</a></li>
					<li class="video-chat"><a><i></i>고객상담</a></li>
					<li class="credit-card"><a href="/car_padmin"><i></i>결제정보</a></li>
				</ul>
			</div>
		</div>
		<div class="left-padding"></div>
		<div class="container-right">
			<div class="header">
				<div style="float: right;">로그아웃</div>
			</div>
		</div>
								
		</div>
		
		
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>