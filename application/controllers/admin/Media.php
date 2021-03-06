<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Media extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index($start='') {
		parent::index($start);
	}

	public function save() {
		
		$fields = array("news_id", "path","type");
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

		$fields = array("title");
		parent::get_by($fields);
	}

	public function get_by_pagination() {
		$fields = array("title");
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