<html lang="ko">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta proerty="og:title" content="자동차의 모든것 카담" />
<meta proerty="og:url" content="" />
<meta proerty="og:image" content="" />
<meta proerty="og:description" content="내차팔기, 내차구매, 시세확인, 자동차 소식 & 팁" />

<meta charset="utf-8">
	<head>
		<style>
			*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;
				-webkit-overflow-scrolling: auto;
				-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
			a{text-decoration: none;color: inherit;cursor: pointer}
			p{word-break: keep-all;}
			li{list-style: none;}
			button {
			    overflow: visible;
			    border: none;
			    background: transparent none;
			    box-shadow: none;
			    line-height: 1;
			    cursor: pointer;
			}
			body{width: 100%;}
			
			.layerOpened{overflow: hidden;}
			
		
			#wrap {width: 100%}
			
			#wrap .top.bg{
				width: 100%;

				background-color: #3c9283;
				position: relative;
			}
			
			#wrap .top.bg:before{			
				content: '';
				display: block;
				clear: both;
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				height: 100%;
				background: #30c07d;
				animation: AnimationOpacity 3s ease infinite;
			}
			
			#wrap header{
				width: 100%;
				height: 55px;
				border-bottom: 1px solid rgba(255, 255, 255, 0.3);
				
			}
			
			#wrap header .logo{
				background: url('http://img.cardam.co.kr/Content/desktop/footer-logo.png') no-repeat center center;
				background-size: contain;
				width: 55px;
				height: 55px;
				position: absolute;
				left: 20px;
			}
			
			#wrap .bigmenu{
				position: relative;

				overflow: hidden;
				    box-shadow: 0 1px 0 0 rgba(199,199,199,0.7);
			}
			
			#wrap .bigmenu .banner a > span{
				display: block;
			}
			
			#wrap .bigmenu .banner:first-of-type {
			    border: 0;
			}
			
			#wrap .bigmenu .banner a{
				position: relative;
				padding: 20px 0 15px;
				display: block;
			    
			}
			
			#wrap .bigmenu .banner{
				position: relative;
				padding: 10px 0 13px;
				margin-left: 32px;
				color: #fff;
				border-top: 1px solid rgba(255,255,255,.1);
			}
			
			#wrap .bigmenu .banner .tit{
				font-size: 1.9rem;
				line-height: 30px;
			}
			
			#wrap .bigmenu .banner .txt{
				font-size: 0.9rem;
				margin-top: 9px;
				color: rgba(255,255,255,0.7);
			}
			
			
			#wrap .bigmenu .banner .ico{
					position: absolute;
					top: 50%;
					right: 20px;
					width: 36px;
					height: 36px;
					margin-top: -18px;
					border-radius: 18px;
					background: rgba(255, 255, 255, .1);
					box-shadow: 1px 1px 5px rgba(29, 35, 69, 0.1);
					vertical-align: top;
			}
			#wrap .bigmenu .banner .ico::after{
					content: '';
					position: absolute;
					top: 50%;
					left: 50%;
					width: 8px;
					height: 8px;
					margin-left: -7px;
					margin-top: -5px;
					border-left: 2px solid #ffffff;
					border-bottom: 2px solid #ffffff;
					transform: rotate(-135deg);
				}
			
/* common style */			
			#wrap #container{
				background-color: #eceff1;
			}
			
			#wrap #container .section{
				box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
				background-color: #fff;
			}
			
			#wrap #container .tips .tip_box{	
				padding: 17px 20px;
			
			}
			
			#wrap #container .tips a{
				position: relative;
				padding-left: 59px;
				display: block;
			}
			
			#wrap #container .tips .ico_tip{
				position: absolute;
				width: 44px;
				height: 44px;
				left: 0;
			}
			
			#wrap #container .tips .txt{
				font-size: 16px;
				line-height: 24px;
				color: #20925d;
				letter-spacing: -0.2;
			}
			#wrap #container .tips .stxt{
				font-size: 13px;
				line-height: 1.5;
				color: rgb(136,136,136);
			}
			
			#wrap #container .review .review_box{	
				padding: 17px 0 17px 0px;
				margin-top: 10px;
/* 				height: 314px; */
				height: 325px;
