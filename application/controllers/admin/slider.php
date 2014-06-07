<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		parent::index();
	}

	public function save($id = null) {
		$fields = array();
		$data['news_id'] = $id;
		
		parent::save($fields,null,$data);

	}

	public function delete() {
		parent::delete();

	}

	public function get_by() {

		$fields = array("id");
		parent::get_by($fields);
	}

	public function search_by() {

		$fields = array("title");
		parent::get_by($fields);
	}

	public function get_by_pagination() {
		$fields = array("news_id");
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