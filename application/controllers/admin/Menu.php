<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Menu extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index($start='') {
		parent::index($start);
	}

	public function save($id = null) {
		$fields = array("text", "link");
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

		$fields = array("text");
		parent::get_by($fields);
	}

	public function get_by_pagination() {
		$fields = array("text");
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