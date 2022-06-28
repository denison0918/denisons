<?php
	
	class Json_car extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
//			$this->load->model('funerals_model');
//			$this->load->model('admin_model');
//			$this->load->model('car_model');
		}

		
		public function encar($carNo)
		{

		//	$data['funerals_item'] = $this->funerals_model->get_funerals($id);
//			$client_id = "LktC_okHBjJET3d0S4SH";
//		  $client_secret = "R7Fvj1t7xX";
//		  $code = $_GET["code"];
//		  $state = $_GET["state"];
//		  $redirectURI = urlencode("http://api.encar.com/search/car/list/general?count=true&q=(And.Hidden.N._.CarType.Y._.Simple.keyword(20모3393).)&inav=|Metadata|Sort");
	//	  $url = urlencode("http://api.encar.com/search/car/list/general?count=true&q=(And.Hidden.N._.CarType.Y._.Simple.keyword(20모3393).)&inav=");
		  
		  $url = "http://api.encar.com/search/car/list/premium?count=true&q=(And.Hidden.N._.CarType.Y._.Simple.keyword(".$carNo.").)&sr=".urlencode("|ModifiedDate|0|20");
		  
		  echo $url;
		  $is_post = false;
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  
		  $result = json_decode($response);
		  
		//  var_dump($result->{'SearchResults'}[0]->{'Manufacturer'});
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
//		  echo "차량사진 :" ."<img src=http://ci.encar.com/".$result->{'SearchResults'}[0]->{'Photo'}."001.jpg> <br>";
		  
		  
		  
		  
		  
				
	}
	
	
	public function kbcha($carNo)
	{
  
		//  $url = "https://www.kbchachacha.com/public/car/list.json";
		  $url = 'https://www.kbchachacha.com/public/car/popular/list.json';
		  
		  echo $url;

		  $is_post = true;
/*
		  $post = [
			    'gotoPage' => 1,
			    'pageSize' => 25,
			    'carNo'   =>  urldecode($carNo),
			    'searchOrder'   => 'update',
			    'myCarAmt' => 0
			];
			
*/
		  $post = ['searchText' => urldecode($carNo)];	
		  
		  
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  
		  $result = json_decode($response);
		 
		  $demoList = $result->{'demoList'};
		  
		  echo "제조사 :" .$demoList[0]->{'makerName'}."<br>";
		  echo "차량명 :" .$demoList[0]->{'carName'}."<br>";
		  echo "클래스 :" .$demoList[0]->{'className'}."<br>";
		  echo "모델명 :" .$demoList[0]->{'modelName'}."<br>";
		  echo "등급 :" .$demoList[0]->{'gradeName'}."<br>";
		  echo "클래스 :" .$demoList[0]->{'className'}."<br>";
		  echo "조작 :" .$demoList[0]->{'autoGbnName'}."<br>";
		  echo "엔진타입 :" .$demoList[0]->{'gasName'}."<br>";
		  
		  

		  echo "색상 :" .$demoList[0]->{'colorName'}."<br>";
		  echo "판매게시일 :" . $demoList[0]->{'jesiNo'}."<br>";
		  echo "차넘버 :" . $demoList[0]->{'carNo'}."<br>";
		  echo "판매가 :" . $demoList[0]->{'sellAmt'}."만원"."<br>";
		  
		  echo "판매검색 단위 :" . $demoList[0]->{'hashSellAmt'}."<br>";
		  echo "킬로수 :" . $demoList[0]->{'km'}."km"."<br>";
		  echo "차량등록일 :" . $demoList[0]->{'regiDay'}."<br>";
		  echo "판매지역 :" . $demoList[0]->{'cityShortName'}." ".$demoList[0]->{'areaName'}."<br>";
		  echo "배기량 :" . $demoList[0]->{'numCc'}."cc"."<br>";
		  
		  echo "판매정보변경일 :" . $demoList[0]->{'modifyDate'}."<br>";
		  
		  
		  
		  
		  
		  echo "판매처 : ". "KB차차차";
		  
		  
		  
/*
		    $age = $response->{'demoList'};
			$gender = $user->{'gender'};
			$name = $user->{'name'};
			$birthday= $user->{'birthday'};
			$email = $user->{'email'};
			$nick = $user->{'nickname'};
			$id = $user->{'id'};
*/

						
	}
	
	public function ajsellcar($carNo)
	{
  
	//	  $url = "http://www.ajsellcar.co.kr/ajax/search.do";
		  $url = "http://www.ajsellcar.co.kr/ajax/comReqByCar.do";
		  
		  echo $url;
		  $is_post = true;

		  $post = [
				'data' => '{"apiUrl":"http://www.ajsellcar.co.kr/ajax/ajaxSearch.do?page=1&rows=20&userId=&dsnId=&exhibitionSeq=&nation=&maker=&model=&detailmodel=&price%5Bminprice%5D=&price%5Bmaxprice%5D=&ys=&ms=&ye=&me=&mileage%5Bminmileage%5D=&mileage%5Bmaxmileage%5D=&fuelType=&transmission=&fuelefficiency%5Bminfe%5D=&fuelefficiency%5Bmaxfe%5D=&area%5Bsi%5D=&area%5Bgu%5D=&carno=11%EB%84%880411&viewtype=&orderby=","apiName":null,"reqType":"json","sendType":"POST","direct":false,"charset":"UTF-8","useLoading":true,"loadingSelector":"","userId":"","dsnId":"","exhibitionSeq":"","nation":"","carType":[],"maker":"","model":"","detailmodel":"","grade":[],"price":{"minprice":"","maxprice":""},"color":[],"ys":"","ms":"","ye":"","me":"","mileage":{"minmileage":"","maxmileage":""},"fuelType":"","transmission":"","fuelefficiency":{"minfe":"","maxfe":""},"area":{"si":"","gu":""},"option":{"out":[],"int":[],"safety":[],"av":[]},"theme":[],"carno":"'.urldecode($carNo).'","viewtype":"","secureuse":[],"orderby":"","hotMark":[]}'
			];

		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  

		  $result = json_decode($response);

		  var_dump($result->{'list'}[0]);

		$list = $result->{'list'}[0];
		
		if($list->{'cno'} == urldecode($carNo)){
		
		  
		  
		  echo "차량 :" .$list->{'cn'}."<br>";
		  echo "차량번호 :" .$list->{'cno'}."<br>";
		  echo "차량등록일 :" .$list->{'y'}.$list->{'m'}."<br>";
		  echo "판매지역 :" . $list->{'sprsi'}." ".$list->{'sprgu'}."<br>";
		  echo "국가 :" .$list->{'n'}."<br>";
		  echo "주행거리 :" .$list->{'ma'}."km<br>";
		  echo "판매가 :" .$list->{'ps'}."<br>";
		  echo "조작 :" .$list->{'tcn'}."<br>";
		  echo "배기량 :" .$list->{'dcc'}."cc<br>";
		  
		  echo "판매처 : ". "AJ셀카";
						
		  }else{
			  echo "Not found";
		  }

	}
	
	public function pincar($carNo = '39다7894')
	{
  
		  $url = "http://www.pincar.co.kr/car/totalSearch.do";
		  
		  echo $url;
		  $is_post = true;
		  $post = [
/*
			  	'n' => 'KR',
			    'tp' => 'model',
			    'code1' => 'KA',
			    'ys'   =>  2015,
			    'ms'   =>  07,
			    'ye'   =>  2015,
*/
			    'keyword'   =>  urldecode($carNo)
			];
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		 //   echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  
		  
		  $html = new DOMDocument();
		  
		  @$html->loadHTML($response);
		  $result = $html->getElementsByTagName('td');
		  
		  
		  
		  $data = array();
		  $check = 0;
		  

		  foreach($result as $index => $search ){
			
			if($index > 5){break;}
			
				$str = trim( $search->{'textContent'});
				$arr = explode("\n", $str);
				unset($arr[1]);
				unset($arr[2]);
				unset($arr[3]);
				unset($arr[8]);
				$arr = preg_replace('/\s\s+/', ' ', $arr);
				if( (strlen($arr[0]) == 0) or (strlen($arr[0]) == 29) ){
					unset($arr);
					continue;
				}
				if(sizeof($arr) > 3){
					$data['model'] = $arr[0];
					$data['birth'] = $arr[4];
					$data['mileage'] = $arr[5];
					$data['transmission'] = $arr[6];
					$data['fueltype'] = $arr[7];
					$check++;
				}else if($check == 1){
					$data['regdate'] = $arr[0];
					$check++;
				}else if($check == 2){
					$data['region'] = $arr[0];
					$check++;
				}else if($check == 3){
					$data['price'] = $arr[0];
					unset($response);
					unset($html);
					unset($result);
					break;
				}
				
		  	}
		  	
		  	
		  	var_dump($data);

		  	
		  	

//		  $result = json_decode($response);
//		  var_dump($result->{'list'}[0]);
		  
/*
		  		 
	
		cn "상품 타이틀"
		cno "차량번호"
		fcn "연료타입"
		m "차량등록월"
		y "차량등록연도"
		tcn "조작"
		sprsi 큰 지역
		sprgu 작은 지역
		n "KR"
		ma 킬로수
		
		
*/
		
		
		
/*
		  $list = $result->{'list'}[0];
		  
		  echo "차량 :" .$list->{'cn'}."<br>";
		  echo "차량번호 :" .$list->{'cno'}."<br>";
		  echo "차량등록일 :" .$list->{'y'}.$list->{'m'}."<br>";
		  echo "판매지역 :" . $list->{'sprsi'}." ".$list->{'sprgu'}."<br>";
		  echo "국가 :" .$list->{'n'}."<br>";
		  echo "주행거리 :" .$list->{'ma'}."km<br>";
		  echo "판매가 :" .$list->{'ps'}."<br>";
		  echo "조작 :" .$list->{'tcn'}."<br>";
		  echo "배기량 :" .$list->{'dcc'}."cc<br>";
		  
		  echo "판매처 : ". "AJ셀카";
*/
						


	}
	
	
	public function carmanager($carNo = '39조8057')
	{
  
		  $url = "http://carmanager.co.kr/CarData/JsonCarData";
		  
	  $is_post = true;

# sending post parameter
$post = '{"para":{"PageNow":1,"PageSize":"10","PageSort":"0","PageAscDesc":"0","CarMode":"0","CarSiDoNo":"103","CarSiDoAreaNo":"1038","CarDanjiNo":"96502","CarMakerNo":null,"CarModelNo":null,"CarModelDetailNo":"","CarGradeNo":"","CarGradeDetailNo":"","CarMakeSDate":"","CarMakeEDate":"","CarDriveSKm":null,"CarDriveEKm":null,"CarMission":"","CarFuel":"","CarColor":"","CarSMoney":null,"CarEMoney":null,"CarIsLPG":"False","CarIsSago":"False","CarIsPhoto":"False","CarIsSaleAmount":"False","CarIsCarCheck":"False","CarName":"","CarDealerName":"","CarShopName":"","CarDealerHP":"","CarNumber":"'.urldecode($carNo).'","CarOption":"","CarTruckTonS":"","CarTruckTonE":""}}';


	# sending manually set headers

$headers = array();
$headers[] = 'Cookie: ASP.NET_SessionId=itlresrft3xga2bpwltzb3dg; USERCONFIG=USERNO=1000328066&PHOTOYN=False&AMOUNT=0&AMOUNTPER=0&AMOUNTYN=False&DEALERYN=False&SHOPYN=False&UPDATEDATEYN=False&NUMBERYN=False; USERKEY=USERNO=1000328066&USERSESSIONID=7C0B8B63AC068BA328A28B25D558C633F38F830FC8A554F91D31FAD8016B8E46&USERNAME=708A9CC4CCC1A16F9958324742123745&USEREMAILID=9D9BEEA4AA080A669DCF4BB53A400889&USEREMAIL=09C67B591F2E4925785D3290915B271F37294EB3C530B51F&USERHP=FA65E27F80DE0AEFBDB332B1935C703A&USERGUBUNNO=100&USERGUBUN=9EB4812D2B3DAF45&USERSIDONO=1D13F8CCB571B5DC&USERSIDOAREANO=A732693D3524FDF3&USERDANJINO=AB8D2DF585876784&USERSHOPNO=3F569BE86910C8E3&USERSHOPNAME=78296A23E54BF6693D620A889F9B151085BE7288D7C4F3B2&USERSHOPUSEYN=E686AFA3E35173B1&USERSHOPCASHUSEYN=4992CFA6CF9A2F2E&USERMEMBERNO=95651271AEE51F7157BB780CDC81AFBE&USERMEMBEREMPJOB=B6D49F882CF2FC8380B78DE41D54B8FF&USERPHOTO=&USERCARINSTATE=6CF4370F0716C9C0&USEPHOTOINYN=E686AFA3E35173B1&USEWONBUINYN=4992CFA6CF9A2F2E&USEAUTOCAFEINYN=4992CFA6CF9A2F2E&USEONCARINYN=4992CFA6CF9A2F2E&USEONCARUPYN=4992CFA6CF9A2F2E&USEYN=6D3B21324E5C6304&CarCheckManualUseYN=4992CFA6CF9A2F2E&AreaMarketingManagerUserNo=3591BB7DD7E1B97121885832FED4934B&JoHapNo=EEFE88B7AC167407; Session_Cookie=UserNo=1000328066&IP=B14852046F40E9DB626D11A692010F46&SessionID=7C0B8B63AC068BA328A28B25D558C633F38F830FC8A554F91D31FAD8016B8E46&EndDate=2017-09-14 00:19:25; _ga=GA1.3.526049102.1505315275; _gid=GA1.3.23066366.1505315275; CARLOG=103716116=MTAzNzE2MTE2LDgwNTcsPz8/Pz8/PyxodHRwOi8vd3d3LmRpY2FyLmNvLmtyL3RlbXAvcGhvdG8vMjAxNzA2MTcvOTlCRUNGRDA1REIwODIyQjEwRjNGM0RFMTM0NzgxM0VBQzE5MDBBMDA4MUUxODlBRjQ3NjkxNTg0QUZDRkQ5Ql9USC5qcGc=';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Origin: http://carmanager.co.kr';
$headers[] = 'Host: carmanager.co.kr';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Length: 645';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: ko-KR,ko;q=0.8,en-US;q=0.6,en;q=0.4,ja;q=0.2';
$headers[] = 'Referer: http://carmanager.co.kr/Car/Data';
/*

POST /CarData/JsonCarData HTTP/1.1
Host: carmanager.co.kr
Connection: keep-alive
Content-Length: 645
Accept: application/json, text/javascript, '* /*; q=0.01'
Origin: http://carmanager.co.kr
X-Requested-With: XMLHttpRequest
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36
Content-Type: application/json; charset=UTF-8
Referer: http://carmanager.co.kr/Car/Data
Accept-Encoding: gzip, deflate
Accept-Language: ko-KR,ko;q=0.8,en-US;q=0.6,en;q=0.4,ja;q=0.2
Cookie: ASP.NET_SessionId=itlresrft3xga2bpwltzb3dg; USERCONFIG=USERNO=1000328066&PHOTOYN=False&AMOUNT=0&AMOUNTPER=0&AMOUNTYN=False&DEALERYN=False&SHOPYN=False&UPDATEDATEYN=False&NUMBERYN=False; USERKEY=USERNO=1000328066&USERSESSIONID=7C0B8B63AC068BA328A28B25D558C633F38F830FC8A554F91D31FAD8016B8E46&USERNAME=708A9CC4CCC1A16F9958324742123745&USEREMAILID=9D9BEEA4AA080A669DCF4BB53A400889&USEREMAIL=09C67B591F2E4925785D3290915B271F37294EB3C530B51F&USERHP=FA65E27F80DE0AEFBDB332B1935C703A&USERGUBUNNO=100&USERGUBUN=9EB4812D2B3DAF45&USERSIDONO=1D13F8CCB571B5DC&USERSIDOAREANO=A732693D3524FDF3&USERDANJINO=AB8D2DF585876784&USERSHOPNO=3F569BE86910C8E3&USERSHOPNAME=78296A23E54BF6693D620A889F9B151085BE7288D7C4F3B2&USERSHOPUSEYN=E686AFA3E35173B1&USERSHOPCASHUSEYN=4992CFA6CF9A2F2E&USERMEMBERNO=95651271AEE51F7157BB780CDC81AFBE&USERMEMBEREMPJOB=B6D49F882CF2FC8380B78DE41D54B8FF&USERPHOTO=&USERCARINSTATE=6CF4370F0716C9C0&USEPHOTOINYN=E686AFA3E35173B1&USEWONBUINYN=4992CFA6CF9A2F2E&USEAUTOCAFEINYN=4992CFA6CF9A2F2E&USEONCARINYN=4992CFA6CF9A2F2E&USEONCARUPYN=4992CFA6CF9A2F2E&USEYN=6D3B21324E5C6304&CarCheckManualUseYN=4992CFA6CF9A2F2E&AreaMarketingManagerUserNo=3591BB7DD7E1B97121885832FED4934B&JoHapNo=EEFE88B7AC167407; Session_Cookie=UserNo=1000328066&IP=B14852046F40E9DB626D11A692010F46&SessionID=7C0B8B63AC068BA328A28B25D558C633F38F830FC8A554F91D31FAD8016B8E46&EndDate=2017-09-14 00:19:25; _ga=GA1.3.526049102.1505315275; _gid=GA1.3.23066366.1505315275; CARLOG=103716116=MTAzNzE2MTE2LDgwNTcsPz8/Pz8/PyxodHRwOi8vd3d3LmRpY2FyLmNvLmtyL3RlbXAvcGhvdG8vMjAxNzA2MTcvOTlCRUNGRDA1REIwODIyQjEwRjNGM0RFMTM0NzgxM0VBQzE5MDBBMDA4MUUxODlBRjQ3NjkxNTg0QUZDRkQ5Ql9USC5qcGc=
*/

// http://www.m-park.co.kr/carshare/share/CarCheck.asp?CheckNo=7080408090 성능점검표
// http://carmanager.co.kr/PopupFrame/CarDetail/103915548. 아이프레임 카 디테일

		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  $response = curl_exec ($ch);
		  
		  var_dump($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
//		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		  }
		  
		  
//		  $html = new DOMDocument();
		  
//		  @$html->loadHTML($response);


//		  echo $html;
		  
//	  var_dump($response);

		  $result = json_decode($response);
	  var_dump($result);
		  
/*
		  		 
	
		cn "상품 타이틀"
		cno "차량번호"
		fcn "연료타입"
		m "차량등록월"
		y "차량등록연도"
		tcn "조작"
		sprsi 큰 지역
		sprgu 작은 지역
		n "KR"
		ma 킬로수
		
		
*/
		
		
/*
		
		  $list = $result->{'list'}[0];
		  
		  echo "차량 :" .$list->{'cn'}."<br>";
		  echo "차량번호 :" .$list->{'cno'}."<br>";
		  echo "차량등록일 :" .$list->{'y'}.$list->{'m'}."<br>";
		  echo "판매지역 :" . $list->{'sprsi'}." ".$list->{'sprgu'}."<br>";
		  echo "국가 :" .$list->{'n'}."<br>";
		  echo "주행거리 :" .$list->{'ma'}."km<br>";
		  echo "판매가 :" .$list->{'ps'}."<br>";
		  echo "조작 :" .$list->{'tcn'}."<br>";
		  echo "배기량 :" .$list->{'dcc'}."cc<br>";
		  
		  echo "판매처 : ". "AJ셀카";
						
*/


	}
	
	public function nicebluemark($carNo = '59루3828')
	{
		  $host = 'https://www.nicebluemark.co.kr';
		  $url = $host.'/usedcar/SearchNumberResult.aspx';
		  $is_post = true;
		  $post = 'carNum='.$carNo;
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  $post );
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
	//	    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		}
		  $html = new DOMDocument();
		  @$html->loadHTML($response);
		  unset($response);
		  $data = array(); 	
		$templ =  $html->getElementsByTagName('a');
		$data['link'] = $host.$templ[0]->{'attributes'}[0]->{'textContent'};	 
		unset($templ);
		$temp =  $html->getElementsByTagName('ul');
		$str = trim( utf8_decode( $temp[0]->{'textContent'}));
		$arr = explode("\n", $str);
	
	
		$data['model'] = trim($arr[0]);
		$data['birth'] = trim($arr[1]);
		$data['mileage'] = trim($arr[2]);
		$data['color'] = trim($arr[3]);
		$data['fueltype'] = trim($arr[4]);
		$data['transmission'] = trim($arr[5]);	
		$data['region'] = trim($arr[6]);
		$data['price'] = substr(trim($arr[9]), 1);
		$data['company'] = 'NICEBlueMark';
		
		
		unset($temp);
		
		
			var_dump($data);
	}
	public function koreacarmarket($carNo)
	{
		  $host = 'http://www.koreacarmarket.com';
		  $url = $host.'/car/_inc_ajax_carList.html?page=&subject='.urldecode( $carNo).'&subFlag=1&prevPagename=carList.html&pageSize=&_=1505378344021';
		  
		  $is_post = false;

	
    $str = '59루3828';
    
//$str = iconv("UTF-8", "Windows-1252", $str);

$str = iconv("utf8", "ascii", urlencode( $str));
phpinfo();
echo $str;

var_dump($str);

	//$str =  mb_convert_encoding('59루3828', 'UTF-8','EUC-KR');
	
	echo mb_detect_encoding(htmlentities($str));

		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//		  curl_setopt($ch, CURLOPT_POSTFIELDS,  $post );
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		}
		  $html = new DOMDocument();
		  @$html->loadHTML($response);
