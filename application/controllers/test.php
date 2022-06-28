<?php
	
	class Test extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('funerals_model');
			$this->load->helper('cookie');
		}
		
		
		public function view($id)
		{
			
			if (! $this->input->cookie($id))
			{
			$this->funerals_model->rise_visitor($id);	        // 방문자수 카운트	
			$this->input->set_cookie($id,'visit','0');	
			}
			
			$data['view']['cherish_item'] = $this->funerals_model->get_cherish($id);
			$data['view']['counter'] = $this->funerals_model->get_count($id);
			
			$coffin = $data['view']['cherish_item']['coffin']; 
			$today = date("Y:m:d H:i");
			
			if ( $coffin < $today){
				$data['view']['cherish_item']['coffin'] = '';
			}else{
				$data['view']['cherish_item']['coffin'] = '&nbsp;발인: '.str_replace('-','.',substr($coffin, 0 , strlen($coffin) - 3)).'&nbsp;';
			}

			if (empty($data['view']['cherish_item']))
			{
				show_404();
			}


			$data['header']['title'] = 'GIEOK';
			$data['header']['name'] = $data['view']['cherish_item']['name'];
			$data['header']['css'] = "view";
			$data['header']['css_m1'] = "vmdpi_v2";
			$data['header']['css_m2'] = "vtest_v2";

			$data['header']['description'] = $data['view']['cherish_item']['location'];
			$data['header']['image'] = "http://www.gieok.xyz/Images/Content/chrysanth1.png";
			
			
/*			$data['js'] = "https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA8afbNC_FXTedSUJC9a24HKMy439HBRTc&sensor=false";*/
			
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

	}
	
	
	
	