/*
				position: relative;
				display: flex;
				justify-content: space-between;
*/
			}
			
			/* swiper custom */
			#wrap #container .review .review_box .news-swiper-container > .swiper-wrapper{
				height: auto;
			}
			#wrap #container .review .review_box .news-swiper-container > .swiper-scrollbar_box {
		    padding: 10px 18px 0 20px;
		    
		    }
    		#wrap #container .review .review_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar {
			    left: 0;
			    width: 100%;
			    height: 2px;
/* 			    background: rgba(255,255,255,0.2); */
				background: rgba(0,0,0,0.15);
			}
			#wrap #container .review .review_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar>.swiper-scrollbar-drag {
			    
/* 			    background: rgba(255,255,255,0.8); */
			    background: rgba(32,146,93,0.65);
			}
			#wrap #container .review .review_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar{
				border-radius: 10px;
			}			
			
			
			#wrap #container .customer .customer_box{	
				padding: 17px 20px;
				margin-top: 10px;
/*
				position: relative;
				display: flex;
				justify-content: space-between;
*/
			}
			
			
			
			#wrap #container .login .login_box{	
				padding: 17px 20px;
				margin-top: 10px;
				position: relative;
				display: flex;
				justify-content: space-between;
			
			}
			
			#wrap #container .login .login_box .txt{	
				font-size: 0.85rem;
				color: rgb(136,136,136);
				line-height: 1.5;
				
				
			
			}
			#wrap #container .login .login_box a{
				display: block;
				font-size: 10px;
				height: inherit;
				margin: auto 0 auto;
				
			}
			#wrap #container .login .login_box .auth{	
				height: 28px;
				width: 110px;
				font-size: 12.5px;
				padding: 16px 10px;
				line-height: 0.3;				
			}
			
			/* swiper custom */
			#wrap #container .news .news_box .news-swiper-container > .swiper-wrapper{
				height: auto;
			}
			#wrap #container .news .news_box .news-swiper-container > .swiper-scrollbar_box {
		    padding: 10px 18px 0 20px;
		    
		    }
    		#wrap #container .news .news_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar {
			    left: 0;
			    width: 100%;
			    height: 2px;
/* 			    background: rgba(255,255,255,0.2); */
				background: rgba(0,0,0,0.15);
			}
			#wrap #container .news .news_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar>.swiper-scrollbar-drag {
			    
/* 			    background: rgba(255,255,255,0.8); */
			    background: rgba(32,146,93,0.65);
			}
			#wrap #container .news .news_box .news-swiper-container > .swiper-scrollbar_box .news-scrollbar{
				border-radius: 10px;
			}
			
			#wrap #container .news .news_box{	
				padding: 17px 0px 17px 0px;
				margin-top: 10px;
/* 				background-color: #20925d; */
/* 				background: linear-gradient(165deg, #20925d 0%, #59b88b 100%); */
				height: 243px;
				
				
			}
			
			#wrap #container .news .news_box .tit{
				font-size: 1.05rem;
				color: rgba(255, 255, 255, .85);
				color: #20925d;
				font-weight: 500;
				margin-bottom: 10px;
				padding-left: 20px;
			}
			#wrap #container .news .news_box .news-li{
				width: auto;
				height: 158px;
				background-color: #000;
/* 			    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);	 */
			    border-radius: 4px;
			}
			#wrap #container .news .news_box .news-li:first-child{
				margin-left: 20px;
			}
			#wrap #container .news .news_box .news-li:last-child{
				margin-right: 20px;
			}
		
			#wrap #container .news .news_box .news-li a:after{
				content: ' ';
			    position: absolute;
			    display: block;
			    width: 100%;
			    height: 100%;
			    top: 0;
			    left: 0;
			    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.2) 45%, rgba(0,0,0,0.6) 75%, rgba(0,0,0,0.8) 100%);
