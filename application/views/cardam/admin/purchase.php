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
html, body, div, p, h1, h2, h3, ul, ol, li, label,input,span, footer,pre, a ,tr, th, td{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		text-decoration: none;
	} 
	
		table{
		border-collapse:collapse;
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
		min-width: 72px;
		max-width: 72px;
		height: 100%;

	}

	.container-right{
		width: 100%;
		height: 100%;
		background-color: rgba(242, 249, 255, 0.25);
		z-index: 40;
		min-width: 750px;
			
	}	
	
	.container-right .header{
		width: 100%;
		height: 60px;
		border-bottom: 1px solid #c3c3c3;
		z-index: 50;
		margin-top: 0;
		background-color: #fff;
	}
	
	.container-right .pay-title{
		width: 100%;
		height: 80px;
		text-indent: 10px;
	}
	
	.container-right .pay-title h1{
		margin-top: 10px;
		font-size: 18pt;
		margin-bottom: 5px;
		color: #73879C;
	}
	
	.container-right .pay-title p{
		text-indent: 13px;
		color: #9ba1a8;
	}
	
	.container-right .pay-container{
		width: 100%;
		height: auto;
		
		display: flex;
		flex-direction: row;
	}



	.container-right .pay-container .buyer{
		width: 50%;
		height:200px;
		display: inline-block;
		flex: 1 50%;
		margin-left: 15px;
		margin-right: 7.5px;
		
		min-width: 350px;
		
	}
	
	.container-right .pay-container .seller{
		width: 50%;
		height:200px;

		display: inline-block;
		flex: 1 50%;
		margin-left: 7.5px;
		margin-right: 15px;
		min-width: 350px;

	}
	
	.buyer .buyer-con , .seller .seller-con{
		width: 100%;
		height: 100%;
		border:1px solid rgba(125, 124, 135, 0.63);	
		background-color: #fff;	
	}
	
	.container-right .pay-container h2{
		font-size: 13pt;
		width: 90%;
		height: 50px;
		margin: 0 auto;
		font-weight: 400;
		border-bottom: 2px solid rgba(125, 124, 135, 0.63);
		line-height: 3;
		text-indent: 5px;
		color: #73879C;
	}
	
	
	.container-right .pay-container .buyer .buyer-h, .container-right .pay-container .seller .seller-h{
		width: 100%;
		height: 50px;	
	}
	.container-right .pay-container .buyer .buyer-d, .container-right .pay-container .buyer .buyer-d{
		width: 100%;
		height: 150px;
	}
	
	.buyer-d ul , .seller-d ul{
		width: 90%;
		height: 150px;
		margin: 20px auto;
	}
	
	.buyer-d ul li, .seller-d ul li{
		margin-bottom: 10px;
		color: #73879C;
		font-size: 10pt;
		height: 15px;
	}
	
	.buyer-d ul li input[type="button"], .seller-d ul li input[type="button"]{
		float: right;
		width: 150px;
		height: 30px;
		position: relative;
		top: -15px;
		background-color: rgba(131, 181, 168, 0.1);
		border: 1px solid rgba(103, 180, 189, 0.5);
		color: rgba(99, 99, 99, 0.77);
		font-size: 10pt;
		cursor: pointer;
	}
	
	.container-right .invoice{
		margin-top: 15px;
		display: flex;
		flex-direction: row;
		width: 100%;
		height: auto;
	}
	.container-right .invoice .invoice-con{
		flex: 1 100%;
		width: 100%;
		height: auto;
		background-color: #fff;
		margin-left: 15px;
		margin-right: 15px;
		border:1px solid rgba(125, 124, 135, 0.63);			
	}
	
	.container-right .invoice .invoice-con .invoice-h h2{
		font-size: 13pt;
		width: 95%;
		height: 50px;
		margin: 0 auto;
		font-weight: 400;
		border-bottom: 2px solid rgba(125, 124, 135, 0.63);
		line-height: 3;
		text-indent: 5px;
		color: #73879C;
	}
	
	.container-right .invoice .invoice-con .invoice-h h2 span{
		font-size: 9pt;
	}

	.container-right .invoice .invoice-con .invoice-d table{
		width: 95%;
		height: auto;
		margin: 15px auto;
	
	}
	


	
	table thead, table tbody{
		text-align: left;	
		text-indent: 5px;
		font-size: 10pt;	
	}
	
	table thead tr{
		height: 30px;
		color: #fff;
	background-color: rgba(66, 61, 83, 0.5);
	}
	
	table thead tr td{
		
	}
	
	
	table tbody tr{
		height: 30px;
		border-bottom: 1px solid rgba(125, 124, 135, 0.43);
		color: #73879C;
	}
	
	table tbody tr th{
		font-weight: 400;
	}
	
	table caption{
		text-align: right;
		font-size: 9pt;
		height: 17px;
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
				
			</div>
			<div class="pay-title">
			<h1>차량매입</h1><p>실시간 차량매입 매칭과 판매자 정보를 확인할 수 있습니다.</p>
			</div>
			
			<div class="invoice">
				<div class="invoice-con">
					<div class="invoice-h"><h2>매칭기록 <span>*최근 20건까지 노출</span></h2></div>
					<div class="invoice-d">
						<table>
							<caption>순서 : 내림차순</caption>
							<thead>
								<tr>
									<th>매칭번호</th>
									<th>차종</th>
									<th>연락처</th>
									<th>접속위치</th>

									<th>상품</th>
									<th>대차</th>
									<th>매칭날짜</th>
									<th>상태</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i = 0 ; $i < sizeof($purchase) ;$i++){ ?>
								<tr>
									<td><?php echo ($i + 1) ?></td>
									<th><?php echo $purchase[$i]['p_model'] ?></th>
									<th><?php echo $purchase[$i]['p_phone'] ?></th>
									<th><?php echo $purchase[$i]['p_region'] ?></th>
									<th>차량매입</th>									
									<th><?php if($purchase[$i]['p_buy'] == 1){echo "O";}else{echo "X";}?></th>
									<th><?php echo $purchase[$i]['p_regdate'] ?></th>
									<th>상담대기</th>
								</tr>
								<?php } ?>
<!--
								<tr>
									<td>01</td>
									<th>LF쏘나타</th>
									<th>01077772222</th>
									<th>KR, Incheon</th>
									<th>차량매입</th>
									<th>May 24, 2014 10:55:33 PM</th>
									<th>상담대기</th>
								</tr>
-->

							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>
								
		</div>
		
		
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>