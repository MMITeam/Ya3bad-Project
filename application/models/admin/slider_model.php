<?php
class Slider_model extends MY_Model {
  
  protected $_table_name = 'slider'; 
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
	
	
	public function delete($id) {
	
		if (!$id) {
			return FALSE;
		}
		$this -> db -> where("news_id", $id);
		//$this->db->limit(1);
		$this -> db -> delete($this -> _table_name);
		$q = $this -> db -> affected_rows();
		if ($q > 0) {
			$this -> session -> set_userdata('msg', 'Record Deleted Succefully');
		} else {
			$this -> session -> set_userdata('error_msg', 'Record did not Deleted Succefully');
		}
	}
	
}
