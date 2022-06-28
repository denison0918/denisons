<?php
	
	class Lottosatto extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
	  		$this->load->helper('form');
	        $this->load->helper('url');
			$this->load->library('session');
		}
		private function session_check($data){
			if(empty($data)){
				header('Location: http://m.dhlottery.shop/');
			}
	
		}
		
	public function ljoin(){
		
		$this->load->view('lotto/join');
	}
	
	public function lotto(){
		
		$this->load->view('lotto/index');
			
	}
	
	public function getLotto()
		{
			
			
			//로그인 인증
			
			 
	$url = "https://el.dhlottery.co.kr/portal_login.jsp";
		  
	$headers = [
	'Referer: https://www.dhlottery.co.kr/gameInfo.do?method=buyLotto',
	'Accept: */*',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Accept-Encoding: gzip, deflate, br',
	'Connection: keep-alive',
	'Host: el.dhlottery.co.kr',
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38',
	'Sec-Fetch-Site: same-site',
	'Sec-Fetch-Mode: no-cors',
	'Cookie: WMONID=RGuf_4tMr3o; JSESSIONID=3kAjbfDsSNDeaZF93X2r4XoxgqLnQA13XR7jwIMiWCCDuVGByB6Nl4b4iNfPESAR.cG9ydGFsX2RvbWFpbi9vbGQx;'
	];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
	//	  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1');
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		    
		    
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }
		  

		  
	}
	
	
		public function getLotto2()
		{
		
	// 쿠키정보 가져오기 + 로그인
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
			
			
	// 세션을 위한 쿠키정보 가져오기		
			
	$url = "https://www.dhlottery.co.kr/user.do?method=login&returnUrl=";
	
	$cookies = array();

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: www.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
		  curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			}
//			var_dump($cookies);
			} else {
		    echo "Error 내용:".$response;
		  }		

			 
			 
	//로그인 및 리다이렉트(메인Page)
			 
	$url = "https://www.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = 'ktm9024';
	$password = urlencode('rlaxoals1!'); //'Kim56001%21';	
	  
	$post_data ='returnUrl=&newsEventYn=&userId='.$userId.'&password='.$password.'&checkSave=on';
	
	$strLength = strlen($post_data); 	  
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId,
	'Host: www.dhlottery.co.kr',
	'Origin: https://www.dhlottery.co.kr',
	'Referer: https://www.dhlottery.co.kr/user.do?method=login&returnUrl=',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  
		//  var_dump($headers);
		  
		  $ch = curl_init();
		  
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
		  $info = curl_getinfo($ch);
		  var_dump($info);
		  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  if($status_code == 200) {
	//	    echo $response;
		//    var_dump($response);



	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
		  }
		  
		  
		  
		  
		  
		  //로그인 인증 ( 없어도 무방, 로그인 되었으면 계정 반환됨 )
		  
		$url = "https://el.dhlottery.co.kr/portal_login.jsp";
		  
	$headers = [
	'Referer: https://www.dhlottery.co.kr/gameInfo.do?method=buyLotto',
	'Accept: */*',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Accept-Encoding: gzip, deflate, br',
	'Connection: keep-alive',
	'Host: el.dhlottery.co.kr',
	$userAgent,
	'Sec-Fetch-Site: same-site',
	'Sec-Fetch-Mode: no-cors',
	'Cookie: Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].';'
	];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_HEADER, true); 
		  curl_setopt($ch, CURLOPT_NOBODY, true);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
//		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		    
		    
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	  
		  
		  
		  
		  
		  
    //  로또 구매를 위한 창 테스트 인증단계 ( 없어도 무방 )
	$url = 'https://el.dhlottery.co.kr/game/TotalGame.jsp?LottoId=LO40';
		  
	$headers = [
	'Referer: https://www.dhlottery.co.kr/gameInfo.do?method=buyLotto',
	'Accept: */*',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Accept-Encoding: gzip, deflate, br',
	'Connection: keep-alive',
	'Host: el.dhlottery.co.kr',
	$userAgent,
	'Sec-Fetch-Site: same-site',
	'Sec-Fetch-Mode: no-cors',
	'Cookie: Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].';'
	];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_HEADER, true); 
		  curl_setopt($ch, CURLOPT_NOBODY, true);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }	
		  
		  
		  
		    
		  
	$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	$userAgent,
	'Cookie: Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID']
	];
	
	
	$round = '872';
	$nBuyAmount = '1000';
	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
	$ROUND_DRAW_DATE = urlencode('2019/08/17');
	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');
	$gameCnt = '1';

$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		    
		    var_dump($response);
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	  
 

//리턴값 '{"loginYn":"Y","result":{"oltInetUserId":"002747602","issueTime":"18:26:13","issueDay":"2019/08/12","resultCode":"100","barCode4":"32252","barCode5":"61485","barCode6":"35090","barCode1":"52935","barCode2":"53515","resultMsg":"SUCCESS","barCode3":"49047","buyRound":"872","arrGameChoiceNum":["A|05|11|14|16|21|413"],"weekDay":"월","payLimitDate":"2020/08/18","drawDate":"2019/08/17","nBuyAmount":1000}}' 
	
		  
	}
	
	
	// 쿠키정보 얻어오기
	public function getLotto3()
		{
			 
	$url = "https://www.dhlottery.co.kr/user.do?method=login&returnUrl=";

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: www.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38'
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true); 
		  curl_setopt($ch, CURLOPT_NOBODY, true);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			$cookies = array();
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			}
			var_dump($cookies);
			} else {
		    echo "Error 내용:".$response;
		  }
	
		  
	}
	
	
		// 결제
	public function getLotto4()
		{
	
	
		$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38',
	'Cookie: WMONID=ZdTXQ3GT0V6; JSESSIONID=BghBJ540r2bBnkLxz9GuI1zNhf2cyhqSXM9iVUfsolRoar7xyVfPhZC6Y5ZTmoe9.cG9ydGFsX2RvbWFpbi9wZDU='
	];
	
	$round = '872';
	$nBuyAmount = '1000';
	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
	$ROUND_DRAW_DATE = urlencode('2019/08/17');
	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');
	$gameCnt = '1';
$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 	
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
			  
		    echo $response;
		    
		    
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	  
	
			  
	}
	
	
	public function getLotto5()
		{
		
			// 쿠키정보 가져오기 + 로그인
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
			
			
	// 세션을 위한 쿠키정보 가져오기		
			
	$url = "https://www.dhlottery.co.kr/user.do?method=login&returnUrl=";
	
	$cookies = array();

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: www.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
		  curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			}
//			var_dump($cookies);
			} else {
		    echo "Error 내용:".$response;
		  }		

			 
			 
	//로그인 및 리다이렉트(메인Page)
			 
	$url = "https://www.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = 'hriedbdjfkeb';
	$password = urlencode('Kim56001!'); //'Kim56001%21';	
	  
	$post_data ='returnUrl=&newsEventYn=&userId='.$userId.'&password='.$password.'&checkSave=on';
	
	$strLength = strlen($post_data); 	  
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId,
	'Host: www.dhlottery.co.kr',
	'Origin: https://www.dhlottery.co.kr',
	'Referer: https://www.dhlottery.co.kr/user.do?method=login&returnUrl=',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  
		//  var_dump($headers);
		  
		  $ch = curl_init();
		  
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
		  $info = curl_getinfo($ch);
		  var_dump($info);
		  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  if($status_code == 200) {
		    
		 var_dump(trim($response));
		 
		 echo trim($response);

		 if(mb_detect_encoding($response, array("UTF-8", "EUC-KR")) =="EUC-KR"){
		            $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');  // 메타태그 인코드 에러 해결
		            echo $response;
		            
			}            
           

	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
		  }
		  
		  
	$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	$userAgent,
	'Cookie: Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID']
	];
	
	
	$round = '872';
	$nBuyAmount = '1000';
	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
	$ROUND_DRAW_DATE = urlencode('2019/08/17');
	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');
	$gameCnt = '1';

