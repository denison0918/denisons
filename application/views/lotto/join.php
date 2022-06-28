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
		
		.back{position: fixed;width: 100%;display: inline-block;bottom: 0;left:0; background-color:#c24500;color: #fff;text-align: center;padding: 17px 0;}
		
		.login-box{}
		
		.login-box .top{margin-bottom: 20px}
		
		.login-box h2{text-align: center}
		.login-box p{text-align: center}
		.login-box input{height: 30px}
		
		.login-box .bottom{margin-top: 20px;text-align: center }
		
		.login-box .buyBtn{font-size: 20px;border: 1px solid black;border-radius: 5px;padding: 5px;width: 150px}
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<script src="/Images/jquery-2.2.4.min.js" ></script>

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
		
		<iframe  id="dhlottery" src="https://m.dhlottery.co.kr/loginJoin.do?method=joinFormAgree" frameborder="0" width="100%"  height="100%" ></iframe>
		
		<a href="/" class="back">로그인으로 돌아가기</a>
		
	</body>
	<script>

	alert('동행복권 회원가입 완료 후 하단 버튼을 통해 다시 방문해주세요!');	

	$( document ).ready(function() {

	var intialFrameSrc = "https://m.dhlottery.co.kr/loginJoin.do?method=joinFormAgree";
	var testFrameSrc = "https://m.dhlottery.co.kr/loginJoin.do?method=joinIdenCheck";
	var endFrameSrc = "https://m.dhlottery.co.kr/user.do?method=joinEndView&returnUrl=";
   
    var changeCnt = 0;
   
    $("#dhlottery").load(function (evt) {
	    console.log(evt);
        if (intialFrameSrc != $("#dhlottery").attr('src')) {
            alert("the iframe has changed.");
        }
        

        
        
        
    });
	



});
</script>	
</html>