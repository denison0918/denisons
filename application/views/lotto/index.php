<html>
	<head>

	<style>	
		@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
		*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
		a{text-decoration: none;color: inherit;cursor: pointer}
		input{-webkit-appearance: none;}
		p{word-break: keep-all;}
		li{list-style: none;}
		button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
		select::-ms-expand {display: none;}
		body{width: 100%;}
		
		.container{display: flex; flex-direction: column; padding: 0 20px;font-family: "Nanum Gothic" ;position: relative;height: 100%}
		
		
		.auth{border: 1px solid black;width: 100%;border-radius: 3px;height: 45px;font-size: 20px;padding: 15px}
		
		.login-box{}
		
		.login-box .top{margin-bottom: 20px}
		
		.login-box h2{text-align: center}
		.login-box p{text-align: center}
		.login-box h3{margin-bottom: 40px;font-size: 24px;line-height: 32px}
		
		.login-box .notice{font-size: 10px;text-align: left;width: 100%;line-height: 14px}

		
		.bottom{margin-top: 20px;text-align: center;position: absolute;bottom: 20px;width: calc(100% - 40px); }
		.login_ico{background-image: url('Images/Content/dhlottery.jpg');background-position: center center;background-repeat: no-repeat;background-size: 50px;50px;width: 45px;height: 45px;display: inline-block;position: absolute;left: 0;top: 0px;border-radius: 5px;}
		
		
		.popBtn{font-size: 16.5px;border-radius: 3px;padding: 15px;width: 100%;height: 50px;background-color:#007BC3;color: #fff;text-indent: 10px;font-weight: 500;box-shadow: 0 0 15px 0 rgba(0,0,0,.2);}
		
		.login-pop{width: 100%;height: 300px;position: fixed;bottom: -300px;left: 0;padding: 0 20px;background-color: #fff;border-radius: 10px 10px 0px 0px;border: 1px solid #e2e2e2;padding-top: 15px;box-shadow: 0 0 15px 0 rgba(0,0,0,.2);border-bottom: none;}
		.login-pop h4{text-align: center}
		.login-pop .auth{font-size: 15px;margin: 10px 0;border: 1px solid #e2e2e2}
		.login-pop .auth:last-child{margin-top: 0px}
		
		.login-pop .loginBtn{font-size: 16.5px;border-radius: 3px;padding: 15px;width: 100%;height: 50px;background-color:#007BC3;color: #fff;text-indent: 10px;font-weight: 500;box-shadow: 0 0 15px 0 rgba(0,0,0,.2);}
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<script src="/script/jquery-2.2.4.min.js"></script>		
<script data-ad-client="ca-pub-9719520850290912" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
	
$( document ).ready(function() {

	$('.popBtn').click(function(){
		$(".login-pop").animate({bottom: '0px'});
	});

	$('.login-box').click(function(){
		$(".login-pop").animate({bottom: '-300px'});
	});
	
	$('.buyBtn').click(function(){
		alert("동행복권 공식 홈페이지로 이동합니다, 회원가입 후 다시 방문해주세요!");
		window.open('https://m.dhlottery.co.kr/loginJoin.do?method=joinFormAgree');
	})
	
});


</script>
<script data-ad-client="ca-pub-9188264620616753" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157922949-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157922949-2');

</script>



	</head>
	<body>
		
		<nav></nav>
		<main>
			
			<div class="container">
				<div style="margin-top: 50px"></div>


<!--
<div style="display:inline-block; vertical-align:top;">
  <button class="js-copy-bob-btn">Set clipboard to BOB</button><br /><br />
  <button class="js-copy-jane-btn">Set clipboard to JANE</button>
</div>
-->


				<div class="login-box">
					<div class="top">
<!-- 						<h2>로또사또</h2> -->
					<br>
					<h3>복권은 소액으로 구매할 때<br>나에겐 희망이 되고,<br>모두에게 행복이 됩니다.</h3>
					<p class="notice">만 19세 이상인 동행복권 고객에게만 제공되는 서비스입니다.<br>청소년은 복권을 구매하거나 당첨금을 수령할 수 없습니다.</p>
					</div>
					
<!--
					<div>
						<input type="text" name="id" class="auth" placeholder="ID를 입력해주세요">						
					</div>
					<div>
						<input type="password" name="pwd" class="auth" placeholder="PW를 입력해주세요">
					</div>
-->
					
				</div>
				
				<div class="bottom">
						<button class="popBtn" style="position: relative"><span class="login_ico"></span>동행복권 계정으로 로그인</button><br><br>
<!-- 						<a class="buyBtn" href="/join" style="font-size: 12px">회원가입</a> -->
						<a class="buyBtn" style="font-size: 12px">회원가입</a>
						
					</div>
				
				
			</div>
			
			
			
		</main>
		
		<div class="login-pop" >
			
			<h4 class="logo"><img src="/Images/Content/dhlottery-logo.jpg" width="150px"></h4>
			<form action="/get_lmyinfo" method="post">
			<div>
				<input type="text" name="id" class="auth" placeholder="ID">
				<input type="password" name="pwd" class="auth" placeholder="Password">
			</div>
			<button class="loginBtn" value=1 name="buyLotto">로그인</button>
			</form>
		</div>
		
	</body>
</html>