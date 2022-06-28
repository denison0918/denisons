<?php
	

/**
* 연습
*/
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();              // config 파일에 설정된 DB 로드
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
	
	

}
