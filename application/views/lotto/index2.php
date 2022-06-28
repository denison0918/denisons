<html>
	
	<head>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">


<script src="http://plug.cardam.co.kr/vendor/jquery-2.2.4.min.js" ></script>
<script src="http://plug.cardam.co.kr/vendor/countUp.js" ></script>

<style>
	@import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css);
	@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
	
	*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
		a{text-decoration: none;color: inherit;cursor: pointer}
		input{-webkit-appearance: none;}
		p{word-break: keep-all;}
		li{list-style: none;}
		button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
		select::-ms-expand {display: none;}
		body{width: 100%;}
		.sqa{font-family: 'Spoqa Han Sans', 'Sans-serif'; }
		.default-btn{font-size: 17px;border-radius: 5px;padding: 10px;width:100%;height: 45px;background-color: #686868;color: #fff;font-weight: 600;   }
	
	.container{display: flex;flex-direction: column;}
	
	
	
	.box{padding: 0 20px;font-family: "Nanum Gothic", sans-serif;flex: 1}
	
	.logout{position: absolute;top: 20px;right: 20px;width: 80px;height: 30px;text-align: right;position: fixed}
	
	.winnings .price{font-size: 36px;font-weight: bold;letter-spacing: 0.05em}
	.winnings .tit{position: relative;top: 7px; }
	
	.info {margin-top: 70px}
	.info p{font-weight: bold;padding-bottom: 20px}
	.info .layout-flex{display: flex;flex-direction: row;}
	.info .layout-flex .layout-left{flex: 4;position: relative}
	.info .layout-flex .logo_ico{background-image: url('http://img.cardam.co.kr/Content/dhlottery.jpg');width: 36px;height: 36px;background-size: 36px 36px;background-position: center center;background-repeat: no-repeat;display: inline-block;position: absolute;top: 5px}  
	.info .layout-flex .content{padding-left: 50px;}
	.info .layout-flex .content span{display: block}
	.info .layout-flex .content span.txt{padding-top: 5px;font-size: 13px}
	.info .layout-flex .content span.won{font-weight: bold;position: relative;top: -2px}
	.info .layout-flex .layout-right{flex: 1;position: relative}

	.info .layout-flex .layout-right .charge{font-size: 16px;position: relative;top:5px;width: 80px;height: 35px;background-color: #dadada;color: #656565}
	.buylotto {position: absolute;bottom: 20px;width: 100%;position: fixed;}
	.buylotto .lotto{height: 60px;box-shadow: 0 0 15px 0 rgba(0,0,0,.2);}

	
</style>

	</head>
	
	<body>
		<div class="container">
			<div class="box" style="padding-top: 90px;position: relative">
				
				<a class="logout" href="/">로그아웃</a>
			</div>
			
			<div class="box winnings">
				<p class="tit">금주 1등 예상 당첨금</p>
				<div class="price"><span id="cntup" class="sqa"></span><span class="sqa" style=>원</span>
				</div>			
			</div>
			
			<div class="box info">
				<p>HRIEDBDJFK**님</p>
				<div class="layout-flex">
					<div class="layout-left">
						<span class="logo_ico"></span>
						<div class="content">
							<span class="txt">동행복권 보유예치금</span>
							<span class="won sqa">20,000 원</span>
						</div>
					</div>
					<div class="layout-right">
						<button class="default-btn charge">충전</button>
					</div>
				</div>
			</div>
			
			<div class="box buylotto">
				<button class="default-btn lotto">로또 5장 바로구매 (자동)</button>
			</div>
			
			
			
		</div>
		
		
		
	</body>
	
<script>	
	
$( document ).ready(function() {

	var c = new CountUp('cntup' ,0, 12624230136, 0, 1.5);
	
	c.start();


});
</script>
</html>