/* 			    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 45%, rgba(255,255,255,0.8) 75%, rgba(255,255,255,0.8) 100%); */
			    z-index: 1;
				border-radius: 4px;
				border: 1px solid #c5c5c5;
			}
			#wrap #container .news .news_box .news-li img{
				min-width: 175px;
				max-width: 275px;
				width: auto;
				height: 158px;
				position: relative;
				top: 0;
				left: 0;
				border-radius: 4px;
				
			}
			#wrap #container .news .news_box .news-li .desc{
			    position: absolute;
			    display: block;
			    white-space: normal;
			    box-sizing: border-box;
			    bottom: 0px;
			    left: 0px;
			    width: 100%;
			    padding: 15px;
			    font-size: 17px;
			    color: #fff;
			    z-index: 2;
			}	
			#wrap #container .cs .call_box{	
				padding: 17px 20px;
				margin-top: 10px;
			
			}
			#wrap #container .cs .call_box .tit{
				font-size: 15px;	
				color: #525252;
				letter-spacing: -0.2;			
			}
			
			#wrap #container .cs .call_box .tit .des{
				font-size: 14px;
				color: #888;
				letter-spacing: -0.2;
			}
			
			#wrap #container .cs .call_box .tit:before{
				content: '';
				display: inline-block;
				width: 15px;
				height: 15px;
				margin-right: 5px;
				border-radius: 15px;
				background-color: rgba(0, 0, 0, .15);
				box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
				vertical-align: middle
			}
			
			#wrap #container .cs .call_box .tit.on:before{
				background-color: #2fe42f
			}
			
			#wrap #container .cs .cs_box ul li{
				padding: 17px 20px;
				padding-top: 0;
			}
			

			
			#wrap #container .cs .cs_box .cs_call{
				display: block;
				position: relative;
				width: 100%;
				height: 90px;
				padding-left: 20px;
				padding-top: 20px;
				padding-bottom: 20px;
				border: 1px solid #eeeeee;
				border-radius: 4px;
				box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08)
			}
			
			
			

			#wrap #container .cs .cs_box .cs_call > span{
				display: block;
			}	
			#wrap #container .cs .cs_box .cs_call .tit{
				color: rgba(255, 255, 255, .7);
				margin-bottom: 7px;
				font-size: 0.95rem;
				line-height: 1.15;
			}
			#wrap #container .cs .cs_box .cs_call .tel{
				color: #fff;
				font-size: 1.45rem;
				line-height: 1.3;
			}
			
			#wrap #container .cs .cs_box .fax .tit{
				color: rgba(0, 0, 0, .4);

			}
			#wrap #container .cs .cs_box .fax .tel{
				color: #000;
			}
			

			
			
			#wrap #container .cs .cs_box .cs_call .ico_call{
				position: absolute;
				top: 50%;
				right: 17px;
				width: 50px;
				height: 50px;
				margin-top: -25px;
				border: 1px solid #e6e6e6;
				border-radius: 25px;
				background: #ffffff url(https://img.issuepoll.net/card/am/call-answer.png) no-repeat center center;
				background-size: 24px auto;
				box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08)
			}
			
			#wrap #container .cs .cs_box .cs_call .ico_call.fax{
				background: #ffffff url(https://img.issuepoll.net/card/am/fax-machine.png) no-repeat center center;
				background-size: 23px auto;
			}
			
			

			
			
			#wrap #container .cs .cs_box .cs_call.bg_grid{
				border: none;
				background-color: #3c9283;
/* 				background: linear-gradient(135deg, #1976d2 0%, #2a9ffd 100%); */	
				background: linear-gradient(135deg, #20925d 0%, #59b88b 100%);		
			
			}	
			
			
			
			#wrap #container .service .service_box ul li{
				padding: 17px 20px;
				padding-top: 0;
			}
			
			
			#wrap #container .service .service_box{	