/*
		  unset($response);
		  $data = array(); 	
		$templ =  $html->getElementsByTagName('a');
		$data['link'] = $host.$templ[0]->{'attributes'}[0]->{'textContent'};	 
		unset($templ);
		$temp =  $html->getElementsByTagName('ul');
		$str = trim( utf8_decode( $temp[0]->{'textContent'}));
		$arr = explode("\n", $str);
	
	
		$data['model'] = trim($arr[0]);
		$data['birth'] = trim($arr[1]);
		$data['mileage'] = trim($arr[2]);
		$data['color'] = trim($arr[3]);
		$data['fueltype'] = trim($arr[4]);
		$data['transmission'] = trim($arr[5]);	
		$data['region'] = trim($arr[6]);
		$data['price'] = substr(trim($arr[9]), 1);
		$data['company'] = 'NICEBlueMark';
		
		
		unset($temp);
*/
		
		
//			var_dump($data);
	}
	
	
	
		
		
	public function nicebluemark2()
	{
		
		//$brand,$year,$mileage,$pricemin, $pricemax, $option
		
		  $url = 'https://www.nicebluemark.co.kr/usedcar/CarList.aspx';
		
	//	  $url = "https://www.nicebluemark.co.kr/usedcar/IncRecommendCar.aspx";
		  

		  $is_post = true;
		
 
		
			  
			  $brand = array(
				  '쉐보레' => 1,
				  '기아' => 2,
				  '르노삼성' => 3,
				  '쌍용' => 4,
				  '현대' => 5,
				  '제네시스' => 6
			  );
			  
			  $carjong = array(
				  '경차' => 'chk_carjong_61',
				  '소형차' => 'chk_carjong_62',
				  '준중형' => 'chk_carjong_63',
				  '중형차' => 'chk_carjong_64',
				  '대형차' => 'chk_carjong_65',
				  '스포츠카' => 'chk_carjong_66',
				  'RV/SUV' => 'chk_carjong_67',
				  '승합차' => 'chk_carjong_68'
			  );
			  
			  $gear = array(
				'오토' => 'chk_gear_10',
				'수동' => 'chk_gear_11'		 
			  );
			  
			  $fuel = array(
				'가솔린' => 'chk_fuel_1',
				'디젤' => 'chk_fuel_2',
				'LPG' => 'chk_fuel_3',
				'전기' => 'chk_fuel_5',
				'하이브리드' => 'chk_fuel_6'			
				);
				
			  $sidocateB = array(
				  '서울' => 'chk_sidocateB_18',
				  '경기' => 'chk_sidocateB_19',
				  '인천' => 'chk_sidocateB_20',
				  '대전' => 'chk_sidocateB_24',
				  '대구' => 'chk_sidocateB_29',
				  '전북' => 'chk_sidocateB_32'
			  );
			  
			  $color = array(
				  '검정' => 'chk_color_1',
				  '검정투톤' => 'chk_color_2',
				  '회색' => 'chk_color_3',
				  '은색' => 'chk_color_4',
				  '은회색' => 'chk_color_5',
				  '은색투톤' => 'chk_color_6',
				  '흰색' => 'chk_color_7',
				  '진주색' => 'chk_color_8',
				  '흰색투톤' => 'chk_color_9',
				  '진주투톤' => 'chk_color_10',
				  '은하색' => 'chk_color_11',
				  '명은색' => 'chk_color_12',
				  '갈대색' => 'chk_color_13',
				  '연금색' => 'chk_color_14',
				  '갈색' => 'chk_color_15',
				  '갈색투톤' => 'chk_color_16',
				  '금색' => 'chk_color_17',
				  '금색투톤' => 'chk_color_18',
				  '청색' => 'chk_color_19',
				  '하늘색' => 'chk_color_20',
				  '담녹색' => 'chk_color_21',
				  '녹색' => 'chk_color_22',
				  '연두색' => 'chk_color_23',
				  '청옥색' => 'chk_color_24',
				  '빨강색' => 'chk_color_25',
				  '주황색' => 'chk_color_26',
				  '자주색' => 'chk_color_27',
				  '보라색' => 'chk_color_28',
				  '분홍색' => 'chk_color_29',
				  '노란색' => 'chk_color_30',
				  '청색투톤' => 'chk_color_31',
				  '녹색투톤' => 'chk_color_32',
				  '회색투톤' => 'chk_color_33',
				  '검정쥐색' => 'chk_color_34',
				  '군청색' => 'chk_color_35',
				  '진회색' => 'chk_color_36',
				  '남색' => 'chk_color_37',
				  '남색투톤' => 'chk_color_38',
				  '진청색' => 'chk_color_39',
				  '황토색' => 'chk_color_40',
				  '밤색' => 'chk_color_41',
				  '벽돌색' => 'chk_color_42',
				  '빨강투톤' => 'chk_color_43',
				  '쥐색' => 'chk_color_44',
				  '카키색' => 'chk_color_45',
				  '흑장미색' => 'chk_color_46',
				  '겨자색' => 'chk_color_47',
				  '진녹색' => 'chk_color_48',
				  '청회색' => 'chk_color_49'
				  );
			  
// 경차 chk_carjong_61, 소형차 chk_carjong_62, 준중형 chk_carjong_63, 중형차 chk_carjong_64, 대형차 chk_carjong_65, 스포츠카 chk_carjong_66, RV/SUV chk_carjong_67, 승합차 chk_carjong_68
			  
// 오토 chk_gear_10, 수동 chk_gear_11
		  

// 가솔린 chk_fuel_1, 디젤 chk_fuel_2, LPG chk_fuel_3, 전기 chk_fuel_5, 하이브리드 chk_fuel_6
			 
			 
// 서울 chk_sidocateB_18, 경기 chk_sidocateB_19, 인천 chk_sidocateB_20, 대전 chk_sidocateB_24, 대구 chk_sidocateB_29, 전북 chk_sidocateB_32
		  
			 // 검정 chk_color_1, 
		  
		    $post = [
			    'cho'   =>  1,
			    'makerNo'   =>  5,  //   쉐보레(대우) 1, 기아 2, 르노삼성 3, 쌍용 4, 현대 5, 제네시스 146
			    'initModelNo'   =>  0,
			    'modelNo'   =>  0,
			    'seriesNo'   =>  0,
			    'sdetailNo'   =>  0,
			    'sliderYear1'   =>  2009,
			    'sliderYear2'   =>  2009,
			    'sliderMileage1'   =>  4,
			    'sliderMileage2'   =>  11+1,
			    'sliderPrice1'   =>  600,
			    'sliderPrice2'   =>  650,
			    'communication'   =>  '' ,
			    'communicationAdd'   =>  ''
			  ];
		  
		  $post = 'ctl00%24ContentPlaceHolder1%24scriptManager1=ctl00%24ContentPlaceHolder1%24ResultsUpdatePanel%7Cctl00%24ContentPlaceHolder1%24btnStartCarSearch&__EVENTTARGET=&__EVENTARGUMENT=&ctl00%24ContentPlaceHolder1%24hdChoNo=1&ctl00%24ContentPlaceHolder1%24hdMakerNo=5&ctl00%24ContentPlaceHolder1%24hdInitModelNo=93&ctl00%24ContentPlaceHolder1%24hdModelNo=4&ctl00%24ContentPlaceHolder1%24hdSeriesNo=0&ctl00%24ContentPlaceHolder1%24hdSdetailNo=0&ctl00%24ContentPlaceHolder1%24hdSliderYear1=0&ctl00%24ContentPlaceHolder1%24hdSliderYear2=0&ctl00%24ContentPlaceHolder1%24hdSliderMileage1=&ctl00%24ContentPlaceHolder1%24hdSliderMileage2=20&ctl00%24ContentPlaceHolder1%24hdSliderPrice1=&ctl00%24ContentPlaceHolder1%24hdSliderPrice2=&ctl00%24ContentPlaceHolder1%24hdScriptCommunication=&ctl00%24ContentPlaceHolder1%24hdScriptCommunicationStatus=Y&ctl00%24ContentPlaceHolder1%24hdScriptCommunicationAdd=&ctl00%24ContentPlaceHolder1%24hdListSelector=&ctl00%24ContentPlaceHolder1%24hdPageCarList=1&ctl00%24ContentPlaceHolder1%24hdPageCnt=30&ctl00%24ContentPlaceHolder1%24hdOrderCarList=&ctl00%24ContentPlaceHolder1%24hdStandGroup=&__VIEWSTATE=cix%2BRwmsQ%3D%3D&__VIEWSTATEGENERATOR=BB28E761&__EVENTVALIDATION=sjtxEcknyoOnostWd2T8BDWUbljW0%2B0sjzKQt64Rf6EyOvNVwOsYN%2FhV39EscG7DVukO9z6LcPzJ5%2BWydaA01L%2BJIbA7vmSV6hJ%2Ff6SDJxD7fH2IBn9DqJhOFCCcioM%2FW7rYEGRcCPkmAH4hmO3xQkTN6Yw%2Bi3G4NnlxrOykOdrqbuOvBUD6Heg2OG%2BPdM7G%2BEopLhho%2B3Se7Vj%2B9%2B9VV893BrqqXv9T3gbzE0UmKKb1eEd2K5k8N5YJQGyb54AkVq12%2FFUl%2FNr2jy6f1A3CQhzHoNrriohU7bz7nW0ZwLX0zO8jDesfwhVWBw9NNp9y6OOQ39wVbohoVbVyR8hXQKaaWtYkAiMZXhoeeLROSprYwZy5eovqvk3AiH9hbzUynHjJnWqfna%2FrtKcwxvWbSC0%2BojtZcfaEfpVypUdMqgj6q2bu63SXD0wbkKXpS5G8KrUdjeqjSijeUCcD3PtIMb5011IcmPRU38YRIu79LYJ%2BckWcOekYuUK5qZTaBW6DjKMSroAngvy1xJELW0nM5QtOmp7OCHJ8e6hbQQ5NlyzycNlBU4m6Ihj7e4OKB8nNs%2BTHqOeNkT8UyZL%2FK2iQab0BKaM%3D&__ASYNCPOST=true&ctl00%24ContentPlaceHolder1%24btnStartCarSearch=Button';
	
$headers = array();
$headers[] = 'Host: www.nicebluemark.co.kr';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Origin: https://www.nicebluemark.co.kr';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'X-MicrosoftAjax: Delta=true';
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://www.nicebluemark.co.kr/usedcar/CarList.aspx';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: ko-KR,ko;q=0.8,en-US;q=0.6,en;q=0.4,ja;q=0.2';
$headers[] = 'Cookie: ASP.NET_SessionId=axd2c0gt3yqutklxnyxfx345; userSeq=1lx74j57e3T3GnTm+P2HWLDaaY0MN2JiET2OH2NvTrg=; comp_carNos=,3814165,3607300; ck_carNos=4032362,3607300,3814165,3833034,4008038,4022153,4035072,3974503; _gat=1; wcs_bt=c3ecb16738f800:1505368247; _ga=GA1.3.651928547.1504192824; _gid=GA1.3.1998514263.1505284028';
	
		  
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, $is_post);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  $post );
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  $response = curl_exec ($ch);
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  echo "<br>status_code:".$status_code."<br>";
		  curl_close ($ch);
		  if($status_code == 200) {
		    echo $response;
		  } else {
		    echo "Error 내용:".$response;
		}
		  
		  
		  $html = new DOMDocument();
		  
		  @$html->loadHTML($response);

		 $temp =  $html->getElementsByTagName('body');
		  
		  var_dump($temp[0]);
/*
		  if(sizeof($response) != 119){
		  
		
		  $tempm = $html->getElementsByTagName('p');
		  $tempp = $html->getElementsByTagName('strong');
		  $templ = $html->getElementsByTagName('a');
		  
		    $model = utf8_decode($tempm[0] -> {'textContent'});
		    $price = utf8_decode($tempp[0] -> {'textContent'});
		    $link = "https://www.nicebluemark.co.kr/usedcar/".$templ[0]->{'attributes'}[0]->{'textContent'};
		 
		 	echo $model."<br>";		
			echo $price."<br>";
			echo $link."<br>";
			}else{
				echo '검색된 추천매물 정보가 없습니다.';
			}
*/
	}
	
		

	}
	
	
	
	