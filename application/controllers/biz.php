<?php
	
	class Biz extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('funerals_model');
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
 			$this->load->view('biz/intro');	
// 			$this->load->view('intro/test');
			
		}

		
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
		
		
		public function registry(){
			if(!isset($_POST['phone']) or $_POST['phone'] == "" or $_POST['mourner'] == ""){
				show_error( iconv("UTF-8","EUC-KR",'<font size="4.5em">잘못된 접근입니다. <a href="http://www.gieok.xyz" style="text-decoration:none">www.gieok.xyz</a>을 통해서 생성해주세요!</font>'));
			}
			
			$data['mourner'] = $_POST['mourner'];
			
			
//			$data['phone'] = preg_replace("/\s+/", "", $_POST['phone']);
			
			$patterns[0] = "/\-/";					$replacements[0] = "";  
			$patterns[1] = "/\./";					$replacements[1] = "";   

			$data['phone'] = preg_replace($patterns, $replacements, $_POST['phone']);
			
			
			$this->load->view('biz/register',$data);

		}
		
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
					
					$this->load->view('biz/register', $back);
					
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
						/* image resize */
	
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


	}
	
	
	
	