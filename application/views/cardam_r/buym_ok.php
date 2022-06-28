<html>
<head>
<script type="text/javascript">	
/*
    if( (document.referrer).match(/KC/)){
	    	kakaoPixel('1924823491651584035').pageView();
		if( (document.referrer).match(/buy/)){
			kakaoPixel('1924823491651584035').completeRegistration('buy');
			alert('구매상담 신청이 완료되었습니다.');
		}else{
			kakaoPixel('1924823491651584035').completeRegistration('sell');
			alert('상담신청이 완료되었습니다');		
		}
	}
*/
	(function (t, f, a, x) {					                                              
	      if (!document.getElementById(x)) {
	            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
	         };
	      t.addEventListener("load", function(event) {
			window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			  gtag('config', 'UA-157922949-1');

			  alert('상담신청이 완료되었습니다');	
			  window.location.href = '/';
	      });	      
	  })(document.createElement('script'),
	  document.getElementsByTagName('script')[0],
	  'https://www.googletagmanager.com/gtag/js?id=UA-157922949-1',
	  'google_ga');
</script>
</head>
<body></body>
</html>