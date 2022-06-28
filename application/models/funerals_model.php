<?php
	
	class Funerals_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();              // config 파일에 설정된 DB 로드
	}
/*
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
	
*/	

/*
	public function get_dead($id)
	{
		$query = $this->db->select('name,picture,funeral_indoor,funeral_id');
		$query = $this->db->from('dead');
		$query = $this->db->where('dead_id', $id);
		$query = $this->db->get();
		
		return $query->row_array();
	}
*/

	
	public function get_funeral($id)
	{
		$query = $this->db->select('name,lat,lng,address_id');
		$query = $this->db->from('funeral');
		$query = $this->db->where('funeral_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
/*
	
	public function get_address($id)
	{
		$query = $this->db->get_where('address',array('address_id' => $id));
		return $query->row_array();
	}
	
	public function get_city($id)
	{
		$query = $this->db->get_where('city',array('city_id' => $id));
		return $query->row_array();	
	}
*/
	

	public function get_recent(){
		$this->db->select('*')
				 ->from('deads')
				 ->order_by("deathday","desc")
				 ->limit(16);
		$query = $this->db->get();
		return $query->result_array();
	}

	
	public function get_cherish($id)
	{
/*
		$this->db->select('dead.name,dead.picture,dead.funeral_indoor as address3,
						   funeral.name as funeral,funeral.lat,funeral.lng,
						   address.address1,address.address2,
						   city.city')
				 ->from('dead')
				 ->join('funeral','dead.funeral_id = funeral.funeral_id')
				 ->join('address','funeral.address_id = address.address_id')
				 ->join('city','address.city_id = city.city_id')
				 ->where('dead_id',$id);
*/				 
				 
		$this->db->select('*')
				 ->from('cherish')
				 ->where('id',$id);				 
				 
	/*			 

			$this->db->select('dead.name,dead.picture,dead.funeral_indoor as address3,
						   funeral.name as funeral,funeral.lat,funeral.lng')
				 ->from('dead')
				 ->join('funeral','dead.funeral_id = funeral.funeral_id')
				 ->where('dead_id', $id);			 
				 
	*/			 
		$query = $this->db->get();
		return $query->row_array();	 
	}
		
		public function search_name($name){
		$this->db->select('*')
			 ->from('deads')
		 	 ->like('name',$name)
		 	 ->order_by("deathday","desc");
		$query = $this->db->get();
		return $query->result_array(); 		 	 	
		}
		
		public function search_year($year){
		$this->db->select('*')
			 ->from('deads')
		 	 ->like('year(deathday)',$year)
		 	 ->order_by("deathday","desc")
		 	 ->limit(16);
		$query = $this->db->get();
		return $query->result_array(); 		 	 	
		}
		
		
		public function search_nameAndYear($name,$year){
		$this->db->select('*')
				 ->from('deads')
			 	 ->like('year(deathday)',$year)
			 	 ->like('name',$name)
			 	 ->order_by("deathday","desc");		
		$query = $this->db->get();
		return $query->result_array(); 			 	 		
		}

		public function get_comment($id,$offset){
		$this->db->select('content,name,UNIX_TIMESTAMP(writedate) as writedate')
			 ->from('letters')
			  ->where('dead_id',$id)
			  ->order_by("letter_id","desc")
			  ->limit(20,$offset * 20);		
		$query = $this->db->get();
		return $query->result_array(); 	
		}


		public function get_count($id){
		$this->db->select('letterCnt, flowerCnt, visitorCnt')
				 ->from('counter')
				 ->where('id',$id);
		$query = $this->db->get();
		return $query->row_array();
		}	

		public function set_comment($data){
			$this->db->set('writedate','DATE_ADD(now(), INTERVAL 9 HOUR )', FALSE);
			$this->db->set($data);
			$this->db->insert('letters');
		}
			
		public function rise_visitor($id){
			$this->db->set('visitorCnt','visitorCnt + 1',FALSE)
					 ->where('dead_id',$id)
					 ->update('dead');
	
		}
		
		public function rise_flower($id,$cnt){
			$this->db->set('flowerCnt','flowerCnt + '.$cnt,FALSE)
					 ->where('dead_id',$id)
					 ->update('dead');
		}
		
		
/*
get_funeralList 함수 설명
도시코드를 받아 해당 도시코드에 맞는 장례식장 리스트를 불러온다.

*/
		public function get_funeralList($id){
			$this->db->select('funeral_id,name,with')
					 ->from('funeral,address')
					 ->where('address.address_id','funeral.address_id',FALSE)
					 ->where('address.city_id',$id)
					 ->order_by('name','ASC');    
			$query = $this->db->get();
			return $query->result_array();
		}
		
/*
	biz 용도
	
	*/

		public function get_funeralListBiz($id){
			$this->db->select('funeral_id,name')
					 ->from('funeral,address')
					 ->where('address.address_id','funeral.address_id',FALSE)
					 ->where('address.city_id',$id)
					 ->where('with','1')
					 ->order_by('name','ASC');    
			$query = $this->db->get();
			return $query->result_array();
		}		
		
		
		public function set_dead($data)
		{
			$this->db->set($data);
			$this->db->set('burial_id', 'NULL', FALSE);
			$this->db->set('burial_indoor', 'default', FALSE);  
			$this->db->set('flowerCnt', 'default', FALSE);
			$this->db->set('visitorCnt', 'default', FALSE);				
			$this->db->insert('dead');
			
			$query = $this->db->select('dead_id')
									->from('dead')
									->where('name', $data['name'])
									->where('funeral_id', $data['funeral_id'])
									->order_by("dead_id","desc")
									->limit(1);	
			$query = $this->db->get();
			return $query->row_array();
		}
		
		public function set_mourner($data){
			$this->db->set($data);
			$this->db->set('createtime','DATE_ADD(now(), INTERVAL 9 HOUR )', FALSE);			
			$this->db->insert('mourners');
		}
		

	
}