/* 				padding: 17px 20px; */

				padding-top: 17px;
				margin-top: 10px;
			
			}
			
			
			#wrap #container .service .service_box .box{
				position: relative;
				display: block;
				min-height: 110px;
				padding: 22px 70px 23px 19px;
				border: 1px solid #eeeeee;
				border-radius: 4px;
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .08)
			}
			
			#wrap #container .service .service_box .box > span{
				display: block;
			}	
				
			#wrap #container .service .service_box .box .tit{
				margin-bottom: 10px;
				color: #20925d;
				font-size: 1.1rem;
				line-height: 1;
				text-transform: uppercase;				
			}
			#wrap #container .service .service_box .box .txt{
				font-size: 0.8rem;
				color: rgb(136,136,136);
				line-height: 1.45;
				letter-spacing: -0.2;
			}
			
			#wrap #container .service .service_box .box .ico{
				position: absolute;
				top: 50%;
				right: 22px;
				width: 40px;
				height: 40px;
				margin-top: -20px
			}			
			
			#wrap #container .service .service_box .box .ico > img{
				width: 100%;
				height: auto;
			}
			
			#wrap footer{
				background-color: #eceff1;
				text-align: center;
				color: rgb(136, 136, 136);
				border-top: 1px solid #e1e1e1;
			}
			
			#wrap footer .layout{
				padding: 20px 0;
			}
			
			#wrap footer .ft_customer{
				font-size: 1.05rem;
			}
			
			#wrap footer .ft_info{
				margin-top: 15px;
				font-size: 0.8rem;

				
			}
			
			#wrap footer .ft_info p span{
				display: inline-block;
			    position: relative;
			    margin: 2px 8px;
			}
			
			#wrap footer .ft_info p span + span::before{
				content: '|';
			    display: block;
			    position: absolute;
			    margin-left: -10px;
			    color: #dddddd;
			}
			



			
.btn {
	border: 1px solid #eee;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
	line-height: 1;
	display: inline-block;
	background-color: #fff;
	color: #20925d;
	border-radius: 5px;
	padding: 20px;
	font-size: 1.2rem;
	
}
		

		
@-moz-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@-webkit-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}
		</style>
		

<!-- sub/buy style -->
<style>
	
	.review-swiper-container {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
	
	.news-swiper-container {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
	
</style>
		
		<link rel="stylesheet" href="https://css.issuepoll.net/card/am/swiper.min.css">
		<link rel="stylesheet" href="https://css.issuepoll.net/card/am/common_v1.css?version=9">
		<link rel="manifest" href="manifest.json?version=3">
		<script src="https://js.issuepoll.net/card/am/common_v13.js?version=9" type="text/javascript"></script>
		<script src="https://js.issuepoll.net/card/am/swiper.min.js"></script>
		<script>
			var getJSON = function(url, callback) {
		    var xhr = new XMLHttpRequest();
		    xhr.open('GET', url, true);
		    xhr.responseType = 'json';
		    xhr.onload = function() {
		      var status = xhr.status;
		      if (status === 200) {
		        callback(null, xhr.response);
		      } else {
		        callback(status, xhr.response);
		      }
		    };
		    xhr.send();
		};

		</script>
	</head>
	<body>
		<div id="wrap">
			<div class="top bg">
				<header>
					<div class="layout">
						<a class="logo" href="./"></a>
					</div>
				</header>
				<div class="bigmenu">
					<div class="banner buy">
						<a href="javascript:includeHTML('sell-include-html');">
							<span class="tit">차량구매/대차교환</span>
							<span class="txt">어떤 차량을 구매하세요?</span>
							<span class="ico"></span>	
						</a>
					</div>
					<div class="banner sell">
						<a href="javascript:includeHTML('buy-include-html');">
							<span class="tit">중고차판매</span>
							<span class="txt">어떤 차량을 판매하세요?</span>
							<span class="ico"></span>	
						</a>
					</div>
					<div class="banner etc">
						<a href="javascript:includeHTML('ensure-include-html');">
							<span class="tit">자동차보험</span>
							<span class="txt">다이렉트로 더욱 저렴하게!</span>
							<span class="ico"></span>	
						</a>
					</div>	
				</div>
			</div>
			<div id="container">
				
				<div class="section tips">
					<div class="tip_box">
						<a href="javascript:window.open('https://www.carhistory.or.kr/main.car?realm=');">
							<div class="ico_tip">
								<img src="https://is5-ssl.mzstatic.com/image/thumb/Purple62/v4/45/f9/51/45f95103-4fc6-2297-7f01-3f7547e96271/mzm.qywqogfg.jpg/246x0w.jpg" width="100%">
							</div>
							<p class="txt">중고차 사고/보험이력조회는 필수</p>
							<p class="stxt">카히스토리에서 간편 조회하기</p>
						</a>
					</div>
				</div>
<!--
				<div class="section login" >
					<div class="login_box">
						<p class="txt">로그인하시면 서비스를 간편하게<br> 이용할 수 있습니다.</p>
						<a href="javascript:void(0)">
							<button type="button" class="btn auth">비회원 로그인</button>			
						</a>
					</div>
				</div>
-->

<style>
	#wrap #container .customer .customer_box .tit{
		padding: 0 20px 10px 0;
		font-size: 1.05rem;
	    color: rgba(255, 255, 255, .85);
	    color: #20925d;
	    font-weight: 400;
/* 	    margin-bottom: 10px;  */ 
	    border-bottom: 1px solid #e6e6e6;
	    margin-right: -20px; 
	}
	
	#wrap #container .customer .customer_box .head{
		position: relative;
		line-height: 2em;
	}
	
	.customer_box .head .link_a{
		position: absolute;
		top: 0;
		right: 0;
		font-size: 14px;
		
		display: inline-block;
	    padding-right: 13px;
	    color: #888888;
	    background: url('https://img.issuepoll.net/card/am/link_arr.png') no-repeat 100% 50%;
	    background-size: 5px auto;
	    background-position: center right;
	}
	
	#wrap #container .customer .customer_list li{
		    position: relative;
		    padding: 13px 0 0;
		    font-size: 1.6rem;
		    color: #333333;
	}
	
	#wrap #container .customer .customer_list li::after {
    content: '';
    display: block;
    padding-bottom: 15px;
    border-bottom: 1px solid #eeeeee;
    margin-right: -20px;
	}
	
	#wrap #container .customer .customer_list li:last-child::after {
    border-bottom: none;
    padding-bottom: 0px;
	}
	
	#wrap #container .customer .customer_list li .txt{
		display: block;
		padding-right: 25px;
		font-size: 15px;
		color: #353535;
	}
	#wrap #container .customer .customer_list li .date{
		display: block;
		font-size: 13px;
		color: #888;
		padding-top: 5px;
	}
	#wrap #container .customer .customer_list li .type{
		position: absolute;
		right: 5px;
		display: inline-block;
		top: 28px;
		font-size: 14.5px;
		color: #888;
	}
	