$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		    
		    var_dump($response);
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	  
 
	  
	}
	
	public function getLotto6()
		{
			
			
		
		 if ($this->input->post('buyLotto') == true) {
            $data['id'] = $this->input->post('id');
            $data['pwd'] = $this->input->post('pwd');
		//		var_dump($data);
        }
		
			
						// 쿠키정보 가져오기 + 로그인
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
			
			
	// 세션을 위한 쿠키정보 가져오기		
			
	$url = "https://www.dhlottery.co.kr/user.do?method=login&returnUrl=";
	
	$cookies = array();

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: www.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
		  curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			}
			var_dump($cookies);
			} else {
		    echo "Error 내용:".$response;
		  }		

			 
			 
	//로그인 및 리다이렉트(메인Page)
			 
	$url = "https://www.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = $data['id'];
	$password = urlencode($data['pwd']); //'Kim56001%21';	
	  
	$post_data ='returnUrl=&newsEventYn=&userId='.$userId.'&password='.$password.'&checkSave=on';
	
	$strLength = strlen($post_data); 	  
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId,
	'Host: www.dhlottery.co.kr',
	'Origin: https://www.dhlottery.co.kr',
	'Referer: https://www.dhlottery.co.kr/user.do?method=login&returnUrl=',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  
		//  var_dump($headers);
		  
		  $ch = curl_init();
		  
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
	//	  $info = curl_getinfo($ch);
	//	  var_dump($info);
		  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  if($status_code == 200) {
//		    echo $response;
		//    var_dump($response);



	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
		  }
		  
		  
		  
		  
	
		  
		  

		  
		    
		  
	$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	$userAgent,
	'Cookie: Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID']
	];
	
	
	$round = '872';
	$nBuyAmount = '1000';
	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
	$ROUND_DRAW_DATE = urlencode('2019/08/17');
	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');
	$gameCnt = '1';

$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		    
//		    var_dump($response);
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	
			
 
	  
	}
	
	public function getMyInfo(){
		
		if ($this->input->post('buyLotto') == true) {
			$this->session->sess_destroy();
            $data['id'] = $this->input->post('id');
            $data['pwd'] = $this->input->post('pwd');
		//		var_dump($data);
        
/*
        echo date('YmdHis',(time() + 32547))."<br>";
        
        echo date('YmdHis', strtotime("this Saturday + 29 hour Asia/Seoul"))."<br>";
        if(date('YmdHis',(time() + 32400)) > date('YmdHis', strtotime("this Saturday + 29 hour Asia/Seoul"))){
	        echo "t";
        }
		echo "추첨일 : ".date('Y/m/d', strtotime("this Saturday + 9 hour Asia/Seoul"))."<br>";
		echo "유효일 : ".date('Y/m/d', strtotime("this Sunday + 1 year + 9 hour Asia/Seoul"));
*/
		
		// 쿠키정보 가져오기 + 로그인
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
						
	// 세션을 위한 쿠키정보 가져오기					
//	$url = "https://m.dhlottery.co.kr/user.do?method=loginm&returnUrl=https%3A%2F%2Fm.dhlottery.co.kr%2FuserSsl.do%3Fmethod%3DmyPage";
	
	$url = "https://m.dhlottery.co.kr/common.do?method=main";	
	$cookies = array();

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: m.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
//		  curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  // 'id="lottoDrwNo">'
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			}
	//		var_dump($cookies);
		    		    
		    $lottoDrwNo = strpos($response, 'id="lottoDrwNo">');	  // 회차
		    $expect = strpos($response, '<span class="expect">');	  // 당첨예상금액
		    
		    $expect = substr($response, $expect + 28, 100);
		    $expect =  mb_convert_encoding($expect, 'UTF-8', 'EUC-KR');
		    
		    $expectS  = strpos($expect, '당첨금 ');
		    $expectE  = strpos($expect, '원');
		    
		    $expect = substr($expect, $expectS + 42, $expectE - ($expectS + 42));
		    $lottoDrwNo = substr($response, $lottoDrwNo + 16 , 40);
		    
		    $lottoDrwNo = str_word_count($lottoDrwNo, 1, '0..9.~!@#$%^&*()-_=+{}[]\|;:?/<>.,');
			$lottoDrwNo = $lottoDrwNo[0] + 1;		

			
			
			} else {
		    echo "Error 내용:".$response;
		  }
		  
		  		

			 
			 
	//로그인 및 리다이렉트(로그인 완료페잊)
			 
	$url = "https://m.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = $data['id'];
	$password = urlencode($data['pwd']); 
	unset($data);
	  
	$post_data ='returnUrl=https%253A%252F%252Fm.dhlottery.co.kr%252FuserSsl.do%253Fmethod%253DmyPage&newsEventYn=&userId='.$userId.'&password='.$password.'&checkSave=1';
	
	$strLength = strlen($post_data); 	  
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId,
	'Host: m.dhlottery.co.kr',
	'Origin: https://m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/user.do?method=login&returnUrl=https%3A%2F%2Fm.dhlottery.co.kr%2FuserSsl.do%3Fmethod%3DmyPage',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  
		//  var_dump($headers);
		  
		  $ch = curl_init();
		  
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
//		  $info = curl_getinfo($ch);
//		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		if($status_code == 200) {
//		    echo $response;
//		    var_dump($response);

	


	
		} else if($status_code == 302) {
			  echo $response;
			  
			  
			  
		} else {
			  
		  
		    echo "Error 내용:".$response;
		}
		  
	}else if($this->session->all_userdata()){
		$ses = $this->session->all_userdata();
		
		$this->session_check($ses);
		
		$cookies['WMONID'] = $ses['WMONID'];
		$cookies['JSESSIONID'] = $ses['JSESSIONID'];
		$userId = $ses['userId'];
		$lottoDrwNo = $ses['lottoDrwNo'];
		$expect = $ses['expect'];
		
	}	  
		  


		$url = "https://m.dhlottery.co.kr/userSsl.do?method=myPage";

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId.'; UID='.$userId,
	'Host: m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/common.do?method=loginResult',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',	
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38'
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  

		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			  
			  $start =  strpos($response, '<div class="contents">');
			  $end = strpos($response, '</section>');
			  	  
			  $response = substr($response,$start,$end - $start);

			  unset($start);unset($end);
			 $response = strip_tags ( $response ,'<strong>' ) ;
		 
			 if(mb_detect_encoding($response, array("UTF-8", "EUC-KR")) =="EUC-KR"){
			            $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');  // 메타태그 인코드 에러 해결
			            $re = sprintf("/\<(%s)\>(.+?)\<\/\\1\>/", preg_quote('strong'));
						preg_match_all($re, $response, $matches); 
						
						$userInfo = array_map(function($v){
						    return trim(strip_tags($v));
						}, $matches[0]);
						$newdata = array(
			                   'username'  => substr($userInfo[0], 0,strpos($userInfo[0], '(')),
			                   'phone'     => $userInfo[1],
			                   'email'     => $userInfo[2],
			                   'deposit' => $userInfo[3],
			                   'WMONID'     => $cookies['WMONID'],
			                   'JSESSIONID'     => $cookies['JSESSIONID'],          
			                   'userId' => $userId,
			                   'logged_in' => TRUE,
			                   'lottoDrwNo' => $lottoDrwNo,
			                   'expect' => $expect
			               );
			               
			              
			               
						$this->session->set_userdata($newdata); 
						
					//	$newdata['expect'] = intval(preg_replace('/[^\d.]/', '', $expect));
						$this->load->view('lotto/myinfo',$newdata);
					}	
			} else if($status_code == 302) {		
				echo "<script>alert('ID 또는 PW가 틀립니다.(5회 틀릴 시 차단 및 동행복권에서 재발급)');history.go(-1);</script>";	
//		    	echo 'ID 또는 PW가 틀립니다.(5회 틀릴시 차단됨)';
		    //echo "Error 내용:".$response;
		  	}	 
		  
		
	}
	
	public function orderLotto(){
		
			 
		if(date('YmdHis',(time() + 32400)) > date('YmdHis', strtotime("this Saturday + 29 hour Asia/Seoul"))){
	
			echo "<script>alert('구매가능 시간이 아닙니다/ 토요일 오후 8시 (3분전) 까지 구매가능 ');history.go(-1);</script>";
			
		}else{
		
		$ses = $this->session->all_userdata();
		
		$this->session_check($ses);
		
		$data = $this->input->post('data');
		
		$lottoArr = json_decode($data, true);
		
		ksort($lottoArr);
		
		
		$param = array();
		
		foreach($lottoArr as $key => $value){
			
			sort($value);
			
			if(sizeof($value) == 1){
				$genType = "0"; // 자동
				$arrGameChoiceNum = null;
			}else if(sizeof($value) == 6){
				$genType = "1"; // 수동
				$arrGameChoiceNum = implode( ',', $value );		
			}else{
				$genType = "2"; // 반자동
				array_pop($value);
				$arrGameChoiceNum = implode( ',', $value );			
			}
			array_push($param, array(
				"genType" => $genType,
				"arrGameChoiceNum" => $arrGameChoiceNum,
				"alpabet" => $key
			));
		}
		$gameCnt = sizeof($lottoArr);
		$nBuyAmount = sizeof($lottoArr).'000';
		
		unset($lottoArr);

		
		// genType 2, 반자동 genType 1 수동, genType 0 자동
		
			$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';
		
		$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	$userAgent,
	'Cookie: Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID']
	];
	
	
	$round = $ses['lottoDrwNo'];
	
	


