<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
       $this->load->model("menu_model");
	}

	public function index() {
      
	 $data['menu']   = $this->menu_model->get();
	 
	$this->load->templatemain("main.php",$data);
	}
	public function upload()
	{
			$this->load->templatemain("upload.php");
		
		
		
	}

}
