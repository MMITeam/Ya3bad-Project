<?php
class MY_ControllerMain extends CI_Controller {

	protected $_userId = '';
	function __construct() {
		parent::__construct();
		$cm = $this -> uri -> rsegment(1) . "_model";
		$this -> _userId = $this -> session -> userdata('userId');
		
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

     
	
	public function last($number=1,$where=NULL){
		$c = $this -> uri -> rsegment(1);
		$f = $this -> uri -> rsegment(2);
		$cm = $c . "_model";
		$cv = $c . "_" . $f;
		return $this -> $cm ->last($number,$where);
	}
	


}
