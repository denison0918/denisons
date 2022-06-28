<?php
	
	class Json_cardam extends CI_Controller {
		public function __construct()
		{
			parent::__construct();

//			$this->load->model('funerals_model');
//			$this->load->model('admin_model');
			$this->load->model('cardam_model');
//			$this->load->library('encryption');

	  		$this->load->helper('form');
	        $this->load->helper('url');
		}
		
		public function set_cs(){
			
/*
			$cs = array(
				'whence' => 'kakao',
				'type' => 's',
				'city_c_no'	 => 3,
				'phone' => '01011112222'
			);
*/
		//	var_dump($cs);
						
//			$this->cardam_model->set_cs($cs);


/*
			list(
				$day,
				$whence,
				$city,
				$carNo,
				$accident,
				$local,
				$phone,
				$type
			) = array(
				$this->input->post('day'),
				$this->input->post('whence'),
				$this->input->post('city'),
				$this->input->post('carno'),
				$this->input->post('accident'),
				$this->input->post('local'),
				$this->input->post('phone'),
				$this->input->post('type')
			);
			
			$carInfo = $this->getCar_arr(urlencode($carNo));
			$carInfo = $carInfo['mnf']." ".$carInfo['nm']." ".$carInfo['mdyr']."년형(".$carInfo['yr'].".".$carInfo['mon'].")";
*/
			list(
				$day,
				$whence,
				$city,
				$carInfo,
				$accident,
				$local,
				$phone,
				$type
			) = array(
				$this->input->post('day'),
				$this->input->post('whence'),
				$this->input->post('city'),
				$this->input->post('carInfo'),
				$this->input->post('accident'),
				$this->input->post('local'),
				$this->input->post('phone'),
				$this->input->post('type')
			);
			
			
			
			
			$cs = array(
				'whence' => $whence,
				'type' => $type,
				'city_c_no'	 => NULL,
				'phone' => $phone,
				'question' => $accident,
				'local' => $local,
				'carNo' => NULL,
				'carinfo' => $carInfo,
				'day' => $day
				
			);
			
			
			

			$this->cardam_model->set_cs($cs);
			

	if(stripos($whence,"GO") !== false){
		$post_url = "http://mp.lumieyes.com/ad/01_cardam/190619/main_get.php";
		$params = array(
			"mode"=>"insert_mode",
			"num"=>$whence,
			"phone"=>$phone,
			"skin"=>$carInfo
		);
		
		$params = json_encode($params);


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $post_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);

		$result = curl_exec($ch);
		
		curl_close($ch);
	}else if(stripos($whence,"TP") !== false){
		
		$ref = $_SERVER['HTTP_REFERER'];
		$parseURL = parse_url($ref);
		parse_str($parseURL['query'], $params);
	//	$params['key'] = mysql_insert_id();
		$params['key'] = base64_encode(hash('sha256', $phone , true));
		
		if($params['jid']){
		unset($params['num']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,'http://api.tenping.kr/Query?'.http_build_query($params) );
		$content = curl_exec($ch);
		curl_close($ch);
		}
		
		$post_url = "http://mp.lumieyes.com/ad/01_cardam/190619/main_get.php";
		$params = array(
			"mode"=>"insert_mode",
			"num"=>$whence,
			"phone"=>$phone,
			"skin"=>$carInfo
		);
		
		$params = json_encode($params);


		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, $post_url);
		curl_setopt($ch2, CURLOPT_POST, 1);
		curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
		curl_setopt($ch2, CURLOPT_POSTFIELDS, $params);
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch2, CURLOPT_VERBOSE, true);
		curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 60);
		curl_setopt($ch2, CURLOPT_TIMEOUT, 60);

		$result = curl_exec($ch2);
		
		curl_close($ch2);
		
		
		
		
	}
			
			
		$this->load->view('cardam_r/buym_ok');
			
		

	}
	
	public function get_cs_list($s,$e){
		$rs	= $this->cardam_model->get_cs_list($s,$e);
		echo json_encode($rs,JSON_UNESCAPED_UNICODE);
	}
	
	public function get_rv_list($s,$e){
		$rs	= $this->cardam_model->get_rv_list($s,$e);
	
		echo json_encode($rs,JSON_UNESCAPED_UNICODE);
	

	}
	
	public function set_adm_memo($code, $value){
		$data = array(
	        'memo' => urldecode($value),
		);
		$this->cardam_model->update_purchase($code, $data);
	}
	
	public function getCar($carNo)
		{
			
		  if(strlen($carNo) < 15 ){
			  $result['status'] = '404';
			  echo json_encode($result, JSON_UNESCAPED_UNICODE);
			  exit;
		  }
		 echo json_encode($this->getCar_arr(urlencode($carNo)), JSON_UNESCAPED_UNICODE);  

		  
		  
//		  var_dump( $response);
		  
//		  var_dump($response);
//		 echo  $result->{'carinfo'};
		//  var_dump($result->{'SearchResults'}[0]->{'Manufacturer'});
/*
		  echo "<br>";
		  echo "제조사 :" .$result->{'SearchResults'}[0]->{'Manufacturer'}."<br>";
		  echo "차량모델 :" .$result->{'SearchResults'}[0]->{'Model'}."<br>";
		  echo "차량등급 :" .$result->{'SearchResults'}[0]->{'Badge'}."<br>";
		  echo "차량세부등급 :" .$result->{'SearchResults'}[0]->{'BadgeDetail'}."<br>";		  
		  echo "차량조작 :" .$result->{'SearchResults'}[0]->{'Transmission'}."<br>";
		  echo "연료타입 :" .$result->{'SearchResults'}[0]->{'FuelType'}."<br>";
		  echo "차량등록일 :" .$result->{'SearchResults'}[0]->{'Year'}."<br>";
		  echo "주행거리 :" .$result->{'SearchResults'}[0]->{'Mileage'}."<br>";
		  echo "가격 :" .$result->{'SearchResults'}[0]->{'Price'}."<br>";
		  echo "판매지역 :" .$result->{'SearchResults'}[0]->{'OfficeCityState'}."<br>";
		  echo "정보수정일 :" .$result->{'SearchResults'}[0]->{'ModifiedDate'}."<br>";
*/
//		  echo "차량사진 :" ."<img src=http://ci.encar.com/".$result->{'SearchResults'}[0]->{'Photo'}."001.jpg> <br>";
				
	}
	
	public function getCar_arr($carNo)
		{
			 
		  $url = "https://m.encar.com/ee/estimate.do?&method=getKidiDataEstimate&seqnum=488975&carnum=".$carNo;
		  
		  
		  $headers = [
		    'X-Apple-Tz: 0',
		    'X-Apple-Store-Front: 143444,12',
		    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		    'Accept-Encoding: gzip, deflate',
		    'Accept-Language: en-US,en;q=0.5',
		    'Cache-Control: no-cache',
		    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
		    'Host: m.encar.com',
		    'Referer: http://m.encar.com/',
		    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0',
		    'X-MicrosoftAjax: Delta=true'
		];
		  
		  $is_post = false;
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
//		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  
		  $response = iconv("EUC-KR","UTF-8",  $response);
		  $result = json_decode($response);
		  
		  $result = array(
		  	'mnf' => $result->{'carinfo'}->{'mnfcnm'},
		  	'nm' => $result->{'carinfo'}->{'mdlgroupnm'},
		  	'mdyr' => $result->{'carinfo'}->{'kidiyear'},
		  	'yr' => $result->{'carinfo'}->{'yr'},
		  	'mon' => $result->{'carinfo'}->{'car_month'}
		  );
		  if(!$result['mnf']){
			$result['status'] = '404';
		  }else{
		  	$result['status'] = '200';
		  }
//		  echo json_encode($result, JSON_UNESCAPED_UNICODE);  
		  return $result;
	}
	
	
	// transkeyUuid 암호화 키 ( 사이트 로드시 생성됨 )
	// transkey_userPwd 패스워드 ( 패스워드 입력 시 생성됨 )
	// transkey_HM_userPwd 복호화 키 ( 서브밋 버튼 클릭 시 생성됨 )
	public function getCard_list()
		{
			 
		    $url = "https://m.kbcard.com/CXOHMLGC0018.cms?isAjax=Y&isNoFrame=Y&responseContentType=json";
  
$post_data ='transkeyUuid=951994ceabf49ba90f527ada3cefff1d108d526d0f8009092b3f762bef8c651b&transkey_userPwd=$9c,8a,88,22,32,28,88,f6,3a,e7,a,ec,2b,84,c5,6d$e0,13,63,5,8e,fc,a9,f7,f8,7b,ef,74,d2,a5,17,cc$63,a6,6,e5,b7,6a,b5,7f,88,c9,a5,e8,90,8f,38,cf$5f,e5,28,a0,25,fe,b0,a8,d9,ef,3e,3f,49,d3,2a,22$d5,22,fb,f,eb,a7,99,b9,f5,1e,68,a4,7f,da,44,d2$43,f2,17,e6,3c,57,a1,9a,83,c2,b9,fe,3f,e1,da,65$8b,36,47,63,d1,ab,cb,7d,a0,c1,59,91,ed,f0,59,29$a8,29,b3,2,20,f4,3a,a3,90,af,cd,9a,4a,ec,16,16$fa,cd,b5,ec,fb,ec,75,c0,80,7d,d5,88,d8,60,d2,22&transkey_HM_userPwd=4e2b31b0665243a9e54c8d9d49c45dd602edf24865d6c5566944f85ecee565f5&userName=&userBirth=&lginYn=01&ppsnYn=01&userId=YABAYABA55&procId=a&mobileAppCmnYn=Y'; 
		  
	$headers = [
//	'Referer: https://m.kbcard.com/CXOHMLGC0018.cms?appMainYn=N&loginType=',
	'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
	'Accept: application/json, text/javascript, */*; q=0.01',
	'Cache-Control: no_cache',
	'Accept-Language: ko-kr',
	'Accept-Encoding: br, gzip, deflate',
	'Connection: keep-alive',
	'Host: m.kbcard.com',
	'Origin: https://m.kbcard.com',
	'Cookie: _fbp=fb.1.1554425120180.597322971; _ga=GA1.2.64968346.1554425120; _gid=GA1.2.27886683.1554425120; NODE0000000001SVTBM=; wcs_bt=s_1a7f5ba2e091:1554425129; _gat_UA-65962490-7=1; SSCSID=HW55&&9KDq9QPGRFXlhFk6JIg7nID60KUW8CADFE1I6mRXSP6D7VMKn3ws!132874960!1554425119686; cto_lwid=1b274dc6-7bd1-4985-8877-c1e9246658e5; exelbid-uid=b0NCJoY7rLCtGkJs0eED; GTSID=; _dc_gtm_UA-65962490-1=1; _dc_gtm_UA-65962490-7=1; SSCSID=PW51&&fP7TcmlfcQjhZWTqWxGl7x1WtTynygC37nyJwKDy236p01j1Tpqw!1982907528!1554425119472; _$UserUniqueId=20190405094519HW551000048015; JSESSIONID=9KDq9QPGRFXlhFk6JIg7nID60KUW8CADFE1I6mRXSP6D7VMKn3ws!132874960; _$SPIDER_permanent=20190405094519HW551000048015',
	'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1',
	'X-Requested-With: XMLHttpRequest'
			];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
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
		  
		  
		$url1 = "https://m.kbcard.com/CXHIAMKC0003.cms?responseContentType=json&mainCC=a";
  
 $post_data ='cardSeq=0'; 
		  
	$headers = [
	'Referer: https://m.kbcard.com/CXHIAMKC0003.cms?skipretain=Y',
	'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',	
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Accept-Language: ko-kr',
	'Accept-Encoding: br, gzip, deflate',
	'Connection: keep-alive',
	'Host: m.kbcard.com',
	'Origin: https://m.kbcard.com',
	'Cookie: _fbp=fb.1.1554425120180.597322971; _dc_gtm_UA-65962490-1=1; _dc_gtm_UA-65962490-7=1; _ga=GA1.2.64968346.1554425120; _gid=GA1.2.27886683.1554425120; wcs_bt=s_1a7f5ba2e091:1554426746; JSESSIONID=XXPrDdFL7sCGvUKtFviV_rX3cAD7KBUa0kfICD_PU1yOb2IaagQg!-1945633104; SSCSID=HW71&&XXPrDdFL7sCGvUKtFviV_rX3cAD7KBUa0kfICD_PU1yOb2IaagQg!-1945633104!1554426745163; NODE0000000001SVTBM=; todayCookie=done; GTSID=; cto_lwid=1b274dc6-7bd1-4985-8877-c1e9246658e5; exelbid-uid=b0NCJoY7rLCtGkJs0eED; SSCSID=PW51&&fP7TcmlfcQjhZWTqWxGl7x1WtTynygC37nyJwKDy236p01j1Tpqw!1982907528!1554425119472; _$UserUniqueId=20190405094519HW551000048015; _$SPIDER_permanent=20190405094519HW551000048015',
	'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1',
	'X-Requested-With: XMLHttpRequest'
			];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_URL, $url1);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
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
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36',
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
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';		
			
			
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
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'
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
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36',
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
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';		
			
			
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
            $response = mb_convert_encoding($response, 'HTML-ENTITIES', 'EUC-KR');  // 메타태그 인코드 에러 해결
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
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';		
			
			
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
		
		// 쿠키정보 가져오기 + 로그인
	$userAgent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';		
			
			
	// 세션을 위한 쿠키정보 가져오기		
			
	$url = "https://m.dhlottery.co.kr/user.do?method=loginm&returnUrl=https%3A%2F%2Fm.dhlottery.co.kr%2FuserSsl.do%3Fmethod%3DmyPage";
	
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

			 
			 
	//로그인 및 리다이렉트(로그인 완료페잊)
			 
	$url = "https://m.dhlottery.co.kr/userSsl.do?method=login";
	
	$userId = 'ktm9024';
	$password = urlencode('rlaxoals1!'); //'Kim56001%21';	
	  
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
		  echo "<br>status_code:".$status_code."<br>";
		  
		  curl_close ($ch);
		  if($status_code == 200) {
//		    echo $response;
//		    var_dump($response);


	
		  } else if($status_code == 302) {
			  echo $response;
			  
			} else {
			  
		  
		    echo "Error 내용:".$response;
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
	'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'
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
            $response = mb_convert_encoding($response, 'HTML-ENTITIES', 'EUC-KR');  // 메타태그 인코드 에러 해결
            $re = sprintf("/\<(%s)\>(.+?)\<\/\\1\>/", preg_quote('strong'));
			preg_match_all($re, $response, $matches); 
			print_r($matches[0]);
	}	
	


			} else {
		    echo "Error 내용:".$response;
		  }	  
		  
		
	}
	

}
	
	
	
	