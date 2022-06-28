<?php
	
	class News extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('news_model');
		}
		
		public function index()
		{
			$data['news'] = $this->news_model->get_news();
			$data['title'] = 'News archive';
		
		    $this->load->view('templates/header', $data); // view로 data 전달 
		    $this->load->view('news/index', $data);		  // view로 data 전달 
		    $this->load->view('templates/footer');				
		}
		
/*
		public function view($slug)
		{
			$data['news'] = $this->news_model->get_news($slug);
		}
*/
		
		
		public function view($slug)
		{
			$data['news_item'] = $this->news_model->get_news($slug);        // $data['news'] --> $data['news_item']으로 변경됨
		
			if (empty($data['news_item']))
			{
				show_404();
			}
		
			$data['title'] = $data['news_item']['title'];
		
			$this->load->view('templates/header', $data);
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer');
		}
	}