</style>

<style>
	
	#wrap #container .review .review_box .tit{
		
		font-size: 1.1rem;
	    color: rgba(255, 255, 255, .85);
	    color: #20925d;
	    font-weight: 400;
/* 	    margin-bottom: 10px;  */ 
/* 	    border-bottom: 1px solid #e6e6e6; */
	    
	}
	
	#wrap #container .review .review_box .sub_tit{
		padding: 0 20px 10px 0;
		font-size: 14px;
	    color: rgba(255, 255, 255, .85);
	    color: #888;;
	
	    margin-bottom: 18px;  
	    border-bottom: 1px solid #e6e6e6;
/* 	    margin-right: -20px;  */
	}
	
	#wrap #container .review .review_box .head{
		position: relative;
		line-height: 1.55em;
		padding-left: 20px;
	}
	
	.review_box .head .link_a{
		position: absolute;
		top: 0;
		right: 20px;
		font-size: 14px;
		
		display: inline-block;
	    padding-right: 13px;
	    color: #888888;
	    background: url('https://img.issuepoll.net/card/am/link_arr.png') no-repeat 100% 50%;
	    background-size: 5px auto;
	    background-position: center right;
	}
	#wrap #container .review .review_box .review-li{
		width: auto;
		height: 200px;
		
/* 		 box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);	 */
	    border-radius: 4px;
	    width: 170px;
	    overflow: hidden;
	    border: 1px solid #e6e6e6;
	}
	#wrap #container .review .review_box .review-li:first-child{
		margin-left: 20px;
	}
	#wrap #container .review .review_box .review-li:last-child{
		margin-right: 20px;
	}
	
	#wrap #container .review .review_box .review-li .thumb{
		height: 120px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		position: relative;
	}
	#wrap #container .review .review_box .review-li .thumb > img{
		width: 100%;
		height: 100%;
	}
	#wrap #container .review .review_box .review-li .thumb .sticker{
		position: absolute;
		bottom: 10px;
		left: 10px;
	}
	
	.sticker .type{
		display: inline-block;
	    padding: 4px 3px 3px 3px;
	    border-radius: 2px;
	    color: #fff;
	    
	    font-size: 0.8rem;

	    
	}
	
	.sticker .type.t{
		background: #284c8f;
		border: 1px solid #284c8f;
	}
	.sticker .type.s{
		background: #3c9283;
		border: 1px solid #3c9283;
	}
	.sticker .type.b{
		background: #91873c;
		border: 1px solid #91873c;
	}
	
	
	#wrap #container .review .review_box .review-li .carInfo{
		padding: 10px 10px 5px;
		height: 80px;
		position: relative;
		width: inherit;
		width: 170px;
	}
	#wrap #container .review .review_box .review-li .carInfo > p{
		text-align: left;
	}
	#wrap #container .review .review_box .review-li .carInfo .carName{
		font-size: 15px;
		
	}
	#wrap #container .review .review_box .review-li .carInfo .carRate{
		font-size: 13px;
		color: #888;
		padding: 5px 0;
	}
	#wrap #container .review .review_box .review-li .carInfo .carTxt{
		font-size: 17px;
		
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: pre;
		resize: horizontal;
		width: inherit;
		width: 150px;
		padding-top: 10px;
	}