$param = urlencode(json_encode($param));

//	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
// $param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"B"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"C"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"D"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"E"}]');
//	$ROUND_DRAW_DATE = urlencode('2019/08/17');
//	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');

	$ROUND_DRAW_DATE = urlencode(date('Y/m/d', strtotime("this Saturday + 9 hour Asia/Seoul")));
	$WAMT_PAY_TLMT_END_DT = urlencode(date('Y/m/d', strtotime("this Sunday + 1 year + 9 hour Asia/Seoul")));

/*
	$nBuyAmount = '5000';
	$gameCnt = '5';
*/

$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 

//var_dump($post_data);

  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
//		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    
//		   $response = '{"loginYn":"Y","result":{"oltInetUserId":"002747602","issueTime":"18:26:13","issueDay":"2019/08/12","resultCode":"100","barCode4":"32252","barCode5":"61485","barCode6":"35090","barCode1":"52935","barCode2":"53515","resultMsg":"SUCCESS","barCode3":"49047","buyRound":"872","arrGameChoiceNum":["A|05|11|14|16|21|413"],"weekDay":"월","payLimitDate":"2020/08/18","drawDate":"2019/08/17","nBuyAmount":1000}}';
		    
		   $response = json_decode($response, true);
		   
		   if($response['result']['resultCode'] == "100"){		
			   
	 		   //동행복권 사이트에서 로또 구매 조회 시 날짜(발행일) + 바코드 필요
	 		   
	 		   $paper['buyRound'] = $response['result']['buyRound'];
	 		   $paper['issueDay'] = $response['result']['issueDay'].'('.$response['result']['weekDay'].')'.$response['result']['issueTime'];
	 		   $paper['drawDate'] = $response['result']['drawDate'];
	 		   $paper['payLimitDate'] = $response['result']['payLimitDate'];
	 		   $paper['nBuyAmount'] = $response['result']['nBuyAmount'];
	 		   $paper['barCode1'] = $response['result']['barCode1'];
	 		   $paper['barCode2'] = $response['result']['barCode2'];
	 		   $paper['barCode3'] = $response['result']['barCode3'];
	 		   $paper['barCode4'] = $response['result']['barCode4'];
	 		   $paper['barCode5'] = $response['result']['barCode5'];
	 		   $paper['barCode6'] = $response['result']['barCode6'];
	 		   $paper['arrGameChoiceNum'] = $response['result']['arrGameChoiceNum'];
	 		   
	 		   
	 		   unset($response);
	 		   $this->load->view('lotto/645paper',$paper);
	 		   
		   }else if( $response['result']['resultCode'] == "-7"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			echo "<script>alert('주간 구매한도가 초과되었습니다.');history.go(-1);</script>";			 
			 
		   }else if( $response['result']['resultCode'] == "-1"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			
			echo "<script>alert('예치금이 초과되었습니다.');history.go(-1);</script>";		 
			 
		   }else if( $response['result']['resultCode'] == "E3"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			
			echo "<script>alert('현재는 판매시간이 아닙니다.');history.go(-1);</script>";		 
			 
		   }else{
			   
			   
//리턴값 '{"loginYn":"Y","result":{"oltInetUserId":"002747602","issueTime":"18:26:13","issueDay":"2019/08/12","resultCode":"100","barCode4":"32252","barCode5":"61485","barCode6":"35090","barCode1":"52935","barCode2":"53515","resultMsg":"SUCCESS","barCode3":"49047","buyRound":"872","arrGameChoiceNum":["A|05|11|14|16|21|413"],"weekDay":"월","payLimitDate":"2020/08/18","drawDate":"2019/08/17","nBuyAmount":1000}}' 
	
		  			   
			   
			   
			//  echo $response; 
			var_dump($response);
		   }
		    
//		    var_dump($response);
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }	


		  
						
		
		}
	}
	public function testpaper(){
		$this->load->view('lotto/testpaper');
	}
	
	
	
	
		  
		  
		  
	public function chargeDeposit(){
		
		$ses = $this->session->all_userdata();
		
				
		$this->session_check($ses);
		
		$data['deposit'] = $ses['deposit'];
		$data['username'] = $ses['username'];
			  
		  $this->load->view('lotto/charge',$data);
	}
	
	
	
	
	public function nicepay(){
		
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
			
			
	// 세션을 위한 쿠키정보 가져오기		
			
	$url = "https://www.dhlottery.co.kr/user.do?method=login&returnUrl=";
	
	$cookies = array();

	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Host: www.dhlottery.co.kr',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: none',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, false);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		  
		  curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
		  curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  curl_close ($ch);
		  if($status_code == 200) {
			preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
			
			foreach($matches[1] as $item) {
			    parse_str($item, $cookie);
			    $cookies = array_merge($cookies, $cookie);
			    
			   
			    
			}
		//	var_dump($cookies);
			} else {
		    echo "Error 내용:".$response;
		  }		

	$newdata = array(
       'WMONID'     => $cookies['WMONID'],
       'JSESSIONID'     => $cookies['JSESSIONID'],          
       'userId' => 'ktm9024',
       'logged_in' => TRUE
   );
	$this->session->set_userdata($newdata); 
	

