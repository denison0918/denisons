<?php
	
	class Cherish extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('funerals_model');
			$this->load->helper('cookie');
		}
		
/*
		public function index()
		{
			
//			$data['deads'] = $this->funerals_model->get_recent();
			
			$data['header']['title'] = 'GIEOK';
			$data['header']['css'] = "main";
			$data['header']['css_m1'] = "mmdpi";
			$data['header']['css_m2'] = "mtest";

			$data['header']['js'] = [null];
			$data['header']['description'] = "기억";
			$data['header']['image'] = "http://www.gieok.xyz/Images/Content/logo.png";
			
		
		    $this->load->view('templates/header', $data['header']); // view로 data 전달 
//		    $this->load->view('funerals/index', $data);		  // view로 data 전달 
			$this->load->view('cherish/index');		  // view로 data 전달     
//		    $this->load->view('templates/footer');				
		}
			
*/

		
		public function view($id)
		{
			
			if (! $this->input->cookie($id))
			{
			$this->funerals_model->rise_visitor($id);	        // 방문자수 카운트	
			$this->input->set_cookie($id,'visit','0');	
			}
			
			$data['view']['cherish_item'] = $this->funerals_model->get_cherish($id);
			$data['view']['counter'] = $this->funerals_model->get_count($id);
			
			if (empty($data['view']['cherish_item']))
			{
				show_404();
			}


			$data['header']['title'] = 'GIEOK';
			$data['header']['css'] = "view";
			$data['header']['css_m1'] = "vmdpi";
			$data['header']['css_m2'] = "vtest";

			$data['header']['description'] = $data['view']['cherish_item']['name'];
			$data['header']['image'] = "http://www.gieok.xyz/Images/Content/chrysanth1.png";
			
			
/*			$data['js'] = "https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA8afbNC_FXTedSUJC9a24HKMy439HBRTc&sensor=false";*/
			
			$data['header']['js'] = 
						[
							"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA8afbNC_FXTedSUJC9a24HKMy439HBRTc&sensor=false",
							"/js/view.js"
						];

			$this->load->view('templates/header', $data['header']);
			$this->load->view('cherish/inha/view', $data['view']);
//			$this->load->view('templates/footer');
		}

	}
	
	
	
	