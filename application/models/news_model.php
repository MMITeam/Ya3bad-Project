<?php
class News_model extends MY_ModelHOME {
  
  protected $_table_name = 'news'; 
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
	
	
	public function get_count($cat_id) {
		$this->db->where('cat_id', $cat_id);
		$this->db->from('news');
		return $this->db->count_all_results();
	}
}