</style>


				<div class="section review">
					<div class="review_box">
						<div class="head">
							<h3 class="tit">판매후기</h3>
							<p class="sub_tit">카담에 판매한 고객님의 생생후기</p>
							<a href="/review" class="link_a">더보기</a>
						</div>
<!--
						<ul class="customer_list">
							<li>
								<a href="javascript:return false" class="txt">2010년식 아반떼 HD<span class="date">2018.12.23</span><span class="type">판매</span></a>
							</li>
							<li>
								<a href="javascript:return false" class="txt">아반떼 AD<span class="date">2018.12.23</span><span class="type">대차</span></a>
							</li>
							<li>
								<a href="javascript:return false" class="txt">2012년식 그랜저HG<span class="date">2018.12.23</span><span class="type">판매</span></a>
							</li>

						</ul>
-->
						
						<div class="news-swiper-container" style="height: 212px">
							<ul class="swiper-wrapper" id="review">
								
<!--
								<li class="swiper-slide review-li">
<a href="javascript:void(0)">
									<div class="thumb">
										<img src="https://img.issuepoll.net/card/am/review/5.jpeg">
										<div class="sticker">
											<span class="type t">대차</span>
										</div>
									</div>
									<div class="carInfo">
										<p class="carName">포르쉐 카이엔</p>
										<p class="carTxt">첫차팔고 대차</p>
										<p class="carRate">[한줄평가]</p>
										
									</div>
									</a>
								</li>
-->
								
							</ul>
					
							
							
						<div class="swiper-scrollbar_box">
								<div class="news-scrollbar"></div>
						</div>
						</div>
					</div>
					

					
				</div>
				
				<script>					
					getJSON('http://m.cardam.co.kr/get_rv/0/5', review_list);	
					function review_list(status,response){								
						var rv = document.getElementById('review');												
						response.forEach(function(idx){							
							list = document.createElement('li');
							link = document.createElement('a');
							thumb = document.createElement('div');
							
							img = document.createElement('img');
							sticker = document.createElement('div');
							type = document.createElement('span');
							
							carInfo = document.createElement('div');
							carTxt = document.createElement('p');
							carRate = document.createElement('p');
							
							list.className = 'swiper-slide review-li';
							thumb.className = 'thumb';
							carInfo.className = 'carInfo';
							sticker.className = 'sticker';
							type.className = "type "+idx.sticker;
							
							
							carTxt.className = 'carTxt';
							carRate.className = 'carRate';
							
							carTxt.appendChild(document.createTextNode(idx.post));
							carRate.appendChild(document.createTextNode('[한줄평가]'));
							type.appendChild(document.createTextNode(idx.type));
							img.src = idx.img;

							list.appendChild(link);
							link.appendChild(thumb);
							link.appendChild(carInfo);	
							
							thumb.appendChild(img);
							thumb.appendChild(sticker);
							sticker.appendChild(type);
							
							carInfo.appendChild(carTxt);
							carInfo.appendChild(carRate);					
							
							rv.appendChild(list);
							init_cs_swiper();
						});
						
					}
				</script>
				
				
					<script>
						function init_cs_swiper(){
							var review = new Swiper ('.news-swiper-container', {
							    scrollbarHide: false,
							    slidesPerView: 'auto',
							    spaceBetween: 10,
							    freeMode : true,
							    grabCursor: true,
							    scrollbar: {
							        el: '.news-scrollbar',
							    }
							});    
					   }
						
					</script>
				
				<div class="section customer">
					<div class="customer_box">
						<div class="head">
							<h3 class="tit">실시간 상담신청</h3>
							<a href="/cs" class="link_a">더보기</a>
						</div>
						<ul class="customer_list" id="cs">