//	var_dump($this->session->all_userdata());		 
			 
	//로그인 및 리다이렉트(메인Page)
			 
	$url = "https://www.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = "ktm9024";
	$password = urlencode("rlaxoals1!"); //'Kim56001%21';	
	  
	$post_data ='returnUrl=&newsEventYn=&userId='.$userId.'&password='.$password.'&checkSave=on';
	
	$strLength = strlen($post_data); 	  
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$cookies['WMONID'].'; JSESSIONID='.$cookies['JSESSIONID'].'; userId='.$userId,
	'Host: www.dhlottery.co.kr',
	'Origin: https://www.dhlottery.co.kr',
	'Referer: https://www.dhlottery.co.kr/user.do?method=login&returnUrl=',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  
		//  var_dump($headers);
		  
		  $ch = curl_init();
		  
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
	//	  $info = curl_getinfo($ch);
	//	  var_dump($info);
	//	  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  if($status_code == 200) {
//		    echo $response;
		//    var_dump($response);



	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
		  }
		  
	// 나이스페이 초기화 ( 리턴값으로 나이스페이 결제창 생성 )
	
	$price = '20000';
	$vExp = date("Ymd",time() + (32400 + 86400));  // add 9 hours + 1 day
	
	$post_data = 'PayMethod=VBANK&price='.$price.'&goodsName=%EB%B3%B5%EA%B6%8C%EC%98%88%EC%B9%98%EA%B8%88&vExp='.$vExp;
				  
	$url = "https://m.dhlottery.co.kr/nicePay.do?method=nicePayInit";
	$headers = [
	'Accept: application/json, text/javascript, */*; q=0.01',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Connection: keep-alive',
	'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
	'Cookie: WMONID='.$cookies['WMONID'].'; userId='.$userId.'; UID='.$userId.'; JSESSIONID='.$cookies['JSESSIONID'],
	'Host: m.dhlottery.co.kr',
	'Origin: https://m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/nicePay.do?method=payReqForm&payTypeCode=VBANK',
	'Sec-Fetch-Mode: cors',
	'Sec-Fetch-Site: same-origin',
	$userAgent,
	'X-Requested-With: XMLHttpRequest'
	];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
//		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		
		    $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');  // 메타태그 인코드 에러 해결		 	
		 	
		 	$response = json_decode($response, true);
		 	
		 	
		 	
	//	 	echo http_build_query($response); 
	
		 	
		 	$formData = array(
			 	'PayMethod' => $response['PayMethod'],
			 	'GoodsName' => urlencode( mb_convert_encoding($response['GoodsName'], 'EUC-KR', 'UTF-8')),			 		 	
			 	'GoodsCnt' => $response['GoodsCnt'],
			 	'BuyerTel' => $response['BuyerTel'],
			 	'Moid' => $response['Moid'],
			 	'MID' => $response['MID'],
			 	'UserIP' => $response['UserIP'],
			 	'MallIP' => $response['MallIP'],
			 	'MallUserID' => $response['MallUserID'],
			 	'VbankExpDate' => $response['VbankExpDate'],
			 	'BuyerEmail' => $response['BuyerEmail'],
			 	'GoodsCl' => $response['GoodsCl'],
			 	'CharSet' => 'euc-kr',
//			 	'ReturnURL' => urldecode($response['ReturnURL']),
				'ReturnURL' => 'http://m.dhlottery.shop/nicePayToDh',
			 	'ediDate' => substr($response['Moid'], 0, -7) ,
			 	'EncryptData' => $response['EncryptData'],
			 	'TrKey' => '',
			 	'Amt' => $response['amt'],
			 	'BuyerName' => urlencode(mb_convert_encoding($response['BuyerName'], 'EUC-KR', 'UTF-8'))
		 	);
			 	
		 	var_dump($formData);
	//	 	echo http_build_query($formData);
