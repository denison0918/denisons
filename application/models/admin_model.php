<?php
	
	class Admin_model extends CI_Model {

	public function __construct()
	{
		
		$this->load->database();              // config 파일에 설정된 DB 로드
	}
	
	

	public function set_funeral($data)
	{
		
		$this->db->set($data);
// 		$this->db->set('template', 'default', FALSE);
		$this->db->insert('funeral');
		
	}
	
	

	

	public function set_address($data)
	{
		$this->db->set($data);
		$this->db->set('postal_code', 'NULL', FALSE);
		$this->db->set('phone', 'NULL', FALSE);
		$this->db->insert('address');
		
/*
		$query = $this->db->get_where('address',array('address2' => $data['address2']));
		return $query->row_array();	
		
*/
		$this->db->select('address_id')
				 ->from('address')
				 ->where('address2',$data['address2']);
		$query = $this->db->get();
		return $query->row_array();			
	}
	
	public function set_dead($data)
	{
		$this->db->set($data);
		$this->db->set('burial_id', 'NULL', FALSE);
		$this->db->set('burial_indoor', 'default', FALSE);  
		$this->db->set('flowerCnt', 'default', FALSE);
		$this->db->set('visitorCnt', 'default', FALSE);				
		$this->db->insert('dead');
	}
	
	/*
		장례식장ID + 층 + 방 값으로 템플릿을 반환한다.
		반환된 템플릿은 중복된 템플릿이 있을경우 (신)템플릿 1개만 반환하다.
		이것은 동일 장소에 누적된 (구)템플릿과 누적된 추모의 템플릿 일치성을 유지하기 위함이다.
	*/	
/*
	public function get_template($funeral,$floor,$room){
		$this->db->select('template_id')
				 ->from('templates')
				 ->where('funeral_id',$funeral)
				 ->where('floor',$floor)
				 ->where('room',$room)
				 ->order_by("template_id", "desc")
				 ->limit(1);
		$query = $this->db->get();	
		return $query->row_array();
	}
*/
	
	public function get_funerals($city){
		$this->db->select('funeral.funeral_id as id,
						   funeral.name as name,
						   address.address1 as address1,
						   address.address2 as address2,
						   address.phone as phone,
						   funeral.lat as lat,
						   funeral.lng as lng,
						   address.postal_code as post,
						   funeral.address_id')
				 ->from('funeral')
				 ->join('address', 'funeral.address_id = address.address_id', 'inner')
				 ->where('address.city_id',$city)
				 ->order_by("name", "asc");
		$query = $this->db->get();	
		return $query->result_array();
	}
	
	public function update_funeral($address,$funeral,$id1,$id2){
		$this->db->where('address_id', $id1);
		$this->db->update('address', $address); 
		
		$this->db->where('funeral_id', $id2);
		$this->db->update('funeral', $funeral); 
		
	}
	

	
}

