<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ads extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		parent::index();
	}

	public function save($id  = null) {
		$data['a'] = "a";
		if ($this -> input -> post("submit")) {

			$config['upload_path'] = "./assets/ads/";
			$config['allowed_types'] = 'gif|jpg|png|swf';
			$config['file_name'] = 'yabad_ads';

			$config['max_size'] = '10000000';
			$config['max_width'] = '1000000';
			$config['max_height'] = '7680';
			$mainphoto = $this -> input -> post("adsfile");
			$this -> load -> library('upload', $config);

			if (!$this -> upload -> do_upload('adsfile')) {
				$error = array('error' => $this -> upload -> display_errors());
				echo $error['error'];
				//$this->load->view('admin/news/news_save', $error);
			} else {
				$data = array('upload_data' => $this -> upload -> data());

				$data['adsfile'] = $data['upload_data']['file_name'];
			}
		}
		
		
		$fields = array("title");
		parent::save($fields,$id,$data);

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