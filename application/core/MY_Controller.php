<?php
class MY_Controller extends CI_Controller {

	protected $_userId = '';
	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 
	 
	 
		$c = $this -> uri -> rsegment(1) . "_model";
		$this -> _userId = $this -> session -> userdata('userId');
		$this -> load -> model('admin/' . $c);
	 
	
   }
   else
   {
     //If no session, redirect to login page
     redirect(base_url()."login", 'refresh');
   }
	}
	public function index() {
		
   
   
   	$c  = $this -> uri -> rsegment(1) ;
		$f  = $this -> uri -> rsegment(2) ;
		$cm = $c."_model";
		$cv  =  $c."_".$f;
        
       $data[$c]  =  $this->$cm->get();
		$this->load->template("admin/".$c."/".$cv,$data);
	}
		public function upload($id) {
		$c  = $this -> uri -> rsegment(1) ;
		$f  = $this -> uri -> rsegment(2) ;
		$cm = $c."_model";
		$cv  =  $c."_".$f;
        
       $data['id']  =  $id;
		$this->load->template("admin/".$c."/".$cv,$data);
	}
     public  function  edit()
	 {
	 		$c = $this -> uri -> rsegment(1);
		$f = $this -> uri -> rsegment(2);
		$cm = $c . "_model";
		$cv = $c . "_" . $f;

		if ($this -> input -> post('submit')) {
			$data = $this -> $cm -> array_from_post($fields);
			$data['user'] = $this -> _userId;
			$this -> $cm -> save($data);

		}
		else {
			$this -> load -> template("admin/" . $c . "/" . $cv);
		}
		
		
	 }
	public function save($fields,$id  = NULL) {

		$c = $this -> uri -> rsegment(1);
		$f = $this -> uri -> rsegment(2);
		$cm = $c . "_model";
		$cv = $c . "_" . $f;

		if ($this -> input -> post('submit')) {
			$data = $this -> $cm -> array_from_post($fields);
			$data['user'] = $this -> _userId;
			  if($id != NULL){
			$this -> $cm -> save($data,$id);
				  
			  }else{
			  	$this -> $cm -> save($data);
			  }

		}
		 
		  $data[$c] = "";
		  if($id!=NULL)
		  {
		  	$where =  array("id"=>$id);
			
		  	$data[$c] = $this-> $cm  -> get_by($where,True);
			
		  }
			$this -> load -> template("admin/" . $c . "/" . $cv,$data);
		

	}
	

   
	public function delete() {
		$id = $this -> input -> post("id");
		$c = $this -> uri -> rsegment(1) . "_model";

		$this -> $c -> delete($id);

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
		$data['user'] = $this -> _userId;
		$this -> $c -> save($data, $id);

	}
     
	 	public function block() {
		$c = $this -> uri -> rsegment(1) . "_model";
		$id = $this -> input -> post('id');
		$data = array('status' => 'block');
		$data['user'] = $this -> _userId;
		$this -> $c -> save($data, $id);

	}
	public function archive() {
		$c = $this -> uri -> rsegment(1) . "_model";
		$id = $this -> input -> post('id');
		$data = array('status' => 'archive');
		$data['user'] = $this -> _userId;
		$this -> $c -> save($data, $id);

	}

	public function validate() {
		$c = $this -> uri -> rsegment(1);
		$f = $this -> uri -> rsegment(2);
		$cm = $c . "_model";
		$cv = $c . "_" . $f;
		$name = $this -> input -> post('name');
		$value = $this -> input -> post('value');
		$where = array($name => $value);
		if ($this -> $cm -> get_by($where) != NULL) {
			echo "غير متاح";
		} else {
			echo "";

		}

	}
	
	public function last($number=1,$where=NULL){
		$c = $this -> uri -> rsegment(1);
		$f = $this -> uri -> rsegment(2);
		$cm = $c . "_model";
		$cv = $c . "_" . $f;
		return $this -> $cm ->last($number,$where);
	}
	
}
