<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Users extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	

	public function save($id  = NULL) {

    
		$fields = array("name", "username", "password", "email", "phone", "type");
		 
		parent::save($fields,$id);
		

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

	

	
	

}
?>