<?php
	
	class Cherish extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
//			$this->load->model('funerals_model');
			$this->load->model('car_model');			
			$this->load->helper('form','url');
			$this->load->helper('cookie');
		}
		
		public function index()
		{
/*
			
//			$data['deads'] = $this->funerals_model->get_recent();
			
			$data['header']['title'] = 'GIEOK';
			$data['header']['css'] = "main";
			$data['header']['css_m1'] = "mmdpi";
			$data['header']['css_m2'] = "mtest";
			$data['header']['name'] = '';
			$data['header']['js'] = [null];
			$data['header']['description'] = "기억";
			$data['header']['image'] = "http://www.gieok.xyz/Images/Content/logo.png";
			
		
		    $this->load->view('templates/header', $data['header']); // view로 data 전달 
//		    $this->load->view('funerals/index', $data);		  // view로 data 전달 
			$this->load->view('cherish/index');		  // view로 data 전달     
//		    $this->load->view('templates/footer');	
*/
 			$this->load->view('intro/intro');	
// 			$this->load->view('intro/test');


			
		}
		public function car_allnew(){
			
		$mAgent = array("iPhone","iPod","Android","Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
		$chkMobile = false;
		for($i=0; $i<sizeof($mAgent); $i++){
		    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
		        $chkMobile = true;
		        break;
		    }
		}
		
		if($chkMobile) {
			//모바일
		 //  header('Location: https://m.cardam.co.kr');
		   header('Location: http://m.cardam.co.kr');
		} /*
else if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http' or $_SERVER['SERVER_NAME'] == 'cardam.co.kr'){
			header('Location: https://www.cardam.co.kr');
		 
		}
*/
		
		
			
			
			if(!isset($_SERVER['HTTP_REFERER']) or $_SERVER['HTTP_REFERER'] == ""){
				$HTTP_REFERER['incoming'] = 'NULL';
			}else{
				$HTTP_REFERER['incoming'] = $_SERVER['HTTP_REFERER'];			
			}
			
			
			$this->load->view('car/allnew',$HTTP_REFERER);
		}
		
