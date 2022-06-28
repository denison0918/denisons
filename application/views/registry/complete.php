    <html>	
	

	
	
	<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80452104-1', 'auto');
  ga('send', 'pageview');

</script>		
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
		
 		<link rel="stylesheet" media="only screen and (min-width:480px)" href="../../../css/registry/complete_d.css"  type="text/css" charset="utf-8"/>

<!-- 		<link rel="stylesheet" media="only screen and (-webkit-device-pixel-ratio: 1.5)" href="../../../css/registry/complete_m1.css" /> -->
		<link rel="stylesheet" media="only screen and (max-width:479px)" href="../../../css/registry/complete_m2.css" />


	
	
	</head>
	<body>
		<div class="header">
			
			<div>
				<h1 class="logo"></h1><span>품격있는 부고장</span>
			</div>
			
		</div>
		
		<div class="main">
			<h1>카톡으로 부고장 및 설명서를 받으세요!<br><font color="red">*반드시 상주(들)에게만 보내세요(자신포함)</font><br><br>
				<a class='url' href="http://www.gieok.xyz/cherish/<?php echo $dead_id ?>">www.gieok.xyz/cherish/<?php echo $dead_id ?></a><br>
			<a id="kakao-link-btn" href="javascript:;">
				<img src="http://dn.api1.kage.kakao.co.kr/14/dn/btqa9B90G1b/GESkkYjKCwJdYOkLvIBKZ0/o.jpg"/>
				<br>(모바일 전용)</a>
			
			
			
			</h1>
		</div>
	<script>


		
		  //<![CDATA[
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('e4fc104789f50c770fa28e8eb719785f');
    // // 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createTalkLinkButton({
      container: '#kakao-link-btn',
      label: '부고장 설명서                            1.[부고장 확인하기]                          2.[우측 상단 말풍선]                          3.[카톡 친구에게 전달]',
      image: {
        src: 'http://www.gieok.xyz/Images/Content/complete.png',
        width: '350',
        height: '350'
      },
      webButton: {
        text: '부고장 확인하기',
        url: 'http://www.gieok.xyz/cherish/<?php echo $dead_id ?>' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
      }
    });
  //]]>
		
		
		
		</script>					
	</body>
</html>