<!--
							<li>
								<a href="javascript:return false" class="txt">2010년식 아반떼 HD<span class="date">2018.12.23</span><span class="type">판매</span></a>
							</li>
-->

						</ul>
					</div>
				</div>
				
				<script>					
					getJSON('http://m.cardam.co.kr/get_cs/0/6', cs_list);	
					function cs_list(status,response){											
						var cs = document.getElementById('cs');												
						response.forEach(function(idx){							
							list = document.createElement('li');
							link = document.createElement('a');
							date = document.createElement('span');
							type = document.createElement('span');
							
							link.className = 'txt';
							date.className = 'date';
							type.className = 'type';

							
							link.appendChild(document.createTextNode(idx.title));
							date.appendChild(document.createTextNode(idx.date));
							type.appendChild(document.createTextNode(idx.type));

							list.appendChild(link);
							link.appendChild(date);
							link.appendChild(type);							
							
							cs.appendChild(list);
						});
						
					}

					
					
					
				</script>

				

				
				<div class="section service">
					<div class="service_box">
						<ul>
							<li>
								<a class="box car" href="javascript:void(0)">
									<span class="tit">이벤트 · 혜택</span>
									<span class="txt">카담의 새로운 이벤트 · 혜택들을<br>바로 확인해주세요</span>
									<span class="ico"><img alt="자동차 아이콘" src="https://img.issuepoll.net/card/am/sedan.png"></span>
								</a>
							</li>
							<li>
								<a class="box car" href="/review">
									<span class="tit">이용후기 등록하기</span>
									<span class="txt">만족스러웠던 한줄평가후기 작성하고<br>스타벅스 커피 기프티콘 받으세요</span>
									<span class="ico"><img alt="자동차 아이콘" src="https://img.issuepoll.net/card/am/bigfoot.png"></span>
								</a>
							</li>
							<li>
								<a class="box car" href="/info">
									<span class="tit">구비서류 및 이용안내</span>
									<span class="txt">방문 전 미리 간편하게<br>구비서류 리스트를 확인하세요</span>
									<span class="ico"><img alt="자동차 아이콘" src="https://img.issuepoll.net/card/am/cabriolet.png"></span>
								</a>
							</li>

<!--
							<li>
								<a class="box car" href="javascript:void(0)">
									<span class="tit">중고차 관련 소식 & 팁</span>
									<span class="txt">자동차를 사고팔기 전 꼭 알아야할<br>관련된 뉴스·언론기사를 모았습니다</span>
									<span class="ico"><img alt="자동차 아이콘" src="https://img.issuepoll.net/card/am/van.png"></span>
								</a>
							</li>
-->							
						</ul>						
					</div>
				</div>
				<div class="section news">
					<div class="news_box">
						<h2 class="tit">자동차 관련 소식 & 팁</h2>
						<div class="news-swiper-container">
							<div class="swiper-wrapper">
								
								<div class="swiper-slide news-li">
<a href="javascript:window.open('http://news.joins.com/article/22222587')">
										<span>
											<img src="http://pds.joins.com//news/component/htmlphoto_mmdata/201712/21/7cdbe88c-6b12-4760-a1a1-1eecad70027c.jpg" />
										</span>
										<span class="desc">중고차도 '13월 보너스'… 환급액은?</span>
<!-- 										<em></em> -->
									</a>
								</div>
								<div class="swiper-slide news-li">
									<a href="javascript:window.open('http://www.autodaily.co.kr/news/articleView.html?idxno=402085')">
										<span>
											<img src="http://imgnews.naver.com/image/081/2017/04/19/0002814712_001_20170419110608973.jpg" />
										</span>
										<span class="desc">서울 노후 경유차 운행제한, 최대 200만원 벌금...</span>
