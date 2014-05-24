<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Users extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$c  = $this -> uri -> rsegment(1) ;
		$f  = $this -> uri -> rsegment(2) ;
		$cm = $c."_model";
		$cv  =  $c."_".$f;
        
       $data['users']  =  $this->users_model->get();
		$this->load->template("admin/".$c."/".$cv,$data);
	}

	public function save() {

		$fields = array("name", "username", "password", "email", "phone", "type");
		parent::save($fields);

	}

	public function delete() {
		parent::delete();

	}

	public function get_by() {

		$fields = array("id");
		parent::get_by($fields);
	}

	public function search_by() {

		$fields = array("name");
		parent::get_by($fields);
	}

	public function get_by_pagination() {
		$fields = array("name");
		parent::get_by($fields);

	}

	public function approve() {
		parent::approve();

	}

	public function archive() {
		parent::archive();

	}
	
	

}
?>