/*
	
		 	
		 	

		    var_dump($response);
		    unset($response);
*/
		    
		//    var_dump($response);
		    unset($response);
		      $this->load->view('lotto/nicepayForm', $formData);
	
	
	
		    
		    
		  } else {
		    echo "Error 내용:".$response;
		  }	  
		  	  
			

	}
	public function payInitOld(){
		
		
	if($this->input->post('charge') == true){
		
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
	$ses = 	$this->session->all_userdata();	
	
	$this->session_check($ses);	
		  
	// 나이스페이 초기화 ( 리턴값으로 나이스페이 결제창 생성 )
	
	$price = $this->input->post('Amt');
	$vExp = date("Ymd",time() + (32400 + 86400));  // add 9 hours + 1 day
	
	$post_data = 'PayMethod=VBANK&price='.$price.'&goodsName=%EB%B3%B5%EA%B6%8C%EC%98%88%EC%B9%98%EA%B8%88&vExp='.$vExp;
				  
	$url = "https://m.dhlottery.co.kr/nicePay.do?method=nicePayInit";
	$headers = [
	'Accept: application/json, text/javascript, */*; q=0.01',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Connection: keep-alive',
	'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
	'Cookie: WMONID='.$ses['WMONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'].'; JSESSIONID='.$ses['JSESSIONID'],
	'Host: m.dhlottery.co.kr',
	'Origin: https://m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/nicePay.do?method=payReqForm&payTypeCode=VBANK',
	'Sec-Fetch-Mode: cors',
	'Sec-Fetch-Site: same-origin',
	$userAgent,
	'X-Requested-With: XMLHttpRequest'
	];
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  curl_close ($ch); 
		  unset($headers);
		  if($status_code == 200) {
		    $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');  // 메타태그 인코드 에러 해결		 	
		 	$response = json_decode($response, true);
		 	$formData = array(
			 	'PayMethod' => $response['PayMethod'],
			 	'GoodsName' => urlencode( mb_convert_encoding($response['GoodsName'], 'EUC-KR', 'UTF-8')),			 		 	
			 	'GoodsCnt' => $response['GoodsCnt'],
			 	'BuyerTel' => $response['BuyerTel'],
			 	'Moid' => $response['Moid'],
			 	'MID' => $response['MID'],
			 	'UserIP' => $response['UserIP'],
			 	'MallIP' => $response['MallIP'],
			 	'MallUserID' => $response['MallUserID'],
			 	'VbankExpDate' => $response['VbankExpDate'],
			 	'BuyerEmail' => $response['BuyerEmail'],
			 	'GoodsCl' => $response['GoodsCl'],
			 	'CharSet' => 'euc-kr',
//			 	'ReturnURL' => urldecode($response['ReturnURL']),
				'ReturnURL' => 'http://m.dhlottery.shop/nicePayToDh',
			 	'ediDate' => substr($response['Moid'], 0, -7) ,
			 	'EncryptData' => $response['EncryptData'],
			 	'TrKey' => '',
			 	'Amt' => $response['amt'],
			 	'BuyerName' => urlencode(mb_convert_encoding($response['BuyerName'], 'EUC-KR', 'UTF-8'))
		 	);
		    unset($response);
		    $this->load->view('lotto/nicepayForm', $formData);
		  } else {
		    echo "Error 내용:".$response;
		  }	 
		  
		}else{
		header('Location: http://m.dhlottery.shop/chargeDeposit');

		}
	
		
	}
	
	public function payInit(){

	if($this->input->post('charge') == true){
		
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';		
	$ses = 	$this->session->all_userdata();	
	
	$this->session_check($ses);	
		  
	// 나이스페이 초기화 ( 리턴값으로 나이스페이 결제창 생성 )
	
	$price = $this->input->post('Amt');
	$vExp = date("Ymd",time() + (32400 + 86400));  // add 9 hours + 1 day
	
	$post_data = 'PayMethod=VBANKFVB01&VbankBankCode=089&price='.$price.'&goodsName=%EB%B3%B5%EA%B6%8C%EC%98%88%EC%B9%98%EA%B8%88&vExp='.$vExp;
	
				  
	$url = "https://m.dhlottery.co.kr/nicePay.do?method=nicePayInit";
	$headers = [
	'Accept: application/json, text/javascript, */*; q=0.01',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Connection: keep-alive',
	'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
	'Cookie: WMONID='.$ses['WMONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'].'; JSESSIONID='.$ses['JSESSIONID'],
	'Host: m.dhlottery.co.kr',
	'Origin: https://m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/payment.do?method=payment',
	'Sec-Fetch-Dest: empty',
	'Sec-Fetch-Mode: cors',
	'Sec-Fetch-Site: same-origin',
	$userAgent,
	'X-Requested-With: XMLHttpRequest'
	];
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  curl_close ($ch); 
		  unset($headers);
		  if($status_code == 200) {
		    $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');  // 메타태그 인코드 에러 해결		 	
		 	$response = json_decode($response, true);
		 	
		 //	var_dump($response);
		 	
		 	
		 	$formData = array(		
			 	'PayMethod' => $response['PayMethod'],
			 	'GoodsName' => mb_convert_encoding($response['GoodsName'], 'EUC-KR', 'UTF-8'),
			 	'GoodsCnt' => $response['GoodsCnt'],
			 	'BuyerTel' => $response['BuyerTel'],
			 	'Moid' => $response['Moid'],
			 	'MID' => $response['MID'],
			 	'UserIP' => $response['UserIP'],
			 	'MallIP' => $response['MallIP'],
			 	'MallUserID' => $response['MallUserID'],
			 	'VbankExpDate' => $response['VbankExpDate'],
			 	'BuyerEmail' => $response['BuyerEmail'],
			 	'SocketYN' => $response['SocketYN'],
			 	'GoodsCl' => $response['GoodsCl'],
			 	'CharSet' => 'euc-kr',
			 	'ReturnURL' => 'https://www.dhlottery.co.kr/nicePay.do?method=nicePaySmartProcess',
			 	'EdiDate' => $response['EdiDate'],
			 	'EncryptData' => $response['EncryptData'],
			 	'TrKey' => '',
			 	'VbankBankCode' => $response['VbankBankCode'],
			 	'VbankNum' => $response['VbankNum'], 	
			 	'FxVrAccountNo' => $response['FxVrAccountNo'],
			 	'VBankAccountName' => $response['VBankAccountName'], 	
			 	'Amt' => $response['amt'],
			 	'BuyerName' => mb_convert_encoding($response['BuyerName'], 'EUC-KR', 'UTF-8')
		 	);
		// 	var_dump($formData);
		 	
		 	
		 	
		$url = "https://m.dhlottery.co.kr/nicePay.do?method=nicePaySmartProcess"; 
		$post_data = http_build_query($formData);
		$strLength = strlen($post_data); 	
		
	//	echo $post_data;
		 
		 $headers = [
		'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
		'Accept-Encoding: gzip, deflate, br',
		'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
		'Cache-Control: max-age=0',
		'Connection: keep-alive',
		'Content-Length: '.$strLength,
		'Content-Type: application/x-www-form-urlencoded',
		'Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'],
		'Host: m.dhlottery.co.kr',
		'Origin: https://m.dhlottery.co.kr',
		'Referer: https://m.dhlottery.co.kr/payment.do?method=payment',
		'Sec-Fetch-Dest: document',
		'Sec-Fetch-Mode: navigate',
		'Sec-Fetch-Site: same-origin',
		'Sec-Fetch-User: ?1',
		'Upgrade-Insecure-Requests: 1',
		$userAgent
		];
			  $ch = curl_init();		  
			  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			  curl_setopt($ch, CURLOPT_URL, $url);
			  curl_setopt($ch, CURLOPT_POST, true);
			  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
			  
			  $response = curl_exec ($ch);
			  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			  curl_close ($ch);
		  
		  unset($formData);
		  
		  if($status_code == 200) {

		  $response = trim($response);
		  
		    
 	//	    echo mb_convert_encoding($response, 'UTF-8', 'EUC-KR');


		    $start = strpos($response, '<tbody>');	
		    $end = strpos($response, '</tbody>');	
		    
		    $response = substr($response, $start, ($end - $start ));	
		    
		    $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');
		    
		//    echo $response;
		    
		    $orderNum = strpos($response, '주문번호');  // 21자
		    $tradeNum = strpos($response, '( 거래번호 : ');  // 30자
		    $priceS = strpos($response, 'key_clr2">');  // 주문금액 시작
		    $priceE = strpos($response, '원</td>');  // 주문금액 끝
		    
		    $issueDay = strpos($response, '발급일시</th>');  // 19자
		    $account = strpos($response, 'nicePay_complete_bx_lt">[케이뱅크] ');  // 23자
		    $expDay = strpos($response, '계좌사용만료일</span><span>');  // 10자
		    
		    
		    $receive['orderNum'] = substr($response, $orderNum + 43, 21);
		    $receive['tradeNum'] = substr($response, $tradeNum + 17, 30);
		    $receive['price'] = substr($response, $priceS + 10, ($priceE - $priceS - 10));
		    $receive['issueDay'] = substr($response, $issueDay + 43, 19);
		    $receive['account'] = substr($response, $account + 39, 17);
//		    $receive['expDay'] = substr($response, $expDay + 34, 10);
			$receive['userName'] = $ses['username'];
			$receive['userId'] = $ses['userId'];
			
//			var_dump($receive);

			$this->load->view('lotto/charge_ok', $receive);
		 
		}
		 	
		    unset($response);
	//	    $this->load->view('lotto/nicepayForm', $formData);
		  } else {
		    echo "Error 내용:".$response;
		  }	 
		  
		  
		  
		  
		}else{
		header('Location: http://m.dhlottery.shop/chargeDeposit');

		}

	}	
	public function testpay(){
		$this->load->view('lotto/testpay');
		}
	
	
	public function nicePayToDh(){
				  //로그인 및 리다이렉트(메인Page)
	$ses = 	$this->session->all_userdata();	
		$this->session_check($ses);
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';
	$url = "https://www.dhlottery.co.kr/nicePay.do?method=nicePaySmartProcess";        
        $data['PayMethod'] = $this->input->post('PayMethod');
        $data['GoodsName'] = $this->input->post('GoodsName');
        $data['GoodsCnt'] = $this->input->post('GoodsCnt');
        $data['BuyerTel'] = $this->input->post('BuyerTel');
        $data['Moid'] = $this->input->post('Moid');
        $data['MID'] = $this->input->post('MID');
        $data['UserIP'] = $this->input->post('UserIP');
        $data['MallIP'] = $this->input->post('MallIP');
        $data['MallUserID'] = $this->input->post('MallUserID');
        $data['VbankExpDate'] = $this->input->post('VbankExpDate');
        $data['BuyerEmail'] = $this->input->post('BuyerEmail');
        $data['SocketYN'] = $this->input->post('SocketYN');
        $data['GoodsCl'] = $this->input->post('GoodsCl');
        $data['CharSet'] = $this->input->post('euc-kr');
        $data['ReturnURL'] = $this->input->post('ReturnURL');
        $data['EdiDate'] = $this->input->post('EdiDate');
        $data['EncryptData'] = $this->input->post('EncryptData');
        $data['TrKey'] = $this->input->post('TrKey');
        $data['VbankBankCode'] = $this->input->post('VbankBankCode'); 
        $data['VbankNum'] = $this->input->post('VbankNum');
        $data['FxVrAccountNo'] = $this->input->post('FxVrAccountNo');
        $data['VbankAccountName'] = $this->input->post('VbankAccountName');
        $data['Amt'] = $this->input->post('Amt');
		$data['BuyerName'] = $this->input->post('BuyerName');
	
	$post_data = http_build_query($data);
	$strLength = strlen($post_data); 	  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
	'Accept-Encoding: gzip, deflate, br',
	'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
	'Cache-Control: max-age=0',
	'Connection: keep-alive',
	'Content-Length: '.$strLength,
	'Content-Type: application/x-www-form-urlencoded',
	'Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'],
	'Host: m.dhlottery.co.kr',
	'Origin: https://m.dhlottery.co.kr',
	'Referer: https://m.dhlottery.co.kr/payment.do?method=payment',
	'Sec-Fetch-Dest: document',
	'Sec-Fetch-Mode: navigate',
	'Sec-Fetch-Site: same-origin',
	'Sec-Fetch-User: ?1',
	'Upgrade-Insecure-Requests: 1',
	$userAgent
	];
		  $ch = curl_init();		  