<!-- 										<em></em> -->
									</a>
								</div>
								<div class="swiper-slide news-li">
<a href="javascript:window.open('http://news.hankyung.com/article/2018052936041')">
										<span>
											<img src="http://img.hankyung.com/photo/201805/AA.16823048.1.jpg" />
										</span>
										<span class="desc">중고차 시세 확인 땐 높은 가격부터 살펴봐야</span>
<!-- 										<em></em> -->
									</a>
								</div>
								<div class="swiper-slide news-li">
<a href="javascript:window.open('https://www.huffingtonpost.kr/entry/story_kr_5a73f1abe4b06ee97af12bcd')">
										<span>
											<img src="https://img.huffingtonpost.com/asset/5a77f9a92d00004900943b9b.jpeg?ops=scalefit_630_noupscale" />
										</span>
										<span class="desc">차 살 때 간과하기 쉬운, 진짜 현실적인 팁 5</span>
<!-- 										<em></em> -->
									</a>
								</div>
								
								
							</div>
							
							<div class="swiper-scrollbar_box">
								<div class="news-scrollbar"></div>
							</div>
						</div>
					</div>
<!-- 					<script src="https://js.issuepoll.net/card/am/swiper.min.js"></script> -->
					<script>
						
					  var news = new Swiper ('.news-swiper-container', {
					    scrollbarHide: false,
					    slidesPerView: 'auto',
					    spaceBetween: 10,
					    freeMode : true,
					    grabCursor: true,
					    scrollbar: {
					        el: '.news-scrollbar',
					      }
					    });
						
					</script>
				</div>
				
				<div class="section cs">
					<div class="call_box">
						<div>
							<p class="tit on" id="callYN">
								현재 상담 가능한 시간입니다.
								<span class="des">(평일 9시 - 20시)</span>
							</p>
						</div>
					</div>	
					<div class="cs_box">	
						<ul>
							<li>
								<a class="cs_call call bg_grid" href="tel:032-297-8500">
									<span class="tit">고객상담센터</span>
									<span class="tel">032-297-8500</span>
									<span class="ico_call"></span>								
								</a>
							</li>
							<li>
								<a class="cs_call fax" href="sms:050-2342-2342;?&body=내차팔기 상담 부탁드립니다.">
									<span class="tit">문자상담접수(상시가능)</span>
									<span class="tel">050-0000-0000</span>
									<span class="ico_call fax"></span>								
								</a>
							</li>

						</ul>					
					</div>
					
				</div>
				
				<script>
					function checkTime(){
					 call = document.getElementById('callYN');
					 des = document.createElement('span');
					 des.className = 'des';
					 des.innerHTML = '(평일 9시 - 20시)';
					 hours = new Date().getHours();					 
					 if(hours > 9 && hours < 20){
						 call.className = 'tit on';
						 call.innerHTML = '현재 상담 가능한 시간입니다. ';
					 }else{
						  call.className = 'tit off';
						  call.innerHTML = '현재 상담 가능한 시간이 아닙니다. ';
					 }
					 call.appendChild(des);
					}
					checkTime();
					

					
				</script>
				
			</div>
			<footer>
				<div class="layout">
					<div class="ft_customer">
						<p>
							<a href="tel:032-297-8500">고객센터 032-297-8500</a>
						</p>
						<p>
							<a href="tel:032-297-8500">사업제휴센터 032-297-8500</a>
						</p>
					</div>
					<div class="ft_info">
						<p>인천광역시 서구 봉수대로 158 B1층</p>
						<p>
							<span>대표이사 김태홍</span>
							<span>사업자등록번호 290-41-00154</span>
						</p>
						<p>ⓒ CARDAM & GIEOK INC.</p>
					</div>
				</div>
			</footer>
		</div>
		<div class="layer" sell-include-html="./sub_sell" buy-include-html="./sub_buy" ensure-include-html="./sub_ensure"></div>
	</body>
</html>
<script>
		function checkAD(){
			if(getParameterByName('rf') == "KC3"){
				includeHTML('buy-include-html');				
			}
		}
		checkAD();
</script>