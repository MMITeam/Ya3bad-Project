<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends MY_ControllerMain {

	public function __construct() {
		parent::__construct();
       $this->load->model("menu_model");
	}

	public function index() {
      
	 $data['menu']   = $this->menu_model->get();
	 
	$this->load->templatemain("main.php",$data);
	}
	
	public function details() {
      
	 $data['menu']   = $this->menu_model->get();
	 
	$this->load->templatemain("details.php",$data);
	}
	
	public function lists() {
      
	 $data['menu']   = $this->menu_model->get();
	 
	$this->load->templatemain("List.php",$data);
	}

}
