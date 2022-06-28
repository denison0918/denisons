    
    <?php phpinfo()?>
    <html>	
	
	
	
	<head>
	
	<style>

	
	html{
		min-width:320px;
	}
	
	html, body, div, p, h1, h2, h3, ul, ol, li, label{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: sans-serif;
		color: gray;
	} 
	

		
	ul li, ol li{
		list-style: none;
	}
	
	a{
		text-decoration: none;
		cursor: pointer;
		color: #4545f8;
	}
				
	body{
		margin: 0;
		width: 100%;
		height: 100%;
	}	
	
	.header{
		width: 100%;
		height: 75px;
		background-color: #fff;
		z-index: 1000;
/* 		box-shadow: 0px 0px 8px black; */
		border-bottom-color: #000000;
		border-bottom: 1px solid rgba(0,0,0,0.25);
		
	}
	
	.header .logo{
	position: relative;
	top: 5px;
	margin: 0 0 0 165px;
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 62px;
/*	width: 53px; */
	width: 7%;
	height: 23px;
	padding: 0;
	border-radius: 12px;
	line-height: 62px;
	background-color: #fff;
	color: rgba(0,0,0,0.65);
	text-align: right;
	text-shadow:  0px 0px 1px white;
	}


	.main{
	width: 100%;
	height: auto;

	}
	
	h1{
		margin: 0 auto;
		width: 320px;
		height: 40px;
		margin-top: 300px;
		font-size: 1.125em;
	}
	
	

	
	
	/* To target IE 8, 9 and 10 Hacks */


	@media screen\0 {



	
	}
	/* only chrome browser css hack */
	
	@media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) {
	
	}
		
		
		
	</style>
	

		
		<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
		<style type='text/css'>
		  /* <![CDATA[ */
		    #file-input-wrapper {
		    	display : none ;
		    	margin-top : 50px ;
		    }
		  /* ]]> */
		</style>

			
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
	
	</head>
	<body>
		<div class="header">
			
			<div>
				<h1 class="logo"></h1><span>품격있는 부고장</span>
			</div>
			
		</div>
		
		<div class="main">
			<h1>생성된 000 : <br>
				<a href="http://www.gieok.xyz/cherish/1">www.gieok.xyz/cherish/1"</a><br>
				<a id="kakao-link-btn" href="javascript:;">
				<img src="http://dn.api1.kage.kakao.co.kr/14/dn/btqa9B90G1b/GESkkYjKCwJdYOkLvIBKZ0/o.jpg"/>
				</a>
			
			
			
			</h1>
		</div>

	<script>


		
		  //<![CDATA[
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('e4fc104789f50c770fa28e8eb719785f');
    // // 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createTalkLinkButton({
      container: '#kakao-link-btn',
      label: '홍길동님 부고장 설명서            1.[부고장 확인하기]                 2.[우측 상단 메뉴]                    3.[카톡 친구에게 전달]',
      image: {
        src: 'http://www.gieok.xyz/Images/Content/complete.png',
        width: '350',
        height: '350'
      },
      webButton: {
        text: '부고장 확인하기',
        url: 'http://www.gieok.xyz/cherish/1' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
      }
    });
  //]]>
		
		
		
		</script>					
	</body>
</html>