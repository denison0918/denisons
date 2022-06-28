<?php
	
	class Json extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
//			$this->load->model('funerals_model');
//			$this->load->model('admin_model');
			$this->load->model('car_model');
		}

		
		public function getfuneral($id)
		{

			$data['funerals_item'] = $this->funerals_model->get_funerals($id);
			
			if (empty($data['funerals_item']))
			{
				show_404();
			}
			$this->load->view('json/getfuneral', $data);

		}
		
		public function getdead($search)
		{
			
		$search = explode('n', $search);
		$year = $search[0]; 	$name = urldecode($search[1]);
		$jump = false;

		if($year == null and $name == null){
			$data['deads_item'] = $this->funerals_model->get_recent();			// 연도와 이름이 없는경우 최신순으로 되돌리기 ( 미입력한 경우 )
		}else if($year == null){
			$data['deads_item'] = $this->funerals_model->search_name($name);      // 연도가 비었을 경우 이름만 가지고 검색 ( 이름만 입력한 경우 )
		}else if($name == null){
			$data['deads_item'] = $this->funerals_model->search_year($year);      // 이름이 비었을 경우 연도만 가지고 검색 ( 연도만 입력한 경우 )
			$jump = true;														//   해당연도에 검색결과가 업을시, 연도를 무시한채 이름만 가지고 검색을 점프시킨다.
		}else{
			$data['deads_item'] = $this->funerals_model->search_nameAndYear($name,$year); // ( 연도와 이름 입력한 경우 )
		}
			
		if (empty($data['deads_item']) and !$jump)
		{
			$data['deads_item'] = $this->funerals_model->search_name($name);     // 검색 결과가 없을시, 연도를 무시한채 이름만 가지고 검색
		}
			
			$this->load->view('json/getdead', $data);

		}
		
		
				public function getcomment($id,$offset){
			
//		$data['content'] = $this->input->post('content',TRUE);		 // returns all POST items with XSS filter 
//		$data['name'] = $this->input->post('name',TRUE);		 // returns all POST items with XSS filter 

/*
		 $data = file_get_contents("php://input");
		 $data = json_decode($data, TRUE);
*/

	//	$data = $this->input->post('content');
	//	$mydata = json_decode($this->input->post('mydata',TRUE));
		


/*
		if ( isset($data['content'])){


			$arr = array(
				'content' => $data['content'],
				'name' => $data['name'],
				'dead_id' => $id
			);

			$this->funerals_model->set_comment($arr);
		}
*/
		

/*
		$data['comments'] = $this->funerals_model->get_comment($id);
		$this->load->view('json/getcomment', $data);
*/
		
	
		$data['comments'] = $this->funerals_model->get_comment($id,$offset);
		$this->load->view('json/getcomment', $data);
		}
		


		public function setcomment($id){
			
			
		
		
		 $data = file_get_contents("php://input");
		 $data = json_decode($data, TRUE);	



		if ( isset($data['content'])){
			$arr = array(
				'content' => $data['content'],
				'name' => $data['name'],
				'dead_id' => $id
			);
			
			$this->funerals_model->set_comment($arr);
			
			
		}else{
			show_error('등록실패');
		}
			$data['success'] = "등록되었습니다.";
		
		$this->load->view('json/setcomment', $data);
			
			
		}
		
		
		public function riseflower($id,$cnt){
			$this->funerals_model->rise_flower($id,$cnt);
 			$data = $this->funerals_model->get_count($id);
// 			var_dump($data);
			$this->load->view('json/getcount', $data);
			
		}	
		
		public function getFuneralList($city){
			$data['funerals'] = $this->funerals_model->get_funeralList($city);
			$this->load->view('json/getfunerallist', $data);
			 
		}

		public function getFuneralListBiz($city){
			$data['funerals'] = $this->funerals_model->get_funeralListBiz($city);
			$this->load->view('json/getfunerallist', $data);
			 
		}
		
		public function listFunerals($city){
			$data['funerals'] = $this->admin_model->get_funerals($city);
			$this->load->view('json/ad_getfunerals', $data);
		}	
		
		


		public function updatefuneral(){

			
			$box = json_decode(file_get_contents('php://input'), true);
		
			$id1 = $box['address_id'];
			$address = json_decode($box['address'], true);
		
			$id2 = $box['funeral_id'];
			$funeral = json_decode($box['funeral'], true);
			
			
			$this->admin_model->update_funeral($address,$funeral,$id1,$id2);

		}
		
		
		public function login_check(){
			
			if(isset($_POST['id']) and isset($_POST['pwd']) and isset($_POST['open']) and $_POST['open'] == "cardamManager"){

				$login['id'] = $_POST['id'];
				$login['pwd'] = $_POST['pwd'];
				$data = $this->car_model->login_fun($login);
				
				!empty($data) == true ? $result['result'] = 'true' : $result['result'] = 'false';
				unset($data);
				unset($login);
		//		$this->load->view('json/getloginchk', $result);

			}else{
				
			//	$result['result'] = "deny access permission";
				show_403();
			}

				$this->load->view('json/getloginchk', $result);
		
		}
		
		public function get_apply($phone){
			 
			$data['results'] = $this->car_model->get_matchPnD($phone);			
			$this->load->view('json/getmatch',$data);
		}
		
	}
	
	
	
	