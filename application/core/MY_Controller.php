<?php
class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$c = $this -> uri -> rsegment(1) . "_model";
		
		$this -> load -> model('admin/'.$c);
	}


	public function save($fields) {
$c = $this -> uri -> rsegment(1) . "_model";

		$data = $this -> $c -> array_from_post($fields);
		
		$this -> $c -> save($data);

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
		$this -> $c -> save($data, $id);

	}

	public function archive() {
		$c = $this -> uri -> rsegment(1) . "_model";
		$id = $this -> input -> post('id');
		$data = array('status' => 'archive');
		$this -> $c -> save($data, $id);

	}

}