/*
		public function lotto(){
		
		$this->load->view('lotto/index');
			
		}
*/
		
		public function car_allnewm(){
			
/*
			
		$mAgent = array("iPhone","iPod","Android","Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
		$chkMobile = false;
		for($i=0; $i<sizeof($mAgent); $i++){
		    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
		        $chkMobile = true;
		        break;
		    }
		}
		
		if($chkMobile) {
			//모바일
		 //  header('Location: https://m.cardam.co.kr');
		 //	 header('Location: http://m.cardam.co.kr');
		}else{
		//	 header('Location: https://www.cardam.co.kr');
			header('Location: http://www.cardam.co.kr');
			
		}
				
			if(!isset($_SERVER['HTTP_REFERER']) or $_SERVER['HTTP_REFERER'] == ""){
				$HTTP_REFERER['incoming'] = 'NULL';
			}else{
				$HTTP_REFERER['incoming'] = $_SERVER['HTTP_REFERER'];			
			}			
*/
//			$this->load->view('car/allnewm',$HTTP_REFERER); 구 카담
/*
		if($_SERVER['SERVER_NAME'] != 'm.cardam.co.kr'){
 			header('Location: http://m.cardam.co.kr');
		}
*/
			if(!empty($_GET['whence'])){
				$whence = $_GET['whence'];		
			}else{
				$whence = "";
			}
			
			$data['whence'] = $whence;
			

			$this->load->view('cardam_r/indexm',$data);
		}


		public function car_allnewm3(){
			$this->load->view('car/allnewm3');
		}
		
		public function car_new(){
			$this->load->view('car/intro_new');
		}
		public function car_old(){
			$this->load->view('car/intro_old');
		}
		public function car_ex(){
			
			if(!isset($_SERVER['HTTP_REFERER']) or $_SERVER['HTTP_REFERER'] == ""){
				$HTTP_REFERER['incoming'] = 'NULL';
			}else{
				$HTTP_REFERER['incoming'] = $_SERVER['HTTP_REFERER'];			
			}
			
			$this->load->view('car/intro_ex',$HTTP_REFERER);
			

		}
		public function car_purchase(){
 //			$this->load->model('car_model');
			if(!isset($_POST['incoming']) or $_POST['incoming'] == ""){
				show_error( iconv("UTF-8","EUC-KR",'<font size="4.5em">잘못된 접근입니다. <a href="http://52.79.49.66/car_ex" style="text-decoration:none">www.car_ex.com</a>을 통해서 접속해주세요!</font>'));
			}
			
			$data['p_phone'] = $_POST['phone'];
			$data['p_model'] = $_POST['model'];
			$data['p_region'] = $_POST['location'];
			
// 			$data['regdate']  현재시간 넣음
			$data['p_incoming'] = $_POST['incoming'];
			$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
			
			$START =  strpos($HTTP_USER_AGENT, "("); $END =  strpos($HTTP_USER_AGENT, ")");
			$data['p_device'] = substr($HTTP_USER_AGENT, $START + 1 ,$END - $START -1);
		
			if(!isset($_SERVER['REMOTE_ADDR']) or $_SERVER['REMOTE_ADDR'] == ""){
				$data['p_ip'] = 'Unknown';
//				$data['p_region'] = 'Not Found';
			}else{
				
				$data['p_ip'] = $_SERVER['REMOTE_ADDR'];				
//				$data['p_region'] = "Unknown";
				
/*

				include('ip2locationlite.class.php');
				
				//Load the class
				$ipLite = new ip2location_lite;
				$ipLite->setKey('5831acce20aebab7bdeaf06535a8c8368c0af875fd7f3b1dfb0e2fff919e7cb0');
		 
				//Get locations
				$locations = $ipLite->getCity($data['p_ip']);
				$errors = $ipLite->getError();
				$data['p_region'] = $locations['countryCode'].", ".$locations['regionName'];
				if ($data['p_region'] == ", ") {
				$locations = $ipLite->getCity($data['p_ip']);  // 호출에러일경우 한번 더 실행
				$data['p_region'] = $locations['countryCode'].", ".$locations['regionName'];
				}
	
*/			
	
/*
				echo "<strong>First result</strong><br />\n";
				if (!empty($locations) && is_array($locations)) {
				  foreach ($locations as $field => $val) {
				    echo $field . ' : ' . $val . "<br />\n";
				  }
				}
				echo "</p>\n";
*/
				
			}
			
			
			isset($_POST['buy']) == false ? $data['p_buy'] = 'X' : $data['p_buy'] = $_POST['buy'];			
			
			
			
			$seller = $this->car_model->set_purchase($data);
			
			$temp = $this->car_model->get_fetchDealer();
			
			$dealers['d_no1'] = $temp[0]['d_no'];
			$dealers['d_no2'] = $temp[1]['d_no'];
			$dealers['d_no3'] = $temp[2]['d_no'];
			
			
			
			$this->car_model->set_matchDnP($seller,$dealers);
					
			unset($temp);
			
			
			
	//		print_r($data['dealers']);
			
			

//			var_dump($data['dealers'][1]);
//			$this->load->view('car/intro_ex');
			header('Location: ' . $_SERVER['HTTP_REFERER']);  // 되돌아가기
			
			
			
		}

/*
		public function view($id)
		{
			
			if (! $this->input->cookie($id))
			{
			$this->funerals_model->rise_visitor($id);	        // 방문자수 카운트	
			$this->input->set_cookie($id,'visit','0');	
			}
			
			$data['view']['cherish_item'] = $this->funerals_model->get_cherish($id);
						
			if (empty($data['view']['cherish_item']))
			{
				show_404();
			}
			
			$data['view']['counter'] = $this->funerals_model->get_count($id);
			
			
			$coffin = $data['view']['cherish_item']['coffin']; 
			$today = date("Y-m-d");
			
			if ( $coffin < $today){
				$data['view']['cherish_item']['coffin'] = '';
			}else{
				$data['view']['cherish_item']['coffin'] = '발인: '.$coffin;
			}

			$data['header']['title'] = 'GIEOK';
			$data['header']['name'] = $data['view']['cherish_item']['name'];
			$data['header']['css'] = "view_v2";
			$data['header']['css_m1'] = "vmdpi_v2";
			$data['header']['css_m2'] = "vtest_v2";

			$data['header']['description'] = $data['view']['cherish_item']['location'];
			$data['header']['image'] = "http://www.gieok.xyz/Images/Content/chrysanth1.png";
			
			$data['header']['js'] = 
						[
							"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA8afbNC_FXTedSUJC9a24HKMy439HBRTc&sensor=false",
							"/js/view.js"
						];

			$this->load->view('templates/header', $data['header']);
			$this->load->view('cherish/view_v2', $data['view']);
			$this->load->view('templates/flower');
			$this->load->view('templates/footer');
		}
*/
		
		
/*
		public function registry(){
			if(!isset($_POST['phone']) or $_POST['phone'] == "" or $_POST['mourner'] == ""){
				show_error( iconv("UTF-8","EUC-KR",'<font size="4.5em">잘못된 접근입니다. <a href="http://www.gieok.xyz" style="text-decoration:none">www.gieok.xyz</a>을 통해서 생성해주세요!</font>'));
			}
			
			$data['mourner'] = $_POST['mourner'];
			
			
//			$data['phone'] = preg_replace("/\s+/", "", $_POST['phone']);
			
			$patterns[0] = "/\-/";					$replacements[0] = "";  
			$patterns[1] = "/\./";					$replacements[1] = "";   

			$data['phone'] = preg_replace($patterns, $replacements, $_POST['phone']);
			
			
			$this->load->view('registry/register',$data);

		}
*/
		