//		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//		  curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
//		  $info = curl_getinfo($ch);
//		  var_dump($info);
	//	  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  
		  unset($data);
		  
		  if($status_code == 200) {
		 //   echo $response;

	//	    var_dump($response);
	
			$response = trim($response);
		    
		    echo mb_convert_encoding($response, 'UTF-8', 'EUC-KR');
		    $start = strpos($response, '<div class="complete_content">');	
		    $end = strpos($response, '<div class="btns_submit double">');	
		    
		    $response = substr($response, $start, ($end - $start ));	
		    
		    $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');
		    
		    echo $response;
		    
		    $orderNum = strpos($response, '주문번호</span><span>');  // 21자
		    $tradeNum = strpos($response, '(거래번호 : ');  // 30자
		    $priceS = strpos($response, 'key_clr3">');  // 주문금액 시작
		    $priceE = strpos($response, '원</span>');  // 주문금액 끝
		    
		    $issueDay = strpos($response, '발급일시</span><span>');  // 19자
		    $account = strpos($response, '[은행:케이뱅크] ');  // 23자
		    $expDay = strpos($response, '계좌사용만료일</span><span>');  // 10자
		    
		    
		    $receive['orderNum'] = substr($response, $orderNum + 25, 21);
		    $receive['tradeNum'] = substr($response, $tradeNum + 16, 30);
		    $receive['price'] = substr($response, $priceS + 10, ($priceE - $priceS - 10));
		    $receive['issueDay'] = substr($response, $issueDay + 25, 19);
		    $receive['account'] = substr($response, $account + 22, 23);
		    $receive['expDay'] = substr($response, $expDay + 34, 10);
			$receive['userName'] = $ses['username'];
			$receive['userId'] = $ses['userId'];
		    
		    $this->load->view('lotto/charge_ok', $receive);
		    
/*
		    echo $response; 
		    var_dump($response);
*/

		    
	//	    echo $response;    
	
			

	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
		  }
		  
	



		

	}
	
	public function sample_charge(){
		$this->load->view('lotto/charge_ok copy');
	}
	
	public function index(){
		$this->load->view('lotto/index2');
	}
	
	public function lottoBuyList(){
	
	    $ses =     $this->session->all_userdata();  
	    $this->session_check($ses);  
        
        $userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7';        
                        
    // 세션을 위한 쿠키정보 가져오기                    
    
    $url = "https://www.dhlottery.co.kr/myPage.do?method=lottoBuyList";    


    $START_DT = strtotime("first day of last months + 9 hour -2 months Asia/Seoul");
    $END_DT = strtotime("last day of this month + 9 hour Asia/Seoul");
    
    $data['nowPage'] = "1";
    $data['searchStartDate'] = date('Ymd', $START_DT);
    $data['searchEndDate'] = date('Ymd', $END_DT);
    $data['lottoId'] = "";
    $data['winGrade'] = "2";
    $data['calendarStartDt'] = date('Y-m-d', $START_DT);
    $data['calendarEndDt'] = date('Y-m-d', $END_DT);
    $data['sortOrder'] = "DESC";
        
    $post_data = http_build_query($data);
    $strLength = strlen($post_data); 


    $headers = [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
    'Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'],
    'Cache-Control: max-age=0',
    'Connection: keep-alive',
    'Content-Length: '.$strLength,
    'Content-Type: application/x-www-form-urlencoded',
    'Host: www.dhlottery.co.kr',
    'Referer: https://www.dhlottery.co.kr/myPage.do?method=lottoBuyListView',
    'Sec-Fetch-Mode: nested-navigate',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-User: ?1',
    'Upgrade-Insecure-Requests: 1',
    $userAgent
    ];
          $ch = curl_init();

          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);          
//          curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
//          curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
          $response = curl_exec ($ch);
          $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          
          // 'id="lottoDrwNo">'
          curl_close ($ch);
          if($status_code == 200) {
                
            $tableS = strpos($response, '<table class="tbl_data tbl_data_col">');      // 회차
            $tableE = strpos($response, '</table>');      // 당첨예상금액
            
            $response = substr($response, $tableS, ($tableE - $tableS));
            
            $response = mb_convert_encoding($response, 'UTF-8', 'EUC-KR');
            
            
            $list = explode("<tr>", $response);
            
            if((trim(strip_tags($list[2]))) == "조회 결과가 없습니다."){
	            
	            $this->load->view('lotto/lottoBuyList_x');	
	            
            }else if(strpos($response, "로그인 후 이용이 가능합니다.")){			// 로그인 풀리거나 다른 곳에서 세션이 또 생성됨
	            header('Location: http://m.dhlottery.shop/');
            }else{
	            
            
            unset($list[0]);
            unset($list[1]);
            
            $i = 0;
            $li = array();
            foreach($list as $key => $val){
                $li[$i] = explode("<td>", $val);
                $i++;
            }
        //    echo count($li);
            // 3->회차(4자) ,8 -> 추첨일(10자)
            
            $data = array();
            
            $PREV_ROUND_NUM = null;
            
            foreach($li as $key => $val){
         
                $RESULT = trim(strip_tags($val[6]));
                $PRICE = trim(strip_tags($val[7]));
				$LOTTERY_TYPE = trim(strip_tags($val[2]));
				$DETAILPOP = trim(substr($val[4], strpos($val[4], 'detailPop(\'') + 11  , 58));
				$DETAILPOP = explode( '\', \'', $DETAILPOP);  // 0 -> orderNo, 1 -> barcode, 2 -> issueNo
				
				if(sizeof($DETAILPOP) < 3){
					$DETAILPOP[0] = 0;
					$DETAILPOP[1] = 0;
					$DETAILPOP[2] = 0;
				}
				
				if(!isset($RESULT)){
		            header('Location: http://m.dhlottery.shop');
		            exit;
	            }

                if($RESULT == "미추첨"){
	                $REPORT = $RESULT; $CLASS = "";
                }else if($RESULT == "당첨"){
	                $REPORT = "+".substr($PRICE,0 ,-3)." 원 (".$RESULT.")"; $CLASS = "win";
                }else{
	                $REPORT = $PRICE." 원 (".$RESULT.")"; $CLASS = "lose";	                
                }
                
                if($LOTTERY_TYPE == "연금복권520"){
	                $LOTTERY_TYPE = "ico_520";
                }else if($LOTTERY_TYPE == "로또6/45"){
	                $LOTTERY_TYPE = "ico_lotto";
                }else{
	                $LOTTERY_TYPE = "ico_lottery";
                }
                
                
                
                $TICKET_NUM = str_replace(" ", "", trim(strip_tags($val[4])));
                $DRAW_DATE = substr(strip_tags($val[8]), 0, 10);
                $ROUND_NUM = trim(strip_tags($val[3]));
                $MONTH_SIZE = (int)date('m', strtotime(strip_tags($val[1])));  // 구입일 -> 검색기준월
                $BUY_DATE = date('Ymd', strtotime(strip_tags($val[1])));
                

//                $data['MONTH'][$MONTH_SIZE] = TRUE;

				
				if(isset($data['GAME'][$MONTH_SIZE][$ROUND_NUM])){		// 동일 월이 있는 경우 추가
					$ROUND_NUM = "&nbsp;".$PREV_ROUND_NUM;					
				}
				$PREV_ROUND_NUM = $ROUND_NUM;							// 이전 라운드 저장
				                             
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['DRAW_DATE'] = $DRAW_DATE;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['REPORT'] = $REPORT;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['CLASS'] = $CLASS;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['TICKET_NUM'] = $TICKET_NUM;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['BUY_DATE'] = $BUY_DATE;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['LOTTERY_TYPE'] = $LOTTERY_TYPE;
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['ORDERNO'] = $DETAILPOP[0];
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['BARCODE'] = $DETAILPOP[1];
                $data['GAME'][$MONTH_SIZE][$ROUND_NUM]['ISSUENO'] = $DETAILPOP[2];
                
				if( !array_key_exists($ROUND_NUM, $data['GAME'][$MONTH_SIZE])){
					
				}

                
    
                
              //  $TICKET_NUM
      //          $data[$ROUND_NUM]['DRAW_DATE'] = substr(strip_tags($val[8]), 0, 10);
                
                
            }
            
        //    print_r($data);

         
            $this->load->view('lotto/lottoBuyList', $data);
        
			}
    

      //       echo $response;
            
            } else {
	            
	            
	            
	            
            echo "Error 내용:".$response;
          
          
          
          }
		  
		
		  

			
		
	}
	
	public function lottoDetailPop(){
		
	$orderNo =	$this->input->get('orderNo');
	$barcode = 	$this->input->get('barcode');
	$issueNo =	$this->input->get('issueNo');
//	var_dump($barcode);


			$ses =     $this->session->all_userdata();  
				$this->session_check($ses);  
        $userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7';        
                        
    // 세션을 위한 쿠키정보 가져오기                    
    
    $url = "https://www.dhlottery.co.kr/myPage.do?method=lotto645Detail&orderNo=".$orderNo."&barcode=".$barcode."&issueNo=".$issueNo;    

    $headers = [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
    'Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID'].'; userId='.$ses['userId'].'; UID='.$ses['userId'],
    'Cache-Control: max-age=0',
    'Connection: keep-alive',
    'Host: www.dhlottery.co.kr',
    'Referer: https://www.dhlottery.co.kr/myPage.do?method=lottoBuyList',
    'Sec-Fetch-Dest: document',
    'Sec-Fetch-Mode: navigate',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-User: ?1',
    'Upgrade-Insecure-Requests: 1',
    $userAgent
    ];
          $ch = curl_init();

          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, false);
 //         curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);          
