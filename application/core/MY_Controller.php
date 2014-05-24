<?php
class MY_Controller extends CI_Controller {

	protected $_userId = '';
	function __construct() {
		parent::__construct();
		$c = $this -> uri -> rsegment(1) . "_model";
		$this->_userId = $this -> session -> userdata('userId');
		$this -> load -> model('admin/' . $c);
	}
  
	public function save($fields) {
		
		$c  = $this -> uri -> rsegment(1) ;
		$f  = $this -> uri -> rsegment(2) ;
		$cm = $c."_model";
		$cv  =  $c."_".$f;
        
         
		
		
		if($this->input->post('submit')  ){
			$data = $this -> $cm -> array_from_post($fields);
		$data['user'] = $this->_userId;
		$this -> $cm -> save($data);

		}
		$this->load->template("admin/".$c."/".$cv);

	}

	public function delete() {
		$id = $this -> input -> post("id");
		$c = $this -> uri -> rsegment(1) . "_model";

		$this -> $c -> delete(24);

	}

	public function get() {

	}

	public function get_by($fields, $signal = FALSE, $perpage = 1, $start = 0) {
		$c = $this -> uri -> rsegment(1) . "_model";
		$where = $this -> $c -> array_from_post($fields);

		return $this -> $c -> get_by($where, $signal, $perpage, $start);
	}

	public function search_by($fields, $signal = FALSE, $perpage = 1, $start = 0) {
		$c = $this -> uri -> rsegment(1) . "_model";
		$where = $this -> $c -> array_from_post($fields);

		return $this -> $c -> search_by($where, $signal, $perpage, $start);
	}

	public function get_by_pagination($fields, $signal = FALSE, $perpage = 1, $start = 0) {

		$c = $this -> uri -> rsegment(1) . "_model";
		$where = $this -> $c -> array_from_post($fields);

		return get_by_pagination($where, $signal, $perpage, $start);
	}

	public function approve() {
		$c = $this -> uri -> rsegment(1) . "_model";
		$id = $this -> input -> post('id');
		$data = array('status' => 'approved');
		$data['user'] = $this->_userId;
		$this -> $c -> save($data, $id);

	}

	public function archive() {
		$c = $this -> uri -> rsegment(1) . "_model";
		$id = $this -> input -> post('id');
		$data = array('status' => 'archive');
		$data['user'] = $this->_userId;
		$this -> $c -> save($data, $id);

	}

}
