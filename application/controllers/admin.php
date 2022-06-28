<?php
	
	class Admin extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('car_model');
			$this->load->model('cardam_model');
			$this->load->helper('form','url');
			$this->load->library('session');
		}		
/*
		public function car_admin(){
			$this->load->view('cardam/admin/login.php');
		}
*/
		
		public function car_jadmin(){
			$this->load->view('cardam/admin/join.php');
		}
		
		public function car_admin(){
			
	//		$this->session->sess_destroy();
	
		//	$this->session->unset_userdata('user_data');
	
	//		var_dump($this->session->all_userdata());
			
						
			if($this->session->userdata('no')){ 
 				$this->load->view('cardam/admin/main.php');
			}else if(empty($_POST['open'])){
				$this->session->sess_destroy();
				$this->load->view('cardam/admin/login.php');
			}else if($_POST['open'] == 'cardamManager'){
				
				$login['id'] = $_POST['id'];
				$login['pwd'] = $_POST['pwd'];
				
				$data = $this->car_model->login_fun($login);
				
				$this->session->set_userdata($data);
				$this->session->set_userdata('user_data', $login['id']);
				
				$this->load->view('cardam/admin/main.php');	
			}else{				
				$this->session->sess_destroy();
				show_403();
			}

		}
		
		public function car_padmin(){
			$this->load->view('cardam/admin/pay.php');
		}
		
		public function car_myadmin(){
			
			
			
			if($this->session->userdata('no')){
				
			$sdata = $this->session->all_userdata();
			
	//		var_dump($sdata);
			
				$this->load->view('cardam/admin/my.php',$sdata);
				
			}else{
				$this->load->view('cardam/admin/login.php');
			}
			
			
		}
		
		public function car_puradmin(){
			
/*
			$dealer = $this->session->userdata('no');
			
				if($dealer){
				
*/
							
//				$purdata['purchase'] = $this->car_model->get_matchDnP($dealer);
				$purdata['purchase'] = $this->cardam_model->get_list(370);
									
			//	var_dump($purdata);				
			//	var_dump($purdata);
			
				$this->load->view('cardam_r/tempadmin.php',$purdata);
/*
			
				
			}else{
				$this->load->view('cardam/admin/login.php');
			}
*/



		}
		
		public function car_dsadmin(){
			$this->load->view('cardam/admin/dashboard.php');
		}
		
		public function index()
		{
			$this->load->view('admin/index');		  // view로 data 전달 
			$this->load->view('admin/nav-funeral');		  // view로 data 전달 			    
		    $this->load->view('admin/footer');
		}
		
		
			
		public function address($slug = '')
		{
			
			if(empty($slug)){
				$this->load->view('admin/address.php');	
				
			}else{	
						
						$sido = array(
						    '서울특별시'   => 1,
						    '부산광역시'  => 2,
						    '인천광역시' => 3,    			
						    '대구광역시' => 4,
						    '대전광역시' => 5,
						    '광주광역시'   => 6,
						    '울산광역시' => 7,
						    '세종특별자치시' => 8,
						    '경기도' => 9,
						    '강원도' => 10,
						    '충청북도' => 11,
						    '충청남도' => 12,
						    '경상북도' => 13,
						    '경상남도' => 14,
						    '제주특별자치도' => 15,
						    '전라북도' => 16,
						    '전라남도' => 17
						);	
							
						$data['sido'] = $sido[$_POST['sido']];
						
						$data['lat'] = $_POST['lat'];
						$data['lng'] = $_POST['lng'];	
						$data['name'] = $_POST['name'];	
						
						if(!empty($_POST['road'])){					// 도로명주소가 존재하면
							
							$data['road'] = $_POST['sigugun'] . ' ' . $_POST['road'];
							$data['jibun'] = '(' . $_POST['jibun'] . ')';
							
						}else{ 										// 지번주소만 있는 경우
							$data['road'] = NULL;
							$data['jibun'] = $_POST['sigugun'] . ' ' . $_POST['jibun'];
						}
					
						$address = array(
							'city_id' => $data['sido'],
							'address1' => $data['road'],
							'address2' => $data['jibun']
						);
	
				if($slug == 'funeral'){
					
				$data['address'] =  $this->admin_model->set_address($address);  // adderess 등록 , return id
				
				// 스테프 코드는 임시로 1을 지정.
				
				$funeral = array(
					'name' => $data['name'],
					'lat' => $data['lat'],
					'lng' => $data['lng'],
					'address_id' => $data['address']['address_id'],
					'staff_id' => 1	
				);
				
				$this->admin_model->set_funeral($funeral);
					
				$this->load->view('admin/address');					

				}else if($slug == "burial"){
					$this->load->view('admin/address');	
				} else
					show_404();
			}
				
		}	
				
		public function register($slug = '')	
		{
			
			if($slug != 'create'){
				$this->load->view('admin/register');	
						
			}else{

				$config['upload_path'] = 'Images/Content/Person';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']	= '2048';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
				$config['encrypt_name'] = TRUE;
				$config['remove_space'] = TRUE;
				$config['overwrite'] = FALSE;	
						
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
					
					$this->load->view('admin/register', $error);
					
					return false;
				}	
				else
				{
					$picture = array('upload_image' => $this->upload->data());
					
					$db['name'] = $_POST['name'];
					$db['birthday'] = $_POST['birthday'];
					$db['deathday'] = $_POST['deathday'];
					$db['coffin'] = $_POST['coffin'];
					$db['funeral_id'] = $_POST['funeral'];
					$db['funeral_indoor'] = $_POST['funeral_indoor'];
					$db['picture'] = $picture['upload_image']['file_name'];
// 					$data['template'] = $_POST['template'];

					if($picture['upload_image']['image_width'] > 150 ){
						/* image resize */
	
						$config2['image_library'] = 'gd2';
						$config2['source_image']	= $picture['upload_image']['full_path'];
						$config2['maintain_ratio'] = TRUE;
						$config2['width']	= 150;
						$config2['quality'] = '100%';
						$config2['master_dim'] = 'width';
	
						$this->load->library('image_lib', $config2);
	 					$this->image_lib->resize();
					}
/*
					if($data['template'] == 1){
						$temp = preg_replace("/\s+/", "", $db['funeral_indoor']);
	
						$patterns[0] = '/지하/';					$replacements[0] = '-';  //지하
						$patterns[1] = '/지상/';					$replacements[1] = '';   //지상
						$patterns[2] = '/층/';					$replacements[2] = 'F/'; //층
						$patterns[3] = '/일반/';					$replacements[3] = '';   //일반
						$patterns[4] = '/대특/';					$replacements[4] = 'XL'; //대특
						$patterns[5] = '/특/';					$replacements[5] = 'S';  //특
						$patterns[6] = '/분향실/';				$replacements[6] = 'R'; 
						$patterns[7] = '/분향소/';				$replacements[7] = 'R';
						$patterns[8] = '/빈소/';					$replacements[8] = 'R'; 
						$patterns[9] = '/호실/';					$replacements[9] = 'R';  
						$patterns[10] = '/호/';					$replacements[10] = 'R'; 
						$patterns[11] = '/실/';					$replacements[11] = 'R'; 
									
						$temp = preg_replace($patterns, $replacements, $temp);
						$temp = explode('/', $temp);
						$db += $this->admin_model->get_template($db['funeral_id'],$temp[0], $temp[1]);
					
					}else{
						$db['template_id'] = $data['template'];    //  template_id -> 0
					}
*/
					$this->admin_model->set_dead($db);	
					$this->load->view('admin/register');	
				}
				
			}
			
			
		}
		
					
		
		
	
	
	}
	
	
	
	