//          curl_setopt($ch, CURLOPT_HEADER, true);   // 헤더 반환
//          curl_setopt($ch, CURLOPT_NOBODY, true);  // ??
          $response = curl_exec ($ch);
          $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          

          curl_close ($ch);
          if($status_code == 200) {
	          
	        $bodyEnd = strrpos($response, '<div class="btns">');
	          
	        $dateInfoS = strpos($response, '<div class="date-info">');     
            $dateInfoE = strpos($response, '</div>');                  
            $dateInfo = substr($response, $dateInfoS, ($dateInfoE - $dateInfoS));
	        $dateInfo = trim(mb_convert_encoding($dateInfo, 'UTF-8', 'EUC-KR'));
            
            
            $response = substr($response, $dateInfoE, $bodyEnd);  // 사용한 부분 제거
            
    //        var_dump($dateInfo);
	        
	        $selectedS = strpos($response, '<div class="selected">');     
            $selectedE = strpos($response, '</ul>');                  
            $selected = substr($response, $selectedS, ($selectedE - $selectedS));
	        $selected = trim(mb_convert_encoding($selected, 'UTF-8', 'EUC-KR'));
	        
			$response = substr($response, $selectedE, $bodyEnd);  // 사용한 부분 제거
			$selected =  explode('</li>', $selected);
			
			$arrGameChoiceNum = array_map(function($rows){
				
			//	var_dump($rows);
			
				$tab = substr($rows, strpos($rows, '<strong>'), strrpos($rows, '</strong>'));
				
				$paper = strip_tags(substr($tab, strpos($tab, '<span>'), strpos($tab, '</span>'))); // A , B, C, D, E
				$result = trim(strip_tags(substr($tab, strrpos($tab, '<span>'), strrpos($tab, '</span>')))); // 낙첨, 당첨, 자동, 반자동, 수동
				
				if($paper == ''){return false;} // 비어있으면 false
				
				$nums = substr($rows, strpos($rows, '<div class="nums">'), strrpos($rows, '</div>'));
				$nums = explode('</span></span>', $nums);

				$i = 0;
				foreach($nums as $num){
				 			
					if(strpos($num, 'ball_645')){
					 $rs = "<span class='".substr($num, strpos($num, 'ball_645') , 18)."'>".trim(strip_tags($num))."</span>";					
					}else{
						$rs = "<span>".trim(strip_tags($num))."</span>";	
					} 
				$ball[$i++] = $rs;
				
				}
				
				return $paper."|".$ball[0]."|".$ball[1]."|".$ball[2]."|".$ball[3]."|".$ball[4]."|".$ball[5]."|".$result; 

			}, $selected);
			
			//var_dump($arrGameChoiceNum);
	        
	        $totalS = strpos($response, '<span class="won">');     
            $totalE = strpos($response, '</div>');
            $total = substr($response, $totalS, ($totalE - $totalS));            
            $total = trim(mb_convert_encoding($total, 'UTF-8', 'EUC-KR'));
			
		//	var_dump($total);
			
			//
			
			$paper['nBuyAmount'] = substr($total, strrpos($total, '</span>') + 7, strrpos($total, '</strong>') - 26  );
			
			
			
			unset($dateInfoS);unset($dateInfoE);
			unset($selectedS);unset($selectedE);
			unset($totalS);unset($totalE);
	          
	          
	          
	       
	          
	          $paper['buyRound'] = substr($dateInfo, strpos($dateInfo, '<strong>제 ')  + 12, 3);
	          $paper['issueDay'] = substr($dateInfo, strpos($dateInfo, '발 행 일</span> : ')  + 21, 25);	          
	          $paper['drawDate'] = substr($dateInfo, strpos($dateInfo, '추 첨 일</span> : ')  + 21, 10);
	          $paper['payLimitDate'] = substr($dateInfo, strpos($dateInfo, '지급 기한</span> : ')  + 23, 10);
	          
	          if(strpos($response, '당첨금액')){
		     //     $paper['nBuyAmount'] = substr($response, strpos($response, '<span class="won">\</span>')  + 26, 1);         
	          }else{ // 미추첨
		   //       $paper['nBuyAmount'] = substr($response, strpos($response, '<span class="won">\</span>')  + 26, 5);
	          }
	          
	          // 미추첨 
	          
	          // 낙첨, 당첨
	          
//	          substr($response, strpos($response, '<div class="total">')  + 19, 5);


	          
	          
	          
	          $BARCODES = substr($dateInfo, strpos($dateInfo, '<p class="barcode">')  + 19, 142);
	          $BARCODES = explode('</span>',$BARCODES);
	          $paper['barCode1'] = trim(strip_tags($BARCODES[0]));
	 		  $paper['barCode2'] = trim(strip_tags($BARCODES[1]));
	 		  $paper['barCode3'] = trim(strip_tags($BARCODES[2]));
	 		  $paper['barCode4'] = trim(strip_tags($BARCODES[3]));
	 		  $paper['barCode5'] = trim(strip_tags($BARCODES[4]));
	 		  $paper['barCode6'] = trim(strip_tags($BARCODES[5]));
	 		  $paper['arrGameChoiceNum'] = $arrGameChoiceNum;
	 		   
	 		  // var_dump($paper);
	 		   
	 		   unset($response);
	 		   $this->load->view('lotto/645paper_view',$paper);

	          
	          

	          
	     }

	}
	
	
	public function lotto_buy(){
		
			$ses = $this->session->all_userdata();
			$this->session_check($ses);
			$this->load->view('lotto/buy');
	
	}
	
	public function lotto_buy_abs(){
		
		$ses = $this->session->all_userdata();
		$this->session_check($ses);
		$this->load->view('lotto/buy_abs');
			
	}
	

	
	
	public function absenceRandom(){
		
		if(date('YmdHis',(time() + 32400)) > date('YmdHis', strtotime("this Saturday + 29 hour Asia/Seoul"))){
	
			echo "<script>alert('구매가능 시간이 아닙니다/ 토요일 오후 8시 (3분전) 까지 구매가능 ');history.go(-1);</script>";
			
		}
		else{
		
				$ses = $this->session->all_userdata();
					$this->session_check($ses);
				
				$data = $this->input->post('data');
				
				$absenceNumbers = json_decode($data, true);
				
				ksort($absenceNumbers);

				function createLottoArr($sheet){
		
					$lottoNumbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45];			
				
					foreach($sheet as $alpabet => $num){
						unset($lottoNumbers[$num - 1]);								// 제외수를 제거한 로또용지 작성
					}
						shuffle($lottoNumbers);										// 셔플
						return array_slice($lottoNumbers, 0 , 6);     // 6개 추출 키값까지 붙여서 알아서 넘어가네?		
					
				}
				
				$lottoArr = array_map('createLottoArr', $absenceNumbers); // $absenceNumbers에서 한개씩 함수로 배열요소 전달
		
				
				$param = array();
				
				foreach($lottoArr as $key => $value){
					
					sort($value);
					
					if(sizeof($value) == 1){
						$genType = "0"; // 자동
						$arrGameChoiceNum = null;
					}else if(sizeof($value) == 6){
						$genType = "1"; // 수동
						$arrGameChoiceNum = implode( ',', $value );		
					}else{
						$genType = "2"; // 반자동
						array_pop($value);
						$arrGameChoiceNum = implode( ',', $value );			
					}
					array_push($param, array(
						"genType" => $genType,
						"arrGameChoiceNum" => $arrGameChoiceNum,
						"alpabet" => $key
					));
				}
				
				
		$gameCnt = sizeof($lottoArr);
		$nBuyAmount = sizeof($lottoArr).'000';
		
		unset($lottoArr);

		
		// genType 2, 반자동 genType 1 수동, genType 0 자동
		
			$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.38 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.38';
		
		$url = 'https://ol.dhlottery.co.kr/olotto/game/execBuy.do';
		  
	$headers = [
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Connection: keep-alive',
	'Accept-Language: ko-kr',
	'Accept-Encoding: gzip, deflate',
	'Host: ol.dhlottery.co.kr',
	$userAgent,
	'Cookie: Cookie: WMONID='.$ses['WMONID'].'; JSESSIONID='.$ses['JSESSIONID']
	];
	
	
	$round = $ses['lottoDrwNo'];
	
	


$param = urlencode(json_encode($param));

//	$param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"}]');
// $param = urlencode('[{"genType":"0","arrGameChoiceNum":null,"alpabet":"A"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"B"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"C"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"D"},{"genType":"0","arrGameChoiceNum":null,"alpabet":"E"}]');
//	$ROUND_DRAW_DATE = urlencode('2019/08/17');
//	$WAMT_PAY_TLMT_END_DT = urlencode('2020/08/18');

	$ROUND_DRAW_DATE = urlencode(date('Y/m/d', strtotime("this Saturday + 9 hour Asia/Seoul")));
	$WAMT_PAY_TLMT_END_DT = urlencode(date('Y/m/d', strtotime("this Sunday + 1 year + 9 hour Asia/Seoul")));

/*
	$nBuyAmount = '5000';
	$gameCnt = '5';
*/

$post_data =
'round='.$round.
'&direct=172.17.20.52&nBuyAmount='.$nBuyAmount.
'&param='.$param.
'&ROUND_DRAW_DATE='.$ROUND_DRAW_DATE.
'&WAMT_PAY_TLMT_END_DT='.$WAMT_PAY_TLMT_END_DT.
'&gameCnt='.$gameCnt; 

//var_dump($post_data);

  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  
		  
		  $info = curl_getinfo($ch);
//		  var_dump($info);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    
//		   $response = '{"loginYn":"Y","result":{"oltInetUserId":"002747602","issueTime":"18:26:13","issueDay":"2019/08/12","resultCode":"100","barCode4":"32252","barCode5":"61485","barCode6":"35090","barCode1":"52935","barCode2":"53515","resultMsg":"SUCCESS","barCode3":"49047","buyRound":"872","arrGameChoiceNum":["A|05|11|14|16|21|413"],"weekDay":"월","payLimitDate":"2020/08/18","drawDate":"2019/08/17","nBuyAmount":1000}}';
		    
		   $response = json_decode($response, true);
		   
		   if($response['result']['resultCode'] == "100"){		
			   
	 		   //동행복권 사이트에서 로또 구매 조회 시 날짜(발행일) + 바코드 필요
	 		   
	 		   $paper['buyRound'] = $response['result']['buyRound'];
	 		   $paper['issueDay'] = $response['result']['issueDay'].'('.$response['result']['weekDay'].')'.$response['result']['issueTime'];
	 		   $paper['drawDate'] = $response['result']['drawDate'];
	 		   $paper['payLimitDate'] = $response['result']['payLimitDate'];
	 		   $paper['nBuyAmount'] = $response['result']['nBuyAmount'];
	 		   $paper['barCode1'] = $response['result']['barCode1'];
	 		   $paper['barCode2'] = $response['result']['barCode2'];
	 		   $paper['barCode3'] = $response['result']['barCode3'];
	 		   $paper['barCode4'] = $response['result']['barCode4'];
	 		   $paper['barCode5'] = $response['result']['barCode5'];
	 		   $paper['barCode6'] = $response['result']['barCode6'];
	 		   $paper['arrGameChoiceNum'] = $response['result']['arrGameChoiceNum'];
	 		   
	 		   
	 		   unset($response);
	 		   $this->load->view('lotto/645paper',$paper);
	 		   
		   }else if( $response['result']['resultCode'] == "-7"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			echo "<script>alert('주간 구매한도가 초과되었습니다.');history.go(-1);</script>";			 
			 
		   }else if( $response['result']['resultCode'] == "-1"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			
			echo "<script>alert('예치금이 초과되었습니다.');history.go(-1);</script>";		 
			 
		   }else if( $response['result']['resultCode'] == "E3"){
	//		 echo $response -> {'loginYn'};		   
	//		 echo $response['result']['resultMsg'];
			
			echo "<script>alert('현재는 판매시간이 아닙니다.');history.go(-1);</script>";		 
			 
		   }else{
			   
			   
//리턴값 '{"loginYn":"Y","result":{"oltInetUserId":"002747602","issueTime":"18:26:13","issueDay":"2019/08/12","resultCode":"100","barCode4":"32252","barCode5":"61485","barCode6":"35090","barCode1":"52935","barCode2":"53515","resultMsg":"SUCCESS","barCode3":"49047","buyRound":"872","arrGameChoiceNum":["A|05|11|14|16|21|413"],"weekDay":"월","payLimitDate":"2020/08/18","drawDate":"2019/08/17","nBuyAmount":1000}}' 
	
		  			   
			   
			   
			//  echo $response; 
			var_dump($response);
		   }
		    
//		    var_dump($response);
//		    var_dump($response);
		  } else {
		    echo "Error 내용:".$response;
		  }
		  	
	
}
		}
	
	}
	
	