/*
		public function complete(){
			if(!isset($_POST['phone']) or $_POST['phone'] == "" or $_POST['mourner'] == ""){
				show_error( iconv("UTF-8","EUC-KR",'<font size="4.5em">잘못된 접근입니다. <a href="http://www.gieok.xyz" style="text-decoration:none">www.gieok.xyz</a>을 통해서 생성해주세요!</font>'));
			}
				
				$back['mourner'] = $_POST['mourner'];
				$back['phone'] = $_POST['phone'];				
				
				$config['upload_path'] = 'Images/Content/Person';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']	= '8192';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
				$config['encrypt_name'] = TRUE;
				$config['remove_space'] = TRUE;
				$config['overwrite'] = FALSE;	
						
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
					
					$this->load->view('registry/register', $back);
					
					return false;
				}	
				else{		
					$picture = array('upload_image' => $this->upload->data());
					
					$dead['name'] = $_POST['name'];
					$dead['birthday'] = $_POST['birthday'];
					$dead['deathday'] = $_POST['deathday'];
					$dead['coffin'] = $_POST['coffin'];
					$dead['funeral_id'] = $_POST['funeral'];
					$dead['funeral_indoor'] = $_POST['funeral_indoor'];
					$dead['picture'] = $picture['upload_image']['file_name'];

					$mourner['mourner'] = $back['mourner'];
					$mourner['phone'] = $back['phone'];
			

					if($picture['upload_image']['image_width'] > 105 ){
						// image resize 
	
						$config2['image_library'] = 'gd2';
						$config2['source_image']	= $picture['upload_image']['full_path'];
						$config2['maintain_ratio'] = TRUE;
						$config2['width']	= 105;
						$config2['height']	= 140;
						$config2['quality'] = '100%';
						$config2['master_dim'] = 'auto';
	
						$this->load->library('image_lib', $config2);
	 					$this->image_lib->resize();
					}
				}
			
		
		
			$patterns[0] = "/\T/";					$replacements[0] = "";  
			$patterns[1] = "/\Z/";					$replacements[1] = "";   

			$dead['coffin'] = preg_replace($patterns, $replacements, $dead['coffin']);
			
				
			$mourner += $this->funerals_model->set_dead($dead);
						
			$this->funerals_model->set_mourner($mourner);
			
			
			$comment['name'] = '김태홍';
			$comment['dead_id'] = $mourner['dead_id'];	
			$comment['content'] = '이 생에서의 아쉬움은 모두 내려놓고 부디 저 하늘나라에서도 즐겁게 웃으면서 사시길 바랍니다. 더불어 그 어떤 위로의 말씀을 드려도 그 슬픔이 모두 아물지는 않으시겠지만 진심 어린 삼가 위로의 말씀을 드립니다.';
			$this->funerals_model->set_comment($comment);
			
			
			
			$this->load->view('registry/complete',$mourner);

		}
*/

		public function sub_ensure(){
			$this->load->view('cardam_r/sub/ensure');
		}
		public function sub_sell(){
			$this->load->view('cardam_r/sub/sell');
		}
		public function sub_buy(){
			$this->load->view('cardam_r/sub/buy');
		}
		
		public function cardam_sell(){
			$this->load->view('cardam_r/buym');
		}
		public function cardam_buy(){
			$this->load->view('cardam_r/buym2');
		}

		public function cardam_info(){
			$this->load->view('cardam_r/information');
		}
		public function cardam_review(){
			$this->load->view('cardam_r/review');
		}
		public function cardam_customer(){
			$this->load->view('cardam_r/customer');
		}


	}
	
	
	
	