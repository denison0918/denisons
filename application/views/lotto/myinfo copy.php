<html>
	<head>

	<style>	
		*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
		a{text-decoration: none;color: inherit;cursor: pointer}
		input{-webkit-appearance: none;}
		p{word-break: keep-all;}
		li{list-style: none;}
		button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
		select::-ms-expand {display: none;}
		body{width: 100%;}
		
		.container{display: flex;  align-items: center;justify-content: center;height: 80%}
		
		
		
		.login-box{}
		
		.login-box .top{margin-bottom: 20px}
		
		.login-box h2{text-align: center}
		
		.login-box input{height: 30px}
		
		.login-box .bottom{margin-top: 20px;text-align: center }
		
		.login-box .buyBtn{font-size: 20px;border: 1px solid black;border-radius: 5px;padding: 10px;width: 180px}
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
		
	</head>
	<body>
		
		<nav></nav>
		<main>
			
			<div class="container">
				<form action="/order_lotto" method="post">
				<div class="login-box">
					<div class="top">
						<h2>로또사또</h2>
					</div>
					
					<div>
						이름 : <?=$username?>						
					</div>
					<div>
						연락처 : <?=$phone?>	
					</div>
					<div>
						이메일 : <?=$email?>	
					</div>
					
					<div>
						ID : <?=$userId?>	
					</div>
					
					<div>
						예치금 : <?=$deposit?>	
					</div>
					
					<div class="bottom">
						<button class="buyBtn" name="buyLotto" value=1>로또 랜덤 5장 구매</button>	
						<br><br>
						<button class="buyBtn" name="buyLotto" formaction="/testpaper" value=1>로또 구매 예시</button>
						<br><br>	
						<button class="buyBtn" name="buyLotto" formaction="/chargeDeposit" value=1>예치금 충전하기</button>	
						<br><br>	
						<button class="buyBtn" formaction="/" value=1>로그아웃</button>					
					</div>
				</div>
				
				</form>
			</div>
			
			
			
		</main>
		
	</body>
</html>